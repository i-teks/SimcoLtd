@extends('layouts.master')

@section('title')
  Simco Ltd. Specialty Innovation and Manufacturing Company
@endsection

@section('content')
  @include('layouts.partials.slider')

  <h1>Custom design. Cutting-edge engineering.</h1>
  <h2>Custom design. Cutting-edge engineering.</h2>
  <h3>Custom design. Cutting-edge engineering.</h3>
  <h4>Custom design. Cutting-edge engineering.</h4>
  <h5>Custom design. Cutting-edge engineering.</h5>
  <h6>Custom design. Cutting-edge engineering.</h6>
  <p>Simco, Ltd. is an industry leader in the design, engineering and manufacturing of a wide range of specialty gauges, instrument clusters and driver information displays for leading automotive, commercial, military and recreational OEM manufacturers worldwide.</p>
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
