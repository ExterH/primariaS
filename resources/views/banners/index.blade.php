@extends('layout.menu')
@section('menu')
<div class="product-status mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>Anuncios</h4>
                    <div class="add-product">
                        <a href="{{route('banners.create')}}">Agregar Anuncios</a>
                    </div>
                    <div class="asset-inner">
                        <table>
                            <tr>
                                <th>Imagen</th>
                                <th>Nombre</th>
                                
                            </tr>
                            @foreach($banner as $banners)
                            <tr>
                                <td><img src="public/upload/{{$banners->imagen}}" alt="" /></td>
                               
                                <td>{{$banners->nombre}}</td>
                                <td>
                                </td>
                                
                                <td>
                                    <form action="{{route('banners.edit',['id'=>$banners->idb])}}" method="POST">
                                        @method('GET')
                                        <a href="{{route('banners.edit',['id'=>$banners->idb])}}">
                                        <button data-toggle="tooltip" title="Editar" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                    </a>
                                      </form>
                                    
                                        <form action="{{route('banners.destroy',['id'=>$banners->idb])}}" method="post">
                                          @csrf
                                          @method('DELETE')
                                          <a href="{{route('banners.edit', ['id'=>$banners->idb])}}" >
                                          <button data-toggle="tooltip" title="Eliminar" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true" onclick="return confirm('¿Seguro que deseas eliminar este registro?')"></i></button>
                                        </a>
                                      </form>
                                    </td>
                            </tr>@endforeach
                        </table>
                    </div>
                    
                    <!--<div class="custom-pagination">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </div>-->
                </div>
            </div>
        </div>
    </div>
</div>


</div>
@endsection