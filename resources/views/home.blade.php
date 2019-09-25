@extends('layouts.master')

@section('title')
  Simco Ltd. Specialty Innovation and Manufacturing Company
@endsection

@section('content')
  @include('layouts.partials.slider')
  <h4><span class="text-red">S</span>pecialty <span class="text-red">I</span>nnovative <span class="text-red">M</span>anufacturing <span class="text-red">Co</span>mpany</h4>
  <p>Simco, Ltd. is an innovative engineering and manufacturing company dedicated to producing a wide range of instrument gauges, electronic assemblies, wireless products, and fabricated parts for a worldwide clientele of automotive, recreational, and commercial customers. Based in Lapeer, Michigan, our ISO-9001 compliant facility offers OEM engineering experience, exciting new product designs and flexible manufacturing capabilities to meet our customer’s unique needs.</p>
@endsection

@section('scripts')
<script>
/**
 * Image Slider adapted from
 * https://medium.com/better-programming/make-a-slideshow-with-automatic-and-manual-controls-using-html-css-and-javascript-b7e9305168f9
 */
var slideIndex = 1;
window.addEventListener("load",function() {
    showSlides(slideIndex);
    timer = setInterval(function(){plusSlides(1)}, 10000);
})

function currentSlide(n){
  clearInterval(timer);
  timer = setInterval(function(){plusSlides(n + 1)}, 10000);
  showSlides(slideIndex = n);
}

// Next/previous controls
function plusSlides(n){
  clearInterval(timer);
  if (n < 0){
    showSlides(slideIndex -= 1);
  } else {
   showSlides(slideIndex += 1);
  }
  if (n === -1){
    timer = setInterval(function(){plusSlides(n + 2)}, 10000);
  } else {
    timer = setInterval(function(){plusSlides(n + 1)}, 10000);
  }
}

function showSlides(n){
  var i;
  var slides = document.getElementsByClassName("slide");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}

/**
 * Image Slider without manual controls
//$("#slider > div:gt(0)").hide();
$( document ).ready( function(){
setInterval( function() {
  var $active = $( "#slider .active" );
  var $next = ( $active.next().length > 0 ) ? $active.next() : $( "#slider div:first" );
  $next.css( "z-index", 2 ); //move the next image up the pile
  $active.fadeOut( 1500, function() { //fade out the top image
    $active.css( "z-index", 1 ).show().removeClass( "active" ); //reset the z-index and unhide the image
    $next.css( "z-index", 3 ).addClass( "active" ); //make the next image the top one
  });
}, 8000 );
})
*/
</script>
@endsection
