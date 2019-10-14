@extends('layouts.master')

@section('title')
  About - Simco Ltd. Specialty Innovation and Manufacturing Company
@endsection

@section('content')


<div class="row">
  <div class="col-12">
    <h1>Our Company</h1>
  </div>
</div>
<div id="boxed-content" class="row mx-0" style="background-color: #ccc">
  <div class="col-12 col-lg-5" style="padding:0;">
    <img src="{{ asset('/assets/images/simcoltd-sign.jpg') }}" width="100%" height="100%" style="object-fit: cover; object-position:center right; max-height: 300px;" alt="">
  </div>
  <div id="graybox-wrapper" class="col-12 col-md-7 align-self-center" style="padding:20px;">
    <h5 style="">About Simco.</h5>
    <p>Simco, Ltd. is an innovative engineering and manufacturing company dedicated to producing a wide range of instrument gauges, electronic assemblies, wireless products, and fabricated parts for a worldwide clientele of automotive, recreational, and commercial customers. Based in Lapeer, Michigan, our ISO-9001 certified facility offers OEM engineering experience, exciting new product designs and flexible manufacturing capabilities to meet our customer’s unique needs.</p>
  </div>
</div>
<div class="row" style="margin-top:32px;">
  <div class="col-12 col-lg-7">
    <h2>Culture</h2>
    <h5>Our success is due to our entrepreneurial spirit.</h5>
    <p>Simco operates within an entrepreneurial culture that is fundamental to our continued success. It's this culture that drives us to produce the world's best products for a wide range of OEM clients.</p>

    <h2>Customers</h2>
    <h5>Our customers include.</h5>
    <p></p>

    <h2>Memberships</h2>
    <h5>Our affiliations.</h5>
    <p>Simco is proud to be a long-standing member of SAE and the Specialty Equipment Market Association (SEMA).</p>
  </div>
  <div class="col-12 col-md-5">
    <div style="background-color: #efefef">
    <img src="{{ asset('/assets/images/simcoltd-guarantee.jpg') }}" width="100%" style="" alt="">
    <div style="padding:24px;">
    <h2>Our Guarantee</h2>
    <h5>Our guarantee to you.</h5>
    <p>Simco offers innovative design, robust engineering and state-of-the-art, ISO-certified manufacturing capabilities. Additionally, all of our gauges, instrument clusters and driver information displays are warranted for materials and workmanship that meets or exceeds OEM warranties.</p>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
@endsection
