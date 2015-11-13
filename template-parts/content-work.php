<div class="row">
    
    <?php $loop = new WP_Query( array('post_type' => 'work', 'orderby' => 'post_id', 'order' => 'ASC') ); ?>

    <?php while( $loop->have_posts() ) : $loop->the_post(); ?>

        <?php 

            // Custom Posts
            $subtitle       = get_field('subtitle');
            $hero_image     = get_field('image_1');

        ?>

        <div class="col-md-4 col-sm-4">
            <div class="work-blocks">
                <a href="<?php echo get_post_permalink(); ?>" class="overlay-wrapper" target="_blank">
                    <div class="overlay-text">
                        <h3><?php the_title(); ?><br>
                        <span class="work-subtitle"><?php echo $subtitle; ?></span></h3>
                    </div>
                    <img class="img-hover" src="<?php echo $hero_image; ?>" alt="MFG">
                </a>
            </div><!-- work blocks -->     
        </div><!-- col-md-4 -->

    <?php endwhile; wp_reset_query(); ?>

</div><!-- row -->