@extends('layouts.master-sidebar')

@section('title')
  Industries - Consumer Products - Simco Ltd. Specialty Innovation and Manufacturing Company
@endsection

@section('sidebar')
  @include('industries.sidebar')
@endsection

@section('content')
<div class="row">
  <div class="col-12">
    <h1>Consumer Products</h1>
    <div class="text-center"><img src="{{ asset('/assets/images/headers/header-industries-consumer-products.jpg') }}" style="width:100%; height:auto;" alt=""></div>
    <h5>Wireless Products.</h5>
    <p class="pb-2">Simco Ltd engineering team doesn’t stand still as we move forward into new development of wireless consumer products.  Our latest home product that we manufacture is further supported by our engineering team with development in web portal, data analysis, user alerts, and mobile applications.  Simco Ltd can bring the real “Internet of Things (IoT) to your organization.</p>
    <img src="{{ asset('/assets/images/industries/industries-consumer-products.jpg') }}" class="float-left" style="width:45%; margin:10px 20px 10px 0;" alt="">
    <h5>Dashboard and Mobile applications.</h5>
    <p class="pb-2">We believe in bringing data to our customers that makes a difference.  Presenting important data analysis, telematics, and notifications in an easy to read graphical cloud base dashboard is what makes our development team tick.  We develop back-end programing interlaced with a friendly graphical interface to provide you custom dashboards and secured mobile applications.  Whether your need is automated document processing, custom device alerts, or vehicle tracking; let Simco Ltd bring your organization a custom solution.</p>
  </div>
</div>
@endsection

@section('scripts')
@endsection
