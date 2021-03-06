@extends('layouts.master')
@section('content')
<section class="container contact mt-5">
  <div class="section-title">
    <h2>Hubungi Kami</h2>
  </div>
  <div class="section-form">
  <form action="{{URL::route('pesanAdmin.store')}}" method="post" role="form" class="php-email-form">
    @csrf
    <div class="form-row">
      <div class="col-md-6 form-group">
        <input type="text" name="nama" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4"
          data-msg="Please enter at least 4 chars" />
        <div class="validate"></div>
      </div>
      <div class="col-md-6 form-group">
        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email"
          data-msg="Please enter a valid email" />
        <div class="validate"></div>
      </div>
    </div>
    <div class="form-group">
      <input type="text" class="form-control" name="judul" id="subject" placeholder="Subject" data-rule="minlen:4"
        data-msg="Please enter at least 8 chars of subject" />
      <div class="validate"></div>
    </div>
    <div class="form-group">
      <textarea class="form-control" name="pesan" rows="5" data-rule="required" data-msg="Please write something for us"
        placeholder="Message"></textarea>
      <div class="validate"></div>
    </div>
    <div class="mb-3">
      <div class="loading">Loading</div>
      <div class="error-message"></div>
      <div class="sent-message">Your message has been sent. Thank you!</div>
    </div>
    <div class="text-center"><button type="submit">Send Message</button></div>
  </form>
</div>
</section>
@endsection