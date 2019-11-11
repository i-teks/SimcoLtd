@extends('layouts.master')

@section('title')
  About - Simco Ltd. Specialty Innovation and Manufacturing Company
@endsection

@section('content')


<div class="row">
  <div class="col-12">
    <h1>Our Company</h1>
    <div class="text-center"><img src="{{ asset('/assets/images/headers/header-about.jpg') }}" style="width:100%; height:auto; margin-bottom:2rem;" alt=""></div>
    <h5 style="">About Simco.</h5>
    <p class="pb-2">Simco, Ltd. is an innovative engineering and manufacturing company dedicated to producing a wide range of instrument gauges, electronic assemblies, wireless products, and fabricated parts for a worldwide clientele of automotive, recreational, and commercial customers. Based in Lapeer, Michigan, our ISO-9001 certified facility offers OEM engineering experience, exciting new product designs and flexible manufacturing capabilities to meet our customer’s unique needs.</p>
    <h5>Our success is due to our entrepreneurial spirit.</h5>
    <p class="pb-2">Simco operates within an entrepreneurial culture that is fundamental to our continued success. It's this culture that drives us to produce the world's best products for a wide range of OEM clients.</p>
    <h5>Our customers include:</h5>
    <div class="row">
      <div class="col-12 col-sm-6 col-md-3 col-lg-2 pb-4">
        <img src="{{ asset('/assets/images/customers/aev.jpg') }}" width="100%" style="" alt="">
      </div>
      <div class="col-12 col-sm-6 col-md-3 col-lg-2 pb-4">
        <img src="{{ asset('/assets/images/customers/autometer.jpg') }}" width="100%" style="" alt="">
      </div>
      <div class="col-12 col-sm-6 col-md-3 col-lg-2 pb-4">
        <img src="{{ asset('/assets/images/customers/chrysler.jpg') }}" width="100%" style="" alt="">
      </div>
      <div class="col-12 col-sm-6 col-md-3 col-lg-2 pb-4">
        <img src="{{ asset('/assets/images/customers/disney.jpg') }}" width="100%" style="" alt="">
      </div>
      <div class="col-12 col-sm-6 col-md-3 col-lg-2 pb-4">
        <img src="{{ asset('/assets/images/customers/johnson-controls.jpg') }}" width="100%" style="" alt="">
      </div>
      <div class="col-12 col-sm-6 col-md-3 col-lg-2 pb-4">
        <img src="{{ asset('/assets/images/customers/magna.jpg') }}" width="100%" style="" alt="">
      </div>
      <div class="col-12 col-sm-6 col-md-3 col-lg-2 pb-4">
        <img src="{{ asset('/assets/images/customers/mahindra.jpg') }}" width="100%" style="" alt="">
      </div>
      <div class="col-12 col-sm-6 col-md-3 col-lg-2 pb-4">
        <img src="{{ asset('/assets/images/customers/raymarine.jpg') }}" width="100%" style="" alt="">
      </div>
      <div class="col-12 col-sm-6 col-md-3 col-lg-2 pb-4">
        <img src="{{ asset('/assets/images/customers/rgis.jpg') }}" width="100%" style="" alt="">
      </div>
      <div class="col-12 col-sm-6 col-md-3 col-lg-2 pb-4">
        <img src="{{ asset('/assets/images/customers/roush.jpg') }}" width="100%" style="" alt="">
      </div>
      <div class="col-12 col-sm-6 col-md-3 col-lg-2 pb-4">
        <img src="{{ asset('/assets/images/customers/wabco.jpg') }}" width="100%" style="" alt="">
      </div>
    </div>
    <h5>Our membership affiliations:</h5>
    <div class="row">
      <div class="col-12 col-sm-6 col-md-3 col-lg-2 pb-4">
        <img src="{{ asset('/assets/images/memberships/aapex.jpg') }}" width="100%" style="" alt="">
      </div>
      <div class="col-12 col-sm-6 col-md-3 col-lg-2 pb-4">
        <img src="{{ asset('/assets/images/memberships/mera.jpg') }}" width="100%" style="" alt="">
      </div>
      <div class="col-12 col-sm-6 col-md-3 col-lg-2 pb-4">
        <img src="{{ asset('/assets/images/memberships/sae.jpg') }}" width="100%" style="" alt="">
      </div>
      <div class="col-12 col-sm-6 col-md-3 col-lg-2 pb-4">
        <img src="{{ asset('/assets/images/memberships/sema.jpg') }}" width="100%" style="" alt="">
      </div>
      <div class="col-12 col-sm-6 col-md-3 col-lg-2 pb-4">
        <img src="{{ asset('/assets/images/memberships/sgia.jpg') }}" width="100%" style="" alt="">
      </div>
    </div>
  </div>
</div>
<div id="boxed-content" class="row mx-0" style="background-color: #eee;">
  <div class="col-12 col-sm-5" style="padding:0;">
    <img src="{{ asset('/assets/images/simcoltd-guarantee.jpg') }}" width="100%" height="100%" style="object-fit: cover;" alt="">
  </div>
  <div id="graybox-wrapper" class="col-12 col-sm-7 align-self-center" style="padding:20px;">
    <h5>Our guarantee to you</h5>
    <p>Simco Ltd offers innovative design, robust engineering and state-of-the-art, ISO-certified manufacturing capabilities. Additionally, all of our gauges, instrument clusters, electronic modules, wire assemblies, and sub-components are warranted for materials and workmanship that meets or exceeds OEM warranties.</p>
  </div>
</div>
@endsection

@section('scripts')
@endsection
