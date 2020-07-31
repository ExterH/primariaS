<?php 
 
namespace App\Http\Controllers;
 
use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
 
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\ExecutePayment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;

use Illuminate\Support\Facades\Input; 

use App\Order;
use App\OrderItem;
 
class PpaypalController extends BaseController
{
	private $_api_context;
 
	public function __construct()
	{
		// setup PayPal api context
		$paypal_conf = \Config::get('paypal');
		$this->_api_context = new ApiContext(new OAuthTokenCredential($paypal_conf['client_id'], $paypal_conf['secret']));
		$this->_api_context->setConfig($paypal_conf['settings']);
	}
 
	public function postPayment()
	{
		$payer = new Payer();
		$payer->setPaymentMethod('paypal');
 
		$items = array(); //
		$cart = session()->get('cart');
		// $subtotal 
		$subtotal = 0;
		// $cart = \Session::get('cart');
		$currency = 'MXN';
		
		// dd($cart); 
		foreach($cart as $prod)
		{
			$item = new Item();
			
			$item
			->setName($prod['producto'])
			->setCurrency($currency)
			->setDescription($prod['imagen'])
			->setQuantity($prod['quantity'])
			->setPrice($prod['precio']);
			// dd($prod['quantity']);
 
			$items[] = $item;
			$subtotal += $prod['quantity'] * $prod['precio'];
		}
 
		$item_list = new ItemList();
		$item_list->setItems($items);
 
		$details = new Details();
		$details->setSubtotal($subtotal)
		->setShipping(100);
 
		$total = $subtotal + 100;
 
		$amount = new Amount();
		$amount->setCurrency($currency)
			->setTotal($total)
			->setDetails($details);
 
		$transaction = new Transaction();
		$transaction->setAmount($amount)
			->setItemList($item_list)
			->setDescription('Pedido de prueba en mi Laravel App Store');
 
		$redirect_urls = new RedirectUrls();
		$redirect_urls->setReturnUrl(\URL::route('payment.status'))
			->setCancelUrl(\URL::route('payment.status'));
 
		$payment = new Payment();
		$payment->setIntent('Sale')
			->setPayer($payer)
			->setRedirectUrls($redirect_urls)
			->setTransactions(array($transaction));
 
		try {
			$payment->create($this->_api_context);
		} catch (\PayPal\Exception\PPConnectionException $ex) {
			if (\Config::get('app.debug')) {
				echo "Exception: " . $ex->getMessage() . PHP_EOL;
				$err_data = json_decode($ex->getData(), true);
				exit;
			} else {
				die('Ups! Algo salió mal');
			}
		}
 
		foreach($payment->getLinks() as $link) {
			if($link->getRel() == 'approval_url') {
				$redirect_url = $link->getHref();
				break;
			}
		}
 
		// add payment ID to session
		session()->put('paypal_payment_id', $payment->getId());
		// \Session::put('paypal_payment_id', $payment->getId());
 
		if(isset($redirect_url)) {
			// redirect to paypal
			return \Redirect::away($redirect_url);
		}
 
		return \Redirect::route('carrito.show')
			->with('message', 'Ups! Error desconocido.');
 
	}
 
	public function getPaymentStatus()
	{
		// dd('Punto de control');
		// Get the payment ID before session clear
		$payment_id = session()->get('paypal_payment_id');
		// $payment_id = \Session::get('paypal_payment_id');
 
		// clear the session payment ID
		session()->forget('paypal_payment_id');
		// \Session::forget('paypal_payment_id');
 
		$payerId = Input::get('PayerID');
		$token = Input::get('token');
 
		if (empty($payerId) || empty($token)) {
			return \Redirect::route('paypal.inicio')
				->with('message', 'Hubo un problema al intentar pagar con Paypal');
		}
 
		$payment = Payment::get($payment_id, $this->_api_context);
 
		$execution = new PaymentExecution();
		$execution->setPayerId(\Input::get('PayerID'));
 
		$result = $payment->execute($execution, $this->_api_context);
 
 
		if ($result->getState() == 'approved') {
 
			$this->saveOrder();
 
			// \Session::forget('cart');
			session()->forget('cart');
 
			return \Redirect::route('paypal.inicio')
				->with('message', 'Compra realizada de forma correcta');
		}
		return \Redirect::route('paypal.inicio')
			->with('message', 'La compra fue cancelada');
	}
 
	protected function saveOrder()
	{
		$subtotal = 0;
		$cart = session()->get('cart');
		// $cart = \Session::get('cart');
		$shipping = 100;
 
		foreach($cart as $producto){
			$subtotal += $producto->quantity * $producto->precio;
		}
 
		$order = Order::create([
			'subtotal' => $subtotal,
			'shipping' => $shipping,
			'user_id' => \Auth::user()->id
		]);
 
		foreach($cart as $producto){
			$this->saveOrderItem($producto, $order->id);
		}
	}
 
	protected function saveOrderItem($producto, $order_id)
	{
		OrderItem::create([
			'precio' => $producto->precio,
			'quantity' => $producto->quantity,
			'product_id' => $producto->id,
			'order_id' => $order_id
		]);
	}
}