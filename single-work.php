<?php get_header();

// Advanced Custom Fields

// Grid images
$grid_image_1       = get_field('image_1');
$grid_image_2       = get_field('image_2');
$grid_image_3       = get_field('image_3');
$grid_image_4       = get_field('image_4');
$grid_image_5       = get_field('image_5');

$about              = get_field('about');
$subtitle           = get_field('subtitle');


get_template_part( 'template-parts/content', 'carousel' );

?>

<!-- Page Content -->
<!-- Work -->
<section id="work">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 section-title">
                <h3>United Jewish Education Board</h3>
            </div><!-- title -->
        </div><!-- row -->
        <div class="work-images">
            <div class="row">
                <div class="col-sm-4">
                    <img src="<?php echo $grid_image_1['url']; ?>" alt="<?php echo $grid_image_1['alt']; ?>">
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


<?php get_template_part( 'template-parts/content', 'otherwork' ); ?>


<?php get_template_part( 'template-parts/content', 'instagram' ); ?>


<?php get_footer(); ?>