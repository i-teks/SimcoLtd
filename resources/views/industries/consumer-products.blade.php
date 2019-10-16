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
    <div class="text-center"><img src="{{ asset('/assets/images/headers/header-consumer-products.jpg') }}" style="width:100%; height:auto;"></div>
    <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h5>
    <p class="pb-2">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vitae tempus quam pellentesque nec nam aliquam. Placerat vestibulum lectus mauris ultrices eros in. Non arcu risus quis varius quam quisque id. In est ante in nibh mauris cursus. Morbi quis commodo odio aenean. Viverra nam libero justo laoreet sit amet cursus sit amet. Praesent elementum facilisis leo vel fringilla est ullamcorper eget nulla.</p>
    <h5>Sollicitudin nibh sit amet commodo nulla facilisi..</h5>
    <p class="pb-2">Neque laoreet suspendisse interdum consectetur libero. Nam aliquam sem et tortor consequat. Nullam eget felis eget nunc lobortis mattis. Amet luctus venenatis lectus magna fringilla urna. Vulputate eu scelerisque felis imperdiet. In eu mi bibendum neque egestas. Tempor orci eu lobortis elementum nibh tellus. Pretium lectus quam id leo in vitae. At urna condimentum mattis pellentesque id nibh. Tristique senectus et netus et malesuada.</p>
  </div>
</div>
<div id="boxed-content" class="row mx-0" style="background-color: #eee;">
  <div class="col-12 col-sm-5" style="padding:0;">
    <img src="{{ asset('/assets/images/boxes/industries-consumer-products.jpg') }}" width="100%" height="100%" style="object-fit: cover; object-position:center right" alt="">
  </div>
  <div id="graybox-wrapper" class="col-12 col-sm-7 align-self-center" style="padding:20px;">
    <h5>Consumer product clients include:</h5>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">Bizbee/Vetrk</li>
      <li class="list-group-item">Basement Defender</li>
    </ul>
    </div>
</div>
@endsection

@section('scripts')
@endsection
