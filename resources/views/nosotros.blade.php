@extends('layout.app')

@section('content')
<main>
    <div class="container-fluid overflow-hidden">
        <div class="row mt-5 p-4 p-lg-5">

            <div class="col-12 col-md-6 order-md-2 overflow-hidden anim_l">
                <img class="w-100" src="{{ URL::asset('public/img/tecnologia-humana.jpg') }}" alt="">
            </div>

            <div class="col-12 col-md-6 order-md-1 text-justify anim_r">
                <br><br>
                <h2 class="text-center"><b>JUMASE Informática</b></h2><br>
                <p>Somos grandes entusiastas del servicio y la tecnología,
                    durante mas de 20 años nos hemos desempeñado profesionalmente
                    en empresas de ramos variados, por ejemplo, empresas de telemática,
                    instituciones financieras, empresas de venta al mayoreo y menudeo,
                    centros de atención al cliente (Call Center y Contact Center).
                    Nos encanta nuestro trabajo y solo quedamos satisfechos cuando usted lo está.
                    Las tecnologías de la información son nuestra pasión y nuestro negocio.</p><br>

            </div>
        </div>
        <div class="row mt-5 mb-5 p-4 p-lg-5 mision_vision">
            <div class="col-12 col-md-6 col-lg-6 mt-5 mb-5 pl-lg-5 pr-lg-5 text-center">
                <img class="about_img" src="{{ URL::asset('public/img/Mision.svg') }}" alt="">
                <br><br>
                <h2><b>Misión</b></h2><br>
                <p>Apoyar a nuestros clientes con sus herramientas tecnológicas para que estas se conviertan en un
                    área de oportunidad en el crecimiento de sus empresas.</p>
            </div>
            <div class="col-12 col-md-6 col-lg-6 mt-5 mb-5 pl-lg-5 pr-lg-5 text-center">
                <img class="about_img" src="{{ URL::asset('public/img/Vision.svg') }}" alt="">
                <br><br>
                <h2><b>Visión</b></h2><br>
                <p>Posicionarnos como una de las empresas que marquen la diferencia en el ámbito tecnológico de
                    nuestro país.</p><br><br>
            </div>
        </div>
        <div class="row mt-5 p-4 p-lg-5 pb-0 text-center">
            <div class="col-12">
                <h2 class="text-center"><b>¿Por qué elegirnos?</b></h2>
            </div>
        </div>
        <div class="row mb-5 pl-4 pr-4 pl-lg-5 pr-lg-5 pt-0 text-center">
            <div class="col-12 col-md-6 col-lg-4 pr-lg-5 mt-5 mb-5 text-justify">
                <div class="text-center"><img id="personas_img"
                        src="{{ URL::asset('public/img/personas.svg') }}" alt=""></div>
                <br>
                <h3 class="text-center">Equipo experimentado</h3>
                <br>
                <p>Involucrados por mas de 20 años en el servicio y las tecnologías de la información.</p><br>
            </div>
            <div id="trust" class="col-lg-4 mt-5 mb-5 text-justify overflow-hidden">
                <img src="{{ URL::asset('public/img/confianza-434w.jpg') }}" alt="">
            </div>
            <div class="col-12 col-md-6 col-lg-4 pl-lg-5 mt-5 mb-5 text-justify">
                <div class="text-center"><img id="personas_img"
                        src="{{ URL::asset('public/img/chip.svg') }}" alt=""></div>
                <br>
                <h3 class="text-center">Tecnología de punta</h3>
                <br>
                <p>Comercializamos los equipos tecnológicos de vanguardia, JIVE, AVAYA, NUTANIX, HP, DELL, CISCO,
                    PALO ALTO, FORTINET, ETC.</p><br>
            </div>
            <div class="col-12 col-md-6 mt-5 mb-5 mt-lg-0 pr-lg-5 pl-lg-5 text-justify">
                <div class="text-center"><img id="personas_img"
                        src="{{ URL::asset('public/img/base-de-datos.svg') }}" alt=""></div>
                <br>
                <h3 class="text-center">Especialistas en Infraestructura</h3>
                <br>
                <p>Amplia experiencia en telecomunicaciones, virtualización de servidores, cableado estructurado,
                    seguridad.</p><br>
            </div>
            <div class="col-12 col-md-6 mt-5 mb-5 mt-lg-0 pr-lg-5 pl-lg-5 text-justify">
                <div class="text-center"><img id="personas_img"
                        src="{{ URL::asset('public/img/bajo.svg') }}" alt=""></div>
                <br>
                <h3 class="text-center">Precios competitivos</h3>
                <br>
                <p>Recibirá los productos y servicios de mayor calidad al mejor precio. </p><br>
            </div>
        </div>
        <div class="row mt-5 mb-5 pl-lg-5 pr-lg-5 pt-3 bg-secondary text-center">
            <div class="col-12 col-lg-12 pr-lg-5 text-center">
                <h2 class="text-white"><b>Directorio</b></h2>
            </div>
            <div class="col-12 col-lg-6 pr-lg-5 mt-1 mb-2 text-justify text-justify">
                <h2 class="text-white">
                    <img class="hombre pr-lg-5" src="{{ URL::asset('public/img/hombre.svg') }}" alt="">
                    <b>Marco Piña</b>
                    <p class="leyenda ml-5 pl-5 ml-lg-0 pl-lg-0">CEO (Socio Director)</p>
                    <a class="linkedin" target="_blank"
                        href="https://www.linkedin.com/in/marco-antonio-pi%C3%B1a-hernandez-82a69127/"><span
                            class="icon-linkedin-with-circle"></span></a>
                </h2>
            </div>
            <div class="col-12 col-lg-6  mt-1 mb-2 text-justify">
                <h2 class="text-white">
                    <img class="hombre pr-lg-5" src="{{ URL::asset('public/img/hombre.svg') }}" alt="">
                    <b>Sergio Ibarra</b>
                    <p class="leyenda ml-5 pl-5 ml-lg-2 pl-lg-0">CTO (Socio Director)</p>
                    <a class="linkedin" target="_blank" href="https://www.linkedin.com/in/sergio-ibarra-03b74323/"><span
                            class="icon-linkedin-with-circle"></span></a>
                </h2>
            </div>
        </div>
    </div>
</main>
@endsection