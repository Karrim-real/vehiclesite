@extends('layouts.pages')
@section('content')
     <!-- Car Section Begin -->
     <section class="car spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="car__sidebar">
                       
                        <div class="hero__tab__form car__filter">
                            <h5>Car Filter</h5>
                            <form action="{{ url('my-search') }}" method="GET">
                                @csrf
                                <div class="select-list" data-live-search="true">
                                <div class="select-list-item">
                                    <select class="form-control required" name="make" id="sub_model_name">
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
                           
                                </div>
                                <div class="car__filter__btn">
                                    <button id="search" type="submit" class="site-btn">Search Vehicle</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="car__filter__option">
                       
                        <!-- <div class="row">
                            <div class="col-lg-6 col-md-6">
                                
                                <div class="car__filter__option__item">
                                    <h6>Show On Page</h6>
                                    <select>
                                        <option value="">9 Car</option>
                                        <option value="">15 Car</option>
                                        <option value="">20 Car</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="car__filter__option__item car__filter__option__item--right">
                                    <h6>Sort By</h6>
                                    <select>
                                        <option value="">Price: Highest Fist</option>
                                        <option value="">Price: Lowest Fist</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    -->
                    <div class="row">
                        @foreach ($vehicles as $vehicle)
                            
                        
                        <div class="col-lg-4 col-md-4">
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
            </div>
        </div>
    </section>
    <!-- Car Section End -->
@endsection