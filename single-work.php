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


// Video embeds
$image_1_video      = get_field('image_1_do_you_wish_to_add_a_video');
$video_embed_code_1 = get_field('video_embed_code_1');

$image_2_video      = get_field('image_2_do_you_wish_to_add_a_video');
$video_embed_code_2 = get_field('video_embed_code_2');

$image_3_video      = get_field('image_3_do_you_wish_to_add_a_video');
$video_embed_code_3 = get_field('video_embed_code_3');

$image_4_video      = get_field('image_4_do_you_wish_to_add_a_video');
$video_embed_code_4 = get_field('video_embed_code_4');

$image_5_video      = get_field('image_5_do_you_wish_to_add_a_video');
$video_embed_code_5 = get_field('video_embed_code_5');


// General
$about              = get_field('about');
$subtitle           = get_field('subtitle');


get_template_part( 'template-parts/content', 'carousel' );

?>

<!-- Page Content -->
<!-- Work -->
<section id="our-work">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 section-title">
                <h3><?php echo get_the_title(); ?></h3>
            </div><!-- title -->
        </div><!-- row -->
        <div class="work-images">
            <div class="row">
                <div class="col-sm-4">

                    <?php if( $image_1_video == "Yes" ): ?>
                        <a data-toggle="modal" data-target="#myModal1" href="#">
                            <img src="<?php echo $grid_image_array[1]['url']; ?>" alt="<?php echo $grid_image_array[1]['alt']; ?>">
                        </a>
                    <?php else: ?>
                        <img src="<?php echo $grid_image_array[1]['url']; ?>" alt="<?php echo $grid_image_array[1]['alt']; ?>">
                    <?php endif; ?>

                </div><!-- col -->
                <div class="col-sm-4">

                    <?php if( $image_2_video == "Yes" ): ?>
                        <a data-toggle="modal" data-target="#myModal2" href="#">
                            <img src="<?php echo $grid_image_array[2]['url']; ?>" alt="<?php echo $grid_image_array[2]['alt']; ?>">
                        </a>
                    <?php else: ?>
                        <img src="<?php echo $grid_image_array[2]['url']; ?>" alt="<?php echo $grid_image_array[2]['alt']; ?>">
                    <?php endif; ?>

                </div><!-- col -->
                <div class="col-sm-4">
                    
                    <?php if( $image_3_video == "Yes" ): ?>
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

                    <?php if( $image_4_video == "Yes" ): ?>
                        <a data-toggle="modal" data-target="#myModal2" href="#">
                            <img src="<?php echo $grid_image_array[4]['url']; ?>" alt="<?php echo $grid_image_array[4]['alt']; ?>">
                        </a>
                    <?php else: ?>
                        <img src="<?php echo $grid_image_array[4]['url']; ?>" alt="<?php echo $grid_image_array[4]['alt']; ?>">
                    <?php endif; ?>
                    
                </div><!-- col -->
                <div class="col-sm-4">

                    <?php if( $image_5_video == "Yes" ): ?>
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


<!-- Modal -->
<div id="myModal1" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Video</h4>
            </div>
            <div class="modal-body">
                <iframe src=" <?php echo $video_embed_code_array[1]; ?>" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>

<!-- Modal 2 -->
<div id="myModal2" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Video</h4>
            </div>
            <div class="modal-body">
                <iframe src=" <?php echo $$video_embed_code_array[2]; ?>" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>

<!-- Modal 3 -->
<div id="myModal3" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Video</h4>
            </div>
            <div class="modal-body">
                <iframe src=" <?php echo $$video_embed_code_array[3]; ?>" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>

<!-- Modal 4 -->
<div id="myModal4" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Video</h4>
            </div>
            <div class="modal-body">
                <iframe src=" <?php echo $$video_embed_code_array[4]; ?>" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>

<!-- Modal 5 -->
<div id="myModal5" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Video</h4>
            </div>
            <div class="modal-body">
                <iframe src=" <?php echo $$video_embed_code_array[5]; ?>" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>



<?php get_template_part( 'template-parts/content', 'otherwork' ); ?>


<?php get_template_part( 'template-parts/content', 'instagram' ); ?>


<?php get_footer(); ?>