@extends('layout.menu')
@section('menu')
<div class="product-status mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>Anuncios</h4>
                    <div class="add-product">
                        <a href="{{route('add.create')}}">Agregar Anuncios</a>
                    </div>
                    <div class="asset-inner">
                        <table>
                            <tr>
                                <th>Imagen</th>
                                <th>Nombre</th>
                                <th>detalle</th>
                                <th>url</th>
                                
                            </tr>
                            @foreach($anuncio as $anuncios)
                            <tr>
                                
                                <td><img src="public/upload/{{$anuncios->imagen}}" alt="" /></td>
                               
                                <td>{{$anuncios->titulo}}</td>
                                <td>{{$anuncios->detalle}}</td>
                                <td>{{$anuncios->url}}</td>
                                <td>
                                    <form action="{{route('add.edit',['id'=>$anuncios->idadd])}}" method="POST">
                                        @method('GET')
                                        <a href="{{route('add.edit',['id'=>$anuncios->idadd])}}">
                                        <button data-toggle="tooltip" title="Editar" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        </button></a>
                                        
                                      </form>
                                    
                                        <form action="{{route('add.destroy',['id'=>$anuncios->idadd])}}" method="post">
                                          @csrf
                                          @method('DELETE')
                                          <a href="{{route('add.edit', ['id'=>$anuncios->idadd])}}" >
                                          <button data-toggle="tooltip" title="Eliminar" class="pd-setting-ed">
                                              <i class="fa fa-trash-o" aria-hidden="true" onclick="return confirm('¿Seguro que deseas eliminar este registro?')"></i>
                                    </button></a>

                                      </form>
                                    </td>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="modal-bootstrap shadow-inner mg-tb-30 responsive-mg-b-0">
                                    <div id="InformationproModalalert" class="modal modal-edu-general fullwidth-popup-InformationproModal fade" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-close-area modal-close-df">
                                                    {{-- <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a> --}}
                                                </div>
                                                {{-- <div class="modal-body">
                                                    <span class="educate-icon educate-info modal-check-pro information-icon-pro"> </span>
                                                    <h2>Información de Aviso</h2>
                                                    <p>{{$anuncios->detalle}}</p>
                                                </div> --}}
                                                <div class="modal-footer info-md">
                                                    <a data-dismiss="modal" href="#" class="pd-setting">Aceptar</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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