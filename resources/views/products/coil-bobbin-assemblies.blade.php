@extends('layouts.master-sidebar')

@section('title')
  Products - Coil Bobbin Assemblies- Simco Ltd. Specialty Innovation and Manufacturing Company
@endsection

@section('sidebar')
  @include('products.sidebar')
@endsection

@section('content')
<div class="row">
  <div class="col-12">
    <h1>Coil Bobbin Assemblies</h1>
    <img src="{{ asset('/assets/images/products/simcoltd-coil-bobbins.jpg') }}" class="float-right coil-bobbins">
    <h5>Micro Movement. Sometimes, the best things do come in small packages.</h5>
    <p class="pb-2">Our team has developed several magnetic coil bobbin designs utilized throughout our product line. One such design that we call the “Micro Movement” is a patented device using Micro Air Core (MAC) technology. It not only offers the most accurate and reliable meter movement in the industry, its extremely compact housing enables thinner instrumentation, greater lighting freedom and nearly unlimited gauge design. By soldering directly to printed circuit boards using either front or rear mounting options, our MAC movements take up minimal space while providing pinpoint accuracy under any condition.</p>
    <p class="pb-2">The MAC movement is available for both gauge and cluster manufacturers, and can be easily controlled using standard off-the-shelf circuitry.</p>
    <img src="{{ asset('/assets/images/products/simcoltd-mac-movement-competitors.jpg') }}" class="float-left" style="width:40%; margin:10px 0 0 0;" alt="">
    <h5>The Micro Movement is small as a dime yet performs as a giant against its competition.</h5>
    <p class="pb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis commodo odio aenean sed. Enim nunc faucibus a pellentesque sit amet. Nisl nisi scelerisque eu ultrices vitae auctor eu. Tellus at urna condimentum mattis pellentesque. Arcu risus quis varius quam. Consectetur adipiscing elit ut aliquam purus. Rhoncus mattis rhoncus urna neque viverra justo nec ultrices. Ultricies integer quis auctor elit. Elit ullamcorper dignissim cras tincidunt lobortis feugiat. Eu tincidunt tortor aliquam nulla.</p>
    <img src="{{ asset('/assets/images/products/simcoltd-coil-bobbin-pcb.jpg') }}"  class="float-right" style="width:40%; margin:10px 0 0 10px;" alt="">
    <h5>Vitae elementum curabitur vitae nunc.</h5>
    <p class="pb-2">Diam phasellus vestibulum lorem sed risus ultricies tristique nulla aliquet. Platea dictumst vestibulum rhoncus est pellentesque elit. Tellus in metus vulputate eu scelerisque felis. Mauris in aliquam sem fringilla. Scelerisque mauris pellentesque pulvinar pellentesque habitant morbi tristique senectus et. Consequat ac felis donec et odio pellentesque diam volutpat. Ultricies mi quis hendrerit dolor magna eget est.</p>
  </div>
</div>
@endsection

@section('scripts')
@endsection
