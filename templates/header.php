<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
        <link rel="apple-touch-icon" href="icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/fontawesome-all.min.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald|PT+Sans" rel="stylesheet"> 
        
        <?php
            $archivo = basename($_SERVER['PHP_SELF']);
            $pagina = str_replace(".php", "", $archivo);
            if($pagina == 'invitados' || $pagina == 'index'){
                echo '  <link rel="stylesheet" href="css/colorbox.css">';
            } else if($pagina == 'conferencia') {
                echo '<link rel="stylesheet" href="css/lightbox.css">';            
            }
        ?>      
        
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-3.5.0.min.js"></script>        
    </head>
    <body class="<?php echo $pagina; ?>">
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
       

        <header class="site header">
            <div class="hero">
                <div class="contenido-header">
                    <nav class="redes-sociales"><!--este selector o clase sera utilizado para poner las redes sociales en css-->
                     <a href="#"><i class="fab fa-facebook"></i></a>
                     <a href="#"><i class="fab fa-twitter"></i></a>
                     <a href="#"><i class="fab fa-pinterest-p"></i></a>
                     <a href="#"><i class="fab fa-youtube"></i></a>
                     <a href="#"><i class="fab fa-instagram"></i></a>
                    </nav>
                    <div class="informacion-evento">
                       <div class="clearfix">
                            <p class="fecha"><i class="far fa-calendar-alt"></i>10-12 Dic</p>
                            <p class="ciudad"><i class="fas fa-map-marker-alt"></i>Santo Domingo, RD</p>
                       </div>   

                    <h1 class="nombre-sitio">CodeMasterCamp</h1>
                    <p class="slogan">La mejor conferencia para <span>desarrolladores</span></p>
                </div><!--INFO DEL EVENT-->
                </div>

            </div> <!--esta sera la img de fondo, pero sera agregada en css-->
        </header>
        
        <div class="barra">
            <div class="contenedor clearfix">
                <div class="logo">
                    <a href="index.php">
                    <img src="img/logo.svg" alt="logo codemastercamp">
                    </a>
                </div>

                <div class="menu-movil">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

                <nav class="navegacion-principal clearfix">
                    <a href="conferencia.php">Conferencia</a>
                    <a href="calendario.php">Calendario</a>
                    <a href="invitados.php">Invitados</a>
                    <a href="registro.php">Reservaciones</a>
                </nav>
            </div><!--.cierre del contenedor-->
        </div><!--.cierre de la barra-->