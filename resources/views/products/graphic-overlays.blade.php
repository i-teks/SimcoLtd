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
    <img src="{{ asset('/assets/images/products/simcoltd-graphic-overlays.jpg') }}" class="float-right graphic-overlays" alt="">
    <h5>More than just instrument artwork.</h5>
    <p class="pb-2">Our process for custom graphic overlays and appliques has been refined for our specialized vehicle OEM clientele, which means that we print on OEM qualified materials. What’s more, we utilize state-of-the-art machinery to provide multi-layer printing with high registration (front and back), selective adhesive printing, special backlighting colors and opacities, not to mention the ability to print formed graphics with custom shapes and cut-outs. And to top it all off, our overlays are designed with high levels of resistance to all types of elements including extreme temperatures and UV color fade.</p>
    <img src="{{ asset('/assets/images/products/simcoltd-graphic-overlay-disney.png') }}" class="float-left" style="width:40%; margin:10px 10px 0 0;" alt="">
    <h5>We'll literally paint you a picture.</h5>
    <p class="pb-2">With in-house capabilities that can provide detailed graphics and 3D product renderings from concept through completion, we'll help you see exactly what the end result will be well before we build it. And because every rendering is reviewed and approved by our design team, we can guarantee that your final product will meet every expectation.</p>
    <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h5>
    <img src="{{ asset('/assets/images/products/graphic-overlay-printing.jpg') }}" class="float-right" style="width:30%; margin:10px 0 0 10px;" alt="">
    <p class="pb-2">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis commodo odio aenean sed. Enim nunc faucibus a pellentesque sit amet. Nisl nisi scelerisque eu ultrices vitae auctor eu. Tellus at urna condimentum mattis pellentesque. Arcu risus quis varius quam. Consectetur adipiscing elit ut aliquam purus. Rhoncus mattis rhoncus urna neque viverra justo nec ultrices. Ultricies integer quis auctor elit. Elit ullamcorper dignissim cras tincidunt lobortis feugiat.</p>
  </div>
</div>
@endsection

@section('scripts')
@endsection
