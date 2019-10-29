@extends('layouts.master-sidebar')

@section('title')
  Contact - Simco Ltd. Specialty Innovation and Manufacturing Company
@endsection

@section('sidebar')
  @include('contact.sidebar')
@endsection

@section('content')
<div class="row">
  <div class="col-12">

    <h1>Contact Us</h1>
    <p>Below you will find our contact information. The quick email form is also provided for a convenient way to contact us. The fields marked with <span class="font-weight-bold text-danger">*</span> are required.</p>

    @if (session('success'))
    <div class="alert  alert-success alert-dismissible fade show" role="alert">
      {{ session('success') }}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif

    <form action="/contact/send" method="POST" style="margin-bottom: 20px;">

    <div class="card">
      <div class="card-body">
        <h6 class="card-title"><span>Your Details</span></h6>
        <div class="form-group row">
          <label for="first_name" class="col-md-4 col-form-label">First name <span class="font-weight-bold text-danger">*</span></label>
          <div class="col-md-8">
            <input class="form-control" type="text" name="first_name" id="first_name" value="{{ old('first_name') }}">
            @error('first_name')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>* {{ $message }}</strong>
                </span>
            @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="last_name" class="col-md-4 col-form-label">Last name <span class="font-weight-bold text-danger">*</span></label>
          <div class="col-md-8">
            <input class="form-control" type="text" name="last_name" id="last_name" value="{{ old('last_name') }}">
            @error('last_name')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>* {{ $message }}</strong>
                </span>
            @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="email" class="col-md-4 col-form-label">Email address <span class="font-weight-bold text-danger">*</span></label>
          <div class="col-md-8">
            <input class="form-control" type="email" name="email" id="email" value="{{ old('email') }}">
            @error('email')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>* {{ $message }}</strong>
                </span>
            @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="contact_number" class="col-md-4 col-form-label">Contact number</label>
          <div class="col-md-8">
            <input class="form-control" type="text" name="contact_number" id="contact_number" value="{{ old('contact_number') }}">
          </div>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-body">
        <h6 class="card-title"><span>Your Company Info</span></h6>
        <div class="form-group row">
          <label for="company" class="col-md-4 col-form-label">Company <span class="font-weight-bold text-danger">*</span></label>
          <div class="col-md-8">
            <input class="form-control" type="text" name="company" id="company" value="{{ old('company') }}">
            @error('company')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>* {{ $message }}</strong>
                </span>
            @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="deparmtent" class="col-md-4 col-form-label">Department</label>
          <div class="col-md-8">
            <input class="form-control" type="text" name="department" id="department" value="{{ old('department') }}">
          </div>
        </div>
        <div class="form-group row">
          <label for="position" class="col-md-4 col-form-label">Position</label>
          <div class="col-md-8">
            <input class="form-control" type="text" name="position" id="position" value="{{ old('position') }}">
          </div>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-body">
        <h6 class="card-title"><span>Your Message</span></h6>
        <div class="form-group row">
          <label for="interest" class="col-md-4 col-form-label">Interest <span class="font-weight-bold text-danger">*</span></label>
          <div class="col-md-8">
            <select class="form-control" name="interest" id="interest">
              <option disabled selected value="">-- Choose</option>
              <option{{ old('interest') == 'General Comment/Question' ? ' selected' : '' }}>General Comment/Question</option>
              <option{{ old('interest') == 'Specialty OEM Program' ? ' selected' : '' }}>Specialty OEM Program</option>
              <option{{ old('interest') == 'Reman Program' ? ' selected' : '' }}>Reman Program</option>
              <option{{ old('interest') == 'Customer Care' ? ' selected' : '' }}>Customer Care</option>
              <option{{ old('interest') == 'Technical Support' ? ' selected' : '' }}>Technical Support</option>
              <option{{ old('interest') == 'Press Contact' ? ' selected' : '' }}>Press Contact</option>
            </select>
            @error('interest')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>* {{ $message }}</strong>
                </span>
            @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="heard_about" class="col-md-4 col-form-label">How did you hear about Simco?</label>
          <div class="col-md-8">
            <input class="form-control" type="text" name="heard_about" id="heard_about" value="{{ old('heard_about') }}">
          </div>
        </div>
        <div class="form-group row">
          <label for="text_message" class="col-md-4 col-form-label">Message</label>
          <div class="col-md-8">
            <textarea class="form-control" name="text_message" rows="3" id="text_message" value="{{ old('text_message') }}"></textarea>
          </div>
        </div>
      </div>
    </div>
    <style>
    .g-recaptcha div,
    .g-recaptcha div iframe,
    .rc-anchor-normal {
      max-width:100% !important;
    }
    .rc-anchor-content {
      width:180px !important;
    }
    </style>
    <div class="row">
      <div class="col-12 pb-4">
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <div class="g-recaptcha" data-sitekey="6LfT-7QUAAAAABwnTk3G02mBwAIQwn7-jHTGcH64"></div>
        @if ($errors->has('g-recaptcha-response'))
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
            </span>
        @endif
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-primary">SEND MESSAGE</button>
      </div>
    </div>

    @csrf
    </form>

  </div>
</div>
@endsection

@section('scripts')
@endsection
