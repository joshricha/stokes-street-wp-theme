<?php
/*
	Template Name: Home Page
*/

get_header(); 

get_template_part( 'template-parts/content', 'carousel' ); 

?>


<?php get_template_part( 'template-parts/content', 'work' ); ?>


<div class="container">
    <hr>
</div><!-- Line break -->


<?php get_template_part( 'template-parts/content', 'textslider' ); ?>


<?php get_template_part( 'template-parts/content', 'borderbox' ); ?>


<?php get_template_part( 'template-parts/content', 'instagram' ); ?>


<?php get_footer(); ?>
