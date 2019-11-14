<div class="container">
	<?php
error_reporting(0);
ini_set('display_errors', 0);

$swiper = '';

$path = get_template_directory().'/files/swiper.txt';

if(!file_exists($path)){
    defaultSwiper();
}
else{
    $swiper = file_get_contents($path);
    echo do_shortcode($swiper);
}

//print swiper default
function defaultSwiper(){
    $images1 =  "womens.jpg";
    $images2 =  "exclusive-range-of-jewellery-2.jpg";

   //  echo "<div class=\"wp_swiper_slider_wrapper swiper-container-initialized swiper-container-horizontal\" style=\"position: relative; overflow: hidden; \"><div class=\"swiper-wrapper\" style=\"transform: translate3d(-1855px, 0px, 0px); transition-duration: 0ms;\">
			// <img class=\"swiper-slide swiper-slide-prev\" src='wp-content/themes/C-Theme/images/$images1' style=\"width: 1855px;\">
			// <img class=\"swiper-slide swiper-slide-active\" src='wp-content/themes/C-Theme/images/$images2' style=\"width: 1855px;\"></div><span class=\"swiper-notification\" aria-live=\"assertive\" aria-atomic=\"true\"></span></div>";

    echo do_shortcode('[wp_swiper id=66]');
}


?>
</div>
