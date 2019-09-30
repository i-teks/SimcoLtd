<style>
#home-slider {
    /*
    position: relative;
    max-height: 800px;
    overflow: hidden;
    width: 100%;
    padding-bottom: 67%;
    */
    position:relative; width:100%; height:auto; background-color: rgba(0,0,0,100); overflow:hidden; margin-bottom:1.5rem; margin-top:0.5rem;
}
#home-slider #slider {
  /*
    display: inline-block;
    height: 100%;
    position: absolute;
    bottom: 0;
    */
}
.slide img {
  height: 437px;
  width: 100%;
  object-fit: cover;
}
/**
 * Break point below Bootstrap medium width
 */
 @media (max-width: 991px) {
   .slide img {
     height: 380px;
   }
 }
 @media (max-width: 767px) {
   .slide img {
     height: 290px;
   }
 }
@media (max-width: 575px) {
  .slide img {
    height: 240px;
  }
}
</style>
<div id="home-slider">

<!-- Begin Slider -->
<div id="slider">

  <!-- Slider Tab 1 -->
  <div id="tab_1" class="slide slide-fade">
    <a href="/products/electronic-modules" class="slider-img-link"><img src="/assets/images/slider/slider-products-electronic-modules.jpg" alt="" border="0" /></a>
  </div>

  <!-- Slider Tab 2 -->
  <div id="tab_2" class="slide slide-fade">
    <a href="/products/wire-harness-assemblies" class="slider-img-link"><img src="/assets/images/slider/slider-products-wire-harness-assemblies.jpg" alt="" border="0" /></a>
  </div>

  <!-- Slider Tab 3 -->
  <div id="tab_3" class="slide slide-fade">
    <a href="/products/instrument-clusters" class="slider-img-link"><img src="/assets/images/slider/slider-products-instrument-clusters.jpg" alt="" border="0" /></a>
  </div>

  <!-- Slider Tab 4 -->
  <div id="tab_4" class="slide slide-fade">
    <a href="/products/graphic-overlays" class="slider-img-link"><img src="/assets/images/slider/slider-products-graphic-overlays.jpg" alt="" border="0" /></a>
  </div>

  <!-- Slider Tab 5 -->
  <div id="tab_5" class="slide slide-fade">
    <a href="/products/coil-bobbin-assemblies" class="slider-img-link"><img src="/assets/images/slider/slider-products-coil-bobbin-assemblies.jpg" alt="" border="0" /></a>
  </div>

  <!-- Slider Tab 6 -->
    <div id="tab_6" class="slide slide-fade">
      <a href="/industries/specialty" class="slider-img-link"><img src="/assets/images/slider/slider-industries-specialty-oem.jpg" alt="" border="0" /></a>
    </div>

  <!-- Next and Previous Arrow Buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>

  <div class="col-12 col-lg-12" style="position:absolute; bottom:0; padding: 20px; background-color: rgba(0,0,0,0.5)/*background-image: linear-gradient(to top, rgba(0,0,0,0.8), rgba(0,0,0,0.0));*/">
    <p style="color:#ffffff; text-align:center; margin:0;">Text will go here instead...</p>
  </div>

  <!-- Slider Nav -->
  <div class="slider-dots">
    <span class="dot" onclick='currentSlide(1)'>1</span>
    <span class="dot" onclick='currentSlide(2)'>2</span>
    <span class="dot" onclick='currentSlide(3)'>3</span>
    <span class="dot" onclick='currentSlide(4)'>4</span>
    <span class="dot" onclick='currentSlide(5)'>5</span>
    <span class="dot" onclick='currentSlide(6)'>6</span>
  </div>

</div>
<!-- End Slider -->

</div>
