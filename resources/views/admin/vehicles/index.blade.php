@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>All Vehicles</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('esr-dashboard')}}">Home</a></li>
            <li class="breadcrumb-item active">All Vehicles</li>
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
          <div class="col-12">
           
            <!-- /.card -->

            <div class="card">
              
              <div class="card-header">
                <div class="row">
                  <div class="col-md-6">
                     <h3 class="card-title">All Vehicles</h3>
                  </div>
                <div class="col-md-6">
                  <button type="button" style="" class="btn btn-danger"><a style="color:azure;" href="/create-vehicle">Add Vehicle</a></button>
                </div>
               
                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Image</th>
                    <th>Make</th>
                    <th>Model</th>
                    <th>Year</th>
                    <th>Capacity</th>
                    <th>Description</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                   @foreach ($vehicles as $vehicle)
                  <tbody>
                  <tr>

                    <td>
                        <img src="{{ asset("$vehicle->main_image") }}" style="width: 90px; height: 60px;" alt="">
                    </td>
                    <td>{{ $vehicle->makes->name }}</td>
                    <td>{{ $vehicle->models->name }}</td>
                    <td>{{ $vehicle->year }}</td>
                    <td>{{ $vehicle->capacity }}</td>
                    <td>{{$vehicle->description }}</td>
                    <td>
                      <div class="row">
                      <div class="col-md-4">
                         <a href="{{ url('vehicles/'.$vehicle->id.'/edit') }}" class="btn btn-sm btn-info"><i class="fa-solid fa-pen-to-square"></i></a>
                      </div>  
                      <div class="col-md-4">
                        <a href="{{url('show',$vehicle->id)}}"  class="btn btn-sm btn-success"><i class="fa-solid fa-eye"></i></a>
                      </div>
                      <div class="col-md-4">
                        <a href="{{ url('vehicles/'.$vehicle->id.'/delete') }}" onclick="return confirm('Are you sure you want to DELETE vehicle?')" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash-can"></i></a>
                      </div>

                      
                      </div>
                      
                       
                     </td>
                   
                   
                  </tr>
                  <!-- 
                  <tr>
                    <td colspan="7"> No Vehicles Available</td>
                   </tr>
                  --->
                  </tbody>
                   @endforeach
                  <tfoot>
                  <tr>
                    <th>Image</th>
                    <th>Make</th>
                    <th>Model</th>
                    <th>Year</th>
                    <th>Capacity</th>
                    <th>Description</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    
@endsection