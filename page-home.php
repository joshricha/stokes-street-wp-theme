<?php

	/*
		Template Name: Home Page
	*/

	get_header(); 

	get_template_part( 'template-parts/content', 'carousel' );

	get_template_part( 'template-parts/content', 'work' );

?>


<div class="container">
    <hr>
</div><!-- Line break -->


<?php 

	get_template_part( 'template-parts/content', 'textslider' );

	get_template_part( 'template-parts/content', 'borderbox' );

	get_template_part( 'template-parts/content', 'instagram' );

	get_footer(); 

?>
