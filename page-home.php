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


<section id="text-slider">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <p class = "thecontent">"IT WAS SUCH A PLEASURE WORKING WITH STOKES STREET ON SPECTROSPECTIVE. THEY SURPASSED ALL EXPECATIONS. WE WERE GOBSMACKED, FRANKLY."</p>
                <p class = "thecontent" style = "display: none;">"IT WAS SUCH A PLEASURE WORKING WITH STOKES STREET ON SPECTROSPECTIVE. THEY SURPASSED ALL EXPECATIONS. WE WERE GOBSMACKED, FRANKLY."</p>
            </div><!-- col -->
            <div class="col-md-4">
                <p class = "thecontent2">SSS SURPASSED THE SET ENTRY KPI BY OVER <br><br>
                <span class="statistic">200%</span></p>
                <p class="thecontent2"  style = "display: none;">SSS SURPASSED THE SET ENTRY KPI BY OVER <br><br>
                <span class="statistic">200%</span></p>

            </div><!-- col -->
            <div class="col-md-4">
                <p class = "thecontent3">SSS SURPASSED THE SET ENTRY KPI BY OVER <br><br>
                <span class="statistic">200%</span></p>
                <p class="thecontent3"  style = "display: none;">SSS SURPASSED THE SET ENTRY KPI BY OVER 
                <span class="statistic">200%</span></p>
            </div><!-- col -->
        </div><!-- row -->
    </div><!-- container -->
</section><!-- text slider -->


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
