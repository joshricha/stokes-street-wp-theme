

<section id="other-work">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 section-title">
                <h3>Explore other Work</h3>
            </div><!-- title -->

            <?php $loop = new WP_Query( array('post_type' => 'work', 'orderby' => 'post_id', 'order' => 'ASC', 'posts_per_page' => '3') ); ?>

            <?php while( $loop->have_posts() ) : $loop->the_post(); ?>

                <?php 

                    // Custom Posts
                    $subtitle       = get_field('subtitle');
                    $hero_image     = get_field('image_1');

                ?>

                <div class="col-sm-4">
                    <a href="<?php echo get_post_permalink(); ?>" class="overlay-wrapper" target="_blank">
                        <img src="<?php echo $hero_image['url']; ?>" alt="<?php echo $hero_image['alt']; ?>">
                        <h3><?php the_title(); ?></h3>
                    </a>
                </div><!-- col -->

            <?php endwhile; wp_reset_query(); ?>

        </div><!-- row -->
    </div><!-- container -->
</section><!-- other work section -->






    


