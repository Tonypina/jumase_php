@extends('layout.app')

@section('content')
<main class="container mt-5 mb-5 pb-5 pt-5 overflow-hidden">
    <div class="row" id="service_name">
        <div class="col-12 text-center anim_t">
            @switch($servicio)
                @case(1)
                    <h1 id="Servicio-nombre">Servicios Administrados</h1><br><br>
                    @break
                @case(2)
                    <h1 id="Servicio-nombre">Virtualización</h1><br><br>
                    @break
                @case(3)
                    <h1 id="Servicio-nombre">Comunicaciones</h1><br><br>
                    @break
                @case(4)
                    <h1 id="Servicio-nombre">Ciberseguridad</h1><br><br>
                    @break
                @case(5)
                    <h1 id="Servicio-nombre">Microsoft</h1><br><br>
                    @break
                @case(6)
                    <h1 id="Servicio-nombre">Monitoreo de Red</h1><br><br>
                    @break
                @case(7)
                    <h1 id="Servicio-nombre">Respaldo</h1><br><br>
                    @break
                @case(8)
                    <h1 id="Servicio-nombre">Seguridad Física</h1><br><br>
                    @break
                @case(9)
                    <h1 id="Servicio-nombre">Telefonía</h1><br><br>
                    @break
                @default
                    <h1 id="Servicio-nombre">{{ $servicio }}</h1><br><br>
                    @break
            @endswitch
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-lg-6 pr-4 pl-4 anim_r">
            @switch($servicio)
                @case(1)
                    <h3 >Su infraestructura, nuestra responsabilidad.</h3><br>
                    <p class="text-justify">¿Por qué preocuparse por mantener operando al 100% su infraestructura tecnológica?<br>
                        Si usted es experto en fabricar zapatos, debería solo preocuparse por que su producción sea la mejor y de la más alta calidad, y no estar preocupándose porque el respaldo de anoche no se ejecutó, porque los correos electrónicos no llegan a sus clientes, porque el internet esta lento, porque, porque . . . en fin no debería preocuparse por ningún problema de sus sistemas de información<br>
                        Deje que nuestro equipo de expertos le ayude a simplificar la administración de sus recurso de TI.
                    </p><br>
                    @break
                @case(2)
                    <h3>¿Moda o tendencia?</h3><br>
                    <p class="text-justify">Ninguna otra tecnología ha cambiado las infraestructuras de TI en las empresas más que la virtualización, que ha ido transformando poco a poco las áreas de TI, y es una tendencia que se seguirá consolidando. Entre los motivos de esta consolidación está la reducción de inversiones en hardware, los ahorros en energía, la más rápida instalación y despliegue de aplicaciones lo cual hace más fluida la operación y la continuidad del negocio.
                    </p>
                    @break
                @case(3)
                    <h3>¿El uso del teléfono?</h3><br>
                    <p class="text-justify">Actualmente, estamos viviendo en una época donde Internet juega un papel esencial en nuestra vida cotidiana, la forma en que las personas nos comunicamos ha cambiado radicalmente en los últimos años. El uso de la tecnología nos ha favorecido para reducir las limitantes de ponernos en contacto con otra persona.</p><br>
                    <p class="text-justify">El nuevo paradigma plantea una forma distinta de comunicar. Antes las marcas sólo se ocupaban de estar presente en los medios pagados y bastaba con hablar únicamente de lo bueno de sus productos y servicios. Ahora, es necesario estar presente en los medios propios; es decir su propio sitio web, perfiles en las redes sociales, blogs, etcétera.
                    </p>
                    @break
                @case(4)
                    <h3>¿Qué es la ciberseguridad?</h3><br>
                    <p class="text-justify">La ciberseguridad es la práctica de defender computadoras, servidores, dispositivos móviles, sistemas electrónicos, redes y datos de ataques maliciosos. También se conoce como seguridad de tecnología de la información o seguridad de la información electrónica. El término es amplio y se aplica a numerosos elementos, desde seguridad informática hasta recuperación ante desastres y educación del usuario final.</p><br>
                    <p class="text-justify">Las amenazas que contrarrestan la ciberseguridad son tres: el cibercrimen, que incluye actores individuales o grupos que dirigen ataques a sistemas para obtener ganancias financieras; la ciberguerra, que a menudo involucra recopilación de información con motivaciones políticas; y el ciberterrorismo, cuyo propósito es comprometer los sistemas electrónicos y causar pánico o temor</p>
                    @break
                @case(5)
                    <h3>¿Por qué Microsoft?</h3><br>
                    <p class="text-justify">Como ya sabemos la empresa Microsoft ha tenido varias y muy grandes repercusiones en nuestro mundo moderno, y a lo largo del cambio generación tras generacion Microsoft con distintas creaciones en hardware y software ha logrado adaptarse a la sociedad desde sus inicios. Y gracias a esa evolución es necesario brindar el soporte y servicio adecuado a su plataforma, que va desde un sistema operativo hasta un elaborado sistema de colaboración.</p>
                    @break
                @case(6)
                    <h3>¿Sabes lo que esta ocurriendo en tu red de datos?</h3><br>
                    <p class="text-justify">¿Cuántas veces tus usuarios te dicen, ya no hay correo, se cayó el internet, el servidor de archivos no responde?
                        Esos gritos de alerta hacen que la imagen del área de TI se deprecie y por ende generen desconfianza entre los dueños y socios de la empresa.
                        Se dice que el área de TI debe ser más proactiva que reactiva y para lograrlo debe implementarse una buena estrategia de monitoreo</p>
                    @break
                @case(7)
                    <h3>¡¡¡La información es el activo más valioso de su empresa!!!</h3><br>
                    <p class="text-justify">Imagine toda la información personal que tiene almacenada en su computadora, información irremplazable, como fotografías, documentos de texto, plantillas, presentaciones, entre otras. Imagine que cuando llega el momento en que desea visualizar sus recuerdos o simplemente necesita trabajar, se da cuenta que todo se ha perdido para siempre. ¿La causa? Un desperfecto en los dispositivos de almacenamiento de su equipo como un disco duro, la interrupción del suministro eléctrico, el robo del dispositivo, o una infección por un código malicioso.</p>
                    @break
                @case(8)
                    <h3>¿En que consiste la seguridad física?</h3><br>
                    <p class="text-justify">La seguridad física es uno de los aspectos más olvidados a la hora del diseño de un sistema informático, no se considera por ejemplo que alguien ajeno al personal de sistemas pueda obtener acceso a la sala de cómputo y así poder hurtar una cinta o un disco duro</p>
                    <p class="text-justify">Podemos definir la seguridad física como aplicación de barreras físicas y procedimientos de control, como medidas de prevención y contramedidas ante amenazas a los recursos e información confidencial.</p>
                    @break
                @case(9)
                    <h3>¿Qué tan actualizado esta su sistema de telefonía?</h3><br>
                    <p class="text-justify">A pesar de que hoy en día las comunicaciones tienen un mundo de opciones, es imprescindible el uso de la telefonía ya sea tradicional o celular.</p>
                    <p class="text-justify">Y si es posible mirar a la telefonía en la nube, la cual ofrece bajos costos de manutención al no depender de un equipo costoso en el negocio y al que se debe dar el mantenimiento adecuado para su correcto funcionamiento.</p>
                    @break
            @endswitch
        </div>
        <div class="col-12 col-lg-6 pr-4 pl-4 mt-5 anim_l">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    @switch($servicio)
                        @case(1)
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="{{ URL::asset('public/img/Carousel-admin(1).webp') }}" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{ URL::asset('public/img/Carousel-admin(2).webp') }}" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{ URL::asset('public/img/Carousel-admin(3).webp') }}" alt="Third slide">
                            </div>
                            @break
                        @case(2)
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="{{ URL::asset('public/img/Carousel-virtual(1).webp') }}" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{ URL::asset('public/img/Carousel-virtual(2).webp') }}" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{ URL::asset('public/img/Carousel-virtual(3).webp') }}" alt="Third slide">
                            </div>
                            @break
                        @case(3)
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="{{ URL::asset('public/img/Carousel-Com(1).webp') }}" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{ URL::asset('public/img/Carousel-Com(2).webp') }}" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{ URL::asset('public/img/Carousel-Com(3).webp') }}" alt="Third slide">
                            </div>
                            @break
                        @case(4)
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="{{ URL::asset('public/img/Carousel-Seguridad(1).webp') }}" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{ URL::asset('public/img/Carousel-Seguridad(2).webp') }}" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{ URL::asset('public/img/Carousel-Seguridad(3).webp') }}" alt="Third slide">
                            </div>
                            @break
                        @case(5)
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="{{ URL::asset('public/img/Carousel-microsoft(1).webp') }}" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{ URL::asset('public/img/Carousel-microsoft(2).webp') }}" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{ URL::asset('public/img/Carousel-microsoft(3).webp') }}" alt="Third slide">
                            </div>
                            @break
                        @case(6)
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="{{ URL::asset('public/img/Carousel-Red(1).webp') }}" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{ URL::asset('public/img/Carousel-Red(2).webp') }}" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{ URL::asset('public/img/Carousel-Red(3).webp') }}" alt="Third slide">
                            </div>
                            @break
                        @case(7)
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="{{ URL::asset('public/img/Carousel-Respaldo(1).webp') }}" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{ URL::asset('public/img/Carousel-Respaldo(2).webp') }}" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{ URL::asset('public/img/Carousel-Respaldo(3).webp') }}" alt="Third slide">
                            </div>
                            @break
                        @case(8)
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="{{ URL::asset('public/img/Carousel-SF(1).webp') }}" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{ URL::asset('public/img/Carousel-SF(2).webp') }}" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{ URL::asset('public/img/Carousel-SF(3).webp') }}" alt="Third slide">
                            </div>
                            @break
                        @case(9)
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="{{ URL::asset('public/img/Carousel-Tel(1).webp') }}" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{ URL::asset('public/img/Carousel-Tel(2).webp') }}" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{ URL::asset('public/img/Carousel-Tel(3).webp') }}" alt="Third slide">
                            </div>
                            @break
                    @endswitch
                </div>
            </div>
        </div>
    </div>
    <div id="row_service" class="row pt-5 mt-5 mb-5">
        <div class="col-12 pr-4 pl-4">
            <h3>¿Qué implica esto?</h3>
            @switch($servicio)
                @case(1)
                    <p class="text-justify">
                        Al contratar nuestros servicios administrados, nos encargaremos desde el suministro de su infraestructura, hasta la administración, monitoreo, inventario, mantenimiento, operación, respaldo de información, administración de licenciamiento, nuevos proyectos tecnológicos, seguridad perimetral y local, así como hacer cumplir los lineamientos de tus procesos y políticas corporativas, que involucren al área de Tecnologías de la Información.
                    </p>
                    @break
                @case(2)
                    <p class="text-justify">
                        Si su infraestructura tecnológica es con base en servidores físicos, realizamos un análisis que le permitirá dimensionar la consolidación de sus servidores en un entorno virtual, el cuál le ayudará, a reducir costos de infraestructura, le ofrecerá flexibilidad operativa mejorada y capacidad de respuesta, mayor disponibilidad de aplicaciones y continuidad de negocio mejorada, capacidad de gestión y seguridad mejorada. Si su infraestructura es virtual, realizamos un análisis enfocado a encontrar oportunidades de mejora, que ayuden a la optimización de la operación. Al contratar nuestros servicios, se asegura que la operación de su infraestructura sea siempre la optima para alcanzar los objetivos productivos que su empresa demanda del departamento de TI
                    </p>
                    @break
                @case(3)
                    <p class="text-justify">El conjunto de recursos, procedimientos y técnicas usadas en el procesamiento, almacenamiento y transmisión de información, se ha matizado de la mano de las TIC, pues en la actualidad no basta con hablar de una computadora cuando se hace referencia al procesamiento de la información.</p>
                    @break
                @case(4)
                    <p class="text-justify">Aunque no es sencillo, se requiere mucho tiempo y acciones continuadas. A pesar de ello es posible establecer una cultura de ciberseguridad. Para ello es necesario, realizar la formación para los empleados sobre seguridad, establecer políticas, normativas y procedimientos de seguridad. Así como implementar, configurar y administrar, seguridad perimetral con equipos como Palo Alto, Sonicwall, Fortinet, CISCO, etc,</p>
                    @break
                @case(5)
                    <p class="text-justify">Los productos Microsoft son los mas utilizados en el mundo pero también sabemos que su administración es algo compleja, por ello es necesario contar con un staff de TI capaz y comprometido con la operación, gestión y legalidad de los productos Microsoft. Al dejar en nuestras manos la gestión de sus plataformas usted podrá enfocar sus esfuerzos a mejorar la calidad de los servicios y/o productos que su negocio ofrece, ya que la responsabilidad será completamente nuestra, haremos que su área de TI sea una parte fundamental que coadyuve en el crecimiento y desarrollo de su empresa.</p>
                    @break
                @case(6)
                    <p class="text-justify">La utilización de herramientas de monitoreo de red, de disponibilidad de equipos, de capacidad de almacenamiento, de memoria y proceso deben ser las principales armas del staff de TI para conseguir un amplio panorama de visibilidad de la infraestructura tecnológica, estas armas ayudaran a mantener una operación proactiva y así poder prevenir situaciones que afecten la productividad de tu empresa.</p>
                    @break
                @case(7)
                    <p class="text-justify">Nuestro equipo dimensionara la cantidad de información existente en su empresa y en base a los resultados propondrá la mejor solución para su negocio.</p>
                    @break
                @case(8)
                    <p class="text-justify">Un análisis por parte de nuestros expertos de los accesos a su empresa para detectar lugares vulnerables y por ende reforzar la seguridad mediante distintos dispositivos de seguridad, como cámaras con sensor de movimiento, cámaras con reconocimiento facial, equipos biométricos de control de acceso.</p>
                    @break
                @case(9)
                    <p class="text-justify">Nuestro equipo de expertos realizaría un levantamiento de su solución telefónica existente, para hacer una propuesta pertinente al tipo y modelo de PBX con el que cuenta su empresa </p>
                    @break
            @endswitch
        </div>
    </div>
    <div class="row">
        <div class="col-12 pr-4 pl-4">
            <h3>¿Cómo funciona?</h3>
            @switch($servicio)
                @case(1)
                    <p class="text-justify">Realizaremos un levantamiento de su entorno tecnológico para saber en donde estás y hacia donde deben dirigirse los esfuerzos del área de TI, y dependiendo de las necesidades su negocio y del presupuesto comprendido para el área podemos asignar ingenieros altamente capacitados en sitio o implementar una gestión remota, entregamos soluciones hechas a la medida de sus necesidades.</p>
                    @break
                @case(2)
                    <p class="text-justify">En base a los análisis efectuados a su infraestructura tecnológica, diseñamos un plan de implementación y/o de optimización de su entorno virtual, nos adaptamos a sus necesidades, ya sea que nuestro personal técnico tenga como base las instalaciones del cliente o de forma remota atendamos sus requerimientos del día a día, diseñamos una propuesta de servicios acorde a sus necesidades y presupuesto</p>
                    @break
                @case(3)
                    <p class="text-justify">Identificamos de manera clara cuáles son los recursos de infraestructura que la organización posee y en base a esa identificación se diseña un plan de acción para la gestión y optimización de la infraestructura con lo que se pretende lograr el flujo ideal de la comunicación que el negocio requiere. y al mismo tiempo bajar costos de operación.</p>
                    @break
                @case(4)
                    <p class="text-justify">Nuestro equipo de especialistas diseñara un plan de basado en lo siguiente: Visibilidad de la red (implementar sistemas de monitoreo de todos los componentes de la red), Implementar soluciones de ciberseguridad profesionales y actualizadas (es imposible continuar confiando en solo antivirus y firewalls tradicionales), Actualización de sistemas existentes (analizaremos todos los componentes de su red para tratar de encontrar cualquier vulnerabilidad), Desechar la seguridad fragmentada existente (es imprescindible que todos los sistemas de seguridad se "hablen" entre si), Concientizar, capacitar y formar a los usuarios con las bases de la ciberseguridad y por ultimo Diseñar una buena política de respaldo que ayude a implementar un buen plan de recuperación de desastres.</p>
                    @break
                @case(5)
                    <p class="text-justify">Con base a la complejidad de su infraestructura tecnológica podemos ofrecer un plan de servicio acorde a sus necesidades, que puede ir desde asignar un equipo de ingenieros en sitio hasta la gestión remota de su infraestructura, nos caracterizamos por ofrecer soluciones hechas a la medida.</p>
                    @break
                @case(6)
                    <p class="text-justify">Acorde a la infraestructura tecnológica con la que cuenta tu empresa, implementaremos herramientas adecuadas para monitorear la vida de los componentes de tu red corporativa, podemos adecuarnos a tus necesidades, ya sea asignando nuestro personal en sitio o interactuando de manera remota con tus sistemas, podemos diseñar una solución hecha a la medida.</p>
                    @break
                @case(7)
                    <p class="text-justify">Implementaremos políticas y procedimientos que respalden su información periódicamente dentro de la empresa y con nuestro producto JUMASE Cloud-BackUp mantendremos un respaldo continuo fuera de la empresa, con estas acciones podemos cimentar un buen plan de recuperación de desastres (DRP) y dar pie para un buen plan de continuidad de negocio (BCP).</p>
                    @break
                @case(8)
                    <p class="text-justify">Tras un previo análisis nuestros expertos ubicaran el sembrado de cámaras de video evitando posibles puntos ciegos en su vigilancia, propondrán la mejor solución de almacenamiento de video para un histórico de varios meses, que sea eficiente y eficaz, Implementaran el sistema de control de acceso adecuado para su negocio.</p>
                    @break
                @case(9)
                    <p class="text-justify">Tomando como base el levantamiento haremos una propuesta de soporte y mantenimiento para su tecnología de telefonía, y si fuera el caso proponerle un servicio de telefonía en la nube. También ofrecerle un plan de administración de su plataforma ya sea en sitio o en la nube</p>
                    @break
            @endswitch
        </div>
    </div>
</main>
@endsection