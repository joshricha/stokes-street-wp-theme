<?php

// Advanced Custom Fields

// Carousel images
$carousel_image_1 		= get_field('carousel_image_1');
$carousel_image_2 		= get_field('carousel_image_2');
$carousel_image_3 		= get_field('carousel_image_3');
$carousel_image_4 		= get_field('carousel_image_4');
$carousel_image_5 		= get_field('carousel_image_5');

// Carousel titles
$image_1_title         = get_field('image_1_title');
$image_2_title         = get_field('image_2_title');
$image_3_title         = get_field('image_3_title');
$image_4_title         = get_field('image_4_title');
$image_5_title         = get_field('image_5_title');

?>

<!-- Full Page Image Background Carousel Header -->
<section id="myCarousel" class="carousel slide">

    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>
    <!-- Wrapper for Slides -->
    <div class="carousel-inner">
        <div class="item active">
            <!-- Set the first background image using inline CSS below. -->
            <div class="fill" style="background-image:url(<?php echo $carousel_image_1['url']; ?>); background-size:cover;" alt="<?php echo $carousel_image_1['alt']; ?>"> </div>
            <div class="carousel-caption">
                <h2><?php echo $image_1_title; ?></h2>
            </div>
        </div>
        <div class="item">
            <!-- Set the second background image using inline CSS below. -->
            <div class="fill" style="background-image:url(<?php echo $carousel_image_2['url']; ?>);" alt="<?php echo $carousel_image_2['alt']; ?>"></div>
            <div class="carousel-caption">
                <h2><?php echo $image_2_title; ?></h2>
            </div>
        </div>
        <div class="item">
            <!-- Set the third background image using inline CSS below. -->
            <div class="fill" style="background-image:url(<?php echo $carousel_image_3['url']; ?>);" alt="<?php echo $carousel_image_3['alt']; ?>"></div>
            <div class="carousel-caption">
                <h2><?php echo $image_3_title; ?></h2>
            </div>
        </div>
        <div class="item">
            <!-- Set the third background image using inline CSS below. -->
            <div class="fill" style="background-image:url(<?php echo $carousel_image_4['url']; ?>);" alt="<?php echo $carousel_image_4['alt']; ?>"></div>
            <div class="carousel-caption">
                <h2><?php echo $image_4_title; ?></h2>
            </div>
        </div>
        <div class="item">
            <!-- Set the third background image using inline CSS below. -->
            <div class="fill" style="background-image:url(<?php echo $carousel_image_5['url']; ?>);" alt="<?php echo $carousel_image_5['alt']; ?>"></div>
            <div class="carousel-caption">
                <h2><?php echo $image_5_title; ?></h2>
            </div>
        </div>
    </div>
</section><!-- Carousel -->


<!-- Scroll btn -->
<div class="scroll-dwn-button">
    <a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/scroll-down-btn.png" alt="Scroll down button"></a>
</div><!-- Scroll btn -->