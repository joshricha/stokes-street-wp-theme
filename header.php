<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Stokes_Street
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/style.css">
<!-- text slider css -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/slick.css"/>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/slick-theme.css"/>      
<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Roboto:400,900' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/MyFontsWebfontsKit.css">

<?php wp_head(); ?>

<!-- HTML Shiv -->
<!--[if lt IE 9]>
	<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
<![endif]-->
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'stokesstreetstudio' ); ?></a>


    <!-- Header Menu -->
    <div id="wrapper">
        <div class="overlay"></div>
    
        <header class="site-header" role="banner">

			<?php 

				wp_nav_menu( array(

					'theme_location'	=> 'primary',
					'container'			=> 'nav',
					'container_class'	=> 'navbar navbar-inverse navbar-fixed-top',
					'container_id'		=> 'sidebar-wrapper',
					'menu-class'		=> 'nav sidebar-nav'

				) );

			 ?>

	        <div id="page-content-wrapper">
	            <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
	                <span class="hamb-top"></span>
	                <span class="hamb-middle"></span>
	                <span class="hamb-bottom"></span>
	            </button>
	        </div>
	        <!-- /#page-content-wrapper -->
	        <div class="logo">
                <img id="logo-img" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo.png" alt="Stokes Street Studio logo">
            </div>
        </header>

        <!-- Page Content -->
        
    </div>
    <!-- /#wrapper put all content in here -->