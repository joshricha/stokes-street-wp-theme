<?php

// Advanced Custom Fields

// Text slider
$slide_1_quote              = get_field('slide_1_quote');
$slide_1_quote_2            = get_field('slide_1_quote_2');

$slide_2_quote_1            = get_field('slide_2_quote_1');
$slide_2_quote_1_percentage = get_field('slide_2_quote_1_percentage');
$slide_2_quote_2            = get_field('slide_2_quote_2');
$slide_2_quote_2_percentage = get_field('slide_2_quote_2_percentage');

$slide_3_quote              = get_field('slide_3_quote');
$slide_3_quote_1_percentage = get_field('slide_3_quote_1_percentage');
$slide_3_quote_2            = get_field('slide_3_quote_2');
$slide_3_quote_2_percentage = get_field('slide_3_quote_1_percentage');






// Carousel titles
$image_1_title         = get_field('image_1_title');
$image_2_title         = get_field('image_2_title');
$image_3_title         = get_field('image_3_title');
$image_4_title         = get_field('image_4_title');
$image_5_title         = get_field('image_5_title');

?>

<section id="text-slider">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <p class = "thecontent"><?php echo $slide_1_quote; ?></p>
                <p class = "thecontent" style = "display: none;"><?php echo $slide_1_quote_2; ?></p>
            </div><!-- col -->
            <div class="col-md-4">
                <p class = "thecontent2"><?php echo $slide_2_quote_1; ?><br><br>
                <span class="statistic"><?php echo $slide_2_quote_1_percentage; ?></span></p>
                <p class="thecontent2"  style = "display: none;"><?php echo $slide_2_quote_2; ?><br><br>
                <span class="statistic"><?php echo $slide_2_quote_2_percentage; ?></span></p>
            </div><!-- col -->
            <div class="col-md-4">
                <p class = "thecontent3"><?php echo $slide_3_quote; ?><br><br>
                <span class="statistic"><?php echo $slide_3_quote_1_percentage; ?></span></p>
                <p class="thecontent3"  style = "display: none;"><?php echo $slide_3_quote_2; ?><br><br>
                <span class="statistic"><?php echo $slide_3_quote_2_percentage; ?></span></p>
            </div><!-- col -->
        </div><!-- row -->
    </div><!-- container -->
</section><!-- text slider -->