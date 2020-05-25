@extends('layout.pagina')
@section('paypal')
    <a href="{{route('paypal.inicio')}}">Catalogo</a>
    <div class="container text-center">
        <div class="page-header">
            <h1><i class="fa fa-shopping-cart"></i>Carrito de compras</h1>
        </div>
        <p>
            <a href="{{route('carrito.trash')}}" class="btn btn-danger">Borrar carrito
                <i class="fa fa-trsh"></i>
            </a>
        </p>
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
            <p>
                <a href="{{route('paypal.inicio')}}" class="btn btn-primary">
                    <i class="fa fa-chevron-circle-left">Segir comprando</i>
                </a>
                <a href="{{route('carrito.compras')}}" class="btn btn-primary">
                    Continuar  <i class="fa fa-chevron-circle-right"></i>
                </a>
                
            </p>
    </div>
@endsection
{{-- 
<script>
    $(document).ready(function()
    {
        $('#producto').printerest_grid({
            no_columns: 4,
            padding_x:10,
            padding_y:10,
            margin_bottom:50,
            single_column_breakpoint:700
        })
        $(".btn.update.details").on('click', function(e)
        {
            e.preventDefault();
            var id = $(this).data('id');
            var href = $(this).data('href');
            var quantity = $("#producto_"+id).val();

            window.location.href = href + "/" + quantity;
        })
    });
</script> --}}