@extends('layouts.master')

@section('title')
  Simco Ltd. Specialty Innovation and Manufacturing Company
@endsection

@section('content')
  @include('layouts.partials.slider')
  <h4><span class="text-red">S</span>pecialty <span class="text-red">I</span>nnovative <span class="text-red">M</span>anufacturing <span class="text-red">Co</span>mpany</h4>
  <p>Simco, Ltd. is an innovative engineering and manufacturing company dedicated to producing a wide range of instrument gauges, electronic assemblies, wireless products, and fabricated parts for a worldwide clientele of automotive, recreational, and commercial customers. Based in Lapeer, Michigan, our ISO-9001 compliant facility offers OEM engineering experience, exciting new product designs and flexible manufacturing capabilities to meet our customer’s unique needs.</p>

  <div class="row m-0">
  <div class="col-12 col-md-8 p-0">

  <div class="row m-0">
    <!-- Flex Box -->
    <div class="col-12 col-md-4 pl-0 pr-3">
      <!-- Card -->
      <div class="card grey-box m-0">
        <div class="card-header">
          Advanced Engineering
        </div>
        <div class="card-body">
          <p class="card-text">From graphics and lighting to final design and more, Simco offers the engineering capabilities to handle your toughest projects.</p>
          <p class="text-right"><a href="#" class="text-uppercase">Learn More »</a></p>
        </div>
      </div>
    </div>
    <!-- End Flex Box -->

    <!-- Flex Box -->
    <div class="col-12 col-md-4 pl-0 pr-3">
      <!-- Card -->
      <div class="card grey-box m-0">
        <div class="card-header">
          State-of-the-Art Manufacturing
        </div>
        <div class="card-body">
          <p class="card-text">Our in-house, state-of-the-art manufacturing facilities provide consistent quality in every instrument we manufacture.</p>
          <p class="text-right"><a href="#" class="text-uppercase">Learn More »</a></p>
        </div>
      </div>
    </div>
    <!-- End Flex Box -->

    <!-- Flex Box -->
    <div class="col-12 col-md-4 pl-0 pr-3">
      <!-- Card -->
      <div class="card grey-box m-0">
        <div class="card-header">
          Cloud-based Solutions
        </div>
        <div class="card-body">
          <p class="card-text">Our innovative thinking combines manufacturing, engineering and technolgy to bring the power of cloud-based computing to customers.</p>
          <p class="text-right"><a href="#" class="text-uppercase">Learn More »</a></p>
        </div>
      </div>
    </div>
    <!-- End Flex Box -->
  </div>

  </div>
  <div class="col-12 col-md-4 p-0">
    <!-- Flex Box -->
    <div class="col-12 px-0">
      <!-- Card -->
      <div class="card grey-box m-0">
        <div class="card-header">
          Cloud-based Solutions
        </div>
        <div class="card-body">
          <p class="card-text">From graphics and lighting to final design and more, Simco offers the engineering capabilities to handle your toughest projects.</p>
          <p class="text-right"><a href="#" class="text-uppercase">Learn More »</a></p>
        </div>
      </div>
    </div>
    <!-- End Flex Box -->
  </div>
  </div>
@endsection

@section('scripts')
<script>
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
}, 5000 );
})
</script>
@endsection
