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
    <title>C&G Contacto</title>

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
    <link rel="stylesheet" href="css/contactstyle.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/vaakash/socializer/80391a50/css/socializer.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- TODO Add Google analytics -->
</head>

<body>
<!--Sidebar -->
<div class="sidebar">
    <div class="sr-sharebar sr-sb-vl sr-sb-left">
        <div class="socializer a sr-48px sr-circle sr-zoom sr-vertical sr-icon-white sr-bg-dark sr-pad">
            <span class="sr-facebook"><a href="https://www.facebook.com/cuerdasyguitarras/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></span>
            <span class="sr-hackernews"><a href="https://wego.here.com/m%C3%A9xico/autl%C3%A1n-de-navarro/street-square/instrumentos-cuerdas-y-guitarras--e-eyJuYW1lIjoiSW5zdHJ1bWVudG9zIEN1ZXJkYXMgWSBHdWl0YXJyYXMiLCJhZGRyZXNzIjoiT0JSRUdPTiA4NywgQXV0bFx1MDBlMW4gRGUgTmF2YXJybywgSmFsaXNjbywgTWV4aWNvIiwibGF0aXR1ZGUiOjE5Ljc3MDk1LCJsb25naXR1ZGUiOi0xMDQuMzY0MzIsInByb3ZpZGVyTmFtZSI6ImZhY2Vib29rIiwicHJvdmlkZXJJZCI6MTA2OTA5MzAwMzEzMDQ4MH0=?map=19.77087,-104.36359,19,normal&fb_locale=es_LA" target="_blank" title="Hacker News"><i class="fa fa-hacker-news"></i></a></span>
        </div>
    </div>
</div>
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
                    <a class="nav-link js-scroll-trigger animated fadeIn" href="products.php">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger animated fadeIn" href="#">Contacto</a>
                </li>
            </ul>
        </div>
    </div>
</nav><br><br><br><br><!-- Navigation bar -->

<main id="page-top">
    <div class="container">
        <hr>
        <h1 class="text-center animated fadeIn">Visita nuestra tienda</h1>
        <!-- Map -->
        <div class="col">
            <div id="map"></div>
        </div>
        <hr>
        <div class="col">
            <div class="form-area animated fadeIn">
                <form role="form" action="sendemail.php" method="post">
                    <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-   align: center;">Comunicate con nosotros</h3>
                    <div class="form-group">
                        <label>
                            <input aria-label="name" type="text" class="form-control" id="name" name="name" placeholder="Nombre" required>
                        </label>
                    </div>
                    <div class="form-group">
                        <label>
                            <input aria-label="email" type="text" class="form-control" id="email" name="email" placeholder="Email" required>
                        </label>
                    </div>
                    <div class="form-group">
                        <label>
                            <input aria-label="telefono" type="text" class="form-control" id="mobile" name="mobile" placeholder="Teléfono" required>
                        </label>
                    </div>
                    <div class="form-group">
                        <label>
                            <input aria-label="Asunto" type="text" class="form-control" id="subject" name="subject" placeholder="Asunto" required>
                        </label>
                    </div>
                    <div class="form-group">
                        <label>
                            <textarea aria-label="mensaje" name="message" class="form-control" type="textarea" id="message" placeholder="Mensaje" maxlength="140" rows="7"></textarea>
                        </label>
                        <span class="help-block"><p id="characterLeft" class="help-block ">Haz alcanzado el límite de caracteres</p></span>
                    </div>
                    <button type="submit" value="SEND" id="submit" name="submit" class="btn btn-dark pull-right">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</main>

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Cuerdas y Guitarras</p>
    </div>
</footer>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- Custom scripts -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA6gFjEO0Ox1XVrw95lYxfXEN1IChnLRHI"></script>
<script type="text/javascript" src="js/map.js"></script>
<script type="text/javascript" src="js/app.js"></script>
</body>
</html>