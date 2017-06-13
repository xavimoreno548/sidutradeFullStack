@extends('layouts.master')

@section('content')

    <!--SECTION BANNER-->
    <section class="banner">
    <!--  aqui se incluye el header mano -->
        @include('partials.header')
            <div class="banner__txt">
                <h1>Un centro de servicio completo de Aluminio</h1>
                <p>
                    Bienvenido ¿Esta buscando algun consejo útil? No vaya mas allá;
                    Ha entrado al lugar correcto. Somos profesionales, experimentados
                    y enfocados en su satisfaccion. ¡Valoramos su confianza!
                </p>
            </div>
    </section>
    <!--SECTION BANNER FIN-->

    <!--SECTION ABOUT US-->
    <section class="nosotros" id="about">

        <!--ARTICULO UNO-->
        <article class="container artNosotros">
            <figure class="imgs wow fadeIn" data-wow-duration="2s">
                <div class="img-container">
                    <div class="img" style="background-image: url('./img/product4.jpg')"></div>
                </div>
                <div class="img-container">
                    <div class="img" style="background-image: url('./img/Galeria2.jpg')"></div>
                </div>
            </figure>
            <div class="txt-nosotros wow slideInLeft" data-wow-duration="1.5s">
                <h1><span>01</span>Nosotros</h1>
                <h2>Proveemos a clientes industriales en todo el mundo</h2>
                <p>
                    SIDUTRADE NV, es una empresa comercial dedicada a la compra,
                    venta, importacion y exportacion de todo tipo de materias primas.
                    permitiendo a las empresas nacionales e internacionales esplorar
                    las diferentes oportunidades existentes en el mercado
                </p>
            </div>
        </article>
        <hr style="width:71%;border: 1px solid #ADADAD;margin-left:7%;">
        <!--ARTICULO UNO FIN-->

        <!--ARTICULO DOS-->
        <article class="container">
            <div class="row objetivos">
                <div class="mision col-md-5 wow slideInLeft" data-wow-duration="1.5s">
                    <h2>Misión</h2>
                    <p>
                        El compromiso principal de SIDUTRADE NV, es atender las necesidades
                        de nuestros clientes, regidos por la exelencia y experiencia; ofreciendo
                        productos que cumplen con los estandares internacionales de calidad, permitiendonos
                        ser una empresa creciente y sostenible logrando el desarrollo de las competencias
                        profesionales de nuestro capital humano.
                    </p>
                </div>
                <div class="vision col-md-4 col-md-offset-1 wow slideInRight" data-wow-duration="1.5s">
                    <h2>Visión</h2>
                    <p>
                        Ser una empresa lider, solida y confiable con presencia internacional,
                        que se distinga por proporcional calidad en sus productos y servicios,
                        con una gestion que se anticipe y se adapte al cambio, aprenda de la
                        experiencia e innove continuamente
                    </p>
                </div>
            </div>
        </article>
        <!--ARTICULO DOS FIN-->

    <hr style="width: 99.888%;border: 1px solid #ADADAD;float: left;margin-top:0px;margin-bottom: 40px;">
    </section>
    <!--SECTION ABOUT US FIN-->

    <!--SECTION VALORES-->
    <section class="valores__banner" id="valores" >
        <div class="container">
            <div class="clearfix">
                <div class="top">
                    <div class="hexagon bg-img bg-pencil bg-naranja" ></div>
                    <div class="hexagon bg-img bg-graphic bg-azul" ></div>
                    <div class="hexagon bg-img bg-man bg-gris" ></div>
                    <div class="hexagon bg-img bg-networking bg-amarillo" ></div>
                    <div class="hexagon bg-img bg-business bg-turquesa"></div>
                </div>
            </div> 
        </div>
    </section>
    <!--SECTION VALORES FIN-->

    <!--SECTION SERVICIOS-->
    <section class="servicios" id="services">
        <figure>
            <!--<div class='triangle'></div>-->
            <div class="triangle-img-container">
                <div class="triangle-img-inner">
                    <div class="triangle-img" style="background-image: url('./img/Parallax1.jpg')"></div>
                </div>
            </div>
            <figcaption class="container wow fadeInDown" data-wow-duration="2s">
                <hgroup>
                    <h1><span>02</span>Servicios</h1>
                    <h3>Continuar con el legado de la exelencia</h3>
                    <hr style="width: 50% ;border: 1px solid #ADADAD;">
                    <h2>Importaciones y Exportaciones</h2>
                </hgroup>
                <div class="txt-info">
                    <p>
                        Coordinamos el transporte, traslado y todas las formalidades legales
                        para la entrada de su mercancia desde su origen hasta su destino. Ofreciendole:
                    </p>
                    <ul>
                        <li>Contratacion y Coordinacion de transporte entre puertos y fabricas</li>
                        <li>Contratacion y Coordinacion de Caleta y Estiba</li>
                        <li>Servicio de Almacenamiento</li>
                        <li>Consolidacion de Cargas</li>
                        <li>Tramites Aduaneros</li>
                        <li>Tramitacion de Exoneraciones de impuesto para proyectos</li>
                        <li>Gestion de Fletes aereos y maritimos</li>
                        <li>Contratacion de Buques y vuelos Charter</li>
                    </ul>
                </div>
            </figcaption>
        </figure>
        <hr style="width: 42%;border: 1px solid #ADADAD;margin: 0 22% auto auto;">
    </section>

    <!--SECTION PRODUCTOS-->
    <section class="productos container" id="products" >
        <header class="">
            <h1><span>04</span>Productos</h1>
            <p>
                Sidutrade NV, es una empresa encargada en compra, venta,
                adquisicion, importacion y exportacion de productos subderivados del acero
            </p>
        </header>
        <article class="grid">
            
            <figure class="effect-bubba">
                <img src="img/product1.jpg" alt="img02"/>
                <figcaption>
                    <h2>Bobinas de <span>acero</span></h2>
                    <p>
                        Son utilizadas por una variedad de consumidores
                        tales como: fabricantes de piezas automotrices,
                        tubos, cilindros de gas, construccion de edificios,
                        puentes, ferrocarriles, entre otros.
                    </p>
                    <a href="#">View more</a>
                </figcaption>			
            </figure>

            <figure class="effect-bubba">
                <img src="img/product2.jpg" alt="img16"/>
                <figcaption>
                    <h2>Bobinas de <span>acero</span></h2>
                    <p>Bubba likes to appear out of thin air.</p>
                    <a href="#">View more</a>
                </figcaption>			
            </figure>
            <figure class="effect-bubba">
                <img src="img/product4.jpg" alt="img16"/>
                <figcaption>
                    <h2>Bobinas de <span>acero</span></h2>
                    <p>Bubba likes to appear out of thin air.</p>
                    <a href="#">View more</a>
                </figcaption>			
            </figure>
            <figure class="effect-bubba">
                <img src="img/product4.jpg" alt="img16"/>
                <figcaption>
                    <h2>Bobinas de <span>acero</span></h2>
                    <p>Bubba likes to appear out of thin air.</p>
                    <a href="#">View more</a>
                </figcaption>			
            </figure>
            <figure class="effect-bubba">
                <img src="img/product4.jpg" alt="img16"/>
                <figcaption>
                    <h2>Bobinas de <span>acero</span></h2>
                    <p>Bubba likes to appear out of thin air.</p>
                    <a href="#">View more</a>
                </figcaption>			
            </figure>
            <figure class="effect-bubba">
                <img src="img/product4.jpg" alt="img16"/>
                <figcaption>
                    <h2>Bobinas de <span>acero</span></h2>
                    <p>Bubba likes to appear out of thin air.</p>
                    <a href="#">View more</a>
                </figcaption>			
            </figure>
        </article>
    </section>
    <!--SECTION PRODUCTOS FIN-->


    <!--SECTION NOTICIAS-->
    <section class="noticias" id="news">
        <div class="container">
        <header>
            <h1><span>05</span>Noticias</h1>
        </header>
        <div class="col-xs-6 col-md-4">
            <div class="thumb">
                <figure>
                    <img src="./img/1.jpg" alt=""> 
                </figure>
                <figcaption class="caption">
                    <h3>Motocross</h3>
                    <p>Deporte Extremo, que se desarrollo a partir del invento de la Motocicleta</p>
                    <a href="" class="boton">Leer Mas</a>
                </figcaption>
            </div>
        </div>
        <div class="col-xs-6 col-md-4">
            <div class="thumb">
                <figure>
                    <img src="./img/1.jpg" alt=""> 
                </figure>
                <figcaption class="caption">
                    <h3>Motocross</h3>
                    <p>Deporte Extremo, que se desarrollo a partir del invento de la Motocicleta</p>
                    <a href="" class="boton">Leer Mas</a>
                </figcaption>
            </div>
        </div>
        <div class="col-xs-6 col-md-4">
            <div class="thumb">
                <figure>
                    <img src="./img/1.jpg" alt=""> 
                </figure>
                <figcaption class="caption">
                    <h3>Motocross</h3>
                    <p>Deporte Extremo, que se desarrollo a partir del invento de la Motocicleta</p>
                    <a href="" class="boton">Leer Mas</a>
                </figcaption>
            </div>
        </div>
        </div>
    </section>
    <!--SECTION FIN NOTICIAS-->

    <!--SECTION CLIENTES-->
    <section id="clientes">
        <h1><span>06</span>Clientes</h1>
        <div class="swiper-container container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">Slide 1</div>
                <div class="swiper-slide">Slide 2</div>
                <div class="swiper-slide">Slide 3</div>
                <div class="swiper-slide">Slide 4</div>
                <div class="swiper-slide">Slide 5</div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
    <!--SECTION CLIENTES FIN-->

    <!--SECTION CONTACTO-->
    <section class="contacto" id="contact">
        <div class="container">
            <header>
                <h1><span>07</span>Contacto</h1>
                <br>
            </header>
            <iframe class="col-md-12" style="max-height:525px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3948.2736027341293!2d-62.78631238315742!3d8.275543862113699!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8dcbf8d0bbde1f49%3A0xf8be7334314d4f2a!2sFundacion+Lala%2C+Av.+Caracas%2C+Ciudad+Guayana+8050%2C+Bol%C3%ADvar!5e0!3m2!1ses-419!2sve!4v1495836481244" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
            <section class="formulario container-fluid">
                <div class="col-md-12 formulario__usuario">
                    <form action="" method="GET" name="formulario__usuario">
                        <fieldset>
                            <legend>Usuarios</legend>
                            <div class="inputs">
                            <div class="form-group name-box col-md-6 col-sm-6">
                            <label for="name" class=""> Nombre Representante </label>
                            <input class="form-control" type="text" id="name" name="name" />
                            </div>
                            <div class="form-group empresa-box col-md-6 col-sm-6">
                            <label for="empresa" class=""> Empresa </label>
                            <input class="form-control" type="text" id="empresa" name="empresa" />
                            </div>
                            <div class="form-group email-box col-md-6 col-sm-6">
                            <label for="email" class=""> Correo electrónico </label>
                            <input class="form-control" type="email" id="email" name="email" />
                            </div>
                            <div class="form-group ubicacion-box col-md-6 col-sm-6">
                            <label for="ubicacion" class=""> Ubicación fiscal </label>
                            <input class="form-control" type="text" id="ubicacion" name="ubicacion" />
                            </div>
                        </div>
                        
                        <div class="combox">
                            <label class="form-group col-md-4 col-sm-4 col-xs-12">Producto
                            <select name="producto" class="form-control" id="producto">
                                <option value="">Option1</option>
                                <option value="">Option2</option>
                                <option value="">Option3</option>
                            </select>
                            </label>
                            <label class="form-group col-md-4 col-sm-4 col-xs-12">Cantidad(Ton.)
                            <select name="cantidad" class="form-control" id="cantidad">
                                <option value="">cantidad1</option>
                                <option value="">cantidad2</option>
                                <option value="">cantidad3</option>
                            </select>
                            </label>
                            <label class="form-group col-md-4 col-sm-4 col-xs-12">Entrega
                            <select name="entrega" class="form-control" id="entrega">
                                <option value="">Entrega1</option>
                                <option value="">Entrega2</option>
                                <option value="">Entrega3</option>
                            </select>
                            </label>
                            <label class="form-group col-md-4 col-sm-4 col-xs-12">Puerto de destino
                            <select name="puerto" class="form-control" id="puerto">
                                <option value="">destino1</option>
                                <option value="">destino2</option>
                                <option value="">destino3</option>
                            </select>
                            </label>
                            <label class="form-group col-md-4 col-sm-4 col-xs-12">Consumo Mes
                            <select name="Consumo" class="form-control" id="Consumo">
                                <option value="">consumo1</option>
                                <option value="">consumo2</option>
                                <option value="">consumo3</option>
                            </select>
                            </label>
                            <label class="form-group col-md-4 col-sm-4 col-xs-12">Frecuencia inventario
                            <select name="frecuencia" class="form-control" id="frecuencia">
                                <option value="">frecuencia1</option>
                                <option value="">frecuencia2</option>
                                <option value="">frecuencia3</option>
                            </select>
                            </label>
                        </div>
                        
                        <label for="" class="form-group col-md-12 col-sm-12 col-xs-12"> Comentario
                            <textarea class="form-control" name="" id="" cols="30" rows="1"></textarea>
                        </label>

                            <div class="form-group btns col-md-12">
                            <label for="fileUser">
                                <span class="btn btn-warning">Adjuntar Archivo</span>
                                <input type="file" id="fileUser" class=""/>
                            </label>
                            <input type="submit" class="btn btn-primary" value="Enviar" /> 
                            </div>
                            

                        </fieldset>
                    </form>
                </div>

                <div class="col-md-12 formulario__proveedor">
                    <form action="" method="GET" name="formulario__usuario">
                        <fieldset>
                            <legend>Proveedores</legend>
                            <div class="inputs">
                                <div class="form-group name-box col-md-6 col-sm-6">
                                    <label for="name" class=""> Nombre Representante </label>
                                    <input class="form-control" type="text" id="name" name="name" />
                                </div>
                                <div class="form-group empresa-box col-md-6 col-sm-6">
                                    <label for="empresa" class=""> Empresa </label>
                                    <input class="form-control" type="text" id="empresa" name="empresa" />
                                </div>
                                <div class="form-group email-box col-md-6 col-sm-6">
                                    <label for="email" class=""> Correo electrónico </label>
                                    <input class="form-control" type="email" id="email" name="email" />
                                </div>
                                <div class="form-group ubicacion-box col-md-6 col-sm-6">
                                    <label for="ubicacion" class=""> Ubicación fiscal </label>
                                    <input class="form-control" type="text" id="ubicacion" name="ubicacion" />
                                </div>
                            </div>
                        
                            <div class="combox">
                                <label class="form-group col-md-3 col-sm-6 col-xs-12">Producto
                                    <select name="producto" class="form-control" id="producto">
                                        <option value="">Option1</option>
                                        <option value="">Option2</option>
                                        <option value="">Option3</option>
                                    </select>
                                </label>
                                <label class="form-group col-md-3 col-sm-6 col-xs-12">Cantidad(Ton.)
                                    <select name="cantidad" class="form-control" id="cantidad">
                                        <option value="">cantidad1</option>
                                        <option value="">cantidad2</option>
                                        <option value="">cantidad3</option>
                                    </select>
                                </label>
                                <label class="form-group col-md-3 col-sm-6 col-xs-12">Entrega
                                    <select name="entrega" class="form-control" id="entrega">
                                        <option value="">Entrega1</option>
                                        <option value="">Entrega2</option>
                                        <option value="">Entrega3</option>
                                    </select>
                                </label>
                                <label class="form-group col-md-3 col-sm-6 col-xs-12">Puerto de destino
                                    <select name="puerto" class="form-control" id="puerto">
                                        <option value="">destino1</option>
                                        <option value="">destino2</option>
                                        <option value="">destino3</option>
                                    </select>
                                </label>
                            </div>
                        
                            <label for="" class="form-group col-md-12 col-sm-12 col-xs-12"> Comentario
                                <textarea class="form-control" name="" id="" cols="30" rows="1"></textarea>
                            </label>

                            <div class="form-group btns col-md-12">
                                <label for="fileProvider">
                                    <span class="btn btn-warning">Adjuntar Archivo</span>
                                    <input type="file" id="fileProvider" class=""/>
                                </label>
                                <input type="submit" class="btn btn-primary" value="Enviar" /> 
                            </div>
                            

                        </fieldset>
                    </form>
                </div>
            </section>
        </div>
    </section>
    <!--SECTION FIN CONTACTO-->
@endsection
    

@section('js')
    <script src="./js/formulario.js"></script>
    <script src="./js/parallaxBanner.js"></script>
    <script src="./js/buttonUp.js"></script>
    <script src="./js/smoothScroll.js"></script>
    <script src="./js/wow.min.js"></script>
    <script src="./js/swiper.min.js"></script>
    <script>
        new WOW().init();

        var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        slidesPerView: 6,
        loop: true,
        speed: 1500,
        centeredSlides: true,
        paginationClickable: true,
        spaceBetween: 30,
        grabCursor: true,
        autoplay: 2500,
        autoplayDisableOnInteraction: false
        });
    </script>
@endsection
        