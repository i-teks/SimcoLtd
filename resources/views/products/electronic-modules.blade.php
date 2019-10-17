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
    <p class="pb-2">Our in-house electronics capabilities include everything from developing requirements based on a vehicle's specs, to complete electrical product architecture, schematic designs, PCB layouts and more. Additionally, our engineering team will design and develop the proper electrical functionality needed by using our advanced knowledge of available technology, industry requirements and environmental standards.</p>
    <img src="{{ asset('/assets/images/products/simcoltd-electronic-module-gibbs.jpg') }}" class="float-right" style="width:40%;" alt="">
    <h5>Eget duis at tellus at urna condimentum.</h5>
    <p class="pb-2">Diam quis enim lobortis scelerisque fermentum dui faucibus. Consequat nisl vel pretium lectus quam id leo in vitae. Vestibulum morbi blandit cursus risus at ultrices mi tempus. Aliquet lectus proin nibh nisl condimentum id venenatis a. Integer malesuada nunc vel risus commodo. Arcu non odio euismod lacinia at quis risus sed vulputate. A iaculis at erat pellentesque adipiscing commodo elit at imperdiet. Ut etiam sit amet nisl purus in.</p>
  </div>
</div>
@endsection

@section('scripts')
@endsection
