@extends('layouts.master-sidebar')

@section('title')
  Products - Electronic Modules - Simco Ltd. Specialty Innovation and Manufacturing Company
@endsection

@section('sidebar')
  @include('products.sidebar')
@endsection

@section('content')
<div class="row">
  <div class="col-12">
    <h1>Electronic Modules</h1>
    <img src="{{ asset('/assets/images/products/simcoltd-electronic-modules.jpg') }}" class="float-right electronic-modules">
    <h5>Seamless integration.</h5>
    <p class="pb-2">Specialized OEM manufacturing often focuses on customized solutions that deliver innovative functionality. This requires hardware and software integration that meets and exceeds industry standards. Simco has experience developing sophisticated interfaces that communicate with a vehicle’s internal communications and a wide range of subsystems—our in-house software development team ensures that our electronic modules work seamlessly with your vehicle's management system.</p>
    <h5>We speak the language of innovation.</h5>
  </div>
</div>
<div class="row">
  <div class="col-12 col-sm-6 pt-2">
    <img src="{{ asset('/assets/images/products/simcoltd-programming-integration.jpg') }}" width="100%" alt="">
  </div>
  <div class="col-12 col-sm-6">
    <p>That's why we're proud to offer extensive design experience in microprocessor control and embedded source code development, using both high and low-level programming languages such as C/C++ and assembly codes. In fact, most of our software development is custom, driven by customer and vehicle needs that demand a high level of functionality, but with flexible parameters that utilize data bus communication and Flash-enabled memory to enable future updates and rapid changes.</p>
  </div>
</div>
@endsection

@section('scripts')
@endsection
