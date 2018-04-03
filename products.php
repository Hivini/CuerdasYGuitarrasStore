<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Meta tags -->
    <link rel="apple-touch-icon" sizes="57x57" href="icons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="icons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="icons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="icons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="icons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="icons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="icons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="icons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="icons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="icons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="icons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="icons/favicon-16x16.png">
    <link rel="manifest" href="icons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title -->
    <title>C&G Productos</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom Styles -->
    <link rel="stylesheet" href="css/animate.css">
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/newstyles.css">
    <link rel="stylesheet" href="css/jcarousel.responsive.css">
    <link rel="stylesheet" href="css/products_styles.css">
    <!-- TODO Add Google analytics -->
</head>

<body>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger animated fadeIn" href="#page-top">Cuerdas y guitarras</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger animated fadeIn" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger animated fadeIn" href="#">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger animated fadeIn" href="contact.php">Contacto</a>
                </li>
            </ul>
        </div>
    </div>
</nav><br><br><br><!-- Navigation bar -->

<main class="main">
    <div class="container">
        <div class="jumbotron" id="page-top">
            <h1 id="product-title" class="animated fadeIn text-center">Guitarras</h1>
            <p class="font-italic text-center">Costo de envío nacional: $120</p>
            <div class="dropdown text-right">
                <button class="btn btn-secondary dropdown-toggle animated fadeIn text-center" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mostrar</button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <button onclick="change1('Guitarras')" class="dropdown-item guitarras-show" type="button">Guitarras</button>
                    <button onclick="change1('Bajitos Y Teceras')" class="dropdown-item baj-tel-show" type="button">Bajitos y Teceras</button>
                    <button onclick="change1('Baterias')" class="dropdown-item bat-sho" type="button">Baterías</button>
                    <button onclick="change1('Accesorios y otros')" class="dropdown-item others-sho" type="button">Otros</button>
                </div>
            </div>
        </div>
        <hr>

        <div class="guitarras animated fadeIn">
            <!-- TODO: Add different background on each section -->
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">Sin Curva</h2>
                </div>
            </div>
            <div class="jcarousel-wrapper">
                <div class="jcarousel">
                    <ul>
                        <li>
                            <button type="button" class="rounded product-button" data-toggle="modal" data-target="#sCurva1Modal">
                                <img class="rounded" src="img/guitars/ochoa.png" alt="Guitarra Ochoa">
                            </button>
                        </li>
                        <li>
                            <button type="button" class="rounded product-button" data-toggle="modal" data-target="#sCurva2Modal">
                                <img class="rounded" src="img/guitars/glaespanola.png" alt="Guitarras española">
                            </button>
                        </li>
                        <li>
                            <button type="button" class="rounded product-button" data-toggle="modal" data-target="#sCurva3Modal">
                                <img class="rounded" src="img/guitars/glaespanoladibujo.png" alt="Guitarra española con dibujo">
                            </button>
                        </li>
                        <li>
                            <button type="button" class="rounded product-button" data-toggle="modal" data-target="#sCurva4Modal">
                                <img class="rounded" src="img/guitars/gcedrorojo.png" alt="Guitarra de Cedro Rojo">
                            </button>
                        </li>
                        <li>
                            <button type="button" class="rounded product-button" data-toggle="modal" data-target="#sCurva5Modal">
                                <img class="rounded" src="img/guitars/gcedroblanco.png" alt="Guitarra de Cedro Blanco">
                            </button>
                        </li>
                    </ul>
                </div> <!-- Jcarousel class -->

                <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
                <a href="#" class="jcarousel-control-next">&rsaquo;</a>

                <p class="jcarousel-pagination"></p>
            </div> <!-- jcarousel wrapper --><br><br>

            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">Con Curva</h2>
                </div>
            </div>
            <div class="jcarousel-wrapper">
                <div class="jcarousel">
                    <ul>
                        <li>
                            <button type="button" class="rounded product-button" data-toggle="modal" data-target="#curva1Modal">
                                <img class="rounded" src="img/guitars/gespanolaconcurva.png" alt="Guitarra Española con curva">
                            </button>
                        </li>
                        <li>
                            <button type="button" class="rounded product-button" data-toggle="modal" data-target="#curva2Modal">
                                <img class="rounded" src="img/guitars/gmexicana.png" alt="Guitarra Mexicana con curva">
                            </button>
                        </li>
                        <li>
                            <button type="button" class="rounded product-button" data-toggle="modal" data-target="#curva3Modal">
                                <img class="rounded" src="img/guitars/gcedro.png" alt="Guitarra de cedro con curva">
                            </button>
                        </li>
                    </ul>
                </div> <!-- Jcarousel class -->

                <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
                <a href="#" class="jcarousel-control-next">&rsaquo;</a>

                <p class="jcarousel-pagination"></p>
            </div> <!-- jcarousel wrapper --><br>

            <div class="card">
                <div class="card-header">
                    <h2 class="text-center product-title">Gama alta</h2>
                </div>
            </div>
            <div class="jcarousel-wrapper">
                <div class="jcarousel">
                    <ul>
                        <li>
                            <button type="button" class="rounded product-button" data-toggle="modal" data-target="#ibanez1Modal">
                                <img class="rounded" src="img/guitars/gibanez.png" alt="Guitarra Ibañez GA3-AM">
                            </button>
                        </li>
                        <li>
                            <button type="button" class="rounded product-button" data-toggle="modal" data-target="#ibanez2Modal">
                                <img class="rounded" src="img/guitars/gibañez.png" alt="Guitarra ibañez V50NJP-VS">
                            </button>
                        </li>
                        <li>
                            <button type="button" class="rounded product-button" data-toggle="modal" data-target="#gNogalModal">
                                <img class="rounded" src="img/guitars/gnogal.png" alt="Guitarra fina de Nogal">
                            </button>
                        </li>
                        <li>
                            <button type="button" class="rounded product-button" data-toggle="modal" data-target="#gTresPinosModal">
                                <img class="rounded" src="img/guitars/gtrespinos.png" alt="Guitarra de Tres Pinos">
                            </button>
                        </li>
                        <li>
                            <button type="button" class="rounded product-button" data-toggle="modal" data-target="#gSegovia1Modal">
                                <img class="rounded" src="img/guitars/gsegovia.png" alt="Guitarra de Segovia C-365NL">
                            </button>
                        </li>
                        <li>
                            <button type="button" class="rounded product-button" data-toggle="modal" data-target="#gSegovia2Modal">
                                <img class="rounded" src="img/guitars/gsegovia2.png" alt="Guitarra de Segovia C-515NL">
                            </button>
                        </li>
                    </ul>
                </div> <!-- Jcarousel class -->

                <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
                <a href="#" class="jcarousel-control-next">&rsaquo;</a>

                <p class="jcarousel-pagination"></p>
            </div> <!-- jcarousel wrapper -->
        </div><br>

        <div class="baj-tel animated fadeIn">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">La Española</h2>
                </div>
            </div>
            <div class="jcarousel-wrapper">
                <div class="jcarousel">
                    <ul>
                        <li>
                            <button type="button" class="rounded product-button" data-toggle="modal" data-target="#bajito1Modal">
                                <img class="rounded" src="img/guitars/bajitoespanola.png" alt="Bajito la Española Negro">
                            </button>
                        </li>
                        <li>
                            <button type="button" class="rounded product-button" data-toggle="modal" data-target="#bajito2Modal">
                                <img class="rounded" src="img/guitars/bajitoespanola2.png" alt="Bajito la Española Niña">
                            </button>
                        </li>
                        <li>
                            <button type="button" class="rounded product-button" data-toggle="modal" data-target="#bajito3Modal">
                                <img class="rounded" src="img/guitars/bajitoespanola3.png" alt="Bajito la Española Niño">
                            </button>
                        </li>
                        <li>
                            <button type="button" class="rounded product-button" data-toggle="modal" data-target="#tercera1Modal">
                                <img class="rounded" src="img/guitars/terceraespanola.png" alt="Tercera la Española">
                            </button>
                        </li>
                    </ul>
                </div> <!-- Jcarousel class -->

                <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
                <a href="#" class="jcarousel-control-next">&rsaquo;</a>

                <p class="jcarousel-pagination"></p>
            </div> <!-- jcarousel wrapper --><br><br>
        </div> <!-- baj-tel -->

        <div class="baterias animated fadeIn">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">Extreme</h2>
                </div>
            </div>
            <div class="jcarousel-wrapper">
                <div class="jcarousel">
                    <ul>
                        <li>
                            <button type="button" class="rounded product-button" data-toggle="modal" data-target="#bateriaInfantilModal">
                                <img class="rounded" src="img/baterias/bextreme-infantil.png" alt="Bateria Extreme Infantil">
                            </button>
                        </li>
                        <li>
                            <button type="button" class="rounded product-button" data-toggle="modal" data-target="#bateriaJuniorModal">
                                <img class="rounded" src="img/baterias/bextreme-junior.png" alt="Bateria Extreme Junior">
                            </button>
                        </li>
                        <li>
                            <button type="button" class="rounded product-button" data-toggle="modal" data-target="#bateriaProfesionalModal">
                                <img class="rounded" src="img/baterias/b-extreme-professional.png" alt="Bateria Extreme Profesional">
                            </button>
                        </li>
                    </ul>
                </div> <!-- Jcarousel class -->

                <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
                <a href="#" class="jcarousel-control-next">&rsaquo;</a>

                <p class="jcarousel-pagination"></p>
            </div> <!-- jcarousel wrapper --><br><br>
        </div><!-- Baterias -->

        <!-- .others-show -->
        <div class="others animated fadeIn">
            <div class="jcarousel-wrapper">
                <div class="jcarousel">
                    <ul>
                        <li>
                            <button type="button" class="rounded product-button" data-toggle="modal" data-target="#fundaModal">
                                <img class="rounded" src="img/otros/funda12.png" alt="Funda de guitarra">
                            </button>
                        </li>
                        <li>
                            <button type="button" class="rounded product-button" data-toggle="modal" data-target="#tarolaModal">
                                <img class="rounded" src="img/otros/tarola.png" alt="Tarolas">
                            </button>
                        </li>
                    </ul>
                </div> <!-- Jcarousel class -->

                <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
                <a href="#" class="jcarousel-control-next">&rsaquo;</a>

                <p class="jcarousel-pagination"></p>
            </div> <!-- jcarousel wrapper --><br><br>
        </div><!-- Others -->

    </div>
</main>

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Cuerdas y Guitarras</p>
    </div>
</footer>

<!-- Guitarra Ochoa -->
<div class="modal fade" id="sCurva1Modal" tabindex="-1" role="dialog" aria-labelledby="sCurva1ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="sCurva1ModalLabel">Guitarra Ochoa</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-4">
                        <img src="img/guitars/ochoa.png" alt="Guitarra Ochoa" class="img-fluid">
                    </div>
                    <div class="col-8 card">
                        <div class="card-body">
                            <h5>Descripción</h5>
                            <p>Guitarra acústica Ochoa sin curva, cuerdas de Nylon, tamaño tradicional y tonalidad pristina.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="UHC3N76MFR6FQ">
                    <input type="hidden" name="charset" value="utf-8">
                    <table>
                        <tr><td><input type="hidden" name="on0" value="Tipo">Tipo</td></tr><tr><td><label>
                                    <select name="os0">
                                                <option value="Ochoa">Ochoa $620.00 MXN</option>
                                                <option value="Guitarra Española">Guitarra Española $640.00 MXN</option>
                                                <option value="Española con dibujo">Española con dibujo $660.00 MXN</option>
                                                <option value="Cedro Rojo">Cedro Rojo $2,190.00 MXN</option>
                                                <option value="Cedro Blanco">Cedro Blanco $2,390.00 MXN</option>
                                            </select>
                                </label></td></tr>
                    </table>
                    <input type="hidden" name="currency_code" value="MXN">
                    <input type="image" src="https://www.paypalobjects.com/es_XC/i/btn/btn_buynow_SM.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
                    <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Guitarra Española -->
<div class="modal fade" id="sCurva2Modal" tabindex="-1" role="dialog" aria-labelledby="sCurva2ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="sCurva2ModalLabel">Guitarra Española sin curva</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-4">
                        <img src="img/guitars/glaespanola.png" alt="Guitarra Española sin curva" class="img-fluid">
                    </div>
                    <div class="col-8 card">
                        <div class="card-body">
                            <h5>Descripción</h5>
                            <p>Guitarra acústica Española sin curva, cuerdas de Nylon, tamaño tradicional y tonalidad obscura con bordes negros.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="UHC3N76MFR6FQ">
                    <input type="hidden" name="charset" value="utf-8">
                    <table>
                        <tr><td><input type="hidden" name="on0" value="Tipo">Tipo</td></tr><tr><td><label>
                                    <select name="os0">
                                                <option value="Guitarra Española">Guitarra Española $640.00 MXN</option>
                                                <option value="Ochoa">Ochoa $620.00 MXN</option>
                                                <option value="Española con dibujo">Española con dibujo $660.00 MXN</option>
                                                <option value="Cedro Rojo">Cedro Rojo $2,190.00 MXN</option>
                                                <option value="Cedro Blanco">Cedro Blanco $2,390.00 MXN</option>
                                            </select>
                                </label></td></tr>
                    </table>
                    <input type="hidden" name="currency_code" value="MXN">
                    <input type="image" src="https://www.paypalobjects.com/es_XC/i/btn/btn_buynow_SM.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
                    <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Guitarra Española con dibujo -->
<div class="modal fade" id="sCurva3Modal" tabindex="-1" role="dialog" aria-labelledby="sCurva3ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="sCurva3ModalLabel">Guitarra Española con dibujo</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-4">
                        <img src="img/guitars/glaespanoladibujo.png" alt="Guitarra Española con dibujo" class="img-fluid">
                    </div>
                    <div class="col-8 card">
                        <div class="card-body">
                            <h5>Descripción</h5>
                            <p>Guitarra acústica Española con dibujo sin curva, cuerdas de Nylon, tamaño tradicional y color negro.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="UHC3N76MFR6FQ">
                    <input type="hidden" name="charset" value="utf-8">
                    <table>
                        <tr><td><input type="hidden" name="on0" value="Tipo">Tipo</td></tr><tr><td><label>
                                    <select name="os0">
                                                <option value="Española con dibujo">Española con dibujo $660.00 MXN</option>
                                                <option value="Ochoa">Ochoa $620.00 MXN</option>
                                                <option value="Guitarra Española">Guitarra Española $640.00 MXN</option>
                                                <option value="Cedro Rojo">Cedro Rojo $2,190.00 MXN</option>
                                                <option value="Cedro Blanco">Cedro Blanco $2,390.00 MXN</option>
                                            </select>
                                </label></td></tr>
                    </table>
                    <input type="hidden" name="currency_code" value="MXN">
                    <input type="image" src="https://www.paypalobjects.com/es_XC/i/btn/btn_buynow_SM.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
                    <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Guitarra Cedro Rojo -->
<div class="modal fade" id="sCurva4Modal" tabindex="-1" role="dialog" aria-labelledby="sCurva4ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="sCurva4ModalLabel">Guitarra de Cedro Rojo</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-4">
                        <img src="img/guitars/gcedrorojo.png" alt="Guitarra de Cedro Rojo" class="img-fluid">
                    </div>
                    <div class="col-8 card">
                        <div class="card-body">
                            <h5>Descripción</h5>
                            <p>Guitarra acústica de Cedro Rojo, cuerdas de Nylon, tamaño tradicional y tonalidad de la madera de cedro rojo.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="UHC3N76MFR6FQ">
                    <input type="hidden" name="charset" value="utf-8">
                    <table>
                        <tr><td><input type="hidden" name="on0" value="Tipo">Tipo</td></tr><tr><td><label>
                                    <select name="os0">
                                                <option value="Cedro Rojo">Cedro Rojo $2,190.00 MXN</option>
                                                <option value="Ochoa">Ochoa $620.00 MXN</option>
                                                <option value="Guitarra Española">Guitarra Española $640.00 MXN</option>
                                                <option value="Española con dibujo">Española con dibujo $660.00 MXN</option>
                                                <option value="Cedro Blanco">Cedro Blanco $2,390.00 MXN</option>
                                            </select>
                                </label></td></tr>
                    </table>
                    <input type="hidden" name="currency_code" value="MXN">
                    <input type="image" src="https://www.paypalobjects.com/es_XC/i/btn/btn_buynow_SM.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
                    <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Guitarra Cedro Blanco -->
<div class="modal fade" id="sCurva5Modal" tabindex="-1" role="dialog" aria-labelledby="sCurva5ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="sCurva5ModalLabel">Guitarra de Cedro Blanco</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-4">
                        <img src="img/guitars/gcedroblanco.png" alt="Guitarra de Cedro Blanco" class="img-fluid">
                    </div>
                    <div class="col-8 card">
                        <div class="card-body">
                            <h5>Descripción</h5>
                            <p>Guitarra acústica de Cedro Blanco, cuerdas de Nylon, tamaño tradicional y tonalidad de la madera de cedro blanco.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="UHC3N76MFR6FQ">
                    <input type="hidden" name="charset" value="utf-8">
                    <table>
                        <tr><td><input type="hidden" name="on0" value="Tipo">Tipo</td></tr><tr><td><label>
                                    <select name="os0">
                                                <option value="Cedro Blanco">Cedro Blanco $2,390.00 MXN</option>
                                                <option value="Ochoa">Ochoa $620.00 MXN</option>
                                                <option value="Guitarra Española">Guitarra Española $640.00 MXN</option>
                                                <option value="Española con dibujo">Española con dibujo $660.00 MXN</option>
                                                <option value="Cedro Rojo">Cedro Rojo $2,190.00 MXN</option>
                                            </select>
                                </label></td></tr>
                    </table>
                    <input type="hidden" name="currency_code" value="MXN">
                    <input type="image" src="https://www.paypalobjects.com/es_XC/i/btn/btn_buynow_SM.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
                    <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Guitarra Española con Curva -->
<div class="modal fade" id="curva1Modal" tabindex="-1" role="dialog" aria-labelledby="curva1ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="curva1ModalLabel">Guitarra Española con Curva</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-4">
                        <img src="img/guitars/gespanolaconcurva.png" alt="Guitarra Española con Curva" class="img-fluid">
                    </div>
                    <div class="col-8 card">
                        <div class="card-body">
                            <h5>Descripción</h5>
                            <p>Guitarra acústica Española con curva, cuerdas de Nylon, tamaño tradicional y color negro con flamas.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="5STLSLWF7V4RA">
                    <input type="hidden" name="charset" value="utf-8">
                    <table>
                        <tr><td><input type="hidden" name="on0" value="Tipo">Tipo</td></tr><tr><td><label>
                                    <select name="os0">
                                                <option value="Española con dibujo">Española con dibujo $680.00 MXN</option>
                                                <option value="Mexicana">Mexicana $680.00 MXN</option>
                                                <option value="De Cedro">De Cedro $1,690.00 MXN</option>
                                            </select>
                                </label></td></tr>
                    </table>
                    <input type="hidden" name="currency_code" value="MXN">
                    <input type="image" src="https://www.paypalobjects.com/es_XC/i/btn/btn_buynow_SM.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
                    <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Guitarra Mexicana con Curva -->
<div class="modal fade" id="curva2Modal" tabindex="-1" role="dialog" aria-labelledby="curva2ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="curva2ModalLabel">Guitarra Mexicana con Curva</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-4">
                        <img src="img/guitars/gmexicana.png" alt="Guitarra Mexicana con Curva" class="img-fluid">
                    </div>
                    <div class="col-8 card">
                        <div class="card-body">
                            <h5>Descripción</h5>
                            <p>Guitarra acústica Mexicana con curva, cuerdas de Nylon, tamaño tradicional y color nogal con bordes blancos.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="5STLSLWF7V4RA">
                    <input type="hidden" name="charset" value="utf-8">
                    <table>
                        <tr><td><input type="hidden" name="on0" value="Tipo">Tipo</td></tr><tr><td><label>
                                    <select name="os0">
                                                <option value="Mexicana">Mexicana $680.00 MXN</option>
                                                <option value="Española con dibujo">Española con dibujo $680.00 MXN</option>
                                                <option value="De Cedro">De Cedro $1,690.00 MXN</option>
                                            </select>
                                </label></td></tr>
                    </table>
                    <input type="hidden" name="currency_code" value="MXN">
                    <input type="image" src="https://www.paypalobjects.com/es_XC/i/btn/btn_buynow_SM.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
                    <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Guitarra de Cedro con Curva -->
<div class="modal fade" id="curva3Modal" tabindex="-1" role="dialog" aria-labelledby="curva3ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="curva3ModalLabel">Guitarra de Cedro con Curva</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-4">
                        <img src="img/guitars/gcedro.png" alt="Guitarra de Cedro con Curva" class="img-fluid">
                    </div>
                    <div class="col-8 card">
                        <div class="card-body">
                            <h5>Descripción</h5>
                            <p>Guitarra acústica de Cedro con curva, cuerdas de Nylon, tamaño tradicional y color de cedro natural.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="5STLSLWF7V4RA">
                    <input type="hidden" name="charset" value="utf-8">
                    <table>
                        <tr><td><input type="hidden" name="on0" value="Tipo">Tipo</td></tr><tr><td><label>
                                    <select name="os0">
                                                <option value="De Cedro">De Cedro $1,690.00 MXN</option>
                                                <option value="Española con dibujo">Española con dibujo $680.00 MXN</option>
                                                <option value="Mexicana">Mexicana $680.00 MXN</option>
                                            </select>
                                </label></td></tr>
                    </table>
                    <input type="hidden" name="currency_code" value="MXN">
                    <input type="image" src="https://www.paypalobjects.com/es_XC/i/btn/btn_buynow_SM.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
                    <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Guitarra Ibanez GA3 -->
<div class="modal fade" id="ibanez1Modal" tabindex="-1" role="dialog" aria-labelledby="ibanez1ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="ibanez1ModalLabel">Guitarra Ibañez GA3-AM</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-4">
                        <img src="img/guitars/gibanez.png" alt="Guitarra Ibañez GA3-AM" class="img-fluid">
                    </div>
                    <div class="col-8 card">
                        <div class="card-body">
                            <h5>Descripción</h5>
                            <p>Guitarra acústica clásica, cuerdas de Nylon, tamaño tradicional y tonalidad pristina.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="3E59PZGSM56HY">
                    <input type="hidden" name="charset" value="utf-8">
                    <table>
                        <tr><td><input type="hidden" name="on0" value="Tipo">Tipo</td></tr><tr><td><label>
                                    <select name="os0">
                                                <option value="Ibañez GA3-AM">Ibañez GA3-AM $2,615.00 MXN</option>
                                                <option value="Ibañez V50NJP-VS">Ibañez V50NJP-VS $3,100.00 MXN</option>
                                                <option value="De Nogal">De Nogal $3,100.00 MXN</option>
                                                <option value="Tres Pinos">Tres Pinos $3,300.00 MXN</option>
                                                <option value="Segovia C-365NL">Segovia C-365NL $3,800.00 MXN</option>
                                                <option value="Segovia C-515NL">Segovia C-515NL $3,990.00 MXN</option>
                                            </select>
                                </label></td></tr>
                    </table>
                    <input type="hidden" name="currency_code" value="MXN">
                    <input type="image" src="https://www.paypalobjects.com/es_XC/i/btn/btn_buynow_SM.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
                    <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Guitarra Ibañez V50NJP-VS -->
<div class="modal fade" id="ibanez2Modal" tabindex="-1" role="dialog" aria-labelledby="ibanez2ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="ibanez2ModalLabel">Guitarra Ibañez V50NJP-VS</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-4">
                        <img src="img/guitars/gibañez.png" alt="Guitarra Ibañez V50NJP-VS" class="img-fluid">
                    </div>
                    <div class="col-8 card">
                        <div class="card-body">
                            <h5>Descripción</h5>
                            <p>Guitarra acústica clásica, cuerdas de metal, tamaño tradicional y tonalidad obscura.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="3E59PZGSM56HY">
                    <input type="hidden" name="charset" value="utf-8">
                    <table>
                        <tr><td><input type="hidden" name="on0" value="Tipo">Tipo</td></tr><tr><td><label>
                                    <select name="os0">
                                                <option value="Ibañez V50NJP-VS">Ibañez V50NJP-VS $3,100.00 MXN</option>
                                                <option value="Ibañez GA3-AM">Ibañez GA3-AM $2,615.00 MXN</option>
                                                <option value="De Nogal">De Nogal $3,100.00 MXN</option>
                                                <option value="Tres Pinos">Tres Pinos $3,300.00 MXN</option>
                                                <option value="Segovia C-365NL">Segovia C-365NL $3,800.00 MXN</option>
                                                <option value="Segovia C-515NL">Segovia C-515NL $3,990.00 MXN</option>
                                            </select>
                                </label></td></tr>
                    </table>
                    <input type="hidden" name="currency_code" value="MXN">
                    <input type="image" src="https://www.paypalobjects.com/es_XC/i/btn/btn_buynow_SM.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
                    <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Guitarra fina de Nogal -->
<div class="modal fade" id="gNogalModal" tabindex="-1" role="dialog" aria-labelledby="gNogalModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="gNogalModalLabel">Guitarra fina de Nogal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-4">
                        <img src="img/guitars/gnogal.png" alt="Guitarra fina de Nogal" class="img-fluid">
                    </div>
                    <div class="col-8 card">
                        <div class="card-body">
                            <h5>Descripción</h5>
                            <p>Guitarra acústica de nogal, cuerdas de Nylon, tamaño tradicional y tonalidad de madera de Nogal.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="3E59PZGSM56HY">
                    <input type="hidden" name="charset" value="utf-8">
                    <table>
                        <tr><td><input type="hidden" name="on0" value="Tipo">Tipo</td></tr><tr><td><label>
                                    <select name="os0">
                                                <option value="De Nogal">De Nogal $3,100.00 MXN</option>
                                                <option value="Ibañez GA3-AM">Ibañez GA3-AM $2,615.00 MXN</option>
                                                <option value="Ibañez V50NJP-VS">Ibañez V50NJP-VS $3,100.00 MXN</option>
                                                <option value="Tres Pinos">Tres Pinos $3,300.00 MXN</option>
                                                <option value="Segovia C-365NL">Segovia C-365NL $3,800.00 MXN</option>
                                                <option value="Segovia C-515NL">Segovia C-515NL $3,990.00 MXN</option>
                                            </select>
                                </label></td></tr>
                    </table>
                    <input type="hidden" name="currency_code" value="MXN">
                    <input type="image" src="https://www.paypalobjects.com/es_XC/i/btn/btn_buynow_SM.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
                    <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Guitarra de Tres Pinos -->
<div class="modal fade" id="gTresPinosModal" tabindex="-1" role="dialog" aria-labelledby="gTresPinosModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="gTresPinosModalLabel">Guitarra de Tres Pinos</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-4">
                        <img src="img/guitars/gtrespinos.png" alt="Guitarra de Tres Pinos" class="img-fluid">
                    </div>
                    <div class="col-8 card">
                        <div class="card-body">
                            <h5>Descripción</h5>
                            <p>Guitarra acústica de Tres Pinos, cuerdas de Nylon, tamaño tradicional y tonalidad pristina.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="3E59PZGSM56HY">
                    <input type="hidden" name="charset" value="utf-8">
                    <table>
                        <tr><td><input type="hidden" name="on0" value="Tipo">Tipo</td></tr><tr><td><label>
                                    <select name="os0">
                                                <option value="Tres Pinos">Tres Pinos $3,300.00 MXN</option>
                                                <option value="Ibañez GA3-AM">Ibañez GA3-AM $2,615.00 MXN</option>
                                                <option value="Ibañez V50NJP-VS">Ibañez V50NJP-VS $3,100.00 MXN</option>
                                                <option value="De Nogal">De Nogal $3,100.00 MXN</option>
                                                <option value="Segovia C-365NL">Segovia C-365NL $3,800.00 MXN</option>
                                                <option value="Segovia C-515NL">Segovia C-515NL $3,990.00 MXN</option>
                                            </select>
                                </label></td></tr>
                    </table>
                    <input type="hidden" name="currency_code" value="MXN">
                    <input type="image" src="https://www.paypalobjects.com/es_XC/i/btn/btn_buynow_SM.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
                    <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Guitarra de Segovia C-365NL -->
<div class="modal fade" id="gSegovia1Modal" tabindex="-1" role="dialog" aria-labelledby="gSegovia1ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="gSegovia1ModalLabel">Guitarra de Segovia C-365NL</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-4">
                        <img src="img/guitars/gsegovia.png" alt="Guitarra de Segovia C-365NL" class="img-fluid">
                    </div>
                    <div class="col-8 card">
                        <div class="card-body">
                            <h5>Descripción</h5>
                            <p>Guitarra electroacústica Segovia, cuerdas de Nylon, tamaño tradicional y tonalidad pristina.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="3E59PZGSM56HY">
                    <input type="hidden" name="charset" value="utf-8">
                    <table>
                        <tr><td><input type="hidden" name="on0" value="Tipo">Tipo</td></tr><tr><td><label>
                                    <select name="os0">
                                                <option value="Segovia C-365NL">Segovia C-365NL $3,800.00 MXN</option>
                                                <option value="Ibañez GA3-AM">Ibañez GA3-AM $2,615.00 MXN</option>
                                                <option value="Ibañez V50NJP-VS">Ibañez V50NJP-VS $3,100.00 MXN</option>
                                                <option value="De Nogal">De Nogal $3,100.00 MXN</option>
                                                <option value="Tres Pinos">Tres Pinos $3,300.00 MXN</option>
                                                <option value="Segovia C-515NL">Segovia C-515NL $3,990.00 MXN</option>
                                            </select>
                                </label></td></tr>
                    </table>
                    <input type="hidden" name="currency_code" value="MXN">
                    <input type="image" src="https://www.paypalobjects.com/es_XC/i/btn/btn_buynow_SM.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
                    <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Guitarra de Segovia C-515NL -->
<div class="modal fade" id="gSegovia2Modal" tabindex="-1" role="dialog" aria-labelledby="gSegovia2ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="gSegovia2ModalLabel">Guitarra de Segovia C-515NL</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-4">
                        <img src="img/guitars/gsegovia2.png" alt="Guitarra de Segovia C-515NL" class="img-fluid">
                    </div>
                    <div class="col-8 card">
                        <div class="card-body">
                            <h5>Descripción</h5>
                            <p>Guitarra electroacústica Segovia, cuerdas de Nylon, tamaño tradicional y tonalidad cobrizo.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="3E59PZGSM56HY">
                    <input type="hidden" name="charset" value="utf-8">
                    <table>
                        <tr><td><input type="hidden" name="on0" value="Tipo">Tipo</td></tr><tr><td><label>
                                    <select name="os0">
                                                <option value="Segovia C-515NL">Segovia C-515NL $3,990.00 MXN</option>
                                                <option value="Ibañez GA3-AM">Ibañez GA3-AM $2,615.00 MXN</option>
                                                <option value="Ibañez V50NJP-VS">Ibañez V50NJP-VS $3,100.00 MXN</option>
                                                <option value="De Nogal">De Nogal $3,100.00 MXN</option>
                                                <option value="Tres Pinos">Tres Pinos $3,300.00 MXN</option>
                                                <option value="Segovia C-365NL">Segovia C-365NL $3,800.00 MXN</option>
                                            </select>
                                </label></td></tr>
                    </table>
                    <input type="hidden" name="currency_code" value="MXN">
                    <input type="image" src="https://www.paypalobjects.com/es_XC/i/btn/btn_buynow_SM.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
                    <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Bajito la Española Negro Modal -->
<div class="modal fade" id="bajito1Modal" tabindex="-1" role="dialog" aria-labelledby="bajito1ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="bajito1ModalLabel">Bajito la Española Negro</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-4">
                        <img src="img/guitars/bajitoespanola.png" alt="Bajito la Española Negro" class="img-fluid">
                    </div>
                    <div class="col-8 card">
                        <div class="card-body">
                            <h5>Descripción</h5>
                            <p>Bajito la española de color negro, tamaño mediano y acabado de madera estándar, cuerdas de Nylon.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="TPQ2PQBCNC25G">
                    <input type="hidden" name="charset" value="utf-8">
                    <input type="hidden" name="charset" value="utf-8">
                    <table>
                        <tr><td><input type="hidden" name="on0" value="Tipo">Tipo</td></tr><tr><td><label>
                                    <select name="os0">
                                                <option value="Española Negro">Española Negro $410.00 MXN</option>
                                                <option value="Española Niña">Española Niña $420.00 MXN</option>
                                                <option value="Española Niño">Española Niño $420.00 MXN</option>
                                                <option value="Tercera Española">Tercera Española $620.00 MXN</option>
                                            </select>
                                </label></td></tr>
                    </table>
                    <input type="hidden" name="currency_code" value="MXN">
                    <input type="image" src="https://www.paypalobjects.com/es_XC/i/btn/btn_buynow_SM.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
                    <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Bajito la Española Niña Modal -->
<div class="modal fade" id="bajito2Modal" tabindex="-1" role="dialog" aria-labelledby="bajito2ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="bajito2ModalLabel">Bajito la Española Niña</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-4">
                        <img src="img/guitars/bajitoespanola2.png" alt="Bajito la Española Negro" class="img-fluid">
                    </div>
                    <div class="col-8 card">
                        <div class="card-body">
                            <h5>Descripción</h5>
                            <p>Bajito la española de niña color lila con dibujos, tamaño infantil y cuerdas de Nylon.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="TPQ2PQBCNC25G">
                    <input type="hidden" name="charset" value="utf-8">
                    <input type="hidden" name="charset" value="utf-8">
                    <table>
                        <tr><td><input type="hidden" name="on0" value="Tipo">Tipo</td></tr><tr><td><label>
                                    <select name="os0">
                                        <option value="Española Niña">Española Niña $420.00 MXN</option>
                                        <option value="Española Negro">Española Negro $410.00 MXN</option>
                                        <option value="Española Niño">Española Niño $420.00 MXN</option>
                                        <option value="Tercera Española">Tercera Española $620.00 MXN</option>
                                    </select>
                                </label></td></tr>
                    </table>
                    <input type="hidden" name="currency_code" value="MXN">
                    <input type="image" src="https://www.paypalobjects.com/es_XC/i/btn/btn_buynow_SM.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
                    <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Bajito la Española Niño Modal -->
<div class="modal fade" id="bajito3Modal" tabindex="-1" role="dialog" aria-labelledby="bajito3ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="bajito3ModalLabel">Bajito la Española Niño</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-4">
                        <img src="img/guitars/bajitoespanola3.png" alt="Bajito la Española Negro" class="img-fluid">
                    </div>
                    <div class="col-8 card">
                        <div class="card-body">
                            <h5>Descripción</h5>
                            <p>Bajito la española de niña color negro con dibujos, tamaño infantil y cuerdas de Nylon.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="TPQ2PQBCNC25G">
                    <input type="hidden" name="charset" value="utf-8">
                    <input type="hidden" name="charset" value="utf-8">
                    <table>
                        <tr><td><input type="hidden" name="on0" value="Tipo">Tipo</td></tr><tr><td><label>
                                    <select name="os0">
                                        <option value="Española Niño">Española Niño $420.00 MXN</option>
                                        <option value="Española Negro">Española Negro $410.00 MXN</option>
                                        <option value="Española Niña">Española Niña $420.00 MXN</option>
                                        <option value="Tercera Española">Tercera Española $620.00 MXN</option>
                                    </select>
                                </label></td></tr>
                    </table>
                    <input type="hidden" name="currency_code" value="MXN">
                    <input type="image" src="https://www.paypalobjects.com/es_XC/i/btn/btn_buynow_SM.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
                    <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Tercera la Española Modal -->
<div class="modal fade" id="tercera1Modal" tabindex="-1" role="dialog" aria-labelledby="terceraModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="terceraModalLabel">Tercera La Española</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-4">
                        <img src="img/guitars/terceraespanola.png" alt="Bajito la Española Negro" class="img-fluid">
                    </div>
                    <div class="col-8 card">
                        <div class="card-body">
                            <h5>Descripción</h5>
                            <p>Tercera la Española color café con bordes negros, cuerdas de metal.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="TPQ2PQBCNC25G">
                    <input type="hidden" name="charset" value="utf-8">
                    <input type="hidden" name="charset" value="utf-8">
                    <table>
                        <tr><td><input type="hidden" name="on0" value="Tipo">Tipo</td></tr><tr><td><label>
                                    <select name="os0">
                                        <option value="Tercera Española">Tercera Española $620.00 MXN</option>
                                        <option value="Española Negro">Española Negro $410.00 MXN</option>
                                        <option value="Española Niña">Española Niña $420.00 MXN</option>
                                        <option value="Española Niño">Española Niño $420.00 MXN</option>
                                    </select>
                                </label></td></tr>
                    </table>
                    <input type="hidden" name="currency_code" value="MXN">
                    <input type="image" src="https://www.paypalobjects.com/es_XC/i/btn/btn_buynow_SM.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
                    <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Bateria Extreme Infantil Modal -->
<div class="modal fade" id="bateriaInfantilModal" tabindex="-1" role="dialog" aria-labelledby="bateriaInfantilModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="bateriaInfantilModalLabel">Bateria Extreme Infantil</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-4">
                        <img src="img/baterias/bextreme-infantil.png" alt="Bateria Extreme Infantil" class="img-fluid">
                    </div>
                    <div class="col-8 card">
                        <div class="card-body">
                            <h5>Descripción</h5>
                            <p>Paquete de bateria completo Infantil, cuenta con 3 tarolas, 1 platillos y el bajo.</p>
                            <p class="font-weight-bold">Se recoge en tienda.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="9TZ8UZQM7VHNL">
                    <input type="hidden" name="charset" value="utf-8">
                    <table>
                        <tr><td><input type="hidden" name="on0" value="Tipo">Tipo</td></tr><tr><td><label>
                                    <select name="os0">
                                                <option value="Infantil">Infantil $2,850.00 MXN</option>
                                                <option value="Junior">Junior $3,850.00 MXN</option>
                                                <option value="Profesional">Profesional $7,700.00 MXN</option>
                                            </select>
                                </label></td></tr>
                    </table>
                    <input type="hidden" name="currency_code" value="MXN">
                    <input type="image" src="https://www.paypalobjects.com/es_XC/i/btn/btn_buynow_SM.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
                    <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
                </form>

            </div>
        </div>
    </div>
</div>

<!-- Bateria Extreme Junior Modal -->
<div class="modal fade" id="bateriaJuniorModal" tabindex="-1" role="dialog" aria-labelledby="bateriaJuniorModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="bateriaJuniorModalLabel">Bateria Extreme Junior</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-4">
                        <img src="img/baterias/bextreme-junior.png" alt="Bateria Extreme Junior" class="img-fluid">
                    </div>
                    <div class="col-8 card">
                        <div class="card-body">
                            <h5>Descripción</h5>
                            <p>Paquete de bateria completo Junior, cuenta con 4 tarolas, 2 platillos y el bajo.</p>
                            <p class="font-weight-bold">Se recoge en tienda.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="9TZ8UZQM7VHNL">
                    <input type="hidden" name="charset" value="utf-8">
                    <table>
                        <tr><td><input type="hidden" name="on0" value="Tipo">Tipo</td></tr><tr><td><label>
                                    <select name="os0">
                                                <option value="Junior">Junior $3,850.00 MXN</option>
                                                <option value="Infantil">Infantil $2,850.00 MXN</option>
                                                <option value="Profesional">Profesional $7,700.00 MXN</option>
                                            </select>
                                </label></td></tr>
                    </table>
                    <input type="hidden" name="currency_code" value="MXN">
                    <input type="image" src="https://www.paypalobjects.com/es_XC/i/btn/btn_buynow_SM.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
                    <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
                </form>

            </div>
        </div>
    </div>
</div>

<!-- Bateria Extreme Profesional Modal -->
<div class="modal fade" id="bateriaProfesionalModal" tabindex="-1" role="dialog" aria-labelledby="bateriaProfesionalModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="bateriaProfesionalModalLabel">Bateria Extreme Profesional</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-4">
                        <img src="img/baterias/b-extreme-professional.png" alt="Bateria Extreme Profesional" class="img-fluid">
                    </div>
                    <div class="col-8 card">
                        <div class="card-body">
                            <h5>Descripción</h5>
                            <p>Paquete de bateria completo Profesional, cuenta con 5 tarolas, 2 platillos y el bajo.</p>
                            <p class="font-weight-bold">Se recoge en tienda.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="9TZ8UZQM7VHNL">
                    <input type="hidden" name="charset" value="utf-8">
                    <table>
                        <tr><td><input type="hidden" name="on0" value="Tipo">Tipo</td></tr><tr><td><label>
                                    <select name="os0">
                                                <option value="Profesional">Profesional $7,700.00 MXN</option>
                                                <option value="Infantil">Infantil $2,850.00 MXN</option>
                                                <option value="Junior">Junior $3,850.00 MXN</option>
                                            </select>
                                </label></td></tr>
                    </table>
                    <input type="hidden" name="currency_code" value="MXN">
                    <input type="image" src="https://www.paypalobjects.com/es_XC/i/btn/btn_buynow_SM.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
                    <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
                </form>

            </div>
        </div>
    </div>
</div>

<!-- Funda de Guitarra Modal -->
<div class="modal fade" id="fundaModal" tabindex="-1" role="dialog" aria-labelledby="fundaModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="fundaModalLabel">Funda de guitarra</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-4">
                        <img src="img/otros/funda12.png" alt="Funda de guitarra" class="img-fluid">
                    </div>
                    <div class="col-8 card">
                        <div class="card-body">
                            <h5>Descripción</h5>
                            <p>Funda de guitarra protectora, resistente a impactos con interior de piel.</p>
                            <p class="font-italic">Color por fuera: negro, color por dentro: azul</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="YS7Y8HMPHWMPL">
                    <input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
                    <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Tarolas Modal -->
<div class="modal fade" id="tarolaModal" tabindex="-1" role="dialog" aria-labelledby="tarolaModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="tarolaModalLabel">Tarolas</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-4">
                        <img src="img/otros/tarola.png" alt="Tarolas" class="img-fluid">
                    </div>
                    <div class="col-8 card">
                        <div class="card-body">
                            <h5>Descripción</h5>
                            <p>Repuestos de taloras para baterias extreme. Ponerse en contacto para conocer los tipos disponibles en la tienda.</p>
                            <p class="font-weight-bold">Actualmente no disponible</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-warning" data-success="modal" disabled>No disponible</button>
            </div>
        </div>
    </div>
</div>


<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Custom scripts -->
<script src="js/jcarousel.responsive.js"></script>
<script src="js/jquery.jcarousel.min.js"></script>
<script type="text/javascript" src="js/displayitems.js"></script>
<script type="text/javascript" src="js/changeTitle.js"></script>

</body>
</html>