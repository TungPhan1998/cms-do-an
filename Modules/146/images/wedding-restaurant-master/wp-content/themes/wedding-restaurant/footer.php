<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wedding_Restaurant
 */

?>

<footer class="block">
    <div class="footer-top color-f">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="<?php echo get_template_directory_uri() ?>/images/logo-fooddy-w.png" alt="image"
                        class="m-b-25">
                    <p class="m-b-10">1418 Riverwood Drive, Suite 3845 Cottonwood</p>
                    <p class="m-b-10">0123 456 789 - 0987 555 666</p>
                    <p class="m-b-10">food@gmail.com</p>
                </div>
                <div class="col-md-4">
                    <h4 class="title">Newsletter</h4>
                    <form class="m-t-5 form-lg">
                        <div class="form-group">
                            <input type="text" class="form-control no-border" placeholder="Enter your email">
                        </div>
                        <button type="submit" class="btn m-t-0">Subscribe</button>
                    </form>
                </div>
                <div class="col-md-3 f-right">
                    <h4 class="title">gallery</h4>
                    <div class="row row-3">
                        <div class="col-4">
                            <div class="card">
                                <img src="<?php echo get_template_directory_uri() ?>/images/restaurant-939434_960_720.jpg"
                                    alt="image">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card">
                                <img src="<?php echo get_template_directory_uri() ?>/images/seafood-2187507_960_720.jpg"
                                    alt="image">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card">
                                <img src="<?php echo get_template_directory_uri() ?>/images/stefan-johnson-124186.jpg"
                                    alt="image">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card">
                                <img src="<?php echo get_template_directory_uri() ?>/images/salad-2068210_960_720.jpg"
                                    alt="image">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card">
                                <img src="<?php echo get_template_directory_uri() ?>/images/restaurant-1092728_960_720.jpg"
                                    alt="image">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card">
                                <img src="<?php echo get_template_directory_uri() ?>/images/webvilla-293.jpg"
                                    alt="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-0">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <p class="text-uppercase f-11 p-t-15 p-b-15">2019 Designed by <a
                            href="http://templatecs.com/demo/template/deliki/html/home.html#" class="f-11">them3x</a> .
                        All rights reserved</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- jQuery -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-2.2.4.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo get_template_directory_uri(); ?>/js/popper.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<!-- Magnific-popup -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.magnific-popup.min.js"></script>
<!-- Owl-coursel -->
<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
<!-- Script -->
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
<?php wp_footer(); ?>
</body>

</html>