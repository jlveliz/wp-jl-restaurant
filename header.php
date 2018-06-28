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
	<header class="top-area <?php if (is_home()): ?> single-page single-blog-page <?php endif ?>" id="home">
        <div class="header-top-area">
            <div class="top-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 col-lg-6 col-sm-8">
                            <div class="call-to-action">
                                
                                <?php if (get_theme_mod('email')): ?>
                                    <p><i class="fa fa-envelope-o"></i>Email: <a href="#"><?php echo get_theme_mod( 'email')   ?></a></p>
                                <?php endif ?>

                                <?php if (get_theme_mod('phone')): ?>
                                    <p><i class="fa fa-phone"></i>Teléfono:<a href="#"><?php echo get_theme_mod( 'phone')   ?></a></p>
                                <?php endif ?>
                            </div>
                        </div>
                        <div class="col-md-5 col-lg-6 col-sm-4">
                            <div class="book-table-popup">
                                <a href="#reservation-form-modal" data-toggle="modal">Reservar una mesa</a>
                            </div>
                            <?php get_template_part('social-header'); ?>
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
                            <?php if (get_theme_mod( 'first_logo_brand') && get_theme_mod( 'second_logo_brand')): ?>
                                <a href="/" class="navbar-brand"><img src="<?php echo get_theme_mod( 'first_logo_brand') ?>" alt="logo"></a>
                                <a href="/" class="navbar-brand white"><img src="<?php echo get_theme_mod( 'second_logo_brand') ?>" alt="logo"></a>
                            <?php else: ?>
                                <h1><?php echo get_bloginfo('name'); ?> <br> <small> <?php echo get_bloginfo('description'); ?> </small></h1>
                            <?php endif ?>
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