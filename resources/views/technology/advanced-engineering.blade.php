@extends('layouts.master-sidebar')

@section('title')
  Technology - Advanced Engineering - Simco Ltd. Specialty Innovation and Manufacturing Company
@endsection

@section('sidebar')
  @include('technology.sidebar')
@endsection

@section('content')
<div class="row">
  <div class="col-12">
    <h1>Advanced Engineering</h1>
    <div class="text-center"><img src="{{ asset('/assets/images/headers/header-engineering.jpg') }}" style="width:100%; height:auto; margin-bottom:2rem;" alt=""></div>
    <h5>Engineering is at the heart and soul of Simco, Ltd.</h5>
    <p class="pb-2">Through years of engineering experience and creativity, Simco, Ltd. has brought patented products with function and style into the marketplace. We can take an idea that starts with a complete technical specification or a simple sketch on a napkin and deliver a product that is engineered and manufactured for success. Our team will walk beside our customers providing renderings, prototypes, and production samples along the way.</p>
    <h5>Engineers who are true experts.</h5>
    <p class="pb-2">From compiling exact specifications needed for a project, to engineering the final product and developing the software to run it all, our experienced engineers offer a wide range of capabilities to get the job done right. In fact, our expertise in the fields of mechanical and electrical engineering ensures we can handle your toughest projects, while our experience in design, displays, graphics, lighting and assembly has led to our reputation as an all-in-one shop who can
    handle it all.</p>
  </div>
</div>
<div id="boxed-content" class="row mx-0" style="background-color: #eee;">
  <div class="col-12 col-sm-5" style="padding:0;">
    <img src="{{ asset('/assets/images/boxes/technology-advanced-engineering.jpg') }}" width="100%" height="100%" style="object-fit: cover; object-position:center right" alt="">
  </div>
  <div id="graybox-wrapper" class="col-12 col-sm-7 align-self-center" style="padding:20px;">
    <h5>Our engineering expertise includes:</h5>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">Advanced Electronic Design</li>
      <li class="list-group-item">Plastic & Assembly Design</li>
      <li class="list-group-item">Lighting Development</li>
      <li class="list-group-item">Vehicle Communication</li>
      <li class="list-group-item">Wireless Communication & Mobile Application</li>
      <li class="list-group-item">IoT / Web Portal Data Analysis & Alerts</li>
      <li class="list-group-item">Electro-Mechanical Design</li>
      <li class="list-group-item">Graphic Artwork & Renderings</li>
      <li class="list-group-item">Prototypes</li>
      <li class="list-group-item">Global Engineering Support</li>
    </ul>
    </div>
</div>
@endsection

@section('scripts')
@endsection
