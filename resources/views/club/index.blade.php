@extends('layout.menu')
@section('menu')
<div class="product-status mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>Clubs</h4>
                    <div class="add-product">
                        <a href="{{url('clubs/create')}}">Agregar Club</a>
                    </div>
                    <div class="asset-inner">
                        <table>
                            <tr>
                                <th>Imagen</th>
                                <th>Nombre</th>
                                <th>Detalle</th>
                                <th>Información</th>
                            </tr>
                            @foreach ($club as $clubs)
                            <tr>
                                <td><img src="public/upload/{{$clubs->imagen}}" alt=""></td>
                                <td>{{$clubs->nombre}}</td>
                                <td>{{$clubs->detalle}}</td>
                                <td>
                                    <td>
                                        <form action="{{route('clubs.edit',['id'=>$clubs->idcl])}}" method="POST">
                                            @method('GET')
                                            <a href="{{route('clubs.edit',['id'=>$clubs->idcl])}}"></a>
                                            <button data-toggle="tooltip" title="Editar" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                            
                                          </form>
                                        
                                            <form action="{{route('clubs.destroy',['id'=>$clubs->idcl])}}" method="post">
                                              @csrf
                                              @method('DELETE')
                                              <a href="{{route('clubs.edit', ['id'=>$clubs->idcl])}}" ></a>
                                              <button data-toggle="tooltip" title="Eliminar" class="pd-setting-ed">
                                                  <i class="fa fa-trash-o" aria-hidden="true" onclick="return confirm('¿Seguro que deseas eliminar este registro?')">
                                                </i>
                                            </button>
    
                                          </form>
                                        </td>
                                </td>
                            </tr>
                            @endforeach
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