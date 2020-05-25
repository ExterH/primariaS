@extends('layout.menu')
@section('menu')
<h1>{{$filles->nombre}}</h1>
<div class="pdf-viewer-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                <div class="pdf-single-pro">
                    
                    <iframe src="../../public/upload/{{$filles->imagen}}" frameborder="0" width="700" height="400"></iframe>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
            </div>
        </div>
    </div>
</div>
@endsection