<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 *
 * @package WordPress
 * @subpackage Wp_Bootstrap
 * @since Wp Bootstrap 1.0
 */
get_header();
?>
 <!-- Swiper -->
 <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide" > <img src="<?php echo get_stylesheet_directory_uri(); ?>/sgk.png" alt=""></div>
    <!--   <div class="swiper-slide"><img src="<?php echo get_stylesheet_directory_uri(); ?>/sgk.jpg" alt=""></div>
      <div class="swiper-slide"><img src="<?php echo get_stylesheet_directory_uri(); ?>/sgk.png" alt=""></div> -->
      
    </div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>

  <!-- Swiper JS -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/swiper/package/js/swiper.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>
<?php

if ( have_posts() ) :
while ( have_posts() ) : the_post(); ?>
 <article class="post">
 <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
<?php the_content() ?>
 </article>
 
<?php endwhile;
else :
echo '<p>There are no posts!</p>';
endif;
get_footer();

?>
