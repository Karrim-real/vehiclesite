@extends('layouts.admin')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Carousel</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('esr-dashboard')}}">Home</a></li>
            <li class="breadcrumb-item active">Carousel</li>
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
                     <h3 class="card-title">Carousel</h3>
                  </div>
                <div class="col-md-6">
                  <button type="button" style="" class="btn btn-danger"><a style="color:azure;" href="/create">Add Carousel</a></button>
                </div>
               
                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Image</th>
                    <th>Action</th>
                  </tr>
                  </thead>

                  @foreach ($carousels as $carousel)
                  <tbody>
                  <tr>
                    <td><img src="{{ asset($carousel->image) }}" style="height: 70px; width: 100px;" alt="product"> </td>
                    <td>
                        <form action="{{ route('carousels.destroy', $carousel->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Are you sure you want to DELETE Carousel?')" class="btn btn-sm btn-danger" class="btn btn-danger" type="submit">Delete</button>
                          </form>
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