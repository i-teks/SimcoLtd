@extends('layouts.master-sidebar')

@section('title')
  Products - 2D & 3D Graphic Overlays - Simco Ltd. Specialty Innovation and Manufacturing Company
@endsection

@section('sidebar')
  @include('products.sidebar')
@endsection

@section('content')
<div class="row">
  <div class="col-12">
    <h1>2D & 3D Graphic Overlays</h1>
    <img src="{{ asset('/assets/images/products/simcoltd-graphic-overlays.jpg') }}" class="float-right graphic-overlays">
    <h5>More than just instrument artwork.</h5>
    <p>Our process for custom graphic overlays and appliques has been refined for our specialized vehicle OEM clientele, which means that we print on OEM qualified materials. What’s more, we utilize state-of-the-art machinery to provide multi-layer printing with high registration (front and back), selective adhesive printing, special backlighting colors and opacities, not to mention the ability to print formed graphics with custom shapes and cut-outs. And to top it all off, our overlays are designed with high levels of resistance to all types of elements including extreme temperatures and UV color fade.</p>
  </div>
</div>
<div id="boxed-content" class="row mx-0" style="background-color: #eee;">
  <div class="col-12 col-sm-4" style="padding:0;">
    <img src="{{ asset('/assets/images/products/simcoltd-print-quality.jpg') }}" width="100%" height="100%" style="object-fit: cover;" alt="">
  </div>
  <div class="col-12 col-sm-8" style="padding:20px;">
    <h5>We'll literally paint you a picture.</h5>
    <p style="font-size:14px; margin-bottom:0;">With in-house capabilities that can provide detailed graphics and 3D product renderings from concept through completion, we'll help you see exactly what the end result will be well before we build it. And because every rendering is reviewed and approved by our design team, we can guarantee that your final product will meet every expectation.</p>
  </div>
</div>
@endsection

@section('scripts')
@endsection
