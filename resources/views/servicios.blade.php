@extends('layout.app')

@section('content')
<main class="container mt-4 mb-5 p-lg-5 overflow-hidden">
    <div class="row p-3 pr-lg-4 pl-lg-4 pb-lg-4 pt-lg-0 anim_r">
        <div class="col-12 mb-4 text-center">
            <br><br>
            <h2><b>Nuestros Servicios</b></h2><br>
        </div>
        <div class="col-12 col-md-6 col-lg-6 col-xl-4 pr-4 pl-4 overflow-hidden services">
            <a href="Servicios/Administrados">
                <div class="services-img overflow-hidden" onmouseover="animImg(this)" onmouseout="normalImg(this)">
                    <img class="w-100" src="{{ URL::asset('public/img/Serviciosadministrados.png') }}"
                        alt=""><br>
                    <div class="fondo_img"></div>
                </div>
            </a>
            <div class="services-txt pl-3 pr-3 pb-3">
                <br>
                <h3 class="text-center">Administrados</h3><br>
                <p class="text-center">Deje en las manos de nuestros expertos la operacion de su infraestructura
                    tecnologica.</p>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6 col-xl-4 pr-4 pl-4 overflow-hidden services">
            <a href="Servicios/Virtualizacion">
                <div class="services-img overflow-hidden" onmouseover="animImg(this)" onmouseout="normalImg(this)">
                    <img class="w-100" src="{{ URL::asset('public/img/Virtualizacion.jpeg') }}" alt=""><br>
                    <div class="fondo_img"></div>
                </div>
            </a>
            <div class="services-txt pl-3 pr-3 pb-3 ">
                <br>
                <h3 class="text-center">Virtualización</h3><br>
                <p class="text-center">Diseño, implementacion, administración y soporte a plataformas virtuales, VMware,
                    Hyper-V y Acropolis</p>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6 col-xl-4 pr-4 pl-4 overflow-hidden services">
            <a href="Servicios/Comunicaciones">
                <div class="services-img overflow-hidden" onmouseover="animImg(this)" onmouseout="normalImg(this)">
                    <img class="w-100" src="{{ URL::asset('public/img/Comunicaciones.jpeg') }}" alt=""><br>
                    <div class="fondo_img"></div>
                </div>
            </a>
            <div class="services-txt pl-3 pr-3 pb-3 ">
                <br>
                <h3 class="text-center">Comunicaciones</h3><br>
                <p class="text-center">Diseño, implementación, administración y soporte a redes LAN, WAN, Wi-Fi, Enlaces
                    L2L, Cableado Estructurado.</p>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6 col-xl-4 pr-4 pl-4 overflow-hidden services">
            <a href="Servicios/Ciberseguridad">
                <div class="services-img overflow-hidden" onmouseover="animImg(this)" onmouseout="normalImg(this)">
                    <img class="w-100" src="{{ URL::asset('public/img/Ciberseguridad.jpeg') }}" alt=""><br>
                    <div class="fondo_img"></div>
                </div>
            </a>
            <div class="services-txt pl-3 pr-3 pb-3 ">
                <br>
                <h3 class="text-center">Ciberseguridad</h3><br>
                <p class="text-center">Administración y soporte en Firewalls, Antivirus, Detección de vulnerabilidades,
                    Antispam, Balanceadores.</p>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6 col-xl-4 pr-4 pl-4 overflow-hidden services">
            <a href="Servicios/Microsoft">
                <div class="services-img overflow-hidden" onmouseover="animImg(this)" onmouseout="normalImg(this)">
                    <img class="w-100" src="{{ URL::asset('public/img/Servicio-Microsoft.webp') }}"
                        alt=""><br>
                    <div class="fondo_img"></div>
                </div>
            </a>
            <div class="services-txt pl-3 pr-3 pb-3 ">
                <br>
                <h3 class="text-center">Microsoft</h3><br>
                <p class="text-center">Diseño, implementación, administración y solución a problemas en plataformas
                    Windows Server, Exchange Server, SharePoint Server.</p>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6 col-xl-4 pr-4 pl-4 overflow-hidden services">
            <a href="Servicios/MonitoreoDeRed">
                <div class="services-img overflow-hidden" onmouseover="animImg(this)" onmouseout="normalImg(this)">
                    <img class="w-100" src="{{ URL::asset('public/img/Servicio-Red.webp') }}"" alt=""><br>
                    <div class="fondo_img"></div>
                </div>
            </a>
            <div class="services-txt pl-3 pr-3 pb-3 ">
                <br>
                <h3 class="text-center">Monitoreo de Red</h3><br>
                <p class="text-center">Implementación y administración de soluciones de monitoreo de red mediante
                    WhatsUp Gold, Nagios y MRTG</p>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6 col-xl-4 pr-4 pl-4 overflow-hidden services">
            <a href="Servicios/Respaldo">
                <div class="services-img overflow-hidden" onmouseover="animImg(this)" onmouseout="normalImg(this)">
                    <img class="w-100" src="{{ URL::asset('public/img/Servicio-Respaldo.webp') }}"
                        alt=""><br>
                    <div class="fondo_img"></div>
                </div>
            </a>
            <div class="services-txt pl-3 pr-3 pb-3 ">
                <br>
                <h3 class="text-center">Respaldo</h3><br>
                <p class="text-center">Diseñamos el respaldo de tu información On Premise o en nuestra Nube privada</p>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6 col-xl-4 pr-4 pl-4 overflow-hidden services">
            <a href="Servicios/SeguridadFisica">
                <div class="services-img overflow-hidden" onmouseover="animImg(this)" onmouseout="normalImg(this)">
                    <div class="fondo_img"></div>
                    <img class="w-100" src="{{ URL::asset('public/img/Servicio-SF.webp') }}" alt=""><br>
                </div>
            </a>
            <div class="services-txt pl-3 pr-3 pb-3 ">
                <br>
                <h3 class="text-center">Seguridad Física</h3><br>
                <p class="text-center">Controlar el acceso del personal a las instalaciones, es un factor crítico para
                    conseguir los objetivos de disponibilidad del centro de datos.</p>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6 col-xl-4 pr-4 pl-4 overflow-hidden services">
            <a href="Servicios/Telefonia">
                <div class="services-img overflow-hidden" onmouseover="animImg(this)" onmouseout="normalImg(this)">
                    <img class="w-100" src="{{ URL::asset('public/img/Servicio-Tel.webp') }}" alt=""><br>
                    <div class="fondo_img"></div>
                </div>
            </a>
            <div class="services-txt pl-3 pr-3 pb-3 ">
                <br>
                <h3 class="text-center">Telefonía</h3><br>
                <p class="text-center">Ofrecemos servicios basados en la nube asi como telefonia tradicional.</p>
            </div>
        </div>
    </div>
</main>
@endsection