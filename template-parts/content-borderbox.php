<?php

// Advanced Custom Fields

$header          = get_field('header');
$paragraph       = get_field('paragraph');

?>

<section id="text-box">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="box-outline">
                    <h3><?php echo $header; ?></h3>
                    <p><?php echo $paragraph; ?></p>
                </div><!-- box outline -->
            </div><!-- col -->
        </div><!-- row -->
    </div><!-- container -->
</section><!-- text box -->