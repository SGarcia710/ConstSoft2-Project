<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>X-Corporation</title>
    <!-- web-font -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!-- off-canvas -->
    <link href="../styles/mobile-menu.css" rel="stylesheet">
    <!-- font-awesome -->
    <link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!--  CSS -->
    <link href="../styles/style.css" rel="stylesheet">
</head>

<body>
    <div id="main-wrapper">

        <div id="preloader">
            <div id="status">
                <div class="status-mes"></div>
            </div>
        </div>

        <div class="uc-mobile-menu-pusher">

            <div class="content-wrapper">
                <nav class="navbar m-menu navbar-default navbar-fixed-top">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt=""></a>
                        </div>


                        <div class="collapse navbar-collapse" id="#navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right main-nav">
                                <li class="active"><a href="index.php">Inicio</a></li>
                                <li><a href="history.php">Nosotros</a></li>
                                <li><a href="products.php">Productos</a></li>
                                <li><a href="clients.php">Clientes</a></li>
                            </ul>

                        </div>
                    </div>
                </nav>

                <div id="x-corp-carousel" class="carousel slide hero-slide hidden-xs" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#x-corp-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#x-corp-carousel" data-slide-to="1"></li>
                        <li data-target="#x-corp-carousel" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="img/hero-1.png" alt="Hero Slide">

                            <div class="carousel-caption">
                                <h1>Es simple, inteligente y ocasionalmente mágico.</h1>

                                <p>Todo fluye siempre y cuando estés en el lugar indicado.</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="img/hero-2.png" alt="...">

                            <div class="carousel-caption">
                                <h1>Es rentable y exitoso!</h1>

                                <p>Nuestros clientes son la prueba!</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="img/hero-4.png" alt="...">

                            <div class="carousel-caption">
                                <h1>Las mejores soluciones para tu negocio!</h1>

                                <p>Tenemos toda la experiencia necesaria para cualquiera que sea tu meta.</p>
                            </div>
                        </div>
                    </div>
                    <a class="left carousel-control" href="#x-corp-carousel" role="button" data-slide="prev">
                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="right carousel-control" href="#x-corp-carousel" role="button" data-slide="next">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                        <span class="sr-only">Siguiente</span>
                    </a>
                </div>

                <section class="x-services ptb-100 gray-bg">

                    <section class="section-title">
                        <div class="container text-center">
                            <h2>Qué ofrecemos</h2>
                            <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
                        </div>
                    </section>

                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="thumbnail clearfix">
                                    <a href="#"><img class="img-responsive" src="img/offer-3.png" alt="Image"></a>

                                    <div class="caption">
                                        <h3><a href="#">Posicionamiento</a></h3>

                                        <p>Sabemos como llevarte a lo más alto, directo a competir con los más grandes.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="thumbnail clearfix">
                                    <a href="#"><img class="img-responsive" src="img/offer-2.png" alt="Image"></a>

                                    <div class="caption">
                                        <h3><a href="#">Planeación</a></h3>

                                        <p>Esa idea que aun no sabes como llevar acabo, la hacemos surgir desde tu imagición hasta tus bolsillos.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="thumbnail clearfix">
                                    <a href="#"><img class="img-responsive" src="img/offer-4.png" alt="Image"></a>

                                    <div class="caption">
                                        <h3><a href="#">Analisis</a></h3>

                                        <p>Expertos en analisis de datos y estrategias de negocio, con años de experiencia y aliados alrededor del mundo.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="thumbnail clearfix">
                                    <a href="#"><img class="img-responsive" src="img/offer-1.png" alt="Image"></a>

                                    <div class="caption">
                                        <h3><a href="#">Coaching</a></h3>

                                        <p>Con los mejores apoyandote desde el inicio, hasta ser tus propios socios, te formamos a ti y a todo tu equipo.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="x-features">
                    <section class="section-title">
                        <div class="container text-center">
                            <h2>Nuestras Capacidades</h2>
                            <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
                        </div>
                    </section>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 img-left">
                                <img class="img-responsive img-capacidades" width="550" src="img/img-about-2.png" alt="">
                            </div>
                            <div class="col-md-6">
                                <div class="promo-block-wrapper clearfix">
                                    <div class="promo-icon">
                                        <i class="fa fa-line-chart"></i>
                                    </div>
                                    <div class="promo-content">
                                        <h3>Operaciones</h3>

                                        <p>Menos es más; Contamos con un equipo pequeño pero especializado, especializado en seguridad, redes, redes de telecomunicaciones, finanzas y desarrollo de software.</p>
                                    </div>
                                </div>

                                <div class="promo-block-wrapper clearfix">
                                    <div class="promo-icon">
                                        <i class="fa fa-life-ring"></i>
                                    </div>
                                    <div class="promo-content">
                                        <h3>Información Personal</h3>

                                        <p>Los principios a los que nos adherimos con respecto a los datos personales de los usuarios siguen cuatro componentes clave importantes, que creemos están alineados con las aspiraciones de los consumidores: control, transparencia, incentivación y confianza.</p>
                                    </div>
                                </div>

                                <div class="promo-block-wrapper clearfix">
                                    <div class="promo-icon">
                                        <i class="fa fa-calculator"></i>
                                    </div>
                                    <div class="promo-content last-type">
                                        <h3>Blockchain</h3>

                                        <p>Antes de construir X-Corporation, una Blockchain atendida para telecomunicaciones, primero debemos establecer claramente lo que creemos que son los componentes esenciales de un buen sistema de cadena de cadenas.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="team ptb-100">
                    <section class="section-title">
                        <div class="container text-center">
                            <h2>Nuestro Equipo</h2>
                            <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
                        </div>
                    </section>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-4">
                                <figure class="thumbnail">
                                    <a href="#"><img src="img/img-team-1.jpg" class="img-responsive" alt="Image"></a>
                                    <figcaption class="caption text-center">
                                        <h3>Reena Scot -
                                            <small>Director Ejecutivo</small>
                                        </h3>
                                    </figcaption>
                                </figure>
                            </div>

                            <div class="col-sm-4">
                                <figure class="thumbnail">
                                    <a href="#"><img src="img/img-team-2.jpg" class="img-responsive" alt="Image"></a>
                                    <figcaption class="caption text-center">
                                        <h3>David Hun -
                                            <small>Director de Operaciones</small>
                                        </h3>
                                    </figcaption>
                                </figure>
                            </div>

                            <div class="col-sm-4">
                                <figure class="thumbnail">
                                    <a href="#"><img src="img/img-team-3.jpg" class="img-responsive" alt="Image"></a>
                                    <figcaption class="caption text-center">
                                        <h3>Camila Heim -
                                            <small>Director Comercial</small>
                                        </h3>
                                    </figcaption>
                                </figure>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <figure class="thumbnail">
                                    <a href="#"><img src="img/img-team-4.jpg" class="img-responsive" alt="Image"></a>
                                    <figcaption class="caption text-center">
                                        <h3>Calvin Smith -
                                            <small>Director de Marketing</small>
                                        </h3>
                                    </figcaption>
                                </figure>
                            </div>

                            <div class="col-sm-4">
                                <figure class="thumbnail">
                                    <a href="#"><img src="img/img-team-5.jpg" class="img-responsive" alt="Image"></a>
                                    <figcaption class="caption text-center">
                                        <h3>Laura Bezzos -
                                            <small>Director de Recursos Humanos</small>
                                        </h3>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="col-sm-4">
                                <figure class="thumbnail">
                                    <a href="#"><img src="img/img-team-6.jpg" class="img-responsive" alt="Image"></a>
                                    <figcaption class="caption text-center">
                                        <h3>Jenefir White -
                                            <small>Director Financiero</small>
                                        </h3>
                                    </figcaption>
                                </figure>
                            </div>

                        </div>
                    </div>
                </section>

                <section class="testimonial">
                    <section class="section-title">
                        <div class="container text-center">
                            <h2>Clientes Satisfechos</h2>
                            <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
                        </div>
                    </section>
                    <div class="container">
                        <div id="testimonialSlider" class="carousel slide" data-ride="carousel">

                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <blockquote>
                                        <ul>
                                            <li><img src="img/img-testimonial-1.jpg" class="img-responsive" alt="" /></li>
                                            <li class="name">Justus Kühn</li>
                                        </ul>
                                        <p>No solo grandes resultados, también la mejor experiencia.</br> Aprendí que el único paso del que me debo arrepentir</br> es del que no doy.
                                        </p>

                                    </blockquote>
                                </div>
                                <div class="item">
                                    <blockquote>
                                        <ul>
                                            <li><img src="img/img-testimonial-2.jpg" class=" img-responsive" alt="" /></li>
                                            <li class="name">Lennox Arnold</li>
                                        </ul>
                                        <p>Esa idea que tuve en la universidad y nadie creía rentable,</br> ahora es mi pequeño bebé. </p>

                                    </blockquote>
                                </div>
                                <div class="item">
                                    <blockquote>
                                        <ul>
                                            <li><img src="img/img-testimonial-3.jpg" class="img-responsive" alt="" /></li>
                                            <li class="name">Paulina Berger</li>
                                        </ul>

                                        <p>Nunca pensé que saldría de la situación tan aterradora </br>en la que se encontraba mi empresa, pero gracias a éste gran equipo
                                            </br> logré lo impensable, gracias!
                                        </p>
                                    </blockquote>
                                </div>
                            </div>
                            <!-- Controls -->
                            <a class="left carousel-control" href="#testimonialSlider" role="button" data-slide="prev">
                                <span><i class="fa fa-angle-left"></i></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#testimonialSlider" role="button" data-slide="next">
                                <span><i class="fa fa-angle-right"></i></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </section>

                <section class="client-logo ptb-100">
                    <section class="section-title">
                        <div class="container text-center">
                            <h2>Nuestros Socios</h2>
                            <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
                        </div>
                    </section>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-2 col-sm-4 col-xs-6 section-margin">
                                <a href="#"><img src="img/logo-client-1.png" alt="Image"></a>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6 section-margin">
                                <a href="#"><img src="img/logo-client-2.png" alt="Image"></a>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6 section-margin">
                                <a href="#"><img src="img/logo-client-3.png" alt="Image"></a>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6 section-margin">
                                <a href="#"><img src="img/logo-client-4.png" alt="Image"></a>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6 section-margin">
                                <a href="#"><img src="img/logo-client-5.png" alt="Image"></a>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6 section-margin">
                                <a href="#"><img src="img/logo-client-6.png" alt="Image"></a>
                            </div>
                        </div>
                    </div>
                </section>

                <footer class="footer">

                    <div class="footer-widget-section">
                        <div class="container text-center">
                            <div class="row">
                                <div class="col-sm-4 footer-block">
                                    <div class="footer-widget widget_text">
                                        <div class="footer-logo">
                                            <a href="#"><img src="img/logo.png" alt=""></a>
                                        </div>
                                        <p>Apoyamos continuamente el desarrollo de las capacidades de todos los que conforman nuestro equipo.</p>

                                    </div>
                                </div>

                                <div class="col-sm-4 footer-block">
                                    <div class="footer-widget widget_text">
                                        <h3>Trabajamos para su Beneficio</h3>

                                        <p>Agilice de manera distintiva los materiales virales en lugar de soluciones listas para usar. Potenciar de forma creíble el retorno de la inversión revolucionario en lugar de productos únicos. Maximice en colaboración las ideas centradas en los principios antes que los datos altamente eficientes.</p>
                                    </div>
                                </div>

                                <div class="col-sm-4 footer-block last">
                                    <div class="footer-widget widget_text">
                                        <h3>Contactanos Hoy!</h3>
                                        <address>
                                            Llamanos 666 777 888 o 111 222 333<br>
                                            Envia un correo a <a href="mailto:#">contact@xcorporation.com</a><br>
                                            Visitanos Calle 5 No. 59 - 05<br>
                                            Cali, Valle del Cauca<br>
                                        </address>

                                        <ul class="list-inline social-links">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="copyright-section">
                        <div class="container clearfix">
                            <span class="copytext">&copy; X-CORPORATION. Todos los derechos reservados. | Diseñado por: Sebastián García Ospina</a></span>

                            <ul class="list-inline pull-right">
                                <li class="active"><a href="index.php">Inicio</a></li>
                                <li><a href="history.php">Nosotros</a></li>
                                <li><a href="products.php">Productos</a></li>
                                <li><a href="clients.php">Clientes</a></li>
                            </ul>
                        </div>
                    </div>
                </footer>

            </div>
        </div>

        <div class="uc-mobile-menu uc-mobile-menu-effect">
            <button type="button" class="close" aria-hidden="true" data-toggle="offcanvas" id="uc-mobile-menu-close-btn">&times;</button>
            <div>
                <div>
                    <ul id="menu">
                        <li><a href="index.php">Inicio</a></li>
                        <li><a href="history.php">Nosotros</a></li>
                        <li><a href="products.php">Productos</a></li>
                        <li><a href="clients.php">Clientes</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/mobile-menu.js"></script>
    <script src="js/flexSlider/jquery.flexslider-min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>