@extends('layouts.master-sidebar')

@section('title')
  Industries - Simco Ltd. Specialty Innovation and Manufacturing Company
@endsection

@section('sidebar')
  @include('industries.sidebar')
@endsection

@section('content')
  <h1>Industries</h1>
  @include('layouts.partials.industries-boxes')
@endsection

@section('scripts')
@endsection
