<!DOCTYPE html>
<html lang="es">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> ELALEPHCOMPUTACION -SALTA VENTA COMPRA CANJE DE REPUESTOS DE PC NUEVOS Y USADOS
    </title>
    <meta name="description" content="Salta repuestos pc, ELALEPHCOMPUTACION     servicio tecnico pc, memorias, disco rigido, repuestos pc motherboard     microprocesador">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

</head>
<body class="bg-light" style="min-height: 100%"> 
    <!-- Navigation -->
    <nav class="navbar navbar-expand-md bg-dark navbar-dark p-0">
        {{-- <!-- Brand/logo -->
        <a class="navbar-brand" href="#">
          <img src="{{asset('imagenes/Captura.png')}}" alt="logo" style="width:40px;">
        </a> --}}
        <!-- logo for regular state and mobile devices -->
        <!-- Toggler/collapsibe button -->
        <div class="invisible"></div>
        <button class="navbar-toggler m-2" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon">
          </span>
        </button>
        <!-- Links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link text-light px-5 bg-dark border rounded" href="/">ElAleph</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light px-5 bg-dark border rounded" href="/productos">Productos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light px-5 bg-dark border rounded" href="/contacto">Contacto</a>
              </li>
          </ul>
        </div>
      </nav>
      {{-- box body --}}
        <div class="box-body bg-secondary" style="min-height: calc(100vh - 42px - 72px)">
            <div class="row m-0">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 p-0">
                    <!--Contenido-->
                       @yield('contenido')    
                    <!--Fin Contenido-->
                </div>
            </div>  
        </div>
        <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
          <div class="container text-center">
            <small>El Aleph Computación - Salta.</small>
          </div>
        </footer>
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        
  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>