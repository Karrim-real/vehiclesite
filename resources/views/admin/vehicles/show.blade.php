@extends('layouts.admin')
@section('content')
<!-- Car Details Section Begin -->
<section class="car-details spad">
    <div class="container">
        <div class="row">
           
            <div class="col-lg-9">
                 
                <div class="car__details__pic">
                   <div class="car__details__pic__large">
                       <img class="car-big-img" src="{{ asset("$vehicle->main_image") }}" alt="ESR Executive Super Rides Limited">
                    </div>
                   <div class="car-thumbs">
                       <div class="car-thumbs-track car__thumb__slider owl-carousel">
                             @foreach ($vehicle->vehicleImages as $image)
                           <div class="ct" data-imgbigurl="{{ asset("$image->image") }}">
                               <img src="{{ asset("$image->image") }}" alt="ESR Executive Super Rides Limited">
                           </div>
                           @endforeach
                       </div>
                   </div> 
                  
                </div>

                <div class="car__details__tab">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Vehicle
                                Overview</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tabs-1" role="tabpanel">
                            <div class="car__details__tab__info">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="car__details__tab__info__item">
                                            
                                            <p>{{ $vehicle->description }}</p>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="car__details__tab__feature">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="car__details__tab__feature__item">
                                            <h5>Key Features</h5>
                                            <ul>
                                            
                                                <li>{{ $vehicle->features }}</li>
                                            
                                            </ul>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="car__details__sidebar">
                    <div class="car__details__sidebar__model">
                        <ul>
                            <li>Make <span>{{$vehicle->makes->name}}</span></li>
                            <li>Model <span>{{$vehicle->models->name}}</span></li>
                            <li>Year <span>{{ $vehicle->year }}</span></li>
                            <li>Fuel <span>{{ $vehicle->fuel }}</span></li>
                            <li>Capacity <span>{{ $vehicle->capacity }}</span></li>
                            <li>Colour <span>{{ $vehicle->color }}</span></li>
                            <li>Drivetrain <span>{{ $vehicle->drive->name }}</span></li>
                            <li>Body Type <span>{{ $vehicle->body->name }}</span></li>
                            <li>Transmission <span>{{ $vehicle->transmission->name }}</span></li>
                        </ul>
                        
                    </div>
                </div>
            </div>
           
        </div>
    </div>
 </section>
 <!-- Car Details Section End -->
@endsection