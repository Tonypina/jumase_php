@extends('layout.app')

@section('content')
<main id="main_prod" class="mt-md-4 pb-4 mb-4 overflow-hidden anim_i">
    <section class="container-fluid pl-5 pt-3 pr-5 pb-5" id="title_prod">
        <div class="pt-5 mb-5">
            <h2 class="anim_t text-center"><b>Nuestros Productos</b></h2>
        </div>
        <div>
            <p class="anim_b text-center pl-lg-5 pr-lg-5">
                En jumase informática nos preocupamos por la calidad de los productos
                tecnológicos que ofrecemos a nuestros clientes por lo que contamos con una
                amplia gama de marcas líderes en el mercado como NUTANIX, HP,
                DELL, LENOVO, A10, ASUS, CISCO, AVAYA, PALO ALTO, FORTINET,
                SONICWALL, MALWAREBYTES, SPAMINA, SEAGATE, JIVE.
            </p>
        </div>
    </section>
    <section id="products" class="container pl-5 pr-5 mb-5 d-flex flex-column justify-content-center anim_i">
        <div class="row w-100 m-0 mt-lg-5 d-flex flex-row justify-content-center">
            <div class="product col-12 col-md-6 col-lg-4 mt-5 d-flex justify-content-center align-content-center" onmouseover="animImg(this)" onmouseout="normalImg(this)">
                <div class="fondo_img"></div>
                <img class="anim_i w-100 shadow-1-strong rounded" src="{{ URL::asset('/img/A10Networks.png') }}" alt="imagen">
            </div>
            <div class="product col-12 col-md-6 col-lg-4 mt-5 d-flex justify-content-center align-content-center" onmouseover="animImg(this)" onmouseout="normalImg(this)">
                <div class="fondo_img"></div>
                <img class="anim_i w-60 shadow-1-strong rounded" src="{{ URL::asset('/img/Acronis.jpg') }}" alt="imagen">
            </div>
            <div class="product col-12 col-md-6 col-lg-4 mt-5 d-flex justify-content-center align-content-center" onmouseover="animImg(this)" onmouseout="normalImg(this)">
                <div class="fondo_img"></div>
                <img class="anim_i w-100 shadow-1-strong rounded" src="{{ URL::asset('/img/Asus.png') }}" alt="imagen">
            </div>
        </div>
        <div class="row w-100 m-0 mt-lg-5 d-flex flex-row justify-content-center">
            <div class="product col-12 col-md-6 col-lg-4 mt-5 d-flex justify-content-center align-content-center" onmouseover="animImg(this)" onmouseout="normalImg(this)">
                <div class="fondo_img"></div>
                <img class="anim_i w-100 shadow-1-strong rounded" src="{{ URL::asset('/img/AVAYA.png') }}" alt="imagen">
            </div>
            <div class="product col-12 col-md-6 col-lg-4 mt-5 d-flex justify-content-center align-content-center" onmouseover="animImg(this)" onmouseout="normalImg(this)">
                <div class="fondo_img"></div>
                <img class="anim_i w-100 shadow-1-strong rounded" src="{{ URL::asset('/img/AXIS.png') }}" alt="imagen">
            </div>
            <div class="product col-12 col-md-6 col-lg-4 mt-5 d-flex justify-content-center align-content-center text-center" onmouseover="animImg(this)" onmouseout="normalImg(this)">
                <div class="fondo_img"></div>
                <img class="anim_i w-60 shadow-1-strong rounded" src="{{ URL::asset('/img/Cisco.png') }}" alt="imagen">
            </div>
        </div>
        <div class="row w-100 m-0 mt-lg-5 d-flex flex-row justify-content-center">
            <div class="product col-12 col-md-6 col-lg-4 mt-5 d-flex justify-content-center align-content-center text-center" onmouseover="animImg(this)" onmouseout="normalImg(this)">
                <div class="fondo_img"></div>
                <img class="anim_i w-50 shadow-1-strong rounded my-3" src="{{ URL::asset('/img/DELL.png') }}" alt="imagen">
            </div>
            <div class="product col-12 col-md-6 col-lg-4 mt-5 d-flex justify-content-center align-content-center" onmouseover="animImg(this)" onmouseout="normalImg(this)">
                <div class="fondo_img"></div>
                <img id="FORTINET" class="anim_i w-100 shadow-1-strong rounded py-3" src="{{ URL::asset('/img/FORTINET.png') }}" alt="imagen">
            </div>
            <div class="product col-12 col-md-6 col-lg-4 mt-5 d-flex justify-content-center align-content-center" onmouseover="animImg(this)" onmouseout="normalImg(this)">
                <div class="fondo_img"></div>
                <img class="anim_i w-100 shadow-1-strong rounded py-3" src="{{ URL::asset('/img/SPAMINA.png') }}" alt="imagen">
            </div>
        </div>
        <div class="row w-100 m-0 mt-lg-5 d-flex flex-row justify-content-center">
            <div class="product col-12 col-md-6 col-lg-4 mt-5 d-flex justify-content-center align-content-center text-center" onmouseover="animImg(this)" onmouseout="normalImg(this)">
                <div class="fondo_img"></div>
                <img class="anim_i w-60 shadow-1-strong rounded" src="{{ URL::asset('/img/HP.png') }}" alt="imagen">
            </div>
            <div class="product col-12 col-md-6 col-lg-4 mt-5 d-flex justify-content-center align-content-center text-center" onmouseover="animImg(this)" onmouseout="normalImg(this)">
                <div class="fondo_img"></div>
                <img id="JIVE" class="anim_i w-50 shadow-1-strong rounded" src="{{ URL::asset('/img/JIVE.jpg') }}" alt="imagen">
            </div>
            <div class="product col-12 col-md-6 col-lg-4 mt-5 d-flex justify-content-center align-content-center" onmouseover="animImg(this)" onmouseout="normalImg(this)">
                <div class="fondo_img"></div>
                <img class="anim_i w-100 shadow-1-strong rounded" src="{{ URL::asset('/img/Lenovo.png') }}" alt="imagen">
            </div>
        </div>
        <div class="row w-100 m-0 mt-lg-5 d-flex flex-row justify-content-center">
            <div class="product col-12 col-md-6 col-lg-4 mt-5 d-flex justify-content-center align-content-center" onmouseover="animImg(this)" onmouseout="normalImg(this)">
                <div class="fondo_img"></div>
                <img class="anim_i w-100 shadow-1-strong rounded" src="{{ URL::asset('/img/MALWAREBYTES.png') }}" alt="imagen">
            </div>
            <div class="product col-12 col-md-6 col-lg-4 mt-5 d-flex flex-column justify-content-center align-content-center" onmouseover="animImg(this)" onmouseout="normalImg(this)">
                <div class="fondo_img"></div>
                <img class="anim_i w-100 shadow-1-strong rounded px-3" src="{{ URL::asset('/img/NUTANIX.png') }}" alt="imagen">
            </div>
            <div class="product col-12 col-md-6 col-lg-4 mt-5 d-flex flex-column justify-content-center align-content-center" onmouseover="animImg(this)" onmouseout="normalImg(this)">
                <div class="fondo_img"></div>
                <img class="anim_i w-100 shadow-1-strong rounded px-3" src="{{ URL::asset('/img/SONICWALL.png') }}" alt="imagen">
            </div>
        </div>
    </section>
</main>
@endsection