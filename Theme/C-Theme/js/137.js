
$(document).ready(function () {
    (function($){
      var swiper = new Swiper('.swiper-container', {
        slidesPerView: 5,
        spaceBetween: 2,
        slidesPerGroup: 2,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
      });
    })(jQuery);
});
