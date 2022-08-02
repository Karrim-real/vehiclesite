@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>All Messages</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('esr-dashboard')}}">Home</a></li>
            <li class="breadcrumb-item active">All Messages</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

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
                     <h3 class="card-title">All Messages</h3>
                  </div> 
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Names</th>
                    <th>Phone Number</th>
                    <th>Subject</th>
                    <th>Message</th>
                  </tr>
                  </thead>
                   @foreach ($contacts as $contact)
                  <tbody>
                  <tr>
                   
                    <td>{{ $contact->names }}</td>
                    <td>{{ $contact->phone }}</td>
                    <td>{{ $contact->subject }}</td>
                    <td>{{ $contact->comment }}</td>
                    
                  </tr>
                  <!-- 
                  <tr>
                    <td colspan="7"> No Vehicles Available</td>
                   </tr>
                  --->
                  </tbody>
                   @endforeach
                
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