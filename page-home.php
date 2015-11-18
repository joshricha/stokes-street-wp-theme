<?php
/*
	Template Name: Home Page
*/

get_header(); 

get_template_part( 'template-parts/content', 'carousel' ); 

?>


<!-- Scroll btn -->
<div class="scroll-dwn-button">
    <a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/scroll-down-btn.png" alt="Scroll down button"></a>
</div><!-- Scroll btn -->


<?php get_template_part( 'template-parts/content', 'work' ); ?>


<div class="container">
    <hr>
</div><!-- Line break -->


<?php get_template_part( 'template-parts/content', 'textslider' ); ?>


<section id="text-box">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="box-outline">
                    <p>WE ARE STOKES STREET STUDIO AND WE ARE AWESOME</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur veritatis nam quod obcaecati voluptas molestias perspiciatis tenetur nesciunt, dicta ab, aut beatae vitae reprehenderit laudantium at iste, harum hic architecto.</p>
                </div><!-- box outline -->
            </div><!-- col -->
        </div><!-- row -->
    </div><!-- container -->
</section><!-- text box -->


<?php get_template_part( 'template-parts/content', 'instagram' ); ?>


<?php get_footer(); ?>
