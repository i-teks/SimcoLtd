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
    <img src="{{ asset('/assets/images/products/simcoltd-electronic-modules.jpg') }}" class="float-right electronic-modules" alt="">
    <h5>Seamless integration.</h5>
    <p class="pb-2">Specialized OEM manufacturing often focuses on customized solutions that deliver innovative functionality. This requires hardware and software integration that meets and exceeds industry standards. Simco has experience developing sophisticated interfaces that communicate with a vehicle’s internal communications and a wide range of subsystems—our in-house software development team ensures that our electronic modules work seamlessly with your vehicle's management system.</p>
    <img src="{{ asset('/assets/images/products/simcoltd-pcb.jpg') }}" class="float-left" style="width:20%; margin: 5px 20px 20px 0;" alt="">
    <h5>Engineered to the highest standards.</h5>
    <p class="pb-2">Our electronic products are developed for the OEM stringent environment with custom embedded software and communication as required.  Our in-house electronics capabilities start from concept to full production including the development of schematics, pcb layouts, and prototypes to insure proper electrical functionality.</p>
    <img src="{{ asset('/assets/images/products/simcoltd-electronic-module-gibbs.jpg') }}" class="float-right" style="width:40%;" alt="">
    <h5>Simco Ltd Provides Complete Package.</h5>
    <p class="pb-2">Our electronic assembly products are designed in all shapes, sizes, and materials to fit our customer’s application. Simco Ltd provides a full solution of packaging and electronic design.  This solution may range from a plastic LED lighting display to a more complex metal assembly that houses a 4-layer electronic module for high temp and durability requirements.  Let us know how Simco Ltd can bring the next electronic assembly to your specific need.</p>
  </div>
</div>
@endsection

@section('scripts')
@endsection
