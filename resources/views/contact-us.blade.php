@extends('layouts.pages')

@section('content')
    
<!-- Breadcrumb End -->
<div class="breadcrumb-option" >
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Contact Us</h2>
                    @if ($errors->any())
                    <div class="alert alert-warning">
                      @foreach ($errors->all() as $error)
                          <div>{{ $error }}</div>
                      @endforeach

                      @endif
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Begin -->

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5">
                    <div class="contact__text">
                        <ul>
                            <li>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.7931713749927!2d36.790585514854754!3d-1.298864536006611!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f1a76aac8bca1%3A0xa4df8d17e471e896!2sESR%20Executive%20%7C%20Executive%20Car%20Dealers%20in%20Kenya%20%7CVehicles%20For%20Sale%20in%20Kenya!5e0!3m2!1sen!2ske!4v1656744703839!5m2!1sen!2ske" width="500" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    
                            </li>
                        </ul>
                       
                    </div>
                    
                </div>
                <div class="col-lg-1 col-md-1"></div>
                <div class="col-lg-5 col-md-5">
                    @if(session('message'))
                    <div class="alert alert-success alert-dismissible fade show">{{ session('message') }}</div>
                    @endif
                    <div class="contact__form">
                        <form action="{{ route('contact.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <input name="names" type="text" placeholder="Names">
                                </div>
                                <div class="col-lg-6">
                                    <input name="phone" type="text" placeholder="Phone">
                                </div>
                            </div>
                            <input name="subject" type="text" placeholder="Subject">
                            <textarea name="comment" placeholder="Your Question, Suggestion or Comment"></textarea>
                            <button type="submit" class="site-btn">Send</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 10px;">
                <div class="col-lg-6">
                    <div class="fb-like" data-href="https://www.facebook.com/ESRExecutive" data-width="" data-layout="standard" data-action="like" data-size="large" data-share="false" data-colorscheme="light">
                    </div>
                </div>
                <div class="col-lg-6">
                    <a href="https://twitter.com/ESRExecutive" data-size="large" class="twitter-follow-button" data-show-count="false">Follow</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Contact Address Begin -->
    <div class="contact-address">
        <div class="container">
            <div class="contact__address__text">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="contact__address__item">
                            <h4>Nairobi Showroom</h4>
                            <span>Ngong Road at Kamburu Drive Junction</span>
                            <span>+254 7 07 200 100</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="contact__address__item">
                            <h4>Nanyuki Showroom</h4>
                            <span>Cedar Mall (Nanyuki Rimuruti Rd)</span>
                            <span>+254 7 43 597 530</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="contact__address__item">
                            <h4>Meru Showroom</h4>
                            <span>Makutano Junction</span>
                            <span>+254 7 43 909 603</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="contact__address__item">
                                <h4>Open Schedule</h4>
                                <span>Weekday: 07:30 am to 06:30 pm</span>
                               <span>Weekends: 07:30 am to 06:30 pm</span> 
                        </div>
                    </div>
                  
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Address End -->
    @endsection