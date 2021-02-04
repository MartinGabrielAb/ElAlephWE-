@extends('layouts.cliente')
@section('contenido')
<div class="carousel slide mx-auto d-block" id="demo" data-ride="carousel">
    <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1" ></li>
        <li data-target="#demo" data-slide-to="2" ></li>
        <li data-target="#demo" data-slide-to="3" ></li>
        <li data-target="#demo" data-slide-to="4" ></li>
    </ul>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="img-fluid mx-auto d-block" style="height: 495px; width: 500px;"   src="{{asset('imagenes/home1.jpg')}}" alt="elaleph-servicios">
        </div>
        <div class="carousel-item">
            <img class="img-fluid mx-auto d-block" style="height:150px; width: 1100px;margin-top:172px;margin-bottom:172px;" src="{{asset('imagenes/home2.jpg')}}" alt="elaleph-servicios">
        </div>
        <div class="carousel-item" >
            <img class="img-fluid mx-auto d-block" style="height: 495px; width: 900px;" src="{{asset('imagenes/home3.jpg')}}" alt="elaleph-servicios">
        </div>
        <div class="carousel-item ">
            <img class="img-fluid mx-auto d-block" style="height: 495px; width: 900px;" src="{{asset('imagenes/CARTEL5.jpg')}}" alt="elaleph-servicios">
        </div>
        <div class="carousel-item">
            <img class="img-fluid mx-auto d-block" style="height: 495px; width: 900px;" src="{{asset('imagenes/CARTEL1.jpg')}}" alt="elaleph-servicios">
        </div>
    </div>
    <a href="#demo" class="carousel-control-prev" data-slide="prev"><span class="carousel-control-prev-icon"></span></a>
    <a href="#demo" class="carousel-control-next" data-slide="next"><span class="carousel-control-next-icon"></span></a>
</div>
@endsection