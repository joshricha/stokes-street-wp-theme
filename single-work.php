<?php get_header(); ?>

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
            <div class="fill" style="background-image:url(<?php echo $carousel_image_1['url']; ?>); background-size:cover;"></div>
            <div class="carousel-caption">
                <h2><?php echo $carousel_image_1['title']; ?></h2>
            </div>
        </div>
        <div class="item">
            <!-- Set the second background image using inline CSS below. -->
            <div class="fill" style="background-image:url(<?php bloginfo('stylesheet_directory'); ?>/assets/img/bg.jpg);"></div>
            <div class="carousel-caption">
                <h2>Caption 2</h2>
            </div>
        </div>
        <div class="item">
            <!-- Set the third background image using inline CSS below. -->
            <div class="fill" style="background-image:url(<?php bloginfo('stylesheet_directory'); ?>/assets/img/bg.jpg);"></div>
            <div class="carousel-caption">
                <h2>Caption 3</h2>
            </div>
        </div>
        <div class="item">
            <!-- Set the third background image using inline CSS below. -->
            <div class="fill" style="background-image:url(<?php bloginfo('stylesheet_directory'); ?>/assets/img/bg.jpg);"></div>
            <div class="carousel-caption">
                <h2>Caption 4</h2>
            </div>
        </div>
        <div class="item">
            <!-- Set the third background image using inline CSS below. -->
            <div class="fill" style="background-image:url(<?php bloginfo('stylesheet_directory'); ?>/assets/img/bg.jpg);"></div>
            <div class="carousel-caption">
                <h2>Caption 5</h2>
            </div>
        </div>
    </div>
</section><!-- Carousel -->

<?php get_footer(); ?>