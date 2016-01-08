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
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css">
<!-- text slider css -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/slick.css"/>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/slick-theme.css"/>      

<!-- <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/MyFontsWebfontsKit.css"> -->

<!--
/**
 * @license
 * MyFonts Webfont Build ID 3144927, 2015-12-22T18:38:47-0500
 * 
 * The fonts listed in this notice are subject to the End User License
 * Agreement(s) entered into by the website owner. All other parties are 
 * explicitly restricted from using the Licensed Webfonts(s).
 * 
 * You may obtain a valid license at the URLs below.
 * 
 * Webfont: AvantGardeGothicITCW01Bk by ITC
 * URL: http://www.myfonts.com/fonts/itc/avant-garde-gothic/std-book/
 * 
 * Webfont: AvantGardeGothicITCW02XLt by ITC
 * URL: http://www.myfonts.com/fonts/itc/avant-garde-gothic/std-extra-light/
 * 
 * Webfont: AvantGardeGothicITCW02Md by ITC
 * URL: http://www.myfonts.com/fonts/itc/avant-garde-gothic/std-medium/
 * 
 * 
 * License: http://www.myfonts.com/viewlicense?type=web&buildid=3144927
 * Licensed pageviews: 250,000
 * Webfonts copyright: Font software Copyright 1993, 1994, 2001 Adobe Systems
 * Incorporated. Typeface designs Copyright 2005 International Typeface Corporation. All
 * rights reserved.
 * 
 * © 2015 MyFonts Inc
*/

-->
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
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'nav',
                'container_class'   => 'navbar navbar-inverse navbar-fixed-top',
        		'container_id'      => 'sidebar-wrapper',
                'menu_class'        => 'nav sidebar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );

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
                <a href="/"><img id="logo-img" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo.png" alt="Stokes Street Studio logo"></a>
            </div>
        </header>

        <!-- Page Content -->
        
    </div>
    <!-- /#wrapper put all content in here -->
</div><!-- Screen Reader -->