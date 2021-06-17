@extends('layout.show')

@section('content')
<div class="video-container">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner p-lg-5">
            <div class="carousel-item active">
                <h1 id="JUMASE">JUMASE Informática</h1>
            </div>
            <div class="carousel-item">
                <h1>Olvídate de los dolores de cabeza que la tecnología puede ocasionarte</h1>
            </div>
            <div class="carousel-item">
                <h1>La tecnología al servicio de tu negocio</h1>
            </div>
        </div>
    </div>
    <div class="fondo"></div>
    <video src="{{ URL::asset('/img/VIDEO_JUMASE.mp4') }}" muted autoplay loop></video>
</div>
<div id="novedades-bg">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active text-center">
                <div class="img-n">
                    <img src="{{ URL::asset('/img/desarrollo-web.png') }}" alt="" loading="lazy">
                </div>
                <div class="txt-n">
                    <h2>Desarrollo Web</h2>
                    <p class="p-4 p-lg-0">Implementamos nuestra tecnología de desarrollo web.</p>
                </div>
            </div>
            <div class="carousel-item text-center">
                <div id="Linux_Server" class="img-n">
                    <img src="{{ URL::asset('/img/Linux_Server.jpg') }}" alt="" loading="lazy">
                </div>
                <div class="txt-n">
                    <h4>Linux Business Server Active Directory</h4>
                    <p class="p-4 p-lg-0">Directorio Activo en Linux, obtén las mismas funcionalidades de un directorio
                        activo tradicional.</p>
                </div>
            </div>
            <div class="carousel-item text-center">
                <div id="JUMASE_Cloud" class="img-n">
                    <img src="{{ URL::asset('/img/JUMASE_Cloud.png') }}" alt="" loading="lazy">
                </div>
                <div id="JUMASE_Cloud_txt" class="txt-n">
                    <h3>JUMASE Cloud Backup</h3>
                    <p class="p-4 p-lg-0">Mantén una copia de tus archivos de manera segura en nuestro centro de datos.
                        En caso que te roben tu equipo o simplemente deje de funcionar, con una política de retención al
                        menos de 7 días.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<div class="container-fluid pl-lg-5 pr-lg-5">
    <div class="row p-3 pr-lg-4 pl-lg-4 pb-lg-4 pt-lg-0">
        <div class="col-12 mb-4 text-center">
            <h2><b>Algunos Servicios</b></h2><br>
        </div>
        <div class="col-12 col-md-6 col-lg-6 col-xl-3 pl-4 pr-4 overflow-hidden services">
            <a href="Servicios/Administrados">
                <div class="services-img overflow-hidden" onmouseover="animImg(this)" onmouseout="normalImg(this)">
                    <img class="w-100 h-100"
                        src="{{ URL::asset('/img/Serviciosadministrados.png') }}" alt=""><br>
                    <div class="fondo_img"></div>
                </div>
            </a>
            <div class="services-txt pl-3 pr-3 pb-3">
                <br>
                <h3 class="text-center">Administrados</h3><br>
                <p class="text-center">Deje en las manos de nuestros expertos la operacion de su infraestructura
                    tecnologica.</p><br>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6 col-xl-3 pl-4 pr-4 overflow-hidden services">
            <a href="Servicios/Virtualizacion">
                <div class="services-img overflow-hidden" onmouseover="animImg(this)" onmouseout="normalImg(this)">
                    <img class="w-100 h-100" src="{{ URL::asset('/img/Virtualizacion.jpeg') }}"
                        alt=""><br>
                    <div class="fondo_img"></div>
                </div>
            </a>
            <div class="services-txt pl-3 pr-3 pb-3">
                <br>
                <h3 class="text-center">Virtualización</h3><br>
                <p class="text-center">Diseño, implementacion, administración y soporte a plataformas virtuales, VMware,
                    Hyper-V y Acropolis</p>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6 col-xl-3 pl-4 pr-4 overflow-hidden services">
            <a href="Servicios/Comunicaciones">
                <div class="services-img overflow-hidden" onmouseover="animImg(this)" onmouseout="normalImg(this)">
                    <img class="w-100 h-100" src="{{ URL::asset('/img/Comunicaciones.jpeg') }}"
                        alt=""><br>
                    <div class="fondo_img"></div>
                </div>
            </a>
            <div class="services-txt pl-3 pr-3 pb-3">
                <br>
                <h3 class="text-center">Comunicaciones</h3><br>
                <p class="text-center">Diseño, implementación, administración y soporte a redes LAN, WAN, Wi-Fi, Enlaces
                    L2L, Cableado Estructurado.</p>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6 col-xl-3 pl-4 pr-4 overflow-hidden services">
            <a href="Servicios/Ciberseguridad">
                <div class="services-img overflow-hidden" onmouseover="animImg(this)" onmouseout="normalImg(this)">
                    <img class="w-100 h-100" src="{{ URL::asset('/img/Ciberseguridad.jpeg') }}"
                        alt=""><br>
                    <div class="fondo_img"></div>
                </div>
            </a>
            <div class="services-txt pl-3 pr-3 pb-3">
                <br>
                <h3 class="text-center">Ciberseguridad</h3><br>
                <p class="text-center">Administración y soporte en Firewalls, Antivirus, Detección de vulnerabilidades,
                    Antispam, Balanceadores.</p>
            </div>
        </div>
        <div class="col-12 mt-5 text-center">
            <a href="Servicios"><button id="services-btn" type="button" class="btn">Ver todos los servicios</button></a>
        </div>
    </div>
</div>
@endsection