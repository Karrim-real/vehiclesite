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

                <div class="row">
                    @forelse ($data as $search)


                    <div class="col-lg-4 col-md-4">
                        <div class="car__item">
                            <div class="car__item__pic__slider owl-carousel">
                                @foreach ($search->vehicleImages as $image)
                                <img src="{{ asset("$image->image") }}" alt="ESR Executive Super Rides Limited">
                                @endforeach
                            </div>
                            <div class="car__item__text">
                                <div class="car__item__text__inner">
                                   <h5><a href="{{url('vehicle-details',$search->id)}}">{{ $search->makes->name }} {{ $search->models->name }}</a></h5>
                                   <ul>
                                    <li>{{$search->fuel}}</li>
                                    <li>{{$search->transmission->name}}</li>
                                    <li>{{$search->year}}</li>
                                   </ul>
                                </div>
                             </div>
                        </div>
                    </div>
                    @empty
                       My Search Not Results Found
                    @endforelse
                </div>

            </div>
        </div>
    </div>
</section>
<!-- Car Section End -->

@endsection
