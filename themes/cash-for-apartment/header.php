<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cash_for_apartment
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">

        <?php wp_head(); ?>
    </head>
    <title><?php bloginfo('name'); ?></title>
    <link rel="shortcut icon" type="<?php echo get_template_directory_uri(); ?>/image/x-icon" href="images/favicon.png">
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">-->
<!--    <link rel="stylesheet" href="<?php // echo get_template_directory_uri(); ?>/css/style.css">
    <link rel="stylesheet" href="<?php // echo get_template_directory_uri(); ?>/css/style2.css">
    <link rel="stylesheet" href="<?php // echo get_template_directory_uri(); ?>/css/responsive.css">
    <link rel="stylesheet" href="<?php // echo get_template_directory_uri(); ?>/css/responsive2.css">-->
    <!--<link rel="stylesheet" href="<?php //echo get_template_directory_uri(); ?>/css/owl.carousel.css">-->
    <!--<link rel="stylesheet" href="<?php // echo get_template_directory_uri(); ?>/css/owl.theme.css">-->
    <!--<link rel="stylesheet" href="<?php // echo get_template_directory_uri(); ?>/css/animations.css">-->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
<!--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
    <!--<script src="<?php // echo get_template_directory_uri(); ?>/js/owl.carousel.js"></script>-->
<!--    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">-->
<!--    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,300,300i,400,500,600,800,900i" rel="stylesheet">-->
</head>

<body <?php body_class(); ?>>
    <div id="fb-root"></div>
    <div id="fb-root"></div>
    <script>(function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id))
                return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.12';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
    <div id="top"></div>

    <div class="header-wrapper">
        <div class="header">
            <div class="header-inner">
                <div class="header-topbar">
                    <div class="container">
                         <?php
                            wp_nav_menu(array(
                                'theme_location' => 'top-menu',
                                'menu_class' => 'nav nav-pills nav-topbar',
                                'container_class'=> 'header-topbar-left',
//                                'container_id'=> 'navbar',
                                
                            ));
                            ?>
<!--                        <div class="header-topbar-left">
                            
                            <ul class="nav nav-pills nav-topbar">
                                <li class="nav-item"><a href="login.html" class="nav-link"><strong>Login</strong></a></li>
                                <li class="nav-item"><a href="registration.html" class="nav-link"><strong>Registration</strong></a></li>
                                <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                            </ul>
                             /.nav  
                        </div>-->
                        <!-- /.header-topbar-left -->

                        <div class="header-topbar-right nav-topbar nav-topbar-social">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-facebook"></i></a></li>
                                <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-twitter"></i></a></li>
                                <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-linkedin"></i></a></li>
                                <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-foursquare"></i></a></li>
                            </ul>
                            <!-- /.nav --> 
                        </div>
                        <!-- /.header-topbar-right --> 
                    </div>
                    <!-- /.header-topbar --> 
                </div>
                <div class="header-top">
                    <div class="header-top-inner container">
                        <?php
                        the_custom_logo();
                        if (is_front_page() && is_home()) :
                            ?>
                                                    <!--<h1 class="site-title"><a href="<?php //echo esc_url( home_url( '/' ) );   ?>" rel="home"><?php bloginfo('name'); ?></a></h1>-->
                        <?php else : ?>
                                                    <!--<p class="site-title"><a href="<?php //echo esc_url( home_url( '/' ) );   ?>" rel="home"><?php bloginfo('name'); ?></a></p>-->
                        <?php
                        endif;

                        $description = get_bloginfo('description', 'display');
                        if ($description || is_customize_preview()) :
                            ?>
                                                    <!--<p class="site-description"><?php //echo $description; /* WPCS: xss ok. */  ?></p>-->
                        <?php endif;
                        ?>

<!--            <a class="header-logo" href="index.html"> <span class="header-logo-text">
        <img src="<?php //echo get_template_directory_uri();  ?>/images/logo-01.png" class="img-responsive"></span> 
</a> /.header-logo 
                        -->

                        <div class="header-separator"></div>

                        <div class="header-search">

                            <a href="<?php echo get_theme_mod('Header_Title1_link')?>"><?php echo get_theme_mod('Header_Title1')?></a>
                        </div>
                        <!-- /.header-search -->

                        <div class="header-information"> <i class="fa fa-at"></i>
                            <div class="header-information-block"> 
                                <strong><a href="mailto:"><?php echo get_theme_mod('Contact_Email');?></a></strong> <span><?php echo get_theme_mod('Email_text');?></span> </div>
                            <!-- /.header-information-block --> 
                        </div>
                        <!-- /.header-information -->

                        <div class="header-information"> <i class="fa fa-phone"></i>
                            <div class="header-information-block"> <strong data-toggle="tooltip" data-placement="top" title="Tooltip on top"><?php echo get_theme_mod('Number');?></strong> <span><?php echo get_theme_mod('Contact_Text');?></span> </div>
                            <!-- /.header-information-block --> 
                        </div>
                        <!-- /.header-information --> 

                    </div>
                    <!-- /.header-top-inner --> 
                </div>
                <!-- /.header-top -->

                <div class="header-bottom">
                    <div class="container menu">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <!--<nav id="site-navigation" class="main-navigation">-->
                                      <!--<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'cash-for-apartment'); ?></button>-->

                            <!--</nav>-->

                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'primary',
                                'menu_class' => 'nav navbar-nav navbar-right pull-left',
//                                'container_class'=> 'navbar-collapse collapse',
//                                'container_id'=> 'navbar',
                                
                            ));
                            ?>
<!--                            <ul class="nav navbar-nav navbar-right pull-left">
                                <li class="active"><a href="index.html">HOME</a></li>
                                <li><a class="page-scroll" href="#product">Apartment</a></li>
                                <li><a class="page-scroll" href="#ico">How Its work</a></li>
                                <li><a href="#">Who we are</a></li>
                                <li><a class="page-scroll" href="#">Service area</a></li>
                                <li><a class="page-scroll" href="#">News</a></li>
                            </ul>-->
                             <?php
                            wp_nav_menu(array(
                                'theme_location' => 'secondary',
                                'menu_class' => 'nav navbar-nav navbar-right pull-right',
                            ));
                            ?>
<!--                            <ul class="pull-right nav navbar-nav navbar-right">
                                <li><a class="page-scroll" href="#contact">Contact</a></li>
                                <li><a class="orange_color" href="register.html">REGISTER</a></li>
                                <li><a class="orange_color" href="login.html">LOGIN</a></li>
                            </ul>-->
                        </div>
                    </div>
                </div>
                <!-- /.header-bottom --> 
            </div>
            <!-- /.container --> 
        </div>
        <!-- /.header-inner --> 
    </div>
