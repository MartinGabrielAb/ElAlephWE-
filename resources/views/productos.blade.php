@extends('layouts.cliente')
@section('contenido')
    <div class="container pt-3" id="contenido">
        <h4>Precios actualizados: {{ date('d/m/y') }} </h4> 
        @include('search')
        <div class="row" id="crud">
            
            <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3">
                {{-- <div class="dropdown">
                    <div class="list-group">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Categorías
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        @foreach ($categorias as $cat)
                        <a href="{{route('productos.categoria',$cat->nombre)}}" class="list-group-item list-group-item-action">{{$cat->nombre}}</a>
                        @endforeach
                        </div>
                    </div>
                </div> --}}
                
                <nav class="navbar navbar-expand-md navbar-light bg-light p-0">
                    <button class="navbar-toggler btn btn-primary btn-lg btn-block bg-primary" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                      Categorías
                    </button>
                    <div class="collapse navbar-collapse btn-group-vertical bg-secondary" id="navbarTogglerDemo01">
                        <ul class="nav btn-group-vertical "  style="width: 100%">
                            @foreach ($categorias as $cat)
                            @if ($cat->condicion==1)
                            <li class="nav-item d-block " style="width: 100%">    
                                <a class="d-block" href="{{route('productos.categoria',$cat->nombre)}}"><button type="button" class="btn btn-light btn-block border btn-sm" >{{$cat->nombre}}</button></a>
                            </li>    
                            @endif
                            @endforeach
                        </ul>
                    </div>
                    {{-- <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-secondary active">
                          <input type="radio" name="options" id="option1" autocomplete="off" checked> Active
                        </label>
                        <label class="btn btn-secondary">
                          <input type="radio" name="options" id="option2" autocomplete="off"> Radio
                        </label>
                        <label class="btn btn-secondary">
                          <input type="radio" name="options" id="option3" autocomplete="off"> Radio
                        </label>
                    </div> --}}
                </nav>
            </div>
            <div class="col-sm-12 col-md-8 col-lg-9 col-xl-9 rounded" id="productos">
                
                <div class="row mb-3">
                    @foreach ($articulos as $art)
                    @if($art->estado=='Activo' && $art->stock>0)

                    <div class="card-group col-sm-6 col-md-6 col-lg-4 col-xl-4  mt-2">
                        <div class="card text-center mx-auto border-success" style="width: 18rem;">
                            <img class="card-img-top" src="{{asset('imagenes/articulos/'.$art->imagen)}}" alt="{{$art->imagen}}">
                            <div class="card-body">
                                <h4 class="card-title">{{$art->nombre}}</h4>
                                <p class="card-text">{{$art->descripcion}}</p>
                                <h5 class="text-dark">${{$art->precio}}</h5>
                            </div>
                          </div>
                    </div>
                    
                    @endif
                    @endforeach
                </div>
                {{$articulos->links()}}    
            </div>
        </div>
    </div>
    
    
@endsection



