@extends('layouts.admin')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Vehicle Form</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="esr-dashboard">Home</a></li>
            <li class="breadcrumb-item active">Add Vehicle</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-10">
          <!-- general form elements -->
          <div class="card card-danger">
            <div class="card-header">
              <h3 class="card-title">Add Vehicle</h3>
            </div>
            @if ($errors->any())
            <div class="alert alert-warning">
              @foreach ($errors->all() as $error)
                  <div>{{ $error }}</div>
              @endforeach
            </div>

            @endif
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ url('/vehicles') }}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="card-body">


                  <div class="form-group">
                      <label>Make</label>
                      <select id="nameid" name="makes_id" class="form-control select2bs4" style="width: 100%;">
                        <option value=""></option>
                        @foreach ($makes as $make)
                        <option value="{{ $make->id }}">{{ $make->name }}</option>
                        @endforeach

                      </select>
                    </div>
                    <div class="form-group">
                      <label>Model</label>
                      <select id="model" name="models_id" class="form-control select2bs4" style="width: 100%;">
                        <option value=""></option>
                        @foreach ($models as $model)
                        <option value="{{ $model->id }}">{{ $model->name }}</option>
                        @endforeach

                      </select>
                    </div>

                  <div class="form-group">
                    <label for="year">Year</label>
                    <input type="text" name="year" class="form-control" id="year" placeholder="Enter Year">
                  </div>
                    <!-- textarea -->
                    <div class="form-group">
                      <label>Description</label>
                      <textarea name="description" class="form-control" rows="3" placeholder="Enter ..."></textarea>
                    </div>
                    <div class="form-group">
                        <label for="capacity">Capacity</label>
                        <input type="text" name="capacity" class="form-control" id="capacity" placeholder="Enter Capacity">
                      </div>
                      <div class="form-group">
                        <label for="fuel">Fuel</label>
                        <input type="text" name="fuel" class="form-control" id="fuel" placeholder="Enter Fuel">
                      </div>
                      <div class="form-group">
                        <label for="color">Color</label>
                        <input type="text" name="color" class="form-control" id="color" placeholder="Enter Color">
                      </div>
                      <div class="form-group">
                        <label for="File">Main Image</label>
                        <input class="form-control" type="file" name="main_image" id="Main Image">
                      </div>
                      <div class="form-group">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Transmission</label>
                                    <select name="transmission_id" class="form-control select2bs4" style="width: 100%;">
                                      <option value="">Transmission</option>
                                      @foreach ($transmissions as $transmission)
                                      <option value="{{ $transmission->id }}">{{ $transmission->name }}</option>
                                      @endforeach

                                    </select>
                                  </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Drive Type</label>
                                    <select name="drive_id" class="form-control select2bs4" style="width: 100%;">
                                      <option>Drive Type</option>
                                    @foreach ($drives as $drive)
                                    <option value="{{ $drive->id }}">{{ $drive->name }}</option>
                                    @endforeach
                                    </select>
                                  </div>
                            </div>
                                  <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Body Type</label>
                                        <select id="transmission" name="body_id" class="form-control select2bs4" style="width: 100%;">
                                          <option value="">Body Type</option>
                                          @foreach ($bodies as $body)
                                            <option value="{{ $body->id }}">{{ $body->name }}</option>
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
                            <input name="features[]" class="form-check-input" type="checkbox" value="Radio" id="flexCheckDefault">
                            <label class="form-check-label">
                              Radio
                            </label>
                          </div>

                    </div>
                    <div class="col-sm-3">
                        <div class="form-check">
                            <input name="features[]" class="form-check-input" type="checkbox" value="CD Player" id="flexCheckChecked">
                            <label class="form-check-label">
                              CD Player
                            </label>
                          </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="form-check">
                            <input name="features[]" class="form-check-input" type="checkbox" value="Airbags" id="flexCheckChecked">
                            <label class="form-check-label">
                            Airbags
                            </label>
                          </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="form-check">
                            <input name="features[]" class="form-check-input" type="checkbox" value="Navigation System" id="flexCheckChecked">
                            <label class="form-check-label">
                              Navigation System
                            </label>
                          </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="form-check">
                            <input name="features[]" class="form-check-input" type="checkbox" value="Alloy Rims" id="flexCheckChecked">
                            <label class="form-check-label">
                              Alloy Rims
                            </label>
                          </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="form-check">
                            <input name="features[]" class="form-check-input" type="checkbox" value="Electric Side Mirrors" id="flexCheckChecked">
                            <label class="form-check-label">
                              Electric Side Mirrors
                            </label>
                          </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="form-check">
                            <input name="features[]" class="form-check-input" type="checkbox" value="Parking Sensors" id="flexCheckChecked">
                            <label class="form-check-label">
                              Parking Sensors
                            </label>
                          </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="form-check">
                            <input name="features[]" class="form-check-input" type="checkbox" value="Display Screen" id="flexCheckChecked">
                            <label class="form-check-label">
                              Display Screen
                            </label>
                          </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="form-check">
                            <input name="features[]" class="form-check-input" type="checkbox" value="Central Locking" id="flexCheckChecked">
                            <label class="form-check-label">
                              Central Locking
                            </label>
                          </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="form-check">
                            <input name="features[]" class="form-check-input" type="checkbox" value="Bluetooth" id="flexCheckChecked">
                            <label class="form-check-label">
                              Bluetooth
                            </label>
                          </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="form-check">
                            <input name="features[]" class="form-check-input" type="checkbox" value="Sunroof" id="flexCheckChecked">
                            <label class="form-check-label">
                              Sunroof
                            </label>
                          </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="form-check">
                            <input name="features[]" class="form-check-input" type="checkbox" value="Cruise Control" id="flexCheckChecked">
                            <label class="form-check-label">
                              Cruise Control
                            </label>
                          </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="form-check">
                            <input name="features[]" class="form-check-input" type="checkbox" value="Fog Lights" id="flexCheckChecked">
                            <label class="form-check-label">
                              Fog Lights
                            </label>
                          </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="form-check">
                            <input name="features[]" class="form-check-input" type="checkbox" value="Spare Wheel" id="flexCheckChecked">
                            <label class="form-check-label">
                             Spare Wheel
                            </label>
                          </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="form-check">
                            <input name="features[]" class="form-check-input" type="checkbox" value="Camera" id="flexCheckChecked">
                            <label class="form-check-label">
                             Camera
                            </label>
                          </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="form-check">
                            <input name="features[]" class="form-check-input" type="checkbox" value="Armrest" id="flexCheckChecked">
                            <label class="form-check-label">
                             Armrest
                            </label>
                          </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="form-check">
                            <input name="features[]" class="form-check-input" type="checkbox" value="Cup Holders" id="flexCheckChecked">
                            <label class="form-check-label">
                             Cup Holders
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



            </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-danger">Add Vehicle</button>
              </div>
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
