@extends('layout.menu')
@section('menu')
<div class="courses-area">
    <div class="container-fluid">
        @foreach ($club as $clubs)
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="courses-inner res-mg-b-30">
                    <div class="courses-title">
                        <a href="{{route('clubs.detalles',['id'=>$clubs->idcl])}}">
                            <img src="public/upload/{{$clubs->imagen}}" alt="" width="300" height="300">
                        </a>
                        <h2>{{$clubs->nombre}}</h2>
                    </div>
                    <div class="courses-alaltic">
                        <span class="cr-ic-r">
                            <span class="course-icon">
                                <i class="fa fa-clock"></i>
                                <b>Información de curso: </b>
                            </span>{{$clubs->detalle}}</span>
                    </div>
                    <div class="course-des">
                        <p><span><i class="fa fa-clock"></i></span> <b>Profesor: </b>{{$clubs->profesor}}</p>
                    </div>
                    <div class="product-buttons">
                        <form action="{{route('clubs.detalles',['id'=>$clubs->idcl])}}" method="POST">
                            @method('GET')
                            <a href="{{route('clubs.detalles',['id'=>$clubs->idcl])}}">
                            <button type="button" class="button-default cart-btn">Mas detalles</button>
                        </a>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection