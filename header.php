<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html <?php language_attributes(); ?> class="no-js">
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
</head>
<body>
	<header class="top-area" id="home">
        <div class="header-top-area">
            <div class="top-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 col-lg-6 col-sm-8">
                            <div class="call-to-action">
                                <p><i class="fa fa-envelope-o"></i>Email: <a href="#">info@restaurant.com</a></p>
                                <p><i class="fa fa-phone"></i>Telephone: <a href="#">+1 800 234 5678</a></p>
                            </div>
                        </div>
                        <div class="col-md-5 col-lg-6 col-sm-4">
                            <div class="book-table-popup">
                                <a href="#reservation-form-modal" data-toggle="modal">Reservar una mesa</a>
                            </div>
                            <div class="top-social-bookmark">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                    <li><a href="#"><i class="fa fa-feed"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--MAINMENU AREA-->
            <div class="mainmenu-area" id="mainmenu-area">
                <div class="mainmenu-area-bg"></div>
                <nav class="navbar">
                    <div class="container">
                        <div class="navbar-header">
                            <button class="collapsed navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-example-js-navbar-scrollspy">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <?php if (has_custom_logo()): ?>
                                <?php the_custom_logo(); ?>
                            <?php else: ?>
                                <h1><?php echo get_bloginfo('name'); ?> <br> <small> <?php echo get_bloginfo('description'); ?> </small></h1>
                            <?php endif ?>
                            <!-- <a href="#home" class="navbar-brand"><img src="img/main_logo_red.png" alt="logo"></a> -->
                            <!-- <a href="#home" class="navbar-brand white"><img src="img/main_logo.png" alt="logo"></a> -->
                            <div style="clear:both"></div>
                        </div>
                        <div class="collapse navbar-collapse bs-example-js-navbar-scrollspy">
                            <div class="search-form-area">
                                <div class="search-form-overlay"></div>
                                <a class="search-form-trigger" href="#search-form">Search<span></span></a>
                                <div id="search-form" class="search-form">
                                    <form>
                                        <input type="search" placeholder="Search...">
                                    </form>
                                </div>
                            </div>
                            <ul id="nav" class="nav navbar-nav">
                                <li class="active"><a href="#home">Inicio</a> </li>
                                <li><a href="#about">Nosotros</a></li>
                                <!-- <li><a href="#promotion">Offer</a></li> -->
                                <li><a href="#menu">Menu</a></li>
                                <!-- <li><a href="#team">team</a></li> -->
                                <!-- <li><a href="#blog">blog</a></li> -->
                                <li><a href="#gallery">Galería</a></li>
                                <li><a href="#contact">Contacto</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <!--END MAINMENU AREA END-->
        </div>
        <!--HHOME SLIDER AREA-->
        <div class="slider-area">
            <div class="pogoSlider">
                <div class="pogoSlider-slide" data-transition="fade" data-duration="1500" style="background:url(img/slider/slide_1.jpg) no-repeat scroll 0 0 / cover;">
                    <h2 class="pogoSlider-slide-element" data-in="slideDown" data-out="flipX" data-duration="700">Bienvenidos a</h2>
                    <h1 class="pogoSlider-slide-element" data-in="expand" data-out="flipX" data-duration="1500"><span>METRO CAFE</span> Cafe & Restaurant</h1>
                    <h3 class="pogoSlider-slide-element" data-in="slideUp" data-out="flipX" data-duration="700"><a  href="#reservation-form-modal" data-toggle="modal">Reserva Ahora</a></h3>
                </div>
                <div class="pogoSlider-slide" data-transition="fade" style="background:url(img/slider/slide_2.jpg) no-repeat scroll 0 0 / cover;">
                    <h2 class="pogoSlider-slide-element" data-in="slideDown" data-out="flipX" data-duration="700">Nuestro Menu</h2>
                    <h1 class="pogoSlider-slide-element" data-in="expand" data-out="flipX" data-duration="1500">Mira la promoción de <span>hoy</span></h1>
                    <h3 class="pogoSlider-slide-element" data-in="slideUp" data-out="flipX" data-duration="700"><a href="#menu">Menú</a></h3>
                </div>
                <div class="pogoSlider-slide" data-transition="fade" style="background:url(img/slider/slide_3.jpg) no-repeat scroll 0 0 / cover;">
                    <h2 class="pogoSlider-slide-element" data-in="slideDown" data-out="flipX" data-duration="700">Prepárate</h2>
                    <h1 class="pogoSlider-slide-element" data-in="expand" data-out="flipX" data-duration="1500">para <span>Disfrutar</span> ahora</h1>
                    <h3 class="pogoSlider-slide-element" data-in="slideUp" data-out="flipX" data-duration="700"><a  href="#reservation-form-modal" data-toggle="modal">Reserva una mesa</a></h3>
                </div>
            </div>
        </div>
        <!--HOME SLIDER AREA END-->
    </header>