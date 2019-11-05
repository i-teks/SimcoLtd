@extends('layouts.master-sidebar')

@section('title')
  Products - Wire Haness Assemblies - Simco Ltd. Specialty Innovation and Manufacturing Company
@endsection

@section('sidebar')
  @include('products.sidebar')
@endsection

@section('content')
<div class="row">
  <div class="col-12">
    <h1>Wire Harness Assemblies</h1>
    <img src="{{ asset('/assets/images/products/simcoltd-wire-harness.jpg') }}" class="float-right wire-harness" alt="">
    <h5>High-end and reliable.</h5>
    <p class="pb-2">Simco Ltd manufactures quality wire assemblies and custom harnesses for clients who value on-time delivery of reliable products. We work very close with our customers to bring new products to market and to sustain mature products over time. Simco Ltd is an ISO 9001 company, which means our organization understands and is committed to standards.  Our understanding starts with the design and manufacturing process, and our expertise will reduce design time, improve product quality and develop new solutions. Our quality control system includes incoming inspection, in-process auditing, and quality-assurance testing of every assembly.</p>
    <img src="{{ asset('/assets/images/products/simcoltd-wire-harness-pigtail.jpg') }}" class="float-left" style="width:40%;" alt="">
    <p class="pb-2">We are a flexible and versatile manufacturer. Our state-of-the-art equipment, customized solutions, testing software, and low overhead allow us to stay extremely competitive. When it comes to wires, protection against vibrations, abrasions, and moisture are paramount.  That’s why our custom wire assemblies also offer epoxy potting and over-mold options and are 100% electrically tested.</p>
    <img src="{{ asset('/assets/images/products/simcoltd-potting-over-mold-epoxy.jpg') }}" class="float-right" style="width:60%;" alt="">
  </div>
</div>
@endsection

@section('scripts')
@endsection
