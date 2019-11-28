<?php
session_start();
error_reporting(0);
$varsesion = $_SESSION['username'];
if ($varsesion == null || $varsesion = '') {
    header("Location: ../index.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Productos</title>
    <!-- web-fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!-- off-canvas -->
    <link href="../styles/mobile-menu.css" rel="stylesheet">
    <!-- font-awesome -->
    <link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- CSS -->
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
                                <li><a href="index.php">Inicio</a></li>
                                <li><a href="history.php">Nosotros</a></li>
                                <li class="dropdown active">
                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">Bases de Datos
                                        <span><i class="fa fa-angle-down"></i></span></a>
                                    <ul class="dropdown-menu col-sm-4">
                                        <li>
                                            <div class="m-menu-content">
                                                <ul class="col-sm-6">
                                                    <li class="dropdown-header">Clientes</li>
                                                    <li><a href="clients.php">Ver clientes</a></li>
                                                    <li><a href="addClients.php">Agregar clientes</a></li>
                                                </ul>
                                                <ul class="col-sm-6">
                                                    <li class="dropdown-header">Productos</li>
                                                    <li><a href="products.php">Ver productos</a></li>
                                                    <li><a href="addProducts.php">Agregar productos</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="../controller/logout_controller.php">Cerrar sesión</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>


                <section class="single-page-title single-page-title-productos">
                    <div class="container text-center">
                        <h2>Lista de productos</h2>
                    </div>
                </section>

                <section class="contact-form ptb-100">
                    <div class="container">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th class="col-md-1">Código</th>
                                    <th class="col-md-2">Nombre</th>
                                    <th class="col-md-2">Marca</th>
                                    <th class="col-md-1">Cantidad</th>
                                    <th class="col-md-6">Descripción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include("../controller/products_controller.php");
                                foreach ($productsMatrix as $product) {
                                    echo "<tr>";
                                    echo "<td>" . $product['cod_prd'] . "</td>";
                                    echo "<td>" . $product['name_prd'] . "</td>";
                                    echo "<td>" . $product['brand_prd'] . "</td>";
                                    echo "<td>" . $product['qty_prd'] . "</td>";
                                    echo "<td>" . $product['desc_prd'] . "</td>";
                                    echo "</tr>";
                                }
                                ?>
                            </tbody>
                        </table>
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
                                <li><a href="index.php">Home</a></li>
                                <li><a href="history.php">Nosotros</a></li>
                                <li class="active"><a href="products.php">Productos</a></li>
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
                        <li class="active"><a href="products.php">Ver productos</a></li>
                        <li><a href="addProducts.php">Agregar productos</a></li>
                        <li><a href="clients.php">Ver clientes</a></li>
                        <li><a href="addClients.php">Agregar Clientes</a></li>
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