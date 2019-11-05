@extends('layouts.master-sidebar')

@section('title')
  Industries - Simco Ltd. Specialty Innovation and Manufacturing Company
@endsection

@section('sidebar')
  @include('industries.sidebar')
@endsection

@section('content')
  <h1>Industries</h1>
  <p>Simco Ltd engineer and manufacture products across multiple industries.  Electronic modules for Off-road vehicles, instrument clusters for specialty OEM, potted PCB-wire harness assembly for Military, Graphic overlays and seals for remanufactures, and a Wi-Fi electronic module with mobile apps for the consumer market, just to name a few.</p>
  @include('layouts.partials.industries-boxes')
@endsection

@section('scripts')
@endsection
