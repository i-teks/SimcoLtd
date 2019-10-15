@extends('layouts.master-sidebar')

@section('title')
  Technology - Cloud-Based Solutions - Simco Ltd. Specialty Innovation and Manufacturing Company
@endsection

@section('sidebar')
  @include('technology.sidebar')
@endsection

@section('content')
<div class="row">
  <div class="col-12">
    <h1>Innovative Cloud-Based Solutions</h1>
    <h5>Innovation that drives applications, services and resources.</h5>
    <p class="pb-2">Simco makes it possible for customers to integrate the power of cloud-based computing to create products that increase capacity, enhance functionality and add additional services on demand without the limitations or liabilities of committing to expensive infrastructures or in-house staffing and training. Simco does this by using an internet of things (IoT) development approach of bi-directional communication between device and server, sending data and receiving commands. Additional integration with manufacturing process is all part of the process. Furthermore, we also provide mobile app development for iOS and Android devices in addition to server development of custom Portal Dashboards and Data-driven analysis, alerts and communications.</p>
  </div>
</div>
<div id="boxed-content" class="row mx-0" style="background-color: #eee;">
  <div class="col-12 col-sm-5" style="padding:0;">
    <img src="{{ asset('/assets/images/boxes/technology-web-app.jpg') }}" width="100%" height="100%" style="object-fit: cover; object-position:center right" alt="">
  </div>
  <div id="graybox-wrapper" class="col-12 col-sm-7 align-self-center" style="padding:20px;">
    <p>Our engineering team supports development in web portal, data analysis, user alerts, and mobile applications.</p>
  </div>
</div>
@endsection

@section('scripts')
@endsection
