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
#slide-title {
  text-transform: uppercase;
  position:absolute;
  top:0;
  left:0;
  padding:20px 0 0 20px;
}
#slide-title h1 {
  color: #fff;
  /* text-align: center; */
  margin: 0;
  padding: 8px 0 0 10px;
  line-height: 2.5rem;
  text-shadow: 1px 1px 2px rgba(0,0,0,.65);
}
#slide-desc {
  position: absolute;
  bottom: 0;
  padding: 10px;
  background-color: rgba(0,0,0,0.5)
  /*background-image: linear-gradient(to top, rgba(0,0,0,0.8), rgba(0,0,0,0.0));*/
}
#slide-desc p {
  color: #fff;
  text-align: center;
  margin: 0;
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
   .slide img { height: 380px; }
 }
 @media (max-width: 767px) {
   .slide img { height: 290px; }
   #slide-desc { display: none; }
 }
@media (max-width: 575px) {
  .slide img { height: 240px; }
  #slide-desc { display: none; }
}
</style>
<div id="home-slider">

<!-- Begin Slider -->
<div id="slider">

  <!-- Slide 1 -->
  <div id="slide-1" class="slide slide-fade">
    <!-- Slide Title -->
    <div id="slide-title" class="col-12 col-lg-12">
      <h1><small>SOPHISTICATED&nbsp; AND&nbsp; SEALED</small><br>ELECTRONIC&nbsp; MODULES</h1>
    </div>
    <!-- Slide Description -->
    <div id="slide-desc" class="col-12 col-lg-12">
      <p>Specialized hardware and software integration that meets and exceeds industry standards.</p>
    </div>
    <!-- Slide Image -->
    <a href="/products/electronic-modules" class="slider-img-link"><img src="/assets/images/slider/slide-01-products-electronic-modules.jpg" alt="" border="0" /></a>
  </div>

  <!-- Slide 2 -->
  <div id="tab_2" class="slide slide-fade">
    <!-- Slide Title -->
    <div id="slide-title" class="col-12 col-lg-12">
      <h1><small>WE&nbsp; CREATE&nbsp; INSTRUMENTS</small><br>THAT&nbsp; GET&nbsp; NOTICED</h1>
    </div>
    <!-- Slide Description -->
    <div id="slide-desc" class="col-12 col-lg-12">
      <p>Our design aesthetics and attention to detail are second-to-none.</p>
    </div>
    <!-- Slide Image -->
    <a href="/products/instrument-clusters" class="slider-img-link"><img src="/assets/images/slider/slide-02-products-instrument-clusters.jpg" alt="" border="0" /></a>
  </div>

  <!-- Slide 3 -->
  <div id="slide-3" class="slide slide-fade">
    <!-- Slide Title -->
    <div id="slide-title" class="col-12 col-lg-12">
      <h1><small>WIRE&nbsp; HARNESS</small><br>ASSEMBLIES</h1>
    </div>
    <!-- Slide Description -->
    <div id="slide-desc" class="col-12 col-lg-12">
      <p>Engineered to the highest standards and extremely reliable.</p>
    </div>
    <!-- Slide Image -->
    <a href="/products/wire-harness-assemblies" class="slider-img-link"><img src="/assets/images/slider/slide-03-products-wire-harness-assemblies.jpg" alt="" border="0" /></a>
  </div>

  <!-- Slide 4 -->
  <div id="slide-4" class="slide slide-fade">
    <!-- Slide Title -->
    <div id="slide-title" class="col-12 col-lg-12">
      <h1><small>CUSTOM&nbsp; 2D&nbsp; AND&nbsp; 3D</small><br>GRAPHIC&nbsp; OVERLAYS</h1>
    </div>
    <!-- Slide Description -->
    <div id="slide-desc" class="col-12 col-lg-12">
      <p>We use state-of-the-art equipment and materials to produce overlays that stand up to the toughest conditions.</p>
    </div>
    <!-- Slide Image -->
    <a href="/products/graphic-overlays" class="slider-img-link"><img src="/assets/images/slider/slide-04-products-graphic-overlays.jpg" alt="" border="0" /></a>
  </div>

  <!-- Slide 5 -->
  <div id="slide-5" class="slide slide-fade">
    <!-- Slide Title -->
    <div id="slide-title" class="col-12 col-lg-12">
      <h1><small>MICRO&nbsp; TECHNOLOGY</small><br>GIANT&nbsp; INNOVATION</h1>
    </div>
    <!-- Slide Description -->
    <div id="slide-desc" class="col-12 col-lg-12">
      <p>Simco’s patented Micro Air Core (MAC) Technology, small as a dime, performs like a giant against.</p>
    </div>
    <!-- Slide Image -->
    <a href="/products/coil-bobbin-assemblies" class="slider-img-link"><img src="/assets/images/slider/slide-05-products-bobbin-assemblies.jpg" alt="" border="0" /></a>
  </div>

  <!-- Slide 6 -->
  <div id="slide-6" class="slide slide-fade">
    <!-- Slide Title -->
    <div id="slide-title" class="col-12 col-lg-12">
      <h1><small>CLOUD-BASED&nbsp; SOLUTIONS</small><br>AND&nbsp; I<small>o</small>T</h1>
    </div>
    <!-- Slide Description -->
    <div id="slide-desc" class="col-12 col-lg-12">
      <p>Our engineering team supports development in web portal, data analysis, user alerts, and mobile applications.</p>
    </div>
    <!-- Slide Image -->
    <a href="/technology/cloud-based-solutions" class="slider-img-link"><img src="/assets/images/slider/slide-06-technology-cloud-based-solutions.jpg" alt="" border="0" /></a>
  </div>

  <!-- Next and Previous Arrow Buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>

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
