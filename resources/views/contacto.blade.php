@extends('layout.app')

@section('content')
<main class="container-fluid mt-4 mt-lg-4 mb-5 mb-md-1 overflow-hidden">
    <div class="row">
        <div id="infoContacto" class="col-12 col-md-5 pt-5 text-center anim_r">
            <br><br><br><br>
            <h2>JUMASE Informática</h2>
            <br>
            <h6>Telefono Oficina: 55 8881 6485</h6>
            <br>
            <h6>Telefono Movil: 55 2563 6646</h6>
            <br>
            <h6>E-mail: contacto@jumase.com.mx</h6>
            <br>
            <h6>Lun - Vie --> 9:00 - 18:00 hrs</h6>
        </div>
        <div id="formulario" class="col-12 col-md-7 anim_l">
            <br><br>
            <h2 class="text-center"><b>Contáctanos</b></h2><br><br>
            <form class="pl-md-4 pr-md-4 pb-md-5 text-center">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6 text-justify">
                        <label for="inputName">Nombre</label>
                        <input name="name" type="text" class="form-control" placeholder="Nombre" required>
                    </div>
                    <div class="form-group col-md-6 text-justify">
                        <label for="inputLastName">Apellido</label>
                        <input name="lname" type="text" class="form-control" placeholder="Apellido" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6 text-justify">
                        <label for="inputEmail4">E-mail</label>
                        <input name="email" type="email" class="form-control" id="inputEmail4" placeholder="E-mail"
                            required>
                    </div>
                    <div class="form-group col-md-6 text-justify">
                        <label for="input">Asunto</label>
                        <input name="subject" type="text" class="form-control" id="inputAsunto" placeholder="Asunto"
                            required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-12 text-justify">
                        <label for="exampleFormControlTextarea1">Mensaje</label>
                        <textarea name="body" class="form-control" id="exampleFormControlTextarea1" rows="4"
                            placeholder="Escribe tu mensaje..." required></textarea>
                    </div>
                </div>
                <a href="/Contacto"><button type="submit" class="btn" id="submit-btn">Enviar</button></a>
            </form>
        </div>
    </div>
</main>
@endsection