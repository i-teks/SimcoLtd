@extends('layouts.master-sidebar')

@section('title')
  Technology - State-of-the-Art Manufacturing - Simco Ltd. Specialty Innovation and Manufacturing Company
@endsection

@section('sidebar')
  @include('technology.sidebar')
@endsection

@section('content')
<h1>State-of-the-Art Manufacturing</h1>
<div class="row mx-0">
  <div class="col-12 col-md-8 pl-0">
    <h5>Smart. And state-of-the-art.</h5>
    <p>Simco Ltd has invested in state-of-the-art equipment to transform our designs into product for our customers. We believe in flexible manufacturing that allows our team to develop customized products with quality and shorter lead times, for our customer’s specialty needs. We pride ourselves on offering state-of-the-art manufacturing capabilities at our in-house, ISO-certified facility. This means that our customers can expect consistent quality, accurate calibrations and long life from every product we manufacture. And by offering flexible manufacturing runs, we support both short- and long-run production needs.</p>
  </div>
  <div id="graybox-wrapper" class="col-12 col-md-4" style="background-color: #ddd; line-height: 1.25rem; font-size: 0.875rem; padding: 1rem;">
      <p>Our fabrication expertise includes:</p>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">CNC Cutting & Routing</li>
        <li class="list-group-item">Laser Cutting & Etching</li>
        <li class="list-group-item">3D Object Printing</li>
        <li class="list-group-item">Thermoforming</li>
        <li class="list-group-item">Die Cutting</li>
        <li class="list-group-item">Custom Manufacture Tooling</li>
        <li class="list-group-item">Prototyping and Fabrication</li>
      </ul>
  </div>
</div>
<div class="row">
  <div class="col-12">
    <h5>Our assemblies live up to the toughest conditions.</h5>
    <p class="pb-2">At Simco, we specialize in custom assemblies that adhere to your specific requirements for size, weight, materials and features, while maintaining proper tolerances for mounting and interfacing. Additionally, our assemblies are designed to provide a Class A surface for trim, texture and style, yet are also robust enough to protect delicate internal components from vibrations, shock and a wide range of temperature extremes.</p>
  </div>
</div>
<div id="boxed-content" class="row mx-0" style="background-color: #eee;">
  <div class="col-12 col-sm-5" style="padding:0;">
    <img src="http://www.simcoltd.com/images/profile-admin-administrator-1-time1311242392-684f0beac9-142/x" width="100%" height="100%" style="object-fit: cover; object-position:center right" alt="">
  </div>
  <div id="graybox-wrapper" class="col-12 col-sm-7 align-self-center" style="padding:20px;">
    <h5>Our assembly expertise includes:</h5>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">Instrument Cluster & Calibration</li>
      <li class="list-group-item">Electronic Products</li>
      <li class="list-group-item">Wire Harness & Cables</li>
      <li class="list-group-item">Bobbin Coil Winding</li>
      <li class="list-group-item">Sonic Welding</li>
    </ul>
    </div>
</div>
@endsection

@section('scripts')
@endsection
