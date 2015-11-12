<?php
/*
	Template Name: Home Page
*/

get_header(); ?>

<!-- Full Page Image Background Carousel Header -->
<section id="myCarousel" class="carousel slide">

    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>
    <!-- Wrapper for Slides -->
    <div class="carousel-inner">
        <div class="item active">
            <!-- Set the first background image using inline CSS below. -->
            <div class="fill" style="background-image:url(<?php bloginfo('stylesheet_directory'); ?>/assets/img/bg.jpg); background-size:cover;"></div>
            <div class="carousel-caption">
                <h2>Tales from the Spectrum</h2>
            </div>
        </div>
        <div class="item">
            <!-- Set the second background image using inline CSS below. -->
            <div class="fill" style="background-image:url(<?php bloginfo('stylesheet_directory'); ?>/assets/img/bg.jpg);"></div>
            <div class="carousel-caption">
                <h2>Caption 2</h2>
            </div>
        </div>
        <div class="item">
            <!-- Set the third background image using inline CSS below. -->
            <div class="fill" style="background-image:url(<?php bloginfo('stylesheet_directory'); ?>/assets/img/bg.jpg);"></div>
            <div class="carousel-caption">
                <h2>Caption 3</h2>
            </div>
        </div>
        <div class="item">
            <!-- Set the third background image using inline CSS below. -->
            <div class="fill" style="background-image:url(<?php bloginfo('stylesheet_directory'); ?>/assets/img/bg.jpg);"></div>
            <div class="carousel-caption">
                <h2>Caption 4</h2>
            </div>
        </div>
        <div class="item">
            <!-- Set the third background image using inline CSS below. -->
            <div class="fill" style="background-image:url(<?php bloginfo('stylesheet_directory'); ?>/assets/img/bg.jpg);"></div>
            <div class="carousel-caption">
                <h2>Caption 5</h2>
            </div>
        </div>
    </div>
</section><!-- Carousel -->


<!-- Scroll btn -->
<div class="scroll-dwn-button">
    <a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/scroll-down-btn.png" alt="Scroll down button"></a>
</div><!-- Scroll btn -->

<!-- Page Content -->
<section id="our-work">
    <div class="container">
        <div class="row">
            <!-- Our work -->
            <div class="col-lg-12 section-title">
                <h3>Some of our Work</h3>
            </div><!-- Our work -->
        </div><!-- row -->
        <div class="work-grid">
            <div class="row">
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
            </div><!-- row -->
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
        </div><!-- work grid -->
    </div><!-- container -->
</section><!-- our work -->


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
