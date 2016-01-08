<?php

	/*
		Template Name: About us
	*/

	get_header(); 

	// Advanced Custom Fields

	// Text boxes
	$text_box_1            = get_field('text_box_1');
	$text_box_2            = get_field('text_box_2');
	$text_box_3            = get_field('text_box_3');
	$text_box_4            = get_field('text_box_4');
	$text_box_5            = get_field('text_box_5');
	$text_box_6            = get_field('text_box_6');

	$main_title				= get_field('main_text_box_title');
	$mail_para				= get_field('main_text_box_para');

get_template_part( 'template-parts/content', 'whitebackscreen' );

?>

<div class="container">
    <hr>
</div><!-- Line break -->

<section id="about-boxes">
	<div id="">
		<div class="container">
		    <div class="row">
		        <div class="col-md-4">
		            <div class="box-border-grey ">
		            	<p>
		            		<?php echo $text_box_1 ?>
		            	</p>
		            </div>
		        </div><!-- col -->
		        <div class="col-md-4">
		            <div class="box-border-grey">
		            	<p>
		            		<?php echo $text_box_2 ?>
		            	</p>
		            </div>
		        </div><!-- col -->
		        <div class="col-md-4">
		            <div class="box-border-grey">
		            	<p>
		            		<?php echo $text_box_3 ?>
		            	</p>
		            </div>
		        </div><!-- col -->
		    </div><!-- row -->
		    <div class="row">
		        <div class="col-md-4">
		            <div class="box-border-grey ">
		            	<p>
		            		<?php echo $text_box_4 ?>
		            	</p>
		            </div>
		        </div><!-- col -->
		        <div class="col-md-4">
		            <div class="box-border-grey">
		            	<p>
		            		<?php echo $text_box_5 ?>
		            	</p>
		            </div>
		        </div><!-- col -->
		        <div class="col-md-4">
		            <div class="box-border-grey">
		            	<p>
		            		<?php echo $text_box_6 ?>
		            	</p>
		            </div>
		        </div><!-- col -->
		    </div><!-- row -->
		</div><!-- container -->
	</div><!-- text slider -->
</section><!-- about boxes -->
 
<?php 

	get_template_part( 'template-parts/content', 'borderbox' );

	get_footer(); 

?>
