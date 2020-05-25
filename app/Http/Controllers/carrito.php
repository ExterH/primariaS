<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PayPals;

class carrito extends Controller
{
    public function _construct()
    {
    if(!\Session::has('cart')) \Session::put('cart',array());
    }
    public function inicio(PayPals $idpp)
    {
        $paypal = PayPals::all();
        return view('paypal.inicio',compact('paypal'));
    }

    //show carrito
    public function show()
    {
        $cart = session()->get('cart');
        $paypal = PayPals::all(); 
        $total = $this->total();
        // $valor = $paypal->precio * $paypal->quantity;
        return view('paypal.cart',compact('paypal','cart','total')); 
       
    }

    //agregar al carrito
    public function add($idpp)
    {
        $paypal = PayPals::find($idpp);
        $cart = session()->get('cart');
        $valor = $paypal->precio * $paypal->quantity;
        if(!$cart)
        {
            $cart = [
                $idpp = [
                    'imagen' => $paypal->imagen,
                    'quantity' => 1,
                    'precio' => $paypal->precio,
                    'producto' => $paypal->producto,
                ]
            ];
            session()->put('cart', $cart); return redirect()->route('carrito.show');
            // return redirect()->back()->with('success', 'Producto agregado al carrito');

        }
        if(isset($cart[$idpp]))
        {
            $cart[$idpp]['quantity']++;
            session()->put('cart',$cart); return redirect()->route('carrito.show');
            // return redirect()->back()->with('success', 'Producto agregado al carrito');

        }
        $cart[$idpp] = [
            'imagen' => $paypal->imagen,
            'quantity' => 1,
            'precio' => $paypal->precio,
            'producto' => $paypal->producto,
        ];
        session()->put('cart', $cart); return redirect()->route('carrito.show');
        // return redirect()->back()->with('success', 'Producto agregado al carrito');
        // 
        
       
    }

    //borrar del carrito
    public function delete(PayPals $idpp)
    {

        // return redirect()->route('carrito.show');
    }

    //actualizar carrito
    public function update(PayPals $idpp, $quantity)
    {
       

        return redirect()->route('carrito.show');
    }

    //eliminar carrito
    public function trash()
    {
        \Session::forget('cart');
        return redirect()->route('carrito.show');
    }

    //total carrito
    private function total()
    {
        $cart = session()->get('cart');
        $total = 0;
        foreach($cart as $item)
        {
            $total += $item['precio']  * $item['quantity'];
        }
        return $total;
    }

    public function compras()
    {
        $cart = session()->get('cart');
        $paypal = PayPals::all(); 
        $total = $this->total();
        // $valor = $paypal->precio * $paypal->quantity;
        return view('paypal.compras',compact('paypal','cart','total'));
    }
}
