@extends('layouts.master-sidebar')

@section('title')
  Indistries - Specialty OEM - Simco Ltd. Specialty Innovation and Manufacturing Company
@endsection

@section('sidebar')
  @include('industries.sidebar')
@endsection

@section('content')
<div class="row">
  <div class="col-12">
    <h1>Specialty OEM</h1>
    <div class="text-center"><img src="http://www.simcoltd.com/images/file-ca36f26bb2-236/x" style="width:100%; height:auto;"></div>
    <h5>Gauged to meet your toughest demand.</h5>
    <p class="pb-2">From high end supercars to the latest fully-electric vehicles, Simco works with a wide range of specialty OEM manufacturers and customizers to develop gauges and instrument clusters that not only enhance the styling and functionality of their vehicles, but also meet the heightened performance demands required by their customers.</p>
    <h5>As many options as there are cars on the road.</h5>
    <p class="pb-2">To meet practically any vehicle need, we offer custom circuits, software, gauges and lighting, as well as custom graphics, injected molded trim, custom finishing and a wide array of assembly options, either utilizing the original instrument cluster or by developing new custom instruments and components. And because we design and manufacture all key subcomponents, we ensure quality through and through.</p>
  </div>
</div>
<div id="boxed-content" class="row mx-0" style="background-color: #eee;">
  <div class="col-12 col-sm-5" style="padding:0;">
    <img src="http://www.simcoltd.com/images/profile-admin-administrator-1-time1311241888-c010dfc0b8-140/x" width="100%" height="100%" style="object-fit: cover; object-position:center right" alt="">
  </div>
  <div id="graybox-wrapper" class="col-12 col-sm-7 align-self-center" style="padding:20px;">
    <h5>Automotive OEM clients include:</h5>
    <div class="row">
    <div class="col-6">
    <ul class="list-group list-group-flush">
      <li class="list-group-item">Chrysler</li>
      <li class="list-group-item">Johnson Control</li>
      <li class="list-group-item">Magna International</li>
    </ul>
    </div>
    <div class="col-6">
    <ul class="list-group list-group-flush">
      <li class="list-group-item">Roush</li>
      <li class="list-group-item">Saleen Specialty OEM</li>
      <li class="list-group-item">Visteon</li>
    </ul>
    </div>
    </div>
    <p class="text-right mb-0">... plus more</p>
    </div>
</div>
@endsection

@section('scripts')
@endsection
