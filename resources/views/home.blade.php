@extends('layouts.master')

@section('title')
  Simco Ltd. Specialty Innovation and Manufacturing Company
@endsection

@section('content')
  @include('layouts.partials.slider')
  <p>- - - - - slider/carousel images and text TBD - - - - -</p>
  <p>Simco, Ltd. is an innovative engineering and manufacturing company dedicated to producing a wide range of instrument gauges, electronic assemblies, wireless products, and fabricated parts for a worldwide clientele of automotive, recreational, and commercial customers. Based in Lapeer, Michigan, our ISO-9001 compliant facility offers OEM engineering experience, exciting new product designs and flexible manufacturing capabilities to meet our customer’s unique needs.</p>
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
