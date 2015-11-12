<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Stokes_Street
 */

?>

<footer>
    <div class="container">
        <!-- Footer -->
        <div class="row">
            <div class="col-md-4">
                <h3>Contact</h3>
                <address>
                    <p><b>Stokes Street Studio</b><br> 
                    42 Stokes Street Port Melbourne <br>
                    Victoria Australia 3207 T 613 9646 0100 <br>
                    <a href="mailto:sayhello@stokesstreetstudio.com">sayhello@stokesstreetstudio.com</a></p>
                </address>
            </div>
            <div class="col-md-8">
                <h3>Subscribe</h3>
                <p>Want newsletter updates and stories about what we've been doing?</p>
                <form class="footer-subscribe" role="form">
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" placeholder="NAME ">  
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" placeholder="EMAIL">
                    </div>
                    <button type="submit" class="btn btn-default">SIGN UP</button>
                </form>
            </div><!-- col -->
        </div><!-- row -->
        <!-- /.row -->
    </div>
    <!-- /.container -->
</footer>

<?php wp_footer(); ?>

    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/instafeed.min.js"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-backstretch/2.0.4/jquery.backstretch.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.slick/1.5.8/slick.min.js"></script>

</body>
</html>
