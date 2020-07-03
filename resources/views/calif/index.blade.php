@extends('layout.menu')
@section('menu')
<div class="x-editable-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap drp-lst">
                    <h4>Departments List</h4>
                    <div class="add-product">
                        <a href="add-department.html">Add Departments</a>
                    </div>
                    <select name="" id="" class="form-control" style="width: 20%">
                        <option value="0">
                            Seleccionar grado
                        </option>
                        <option value="1">
                            1°
                        </option>
                        <option value="2">
                            2°
                        </option>
                        <option value="3">
                            3°
                        </option>
                        <option value="4">
                            4°
                        </option>
                        <option value="5">
                            5°
                        </option>
                        <option value="6">
                            6°
                        </option>
                    </select>
                    <div class="asset-inner">
                        <table>
                            <tbody><tr>
                                <th>Matricula</th>
                                <th>Grado</th>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Calificación</th>
                                <th>Información</th>
                            </tr>
                            @foreach ($alumno as $alumnos)

                            <tr>
                                    
                                <td>{{$alumnos->matricula}}</td>
                                <td>{{$alumnos->grado}}</td>
                                <td>{{$alumnos->nombre.' '.$alumnos->apellidoP}}</td>
                                <td>admin@gmail.com</td>
                                <td>01962067309</td>
                                <td>1500</td>
                                <td>
                                    <a href="{{route('calif.info', ['id'=>$alumnos->ida])}}">Más Información</a>
                                </td>
                                {{-- <td>
                                    <button data-toggle="tooltip" title="" class="pd-setting-ed" data-original-title="Edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                    <button data-toggle="tooltip" title="" class="pd-setting-ed" data-original-title="Trash"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                </td> --}}
                            </tr>
                            @endforeach

                            {{--  --}}
                        </tbody></table>
                    </div>
                    <div class="custom-pagination">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection