@extends('layouts.master-sidebar')

@section('title')
  Indistries - Electric / Hybrid - Simco Ltd. Specialty Innovation and Manufacturing Company
@endsection

@section('sidebar')
  @include('industries.sidebar')
@endsection

@section('content')
<div class="row">
  <div class="col-12">
    <h1>Electric / Hybrid</h1>
    <div class="text-center"><img src="http://www.simcoltd.com/images/file-ecc64dd1fe-246/x" style="width:100%; height:auto;"></div>
    <h5>Charting a new frontier.</h5>
    <p class="pb-2">Today's hybrid and fully-electric vehicles offer new levels of complexity never before seen in this industry. Instrument clusters must not only communicate vital infromation to the driver, they must also operate a wide range of vehicle subsystems—and the sophisticated battery management systems of modern electric vehicles pose some of the gratest challenges. In fact, the development of intelligent cell management not only involves monitoring the health of the individual cells, but must also coordinate critical diagnostic information through the instrument cluster, adding additional layers of complexity.</p>
    <h5>We make battery management systems more manageable.</h5>
    <p class="pb-2">By working with some of the leading hybrid and electric vehicle (EV) manufacturers, Simco has experience developing sophisticated battery management interfaces that communicate with the many subsystems involved in maximizing battery performance—including current charge levels, operating efficiency, warning indicators, regenerative braking, diagnostic modes and more—and then displaying this infromation to the driver. This experience makes us just one of a handful of companies who are on the leading edge of this emerging technology.</p>
  </div>
</div>
<div id="boxed-content" class="row mx-0" style="background-color: #eee;">
  <div class="col-12 col-sm-5" style="padding:0;">
    <img src="http://www.simcoltd.com/images/profile-admin-administrator-1-time1311242392-684f0beac9-142/x" width="100%" height="100%" style="object-fit: cover; object-position:center right" alt="">
  </div>
  <div id="graybox-wrapper" class="col-12 col-sm-7 align-self-center" style="padding:20px;">
    <h5>Our Electric/Hybrid OEM clients include:</h5>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">Magna International</li>
      <li class="list-group-item">Vantage Vehicle International</li>
      <li class="list-group-item">Wheego Electric Cars</li>
    </ul>
    <p class="text-right mb-0">... plus more</p>
    </div>
</div>
@endsection

@section('scripts')
@endsection
