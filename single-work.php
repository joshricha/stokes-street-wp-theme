<?php get_header();

// Advanced Custom Fields

// Grid images or videos
$grid_image_1       = get_field('image_1');
$grid_image_2       = get_field('image_2');
$grid_image_3       = get_field('image_3');
$grid_image_4       = get_field('image_4');
$grid_image_5       = get_field('image_5');

// Video embeds
$image_1_video      = get_field('image_1_do_you_wish_to_add_a_video');
$video_embed_code_1 = get_field('video_embed_code_1');

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
                        <a data-toggle="modal" data-target="#myModal" href="#">
                            <img src="<?php echo $grid_image_1['url']; ?>" alt="<?php echo $grid_image_1['alt']; ?>">
                        </a>
                    <?php else: ?>
                        <img src="<?php echo $grid_image_1['url']; ?>" alt="<?php echo $grid_image_1['alt']; ?>">
                    <?php endif; ?>
                </div><!-- col -->
                <div class="col-sm-4">
                    <img src="<?php echo $grid_image_2['url']; ?>" alt="<?php echo $grid_image_2['alt']; ?>">
                </div><!-- col -->
                <div class="col-sm-4">
                    <img src="<?php echo $grid_image_3['url']; ?>" alt="<?php echo $grid_image_3['alt']; ?>">
                </div><!-- col -->
            </div><!-- row -->
            <div class="row">
                <div class="col-sm-8">
                    <img src="<?php echo $grid_image_4['url']; ?>" alt="<?php echo $grid_image_4['alt']; ?>">
                </div><!-- col -->
                <div class="col-sm-4">
                    <img src="<?php echo $grid_image_5['url']; ?>" alt="<?php echo $grid_image_5['alt']; ?>">
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
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Video</h4>
      </div>
      <div class="modal-body">
        <iframe src=" <?php echo $video_embed_code_1; ?>" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
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