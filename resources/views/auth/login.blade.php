@extends('layouts.app')

@section('content')


    <!-- /.login-logo -->
    <div class="card card-outline card-danger">
      
      <div class="card-body">
       
  
        <form method="POST" action="{{ route('login') }}">
            @csrf
          <div class="input-group mb-3">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
             name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
             name="password" required autocomplete="current-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-3">
             
            </div>
            <!-- /.col -->
            <div class="col-6">
              <button type="submit" class="btn btn-danger btn-block">{{ __('Login') }}</button>
            </div>
            <!-- /.col -->
            <div class="col-3">
             
            </div>
          </div>
        </form>
  
        
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
 
 
@endsection
