@extends('layouts.master-sidebar')

@section('title')
  Products - Wire Haness & PCB Assemblies - Simco Ltd. Specialty Innovation and Manufacturing Company
@endsection

@section('sidebar')
  @include('products.sidebar')
@endsection

@section('content')
<div class="row">
  <div class="col-12">
    <h1>Wire Harness & PCB Assemblies</h1>
    <img src="{{ asset('/assets/images/products/simcoltd-wire-harness.jpg') }}" class="float-right wire-harness">
    <h5>High-end and reliable.</h5>
    <p>Simco is certified ISO 9001:2015, this means that our entire organization understands and is committed to standards that reduce risk and ensure consistently reliable products every time. When it comes to wires, protection against the adverse effects of vibrations, abrasions, and moisture are paramount. That’s why our custom wire harness assemblies offer potting or over-mold options and are electronically tested against extremely high standards.</p>
    <h5>Engineered to the highest standards.</h5>
  </div>
</div>
<div class="row">
  <div class="col-12 col-sm-4 pt-2">
    <img src="{{ asset('/assets/images/products/simcoltd-pcb.jpg') }}" width="100%" alt="">
  </div>
  <div class="col-12 col-sm-8">
    <p>Our in-house electronics capabilities include everything from developing requirements based on a vehicle's specs, to complete electrical product architecture, schematic designs, PCB layouts and more. Additionally, our engineering team will design and develop the proper electrical functionality needed by using our advanced knowledge of available technology, industry requirements and environmental standards.</p>
  </div>
</div>
@endsection

@section('scripts')
@endsection
