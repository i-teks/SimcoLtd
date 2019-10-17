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
    <p class="pb-2">Simco is certified ISO 9001:2015, this means that our entire organization understands and is committed to standards that reduce risk and ensure consistently reliable products every time. When it comes to wires, protection against the adverse effects of vibrations, abrasions, and moisture are paramount. That’s why our custom wire harness assemblies offer potting or over-mold options and are electronically tested against extremely high standards.</p>
    <p class="pb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis commodo odio aenean sed.</p>
    <img src="{{ asset('/assets/images/products/simcoltd-wire-harness-pigtail.jpg') }}" class="float-left" style="width:40%;" alt="">
    <h5>Vitae elementum curabitur vitae nunc.</h5>
    <p class="pb-2">Diam phasellus vestibulum lorem sed risus ultricies tristique nulla aliquet. Platea dictumst vestibulum rhoncus est pellentesque elit. Tellus in metus vulputate eu scelerisque felis. Mauris in aliquam sem fringilla. Scelerisque mauris pellentesque pulvinar pellentesque habitant morbi tristique senectus et. Consequat ac felis donec et odio pellentesque diam volutpat. Ultricies mi quis hendrerit dolor magna eget est.</p>
    <img src="{{ asset('/assets/images/products/simcoltd-potting-over-mold-epoxy.jpg') }}" class="float-right" style="width:40%;" alt="">
    <h5>Lorem ipsum dolor sit amet.</h5>
    <p class="pb-2">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis commodo odio aenean sed. Enim nunc faucibus a pellentesque sit amet. Nisl nisi scelerisque eu ultrices vitae auctor eu. Tellus at urna condimentum mattis pellentesque. Arcu risus quis varius quam. Consectetur adipiscing elit ut aliquam purus. Rhoncus mattis rhoncus urna neque viverra justo nec ultrices. Ultricies integer quis auctor elit. Elit ullamcorper dignissim cras tincidunt lobortis feugiat.</p>
  </div>
</div>
@endsection

@section('scripts')
@endsection
