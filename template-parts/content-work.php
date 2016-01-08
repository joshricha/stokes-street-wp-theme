<!-- Page Content -->
<section id="our-work">
    <div class="container">
        <div class="row">
            <!-- Our work -->
            <div class="col-lg-12 section-title">
                <h3>Some of our Work</h3>
            </div><!-- Our work -->
        </div><!-- row -->
        <div class="work-grid">
            <div class="row">
                
                <?php $loop = new WP_Query( array(
                    'post_type' => 'work', 
                    'orderby' => 'post_id', 
                    'order' => 'ASC',
                    'posts_per_page' => 12
                ) ); ?>

                <?php while( $loop->have_posts() ) : $loop->the_post(); ?>

                    <?php 

                        // Custom Posts
                        $subtitle       = get_field('subtitle');
                        $hero_image     = get_field('image_1');
                        $one_homepage_image = get_field('do_you_wish_to_add_more_than_one_homepage_image');

                    ?>

                    <?php if ($one_homepage_image == false): ?>   

                        <div class="col-md-4 col-sm-4">
                            <div class="work-blocks">
                                <a href="<?php echo get_post_permalink(); ?>" class="overlay-wrapper" target="_blank">
                                    <div class="overlay-text">
                                        <h3><?php the_title(); ?><br>
                                        <span class="work-subtitle"><?php echo $subtitle; ?></span></h3>
                                    </div>
                                    <img class="img-hover" src="<?php echo $hero_image['url']; ?>" alt="<?php echo $hero_image['alt']; ?>">
                                </a>
                            </div><!-- work blocks -->     
                        </div><!-- col-md-4 -->

                    <?php else : ?>

                        <div class="col-md-4 col-sm-4">
                            <div class="work-blocks">
                                <div class="overlay-text">
                                    <h3><?php the_title(); ?><br>
                                    <span class="work-subtitle"><?php echo $subtitle; ?></span></h3>
                                </div>
                                <img class="img-hover" src="<?php echo $hero_image['url']; ?>" alt="<?php echo $hero_image['alt']; ?>">
                            </div><!-- work blocks -->     
                        </div><!-- col-md-4 -->

                    <?php endif ?>

                <?php endwhile; wp_reset_query(); ?>

            </div><!-- row -->
        </div><!-- work grid -->
    </div><!-- container -->
</section><!-- our work -->