@extends('layout.menu')
@section('menu')
<div class="product-status mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>Alumnos</h4>
                    <div class="add-product">
                        <a href="alumnos/create">Agregar alumnos</a>
                    </div>
                    <div class="asset-inner">
                        <table>
                            <tr>
                                <th>Matricula</th>
                                <th>Nombre completo</th>
                                {{-- <th>Información</th> --}}
                                <th>Grado</th>
                                <th>Configuración</th>
                            </tr>
                            @foreach($alumno as $alumnos)
                            <tr>
                                <td>{{$alumnos->matricula}}</td>
                                <td>{{$alumnos->nombre.' '.$alumnos->apellidoP.' '.$alumnos->apellidoM}}</td>
                                {{-- <td>
                                    <form action="{{route ('alumnos.detalle',['id'=>$alumnos->ida])}}" method="post">
                                        @csrf
                                        @method('GET')
                                        <a href="{{route('alumnos.detalle', ['id'=>$alumnos->ida],'hola')}}"></a>
                                        <button class="pd-setting" data-toggle="modal" data-target="#PrimaryModalalert">Más Información</button>
                                    </form>
                                    
                                </td> --}}
                                <td>{{$alumnos->grado}}</td>

                                <td>
                                    <form action="{{route ('alumnos.edit',['id'=>$alumnos->ida])}}" method="post">
                                        @csrf
                                        @method('GET')
                                        <a href="{{route('alumnos.edit', ['id'=>$alumnos->ida])}}"></a>
                                    <button data-toggle="tooltip" title="Editar" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                    </form>
                                    <form action="{{route('alumnos.destroy',['id'=>$alumnos->ida])}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{url('alumnos.delete', ['id'=>$alumnos->ida])}}" ></a>
                                    <button data-toggle="tooltip" title="Eliminar" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true" onclick="return confirm('¿Seguro que deseas eliminar este registro?')"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                    <div class="custom-pagination">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection