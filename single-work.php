<?php get_header();


// Grid images or videos
$numVideos = 5;

$grid_image_array       = array();
$image_video_array      = array();
$video_embed_code_array = array();

for ($i = 1; $i <= $numVideos; $i++) {
    $grid_image_array[$i]       = get_field('image_' . $i);
    $image_video_array[$i]      = get_field('image_' . $i . '_do_you_wish_to_add_a_video');
    $video_embed_code_array[$i] = get_field('video_embed_code_' . $i);
}


// General
$about              = get_field('about');
$subtitle           = get_field('subtitle');


get_template_part( 'template-parts/content', 'herofullscreen' );

?>

<!-- Page Content -->
<!-- Work -->
<section id="our-work">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 section-title">
                <h3><?php echo $subtitle; ?></h3>
            </div><!-- title -->
        </div><!-- row -->
        <div class="work-images">
            <div class="row">
                <div class="col-sm-4">

                    <?php if( $image_video_array[1] == "Yes" ): ?>
                        <a data-toggle="modal" data-target="#myModal1" href="#">
                            <img src="<?php echo $grid_image_array[1]['url']; ?>" alt="<?php echo $grid_image_array[1]['alt']; ?>">
                        </a>
                    <?php else: ?>
                        <img src="<?php echo $grid_image_array[1]['url']; ?>" alt="<?php echo $grid_image_array[1]['alt']; ?>">
                    <?php endif; ?>

                </div><!-- col -->
                <div class="col-sm-4">

                    <?php if( $image_video_array[2] == "Yes" ): ?>
                        <a data-toggle="modal" data-target="#myModal2" href="#">
                            <img src="<?php echo $grid_image_array[2]['url']; ?>" alt="<?php echo $grid_image_array[2]['alt']; ?>">
                        </a>
                    <?php else: ?>
                        <img src="<?php echo $grid_image_array[2]['url']; ?>" alt="<?php echo $grid_image_array[2]['alt']; ?>">
                    <?php endif; ?>

                </div><!-- col -->
                <div class="col-sm-4">
                    
                    <?php if( $image_video_array[3] == "Yes" ): ?>
                        <a data-toggle="modal" data-target="#myModal2" href="#">
                            <img src="<?php echo $grid_image_array[3]['url']; ?>" alt="<?php echo $grid_image_array[3]['alt']; ?>">
                        </a>
                    <?php else: ?>
                        <img src="<?php echo $grid_image_array[3]['url']; ?>" alt="<?php echo $grid_image_array[3]['alt']; ?>">
                    <?php endif; ?>

                </div><!-- col -->
            </div><!-- row -->
            <div class="row">
                <div class="col-sm-8">

                    <?php if( $image_video_array[4] == "Yes" ): ?>
                        <a data-toggle="modal" data-target="#myModal2" href="#">
                            <img src="<?php echo $grid_image_array[4]['url']; ?>" alt="<?php echo $grid_image_array[4]['alt']; ?>">
                        </a>
                    <?php else: ?>
                        <img src="<?php echo $grid_image_array[4]['url']; ?>" alt="<?php echo $grid_image_array[4]['alt']; ?>">
                    <?php endif; ?>
                    
                </div><!-- col -->
                <div class="col-sm-4">

                    <?php if( $image_video_array[5] == "Yes" ): ?>
                        <a data-toggle="modal" data-target="#myModal2" href="#">
                            <img src="<?php echo $grid_image_array[5]['url']; ?>" alt="<?php echo $grid_image_array[5]['alt']; ?>">
                        </a>
                    <?php else: ?>
                        <img src="<?php echo $grid_image_array[5]['url']; ?>" alt="<?php echo $grid_image_array[5]['alt']; ?>">
                    <?php endif; ?>
                    
                </div><!-- col -->
            </div><!-- row -->
        </div><!-- work images -->
    </div><!-- container -->
</section><!-- work -->


<section id="work-text">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <p><?php echo $about ?></p>
            </div><!-- col -->
        </div><!-- row -->
    </div><!-- container -->
</section><!-- work -->


<?php if (!empty($video_embed_code_array)) : ?>

    <?php for ($i = 1; $i <= $numVideos; $i++): ?>    
        <div id="myModal<?php echo $i ?>" class="modal fade" role="dialog">
            <div class="modal-dialog">    
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Video</h4>
                    </div>
                    <div class="modal-body">
                        <iframe src=" <?php echo $video_embed_code_array[$i]; ?>" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>    
            </div>
        </div>    
    <?php endfor; ?>

<?php endif; ?>


<?php get_template_part( 'template-parts/content', 'otherwork' ); ?>


<?php get_template_part( 'template-parts/content', 'instagram' ); ?>


<?php get_footer(); ?>