<?php get_header();

// Advanced Custom Fields

// Grid images
$grid_image_1       = get_field('image_1');
$grid_image_2       = get_field('image_2');
$grid_image_3       = get_field('image_3');
$grid_image_4       = get_field('image_4');
$grid_image_5       = get_field('image_5');

$subtitle       = get_field('subtitle');


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
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis ad, dolorem et quae, aliquam debitis magni perspiciatis obcaecati pariatur quasi error at cupiditate voluptatibus voluptas repellat eos fugit ullam numquam.</p>
            </div><!-- col -->
        </div><!-- row -->
    </div><!-- container -->
</section><!-- work -->


<section id="other-work">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 section-title">
                <h3>Explore other Work</h3>
            </div><!-- title -->
            <div class="col-sm-4">
                <a href="">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/work/mfg.jpg" alt="">
                    <h3>MATHEW FLIDERS GIRLS COLLEGE</h3>
                </a>
            </div><!-- col -->
            <div class="col-sm-4">
                <a href="">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/work/en-vie.jpg" alt="">
                    <h3>HELEN'S HIL EN VIE SPARKLING</h3>
                </a>
            </div><!-- col -->
            <div class="col-sm-4">
                <a href="">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/work/uj.jpg" alt="">
                    <h3>UNITED JEWISH EDUCATION BOARD</h3>
                </a>
            </div><!-- col -->
        </div><!-- row -->
    </div><!-- container -->
</section><!-- other work section -->


<section id="instagram-feed">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 section-title">
                <h3>Follow us on Instagram<img class="icon-instagram" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/instagram.png" alt="Instagram"></h3>
            </div><!-- Section title col -->
            <div id="instafeed">
                
            </div><!-- instafeed -->
        </div><!-- row -->
    </div><!-- container -->
</section><!-- instagram feed -->

<?php get_footer(); ?>