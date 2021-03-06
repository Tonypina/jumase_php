<!DOCTYPE html>
<html lang="es">
<head>
    <title>JUMASE Informática</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="author" content="JUMASE Informática">
    <meta name="description" content="Proveemos servicios de infraestructura tecnológica, tales como servicios administrados, hiperconvergencia, venta de equipos y desarrollo.">
    <meta name="Keywords" content="tecnología, NUTANIX, web, nube, Cisco, JIVE, redes, seguridad, ciberseguridad, datos, switches, red, switch, router, firewall" >

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('/css/app.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <link rel="shortcut icon" href="{{ URL::asset('/img/Icon_png.png') }}">

    <link rel="stylesheet" href="{{ URL::asset('/fonts/style.css') }}">

</head>
<body>

    <style>
        header{
            position: fixed;
            top: 0;
            background-color: rgb(53, 53, 53);
            box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.2);
        }

        #header{
            display: block;
        }

        main {
            transform: translateY(5vh);
        }
    </style>

    <header id="header">
        <a href="/Inicio"><img class="icono" src="{{ URL::asset('/img/Icon_png.png') }}" alt=""></a>
        <nav>
            <ul>
                <li><a href="/Inicio">Inicio</a></li>
                <li><a href="/Nosotros">Nosotros</a></li>
                <li class="dropdown">
                    <a href="/Servicios" class="dropbtn pb-5">Servicios <span class="icon-chevron-small-down"></span></a>
                    <div class="dropdown-content">
                        <a href="/Servicios/Administrados">Servicios Administrados</a>
                        <a href="/Servicios/Virtualizacion">Virtualización</a>
                        <a href="/Servicios/Comunicaciones">Comunicaciones</a>
                        <a href="/Servicios/Ciberseguridad">Ciberseguridad</a>
                        <a href="/Servicios/Microsoft">Microsoft</a>
                        <a href="/Servicios/MonitoreoDeRed">Monitoreo de Red</a>
                        <a href="/Servicios/Respaldo">Respaldo</a>
                        <a href="/Servicios/SeguridadFisica">Seguridad Física</a>
                        <a href="/Servicios/Telefonia">Telefonía</a>
                    </div>
                </li>
                <li><a href="/Productos">Productos</a></li>
                <li><a href="/Contacto">Contacto</a></li>
            </ul>
        </nav>
        <img class="letras stickys" src="{{ URL::asset('/img/Logo_final.png') }}" alt="">
        <div class="menu-btn">
            <div class="menu-btn__burger"></div>
        </div>

    </header>
    <aside>
        <nav>
            <ul>
                <li><a href="/Inicio">Inicio</a></li>
                <li><a href="/Nosotros">Nosotros</a></li>
                <li><a href="/Servicios">Servicios</a></li>
                <li><a href="/Productos">Productos</a></li>
                <li><a href="/Contacto">Contacto</a></li>
            </ul>
            <hr>
            <ul id="icons_aside">
                <li><a target="_blank" href="https://www.facebook.com/jumaseinformatica"><span class="icon-facebook"></span></a></li>
                <li><a target="_blank" href="https://whats.jumase.com.mx"><span class="icon-whatsapp"></span></a></li>
                <li><a target="_blank" href="https://www.youtube.com/channel/UCAbvXkSONtoRkIPtQAAfS6Q"><span class="icon-youtube"></span></a></li>
            </ul>
            <p> © 2020 JUMASE Informática </p>
        </nav>
    </aside>
    @yield('content')
    <footer class="container-fluid">
        <div class="row pr-5 pl-5 mt-2 text-center">
            <div class="col-lg-4">
                <img src="{{ URL::asset('/img/Logo_final.png') }}" alt="">
            </div>
            <div class="col-lg-4"><h6>¡Recuerda si la solución o producto que buscas no esta listado en nuestro sitio contáctanos y te lo conseguimos!</h6></div>
            <div class="mt-2 mb-2 col-lg-4 redes">
                <a class="m-2 m-lg-4" target="_blank" href="https://www.facebook.com/jumaseinformatica"><span class="icon-facebook"></span></a>
                <a class="m-2 m-lg-4" target="_blank" href="https://whats.jumase.com.mx"><span class="icon-whatsapp"></span></a>
                <a class="m-2 m-lg-4" target="_blank" href="https://www.youtube.com/channel/UCAbvXkSONtoRkIPtQAAfS6Q"><span class="icon-youtube"></span></a>
            </div>
        </div>
        <div id="derechos" class="row">
            <p class="col-12 text-center">
               © 2020 JUMASE Informática
            </p>
        </div>
    </footer>
    <script>
        function animImg(x){
            x.classList.add("anim_Img");
        }

        function normalImg(x){
            x.classList.remove("anim_Img");
        }
    </script>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script defer type="text/javascript" src="{{ URL::asset('/js/app.js') }}"></script>
</html>
