<?php 

$hero_image		= get_field('carousel_image_1');

 ?>

<div style="background: url(<?php echo $hero_image['url']; ?>) no-repeat center center; background-size: cover;" class="hero-background">

	<!-- Scroll btn -->
	<div class="scroll-dwn-button">
	    <a href="#"><img width="80" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/scroll-down-btn.png" alt="Scroll down button"></a>
	</div><!-- Scroll btn -->

</div>
