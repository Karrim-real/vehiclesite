@extends('layouts.pages')

@section('content')
    
 <!-- Template Main CSS File -->
 <link href="{{asset('assets/css/style.css') }}" rel="stylesheet">
 <!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center">
<div class="container d-flex flex-column align-items-center">

  <h1>ESR</h1>
  <h2>Blog page coming soon</h2>
  <div class="countdown d-flex justify-content-center" data-count="2022/7/1">
    <div>
      <h3>%d</h3>
      <h4>Days</h4>
    </div>
    <div>
      <h3>%h</h3>
      <h4>Hours</h4>
    </div>
    <div>
      <h3>%m</h3>
      <h4>Minutes</h4>
    </div>
    <div>
      <h3>%s</h3>
      <h4>Seconds</h4>
    </div>
  </div>



  <div class="social-links text-center">
    <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
  </div>

</div>
</header><!-- End #header -->
<!-- Template Main JS File -->
<script src="{{ asset('assets/js/main.js') }}"></script>
@endsection