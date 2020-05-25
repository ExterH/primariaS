
@extends('layout.pagina')
@section('paypal')
{{-- detalle de compra --}}
<h1>Datos del usuario</h1>
{{-- <a href="{{route('paypal.inicio')}}">Catalogo</a> --}}
    <div class="container text-center">
        
        <p>
           <div class="table-responsive">
               <table class="table table-striped table-hover table-border">
                   <tr><td>Nombre: </td><td>{{Auth::user()->name}}</td></tr>
                   <tr><td>Usuario: </td><td>{{Auth::user()->rol}}</td></tr>
                   <tr><td>Correo: </td><td>{{Auth::user()->email}}</td></tr>
                   <tr><td>Direccion: </td><td>{{Auth::user()->direccion}}</td></tr>
               </table>
           </div>
        </p>
        <div class="page-header">
            <h2><i class="fa fa-shopping-cart"></i>Carrito de compras</h2>
        </div>
        @if (count($cart))
        <div class="table-responsive">
            <table class="table table-striped table-hover table-border">
                <thead>
                    <tr>
                        <th>Imagen</th>
                        <th>Producto</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Subtotal</th>
                        <th>Quitar</th>
                    </tr>
                </thead>
                {{-- @if(session('cart'))--}}
                @foreach ($cart as $details) 
                {{-- < ?php $valor += $details['precio'] * $details['quantity'] ?> --}}
                <tbody>
                        <td><img src="public/upload/{{$details['imagen']}}" alt=""></td>
                        <td>{{$details['producto']}}</td>
                        <td>${{number_format($details['precio'],2)}}</td>
                        {{-- <td>{{$details['quantity']}}</td> --}}
                        <td>
                            <input type="text"type="number"min="1" max="100"value="{{$details['quantity']}}">
                            <a href="#"class="btn btn-warning btn-update-details"data-href=""data-id="producto">
                                <i class="fa fa-refresh"></i>
                            </a>
                        </td>
                        <td>${{number_format($details['precio'] * $details['quantity'],2)}}</td>
                        <td>
                            <a href="" class="btn btn-danger">
                                <i class="fa fa-remove"></i>
                            </a>
                        </td>
                </tbody>

                @endforeach
                {{-- @endif --}}
            </table>
        </div> <hr>
        <h3>
            <span class="label label-success">
                Total: ${{number_format($total,2)}}
            </span>
        </h3>
            {{-- @else 
            <h3 class="span label label-warning">No hay productos en el carrito :'(</h3>--}}
            @endif 
            <a href="{{route('payment')}}" class="btn btn-warning">Pagar con <i class="fa cc fa-cc-paypal fa-2x"></i></a>
            <p>
                {{-- <script
    src="https://www.paypal.com/sdk/js?client-id=Ad4Sxbmn8wz742FSTYw50gcERXpj78lFTx_m2Vzv-mIReuf1Ft6sHv3vDAy3HOA0Dgamp6CLziiDcFx_"> // Required. Replace SB_CLIENT_ID with your sandbox client ID.
  </script>

  <div id="paypal-button-container"></div>

  <script>
    paypal.Buttons().render('#paypal-button-container');
    // This function displays Smart Payment Buttons on your web page.
  </script> --}}

                
            </p>
    </div>
{{-- <script src="https://www.paypal.com/sdk/js?client-id=sb"></script>
<script>paypal.Buttons().render('body');</script> --}}



{{-- <script>
    paypal.Buttons({
      createOrder: function(data, actions) {
        // This function sets up the details of the transaction, including the amount and line item details.
        return actions.order.create({
          purchase_units: [{
            amount: {
              value: '0.01'
            }
          }]
        });
      }
    }).render('#paypal-button-container');
  </script>

<script>
    paypal.Buttons({
      createOrder: function(data, actions) {
        // This function sets up the details of the transaction, including the amount and line item details.
        return actions.order.create({
          purchase_units: [{
            amount: {
              value: '0.01'
            }
          }]
        });
      },
      onApprove: function(data, actions) {
        // This function captures the funds from the transaction.
        return actions.order.capture().then(function(details) {
          // This function shows a transaction success message to your buyer.
          alert('Transaction completed by ' + details.payer.name.given_name);
        });
      }
    }).render('#paypal-button-container');
    //This function displays Smart Payment Buttons on your web page.
  </script> --}}
@endsection