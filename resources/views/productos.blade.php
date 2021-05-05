@extends('layout.app')

@section('content')
<main id="main_prod" class="mt-md-4 pb-4 mb-4 container-fluid overflow-hidden">
    <div class="row intro mt-3 p-1 pr-lg-5 pl-lg-5 pb-lg-5 pt-lg-2">
        <h2 class="col-12 text-center">Nuestros Productos</h2>
        <p class="col-12 pl-lg-3 pr-lg-3 text-justify">Manejamos una amplia variedad en productos tecnológicos, de marcas lideres en el mercado, como JIVE, NUTANIX, HP, DELL, LENOVO, A10, ASUS, CISCO, AVAYA, PALO ALTO, FORTINET, SONICWALL, MALWAREBYTES, SPAMINA, SEAGATE, si en nuestro sitio no ves el producto que necesitas, contáctanos y te lo conseguimos.</p>
    </div>
    <div class="row pt-4 m-lg-5 pl-lg-4 pr-lg-4 pt-lg-4 pb-lg-0 text-center" id="cont_prod">
        <div class="mb-3 mb-lg-4 mt-lg-1 col-12 col-lg-4 prod">
            <a href=""><img src="{{ URL::asset('public/img/Acronis.jpg') }}"></a>
        </div>
        <div class="mb-3 mb-lg-4 col-12 col-lg-5 prod" id="ASUS">
            <a href=""><img src="{{ URL::asset('public/img/Asus.png') }}"></a>
        </div>
        <div class="mb-3 mb-lg-4 col-12 col-lg-3 prod">
            <a href=""><img src="{{ URL::asset('public/img/DELL.png') }}"></a>
        </div>
        <div class="mb-3 mb-lg-4 col-12 col-lg-3 prod" id="AXIS">
            <a href=""><img src="{{ URL::asset('public/img/AXIS.png') }}"></a>
        </div>
        <div class="mb-3 mb-lg-4 col-12 col-lg-4 prod">
            <a href=""><img src="{{ URL::asset('public/img/AVAYA.png') }}"></a>
        </div>
        <div class="mb-3 mb-lg-4 col-12 col-lg-5 prod" id="FORTINET">
            <a href=""><img src="{{ URL::asset('public/img/FORTINET.png') }}"></a>
        </div>
        <!--
        <div class="mb-3 mb-lg-4 col-12 col-lg-3 prod">
            <a href=""><img src="{{ URL::asset('public/img/Hikivision.png') }}"></a>
        </div>
        -->
        <div class="mb-3 mb-lg-4 col-12 col-lg-3 prod" id="HP">
            <a href=""><img src="{{ URL::asset('public/img/HP.png') }}"></a>
        </div>
        <div class="mb-3 mb-lg-4 col-12 col-lg-3 prod" id="JIVE">
            <a href=""><img src="{{ URL::asset('public/img/JIVE.jpg') }}"></a>
        </div>
        <div class="mb-3 mb-lg-4 col-12 col-lg-6 prod" id="MALWAREBYTES">
            <a href=""><img src="{{ URL::asset('public/img/MALWAREBYTES.png') }}"></a>
        </div>
        <div class="mb-3 mb-lg-4 col-12 col-lg-6 prod" id="NUTANIX">
            <a href=""><img src="{{ URL::asset('public/img/NUTANIX.png') }}"></a>
        </div>
        <div class="mb-3 mb-lg-4 col-12 col-lg-6 prod" id="SONICWALL">
            <a href=""><img src="{{ URL::asset('public/img/SONICWALL.png') }}"></a>
        </div>
        <div class="mb-3 mb-lg-0 col-12 col-lg-7 prod" id="SPAMINA">
            <a href=""><img src="{{ URL::asset('public/img/SPAMINA.png') }}"></a>
        </div>
        <div class="mb-3 mb-lg-0 col-12 col-lg-5 prod" id="SEGURIDADF">
            <a href=""><img src="{{ URL::asset('public/img/seguridad-f.jpg') }}"></a>
        </div>
    </div><br><br>
</main>
@endsection