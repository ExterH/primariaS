@extends('layout.menu')
@section('menu')
<div class="product-status mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>Archivos</h4>
                    <div class="add-product">
                        <a href="{{route('filles.create')}}">Agregar Archivos</a>
                    </div>
                    <div class="asset-inner">
                        <table>
                            <tr>
                                <th>Archivo</th>
                                <th>Descripción detallada del archivo</th>
                                
                            </tr>
                            @foreach($fille as $filles)
                            <tr>
                                <td>{{$filles->nombre}}</td>
                                <td>{{$filles->detalle}}</td>
                                <td>
                                    <form action="{{route('filles.edit',['id'=>$filles->idf])}}" method="POST">
                                        @method('GET')
                                        <a href="{{route('filles.edit',['id'=>$filles->idf])}}">
                                        <button data-toggle="tooltip" title="Editar" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                    </a>
                                      </form>
                                    
                                        <form action="{{route('filles.destroy',['id'=>$filles->idf])}}" method="post">
                                          @csrf
                                          @method('DELETE')
                                          <a href="{{route('filles.edit', ['id'=>$filles->idf])}}" >
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