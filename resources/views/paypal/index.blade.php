@extends('layout.menu')
@section('menu')
<div class="product-status mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>PayPal</h4>
                    <div class="add-product">
                        <a href="{{url('PayPal/create')}}">Agregar PayPal</a>
                    </div>
                    <div class="asset-inner">
                        <table>
                            <tr>
                                <th>Imagen</th>
                                <th>Nombre</th>
                                <th>Precio</th>
                                <th>Descripción</th>   
                            </tr>
                            @foreach($paypal as $paypals)
                            <tr>
                                <td><img src="public/upload/{{$paypals->imagen}}" alt="" /></td>
                                <td>{{$paypals->producto}}</td>
                                <td>${{$paypals->precio}}</td>
                                <td>{{$paypals->descripcion}}</td>    
                                <td>
                                    <form action="{{route('PayPal.edit',['id'=>$paypals->idpp])}}" method="POST">
                                        @method('GET')
                                        <a href="{{route('PayPal.edit',['id'=>$paypals->idpp])}}">
                                        <button data-toggle="tooltip" title="Editar" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                    </a>
                                      </form>
                                        <form action="{{route('PayPal.destroy',['id'=>$paypals->idpp])}}" method="post">
                                          @csrf
                                          @method('DELETE')
                                          <a href="{{route('PayPal.edit', ['id'=>$paypals->idpp])}}" >
                                          <button data-toggle="tooltip" title="Eliminar" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true" onclick="return confirm('¿Seguro que deseas eliminar este registro?')"></i></button>
                                        </a>
                                      </form>
                                    </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</div>
@endsection