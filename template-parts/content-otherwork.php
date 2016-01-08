<section id="other-work">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 section-title">
                <h3>Explore other Work</h3>
            </div><!-- title -->

            <?php $loop = new WP_Query( array('post_type' => 'work', 'orderby' => 'rand', 'posts_per_page' => '3') ); ?>

            <?php while( $loop->have_posts() ) : $loop->the_post(); ?>

                <?php 

                    // Custom Posts
                    $subtitle       = get_field('subtitle');
                    $hero_image     = get_field('image_1');
                    $one_homepage_image = get_field('do_you_wish_to_add_more_than_one_homepage_image');

                ?>

                <div class="col-sm-4">
                    
                    <?php if ($one_homepage_image == false) : ?>

                        <a href="<?php echo get_post_permalink(); ?>" class="overlay-wrapper" target="_blank">
                                <img src="<?php echo $hero_image['url']; ?>" alt="<?php echo $hero_image['alt']; ?>">
                                <h3><?php the_title(); ?></h3>
                        </a>

                    <?php else : ?>

                        <a href="<?php echo bloginfo('wpurl'); ?>" class="overlay-wrapper" target="_blank">
                                <img src="<?php echo $hero_image['url']; ?>" alt="<?php echo $hero_image['alt']; ?>">
                                <h3><?php the_title(); ?></h3>
                        </a>
                        
                    <?php endif; ?>

                </div><!-- col -->

            <?php endwhile; wp_reset_query(); ?>

        </div><!-- row -->
    </div><!-- container -->
</section><!-- other work section -->






    


