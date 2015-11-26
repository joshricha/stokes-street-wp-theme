<?php

// Advanced Custom Fields

// Carousel images
$carousel_image_1 		= get_field('carousel_image_1');

// Carousel titles
$image_1_title         = get_field('image_1_title');

?>

<!-- Full Page Image Background Carousel Header -->
<section id="myCarousel" class="carousel slide">

    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1" ></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>
    <!-- Wrapper for Slides -->
    <div class="carousel-inner">

        <?php 

            $loop = new WP_Query( array(
                'post_type' => 'case-study', 
                'orderby' => 'post_id', 
                'order' => 'ASC'
            ) ); 

            // Counter to see if we are on the first slide
            $slide_counter = 0; 

            while( $loop->have_posts() ) : $loop->the_post();


                $class = '';

                // Custom Posts
                $carousel_image_1       = get_field('carousel_image_1');
                $image_1_title          = get_field('image_1_title');

                if( $slide_counter == 0 ) { $class .= ' active'; }

        ?>

                <div class="item <?php echo $class ?> <?php echo "slide_" . $slide_counter ?>">
                    <!-- Set the first background image using inline CSS below. -->
                    <div class="fill" style="background-image:url(<?php echo $carousel_image_1['url']; ?>); background-size:cover;" alt="<?php echo $carousel_image_1['alt']; ?>"> </div>
                    <div class="carousel-caption">
                        <h2><a href="<?php echo get_post_permalink(); ?>" target="_blank"><?php echo $image_1_title; ?></a></h2>
                    </div>
                </div>

                <?php $slide_counter++; ?>

            <?php endwhile; wp_reset_query(); ?>

    </div>
</section><!-- Carousel -->


<!-- Scroll btn -->
<div class="scroll-dwn-button">
    <a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/scroll-down-btn.png" alt="Scroll down button"></a>
</div><!-- Scroll btn -->