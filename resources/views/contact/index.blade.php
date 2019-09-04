@extends('layouts.tertiary')

@section('title')
  Contact - Simco Ltd. Specialty Innovation and Manufacturing Company
@endsection

@section('content')
<h1>Contact Us</h1>
<p>Below you will find our contact information. The quick email form is also provided for a convenient way to contact us. The fields marked with <span class="font-weight-bold text-danger">*</span> are required.</p>

<form>

<div class="card">
  <div class="card-body">
    <h6 class="card-title"><span>Your Details</span></h6>
    <div class="form-group row">
      <label for="firstName" class="col-md-4 col-form-label">First name <span class="font-weight-bold text-danger">*</span></label>
      <div class="col-md-8">
        <input type="text" class="form-control" id="firstName" required>
      </div>
    </div>
    <div class="form-group row">
      <label for="lastName" class="col-md-4 col-form-label">Last name <span class="font-weight-bold text-danger">*</span></label>
      <div class="col-md-8">
        <input type="text" class="form-control" id="lastName" required>
      </div>
    </div>
    <div class="form-group row">
      <label for="email" class="col-md-4 col-form-label">Email address <span class="font-weight-bold text-danger">*</span></label>
      <div class="col-md-8">
        <input type="email" class="form-control" id="email" required>
      </div>
    </div>
    <div class="form-group row">
      <label for="contactNumber" class="col-md-4 col-form-label">Contact number</label>
      <div class="col-md-8">
        <input type="text" class="form-control" id="contactNumber">
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
        <input type="text" class="form-control" id="company" required>
      </div>
    </div>
    <div class="form-group row">
      <label for="deparmtent" class="col-md-4 col-form-label">Department</label>
      <div class="col-md-8">
        <input type="text" class="form-control" id="deparmtent">
      </div>
    </div>
    <div class="form-group row">
      <label for="position" class="col-md-4 col-form-label">Position</label>
      <div class="col-md-8">
        <input type="text" class="form-control" id="position">
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
        <select class="form-control" id="interest" required>
          <option selected="true" disabled="disabled">-- Choose</option>
          <option>General Comment/Question</option>
          <option>Specialty OEM Program</option>
          <option>Customer Care</option>
          <option>Technical Support</option>
          <option>Press Contact</option>
        </select>
      </div>
    </div>
    <div class="form-group row">
      <label for="hearAbout" class="col-md-4 col-form-label">How did you hear about Simco?</label>
      <div class="col-md-8">
        <input type="text" class="form-control" id="hearAbout">
      </div>
    </div>
    <div class="form-group row">
      <label for="message" class="col-md-4 col-form-label">Message</label>
      <div class="col-md-8">
        <textarea class="form-control" id="message" rows="3"></textarea>
      </div>
    </div>
  </div>
</div>

<div class="d-flex">
  <div class="">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <div class="g-recaptcha" data-sitekey="6LfT-7QUAAAAABwnTk3G02mBwAIQwn7-jHTGcH64"></div>
    <!--
    <img src="https://developers.google.com/recaptcha/images/newCaptchaAnchor.gif" width="300" style="max-width:100%;">
    -->
  </div>
  <div class="mt-auto ml-auto">
    <button type="submit" class="btn btn-primary">SEND MESSAGE</button>
  </div>
</div>

</form>
@endsection

@section('scripts')
@endsection
