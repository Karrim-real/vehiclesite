@extends('layouts.pages')
@section('content')
<!-- Hero Section Begin -->
<section class="hero spad set-bg" data-setbg="{{ asset('img/juke.jpg') }}">
   <!-- data-setbg="img/juke.jpg" add image-->
   <div class="container">
      <div class="row">
         <div class="col-lg-1"></div>
         <div class="col-lg-7">
            <div class="hero__tab overflow-hidden">
               <div class="tab-content">
                  <div class="tab-pane active" id="tabs-1" role="tabpanel">

                   <div class="notice">
                       <!--     Place Ad or notice-->
                       @foreach ($carousels as $carousel)
                       <img style="object-fit: fill;" src="{{ asset("$carousel->image") }}" alt="ESR Executive Super Rides Limited">
                   @endforeach
                     </div><!---->
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-4">
            <div class="hero__tab">
               <div class="tab-content">
                  <div class="tab-pane active" id="tabs-1" role="tabpanel">
                     <div class="hero__tab__form">
                        <span style="font-weight: bold;">Find Your Dream Car</span>
                        <form id="resetForm" action="{{ url('my-search') }}" method="POST">
                           @csrf
                           <div class="select-list" data-live-search="true">
                              <div class="select-list-item">
                                 <select class="form-control required " placeholder="Select Make" id="sub_model_name">
                            <option value="0" disabled selected>Select Make*</option>
                            @foreach($data as $make)
                            <option  data-spy="scroll"  value="{{ $make->id }}">
                                {{ ucfirst($make->name) }}</option>
                            @endforeach
                        </select>
                              </div>
                              <div class="select-list-item">
                                 <select class="form-control required" placeholder="Select Model" id="model">
                             </select>

                              </div>

                              <div class="select-list-item">
                                 <select class="form-control required" id="year" name="year">
                                    <option data-display="Year" disabled selected>Select Year</option>

                                    @foreach($years as $year)
                                       <option value="{{ $year}}">{{ $year}}</option>
                                    @endforeach

                                 </select>
                              </div>
                              <div class="select-list-item">
                                 <div class="row">
                                    <div class="col-sm-6">
                                       <p>Reset</p>
                                    </div>
                                    <div class="col-sm-6">
                                       <button type="reset" style="width: 60px; height: 30px;" class="btn btn-sm btn-primary reset" ><i class="fa-solid fa-rotate"></i></button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <button id="search" type="submit" class="site-btn">Search Vehicle</button>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Hero Section End -->
<!-- Car Section Begin -->
<section class="car spad">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="section-title">
               <h2 style="float: left;">Featured Vehicles</h2>
               <a class="" style="float: right;" href="{{ url('all-vehicles') }}">View All <i class="fa fa-chevron-right"></i></i></i></a>
            </div>
         </div>
      </div>
      <div class="row car-filter">
         @foreach ($vehicles as $vehicle)

         <div class="col-lg-3 col-md-4 col-sm-6 mix">
            <div class="car__item">
               <div class="car__item__pic__slider owl-carousel">
                  @foreach ($vehicle->vehicleImages as $image)
                   <img src="{{ asset("$image->image") }}" alt="ESR Executive Super Rides Limited">
                  @endforeach
               </div>
               <div class="car__item__text">
                  <div class="car__item__text__inner">
                     <h5><a href="{{url('vehicle-details',$vehicle->id)}}">{{$vehicle->makes->name}} {{$vehicle->models->name}}</a></h5>
                     <ul>
                        <li>{{$vehicle->fuel}}</li>
                        <li>{{$vehicle->transmission->name}}</li>
                        <li>{{$vehicle->year}}</li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>

         @endforeach
      </div>
   </div>
</section>
<!-- Car Section End -->
<!--- Google my business reviews--->
<div id="google-reviews">
<script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-5a5ce638-ad84-4200-acf3-bcd010d28aa2 "></div>
</div>
<!---end google riviews--->
<!-- Services Section Begin -->
<section class="services spad">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="section-title">
               <h2>Our Services</h2>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="services__item">
               <img src="img/services/carsales.png" alt="">
               <h5>Motor vehicle Sales</h5>
               <p>
                  If you are searching for the best on a quality pre-owned vehicle, look no further.
                  Our professional certified sales staff is eager to assist you.
               </p>
            </div>
         </div>
         <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="services__item">
               <img src="img/services/tradein.png" alt="">
               <h5>Do You want to sell a car?</h5>
               <p>
                  Our professional Valuers will take care of this business end so that you get a true value of your cherished investment. Our professional Valuers.
               </p>
            </div>
         </div>
         <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="services__item">
               <img src="img/services/financing.png" alt="">
               <h5>Asset Financing</h5>
               <p>
                  Our finance team will go above and beyond to provide you with the best finance options available that fit your lifestyle and budget.
               </p>
            </div>
         </div>
         <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="services__item">
               <img src="img/services/insurance.png" alt="">
               <h5>Vehicle Insurance</h5>
               <p>
                  Get motor insurance quotes, expert advice, and instant car insurance policy. Get motor insurance quotes & expert advice
               </p>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Services Section End -->

<!-- Cta Begin -->
<div class="cta">
   <div class="container">
      <div class="row">
         <div class="col-lg-6 col-md-6">
            <div class="cta__item set-bg" data-setbg="img/cta/cta-1.jpg">
               <h4>YOU NAME IT, WE HAVE IT</h4>
               <p>You can choose your best car from our global source including Japan</p>
               <p>Thailand</p>
               <p>USA</p>
               <p>UK</p>
               <p>Germany etc</p>
            </div>
         </div>
         <div class="col-lg-6 col-md-6">
            <div class="cta__item set-bg" data-setbg="img/cta/cta-2.jpg">
               <h4>BUYING ESSENTIALS</h4>
               <p>Keep it simple, let the Salesperson do the talk.</p>
               <p>Make sure you get preapproved for a loan, if it applies.</p>
               <p>Beware of long term car loans.</p>
               <p>Know your budget well.</p>
               <p>Be ready for optional add-ons ie sim cards, Colour Change, Insurance… etc</p>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Cta End -->

<!---Why choose us--->
<section class="services spad">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="section-title">
               <h2>Why Choose Us</h2>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-sm-6">
            <div class="card services__item">
               <div class="card-body">
                  <h5 style="font-weight: 900; font-size: 14px;" class="card-title">
                    FINANCING MADE EASY</h5>
                  <p class=""><span>Our stress-free finance department that can find financial solutions to save you money.</span></p>

               </div>
            </div>
         </div>
         <div class="col-sm-6">
            <div class="card services__item">
               <div class="card-body">
                  <h5 style="font-weight: 900; font-size: 14px;" class="card-title">WIDE RANGE OF BRANDS</h5>
                  <p class="">With a robust selection of popular vehicles on hand, as well as leading vehicles from BMW and Ford.</p>

               </div>
            </div>
         </div>
      </div>
      <div class="row" style="margin-top: 10px;">
         <div class="col-sm-6">
            <div class="card services__item">
               <div class="card-body">
                  <h5 style="font-weight: 900; font-size: 14px;" class="card-title">TRUSTED BY THOUSANDS</h5>
                  <p class="">10 new offers every day. 350 offers on site, trusted by a community of thousands of users.</p>

               </div>
            </div>
         </div>
         <div class="col-sm-6">
            <div class="card services__item">
               <div class="card-body">
                  <h5 style="font-weight: 900; font-size: 14px;" class="card-title">CAR SERVICE & MAINTENANCE</h5>
                  <p class="">Our service department maintain your car to stay safe on the road for many more years.</p>

               </div>
            </div>
         </div>
        </div>
      </div>
   </div>
</section>
<!---end why choose us---->

@endsection
