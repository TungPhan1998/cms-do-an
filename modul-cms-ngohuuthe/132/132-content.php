<!-- Swiper -->
<div class="swiper-container">
  <div class="swiper-wrapper">
    <div class="swiper-slide"><img src="images/slide_1.png" alt="" class="img-responsive">
      <div class="content-container-left">
        <div class="conten">
            <h2>80% off for select items</h2>
            <h3>Jeans mega sale</h3>
            <a href="#"><button>Shop Now</button></a>
        </div>  
      </div>
    </div>
    <div class="swiper-slide"><img src="images/slide_2.png" alt="" class="img-responsive">
      <div class="content-container-right">
          <div class="conten">
              <h2>up to 70% off</h2>
              <h3>women's clothing</h3>
              <a href="#"><button>Shop Now</button></a>
          </div>  
        </div>
    </div>
  </div>
  <!-- Add Pagination -->
  <div class="swiper-pagination"></div>
</div>
<script>
var swiper = new Swiper('.swiper-container', {
    spaceBetween: 30,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
  });
</script>