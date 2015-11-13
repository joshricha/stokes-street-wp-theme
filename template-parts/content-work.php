<?php  

// Custom Posts
$subtitle       = get_field('subtitle');

?>

<div class="row">
<?php $loop = new WP_Query( array('post_type' => 'work', 'orderby' => 'post_id', 'order' => 'ASC') ); ?>

<?php while( $loop->have_posts() ) : $loop->the_post(); ?>

<div class="col-md-4 col-sm-4">
    <div class="work-blocks">
        <a href="<?php echo get_post_permalink(); ?>" class="overlay-wrapper" target="_blank">
            <div class="overlay-text">
                <h3><?php the_title(); ?><br>
                <span class="work-subtitle"><?php echo $subtitle[0]; ?></span></h3>
            </div>
            <img class="img-hover" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/work/mfg.jpg" alt="MFG">
        </a>
    </div><!-- work blocks -->     
</div><!-- col-md-4 -->

<?php endwhile; wp_reset_query(); ?>





<div class="col-md-4 col-sm-4">
    <div class="work-blocks">
        <a href="case-study.html" class="overlay-wrapper">
            <div class="overlay-text">
                <h3>GETTING A SCHOOLING<br>
                <span class="work-subtitle">MATHEW FLIDERS GIRL COLLEGE REBRANDING</span></h3>
            </div>
            <img class="img-hover" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/work/mfg.jpg" alt="MFG">
        </a>
    </div><!-- work blocks -->     
</div><!-- col-md-4 -->
<div class="col-md-4 col-sm-4">
    <div class="work-blocks">
        <a href="#" class="overlay-wrapper">
            <div class="overlay-text">
                <h3>RETHINKING FOOD & WINE AWARDS<br>
                <span class="work-subtitle">RASV EPICURE AWARDS BRANDING SUITE</span></h3>
            </div>
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/work/distilled-spirits.jpg" alt="Distilled Spirits">
        </a>
    </div><!-- work blocks -->   
</div><!-- col-md-4 -->
<div class="col-md-4 col-sm-4">
    <div class="work-blocks">
        <a href="#" class="overlay-wrapper">
            <div class="overlay-text">
                <h3>CREATING HISTORY FROM SCRATCH<br>
                <span class="work-subtitle">MANDALA WINES BRAND CREATION</span></h3>
            </div>
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/work/mandala.jpg" alt="Mandala">
        </a>
    </div><!-- work blocks -->   
</div><!-- col-md-4 -->
</div><!-- row -->
<div class="row">
<div class="col-md-4 col-sm-4">
    <div class="work-blocks">
        <a href="#" class="overlay-wrapper">
            <div class="overlay-text">
                <h3>GVING A BOOK FOR INSTITUTION<br>
                <span class="work-subtitle">ST KILDA FESTIVAL FUNDRAISER CAMPAIGN</span></h3>
            </div>
            <img class="img-hover" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/work/st-kilda-festival.jpg" alt="St Kilda Festival">
        </a>
    </div><!-- work blocks -->     
</div><!-- col-md-4 -->
<div class="col-md-4 col-sm-4">
    <div class="work-blocks">
        <a href="#" class="overlay-wrapper">
            <div class="overlay-text">
                <h3>STRIPPING BACK THE SUPERFLUOUS<br>
                <span class="work-subtitle">HOMEGROUND ANNUAL REPORT</span></h3>
            </div>
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/work/homeground-annual-report.jpg" alt="Distilled Spirits">
        </a>
    </div><!-- work blocks -->   
</div><!-- col-md-4 -->
<div class="col-md-4 col-sm-4">
    <div class="work-blocks">
        <a href="#" class="overlay-wrapper">
            <div class="overlay-text">
                <h3>SHOWING REAL RESULTS<br>
                <span class="work-subtitle">MATHEW FLINDERS GIRLS COLLEGE REBRANDING</span></h3>
            </div>
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/work/mathew-flinders.jpg" alt="Mandala">
        </a>
    </div><!-- work blocks -->   
</div><!-- col-md-4 -->



<div class="row">
<div class="col-md-4 col-sm-4">
    <div class="work-blocks">
        <a href="#" class="overlay-wrapper">
            <div class="overlay-text">
                <h3>GVING A BOOK FOR INSTITUTION<br>
                <span class="work-subtitle">ST KILDA FESTIVAL FUNDRAISER CAMPAIGN</span></h3>
            </div>
            <img class="img-hover" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/work/wine-week.jpg" alt="St Kilda Festival">
        </a>
    </div><!-- work blocks -->     
</div><!-- col-md-4 -->
<div class="col-md-4 col-sm-4">
    <div class="work-blocks">
        <a href="#" class="overlay-wrapper">
            <div class="overlay-text">
                <h3>STRIPPING BACK THE SUPERFLUOUS<br>
                <span class="work-subtitle">HOMEGROUND ANNUAL REPORT</span></h3>
            </div>
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/work/monarch-pharmacy.jpg" alt="Distilled Spirits">
        </a>
    </div><!-- work blocks -->   
</div><!-- col-md-4 -->
<div class="col-md-4 col-sm-4">
    <div class="work-blocks">
        <a href="#" class="overlay-wrapper">
            <div class="overlay-text">
                <h3>SHOWING REAL RESULTS<br>
                <span class="work-subtitle">MATHEW FLINDERS GIRLS COLLEGE REBRANDING</span></h3>
            </div>
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/work/wlsn-rebrand.jpg" alt="Mandala">
        </a>
    </div><!-- work blocks -->   
</div><!-- col-md-4 -->
</div><!-- row -->