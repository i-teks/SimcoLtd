@extends('layouts.master-sidebar')

@section('title')
  Industries - Recreational & Military - Simco Ltd. Specialty Innovation and Manufacturing Company
@endsection

@section('sidebar')
  @include('industries.sidebar')
@endsection

@section('content')
<div class="row">
  <div class="col-12">
    <h1>Recreational & Military</h1>
    <div class="text-center"><img src="http://www.simcoltd.com/images/profile-admin-administrator-1-time1311861026-c7c561835f-199/x" style="width:100%; height:auto;"></div>

    <h2>Recreational</h2>
    <h5>You'll find us in the field and the stream.</h5>
    <p class="pb-2">From all-terrain vehicles and personal watercraft to the latest high-tech agricultural equipment, these vehicles operate in a wide range of environments and conditions that each offer their own unique challenges. To meet these challenges head on, we design our gauges and clusters with the right options for any condition—including sealed connectors systems, GPS monitoring systems, tilt/tip sensors, gear detection, water flow sensors, or whatever your vehicle's specifications demand. And since these cockpits operate in direct sunlight, we design our gauges for temperature and UV color fade resistance.</p>

    <h2>Military</h2>
    <img src="{{ asset('/assets/images/industries/industries-military.jpg') }}" style="width:40%; float:right; margin:5px 0 10px 10px;" alt="">
    <h5>Engineered for the most extreme conditions.</h5>
    <p class="pb-2">The range of vehicles in use by the US military is extremely diverse, but they all have one thing in common: they must operate flawlessly in some of the toughest environments on earth. That's why military contractors come to us for their instrument needs, because we deliver a level of quality that stands up to even the most extreme conditions.</p>
    <h5>Built tough, just like our troops.</h5>
    <p class="pb-2">Our military-grade instruments are engineered using select materials for added durability, and are available with a wide range of specifications to meet the increased demands these vehicles require.</p>
  </div>
</div>
<div id="boxed-content" class="row mx-0" style="background-color: #eee;">
  <div class="col-12 col-sm-7" style="padding:0;">
    <img src="http://www.simcoltd.com/images/profile-admin-administrator-1-time1311250549-599f43c309-153/x" width="100%" height="100%" style="object-fit: cover; object-position:center right" alt="">
  </div>
  <div id="graybox-wrapper" class="col-12 col-sm-5 align-self-center" style="padding:20px;">
    <h5>Clients include:</h5>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">Mahindra ROXOR</li>
      <li class="list-group-item">Harley-Davidson</li>
      <li class="list-group-item">Gibbs Technologies</li>
      <li class="list-group-item">Bombardier</li>
      <li class="list-group-item">Four Winns</li>
    </ul>
    </div>
</div>
@endsection

@section('scripts')
@endsection
