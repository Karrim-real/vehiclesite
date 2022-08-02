@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Edit Vehicle</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item active">Edit Vehicle</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  @if(session('message'))
  <div class="alert alert-success alert-dismissible fade show">{{ session('message') }}</div>
  @endif

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-10">
              <!-- general form elements -->
              <div class="card card-danger">
                <div class="card-header">
                  <h3 class="card-title">Edit Vehicle</h3>
                </div>
                @if ($errors->any())
                <div class="alert alert-warning">
                  @foreach ($errors->all() as $error)
                      <div>{{ $error }}</div>
                  @endforeach
                </div>
                    
                @endif

                @php
                    $features = explode(",", $vehicle->features);
                @endphp
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ url('vehicles/'.$vehicle->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                  <div class="card-body">
                    <div class="form-group">
                      <label>Transmission</label>
                      <select name="makes_id" class="form-control select2bs4" style="width: 100%;">
                        @foreach ($makes as $make)
                        <option value="{{ $make->id }}" {{ $make->id ==$vehicle->makes_id ? 'selected':'' }}>
                          {{ $make->name }}</option> 
                        @endforeach
                       
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Transmission</label>
                      <select name="models_id" class="form-control select2bs4" style="width: 100%;">
                        @foreach ($models as $model)
                        <option value="{{ $model->id }}" {{ $model->id ==$vehicle->models_id ? 'selected':'' }}>
                          {{ $model->name }}</option> 
                        @endforeach
                       
                      </select>
                    </div>
                      <div class="form-group">
                        <label for="year">Year</label>
                        <input type="text" name="year" value="{{ $vehicle->year }}" class="form-control" id="year" placeholder="Enter Year">
                      </div>
                        <!-- textarea -->
                        <div class="form-group">
                          <label>Description</label>
                          <textarea name="description"  class="form-control" rows="3">{{ $vehicle->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="capacity">Capacity</label>
                            <input type="text" name="capacity" value="{{ $vehicle->capacity }}" class="form-control" id="capacity" placeholder="Enter Capacity">
                          </div>
                          <div class="form-group">
                            <label for="fuel">Fuel</label>
                            <input type="text" name="fuel" value="{{ $vehicle->fuel }}" class="form-control" id="fuel" placeholder="Enter Fuel">
                          </div>
                          <div class="form-group">
                            <label for="color">Color</label>
                            <input type="text" name="color" value="{{ $vehicle->color }}" class="form-control" id="color" placeholder="Enter Color">
                          </div>

                          <div class="form-group">
                            <label for="File">Main Image</label>
                            <input class="form-control" type="file" name="main_image" id="">
                            <img src="{{ asset("$vehicle->main_image") }}" style="width: 90px; height: 60px;" alt="">
                          </div>

                          <div class="form-group">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Transmission</label>
                                        <select name="transmission_id" class="form-control select2bs4" style="width: 100%;">
                                          @foreach ($transmissions as $transmission)
                                          <option value="{{ $transmission->id }}" {{ $transmission->id ==$vehicle->transmission_id ? 'selected':'' }}>
                                            {{ $transmission->name }}</option> 
                                          @endforeach
                                         
                                        </select>
                                      </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Drive Type</label>
                                        <select name="drive_id" class="form-control select2bs4" style="width: 100%;">
                                          
                                        @foreach ($drives as $drive)
                                        <option value="{{ $drive->id }}" {{ $drive->id ==$vehicle->drive_id ? 'selected':'' }}>{{ $drive->name }}</option>  
                                        @endforeach
                                        </select>
                                      </div>
                                </div>
                                      <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>Body Type</label>
                                            <select name="body_id" class="form-control select2bs4" style="width: 100%;">
                                              @foreach ($bodies as $body)
                                                <option value="{{ $body->id }}" {{ $body->id ==$vehicle->body_id ? 'selected':'' }}>{{ $body->name }}</option> 
                                              @endforeach
                                            </select>
                                          </div>
                                    </div>
                                </div>
                            </div>
                         
                         <!-- Minimal red style -->
                  <div class="form-group">
                    <div class="row">
                        
                        <div class="col-sm-3">
                            <div class="form-check">
                                <input name="features[]" value="Radio" @if(in_array("Radio", $features)) checked @endif class="form-check-input" type="checkbox" id="flexCheckDefault">
                                <label class="form-check-label">
                                  Radio
                                </label>
                              </div>
                              
                        </div>
                        <div class="col-sm-3">
                            <div class="form-check">
                                <input name="features[]" value="CD Player" @if(in_array("CD Player", $features)) checked @endif class="form-check-input" type="checkbox"  id="flexCheckChecked">
                                
                                <label class="form-check-label">
                                  CD Player
                                </label>
                              </div>
                          </div>
                          <div class="col-sm-3">
                            <div class="form-check">
                                <input name="features[]" value="Airbags" @if(in_array("Airbags", $features)) checked @endif class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label">
                                Airbags
                                </label>
                              </div>
                          </div>
                          <div class="col-sm-3">
                            <div class="form-check">
                                <input name="features[]" value="Navigation System" @if(in_array("Navigation System", $features)) checked @endif  class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label">
                                  Navigation System
                                </label>
                              </div>
                          </div>
                          <div class="col-sm-3">
                            <div class="form-check">
                                <input name="features[]" value="Alloy Rims" @if(in_array("Alloy Rims", $features)) checked @endif class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label">
                                  Alloy Rims
                                </label>
                              </div>
                          </div>
                          <div class="col-sm-3">
                            <div class="form-check">
                                <input name="features[]" value="Electric Side Mirrors" @if(in_array("Electric Side Mirrors", $features)) checked @endif class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label">
                                  Electric Side Mirrors
                                </label>
                              </div>
                          </div>
                          <div class="col-sm-3">
                            <div class="form-check">
                                <input name="features[]" value="Parking Sensors" @if(in_array("Parking Sensors", $features)) checked @endif class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label">
                                  Parking Sensors
                                </label>
                              </div>
                          </div>
                          <div class="col-sm-3">
                            <div class="form-check">
                                <input name="features[]" value="Display Screen" @if(in_array("Display Screen", $features)) checked @endif class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label">
                                  Display Screen
                                </label>
                              </div>
                          </div>
                          <div class="col-sm-3">
                            <div class="">
                                <input name="features[]" value="Central Locking" @if(in_array("Central Locking", $features)) checked @endif class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label">
                                  Central Locking
                                </label>
                              </div>
                          </div>
                          <div class="col-sm-3">
                            <div class="form-check">
                                <input name="features[]" value="Bluetooth" @if(in_array("Bluetooth", $features)) checked @endif class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label">
                                  Bluetooth
                                </label>
                              </div>
                          </div>
                          <div class="col-sm-3">
                            <div class="form-check">
                                <input name="features[]" value="Sunroof" @if(in_array("Sunroof", $features)) checked @endif class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label">
                                  Sunroof
                                </label>
                              </div>
                          </div>
                          <div class="col-sm-3">
                            <div class="form-check">
                                <input name="features[]" value="Cruise Control" @if(in_array("Cruise Control", $features)) checked @endif class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label">
                                  Cruise Control
                                </label>
                              </div>
                          </div>
                          <div class="col-sm-3">
                            <div class="form-check">
                                <input name="features[]" value="Fog Lights" @if(in_array("Fog Lights", $features)) checked @endif class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label">
                                  Fog Lights
                                </label>
                              </div>
                          </div>
                          <div class="col-sm-3">
                            <div class="form-check">
                                <input name="features[]" value="Spare Wheel" @if(in_array("Spare Wheel", $features)) checked @endif class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label">
                                 Spare Wheel
                                </label>
                              </div>
                          </div>
                          <div class="col-sm-3">
                            <div class="form-check">
                                <input name="features[]" value="Camera" @if(in_array("Camera", $features)) checked @endif class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label">
                                 Camera
                                </label>
                              </div>
                          </div>
                          <div class="col-sm-3">
                            <div class="form-check">
                                <input name="features[]" value="Cup Holders" @if(in_array("Cup Holders", $features)) checked @endif class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label">
                                 Cup Holders
                                </label>
                              </div>
                          </div>
                          <div class="col-sm-3">
                            <div class="form-check">
                                <input name="features[]" value="Armrest" @if(in_array("Armrest", $features)) checked @endif class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label">
                               Armrests
                                </label>
                              </div>
                          </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input name="image[]" type="file" class="custom-file-input" multiple>
                        <label class="custom-file-label">Choose vehicle images</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                </div>
                <div class="container">
                    <div class="form-group">
                          @if($vehicle->vehicleImages)
                        <div class="row">
                          <div class="col-sm-3">
                             <div class="form-check">
                            @foreach($vehicle->vehicleImages as $image)
                         <img src="{{ asset($image->image) }}" alt="Img"
                        class="me-4 border" style="width: 80px; height: 80px;">
                        <a style="color: #ed2424;" href="{{ url('vehicle-image/'.$image->id.'/delete') }}" class="d-block"><i class="fa fa-trash" aria-hidden="true"></i></a>
                      </div>    
                      </div>
                            @endforeach
                        </div> 
                       @else
                        <h5 style="color: black;">No Image Added</h5>
                       @endif
                    </div>
                  </div>
                  <div class="form-group">
                      <div class="card-footer">
                    <button style="float: right;" type="submit" class="btn btn-danger">Update Vehicle</button>
                  </div>
                  </div>
                </div>   
                  <!-- /.card-body -->
    
                
                </form>
              </div>
              <!-- /.card -->
    
    
            </div>
            <!--/.col (left) -->
          
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->

  @endsection