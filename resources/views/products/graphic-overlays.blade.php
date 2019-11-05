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
    <h1>2D and 3D Graphic Overlays</h1>
    <img src="{{ asset('/assets/images/products/simcoltd-graphic-overlays.jpg') }}" class="float-right graphic-overlays" alt="">
    <h5>More than just instrument artwork.</h5>
    <p class="pb-2">Simco Ltd is a manufacturer of custom graphic overlays for the specialty OEM and remanufacturing clientele.  We utilize state-of-the art machinery and OEM materials to provide multi-layer printing with high registration, specialty backlighting colors, clear display windows, multiple textures, as well as selective adhesives. Our new 3D formed graphic overlay process now provides the latest OEM designs with custom shapes and cut-outs included.</p>
    <figure class="figure float-left" style="width:40%; margin:10px 10px 0 0;">
      <img src="{{ asset('/assets/images/products/simcoltd-graphic-overlay-disney.png') }}" style="width:100%;" alt="">
      <figcaption class="figure-caption text-muted font-italic">Simco Ltd produced graphics for Disney Avatar ride.</figcaption>
    </figure>
    <h5>We'll literally paint you a picture.</h5>
    <img src="{{ asset('/assets/images/products/graphic-overlay-printing.jpg') }}" class="float-right" style="width:25%; margin:10px 0 0 10px;" alt="">
    <p class="pb-2">Simco Ltd is a manufacturer of custom graphic overlays for the specialty OEM and remanufacturing clientele.  We utilize state-of-the art machinery and OEM materials to provide multi-layer printing with high registration, specialty backlighting colors, clear display windows, multiple textures, as well as selective adhesives. Our new 3D formed graphic overlay process now provides the latest OEM designs with custom shapes and cut-outs included.</p>
  </div>
</div>
@endsection

@section('scripts')
@endsection
