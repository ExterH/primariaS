@extends('layout.pagina')
@section('paypal')
<div class="justify-content-start:">
  <a href="{{route('carrito.show')}}">
  <h1><i class="fa fa-shopping-cart"></i>Carrito de compras</h1></div>
</a>
<br><br><br>
<div class="row"> 
    @foreach ($paypal as $paypals)
    <div class="col-sm-6">
    <div class="card" style="width: 18rem;">
        <img src="public/upload/{{$paypals->imagen}}" class="card-img-top" alt="..." width="300" height="300">
        <div class="card-body">
            <center><p class="card-title">{{$paypals->producto}}</p></center>
          <p class="card-text"><b>Descripción: </b> {{$paypals->descripcion}}</p>
          <p><b>Precio: </b> ${{$paypals->precio}} MXM</p>
          <a type="button" class="btn btn-link" href="{{route('carrito.add',['id'=>$paypals->idpp])}}" >Agregar al carrito</a>
          {{--     --}}
          {{-- Agregar al carrito --}}
          {{-- <button type="button" class="btn btn-outline-info">
              <img src="{{asset('public/shop.png')}}" alt="" width="50" height="50">Agregar al Carrito   
            </button> --}}
        </div>
      </div>
    </div>
    <br>
    @endforeach
    
</div>
@endsection