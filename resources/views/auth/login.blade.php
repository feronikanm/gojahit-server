@extends('adminlayouts.welcome_main')

@section('title', 'Login')

@section('page_name', 'Login')

@section('content')
    

<style>
    .elevation-2 {
      box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23) !important;
    }

    .elevation-3 {
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23) !important;
    }

    .img-circle {
      border-radius: 50%;
    }

    .brand-image {
      background-color:rgba(255, 255, 255, 0.12);
    }

    h4 {
      text-shadow: 2px 2px #08080871;
    }

  </style>

  <div class="page-header header-filter" style="background-image: url('../assets/img/city.jpg'); background-size: cover; background-position: top center;">
    <div class="container mt-5">
      <div class="row mt-5">
        <div class="col-lg-6 col-md-6 ml-auto mr-auto mt-5">
          <div class="card card-login">
              <div class="card-header card-header-primary text-center">
                <hr>
                
                <a href="/"><h4 class="card-title">Login Admin GoJahit</h4></a>
                <hr>
                {{-- <br> --}}
                <div class="social-line">
                  <a href="https://github.com/feronikanm" target="_blank" class="simple-text logo-normal">
                    <img src="{{ url('assets/img/icon_mesin_jahit.png') }}" alt="Go Jahit Logo" class="brand-image img-circle elevation-3" style="opacity: 1.0" width="140" height="140">
                  </a>
                </div>
                <br>
                
              </div>


              {{-- <p class="description text-center">Welcome Admin</p> --}}

              <div class="card-body">
                <form method="POST" action="{{ route('login') }}">

                  @csrf

                  <div class="card-body">

                    <div class="form-group">
                      <div class="row">
                          <label for="email" class="col-sm-4 col-form-label text-md-right"><i class="material-icons">account_circle</i></label>
                          <div class="col-sm-6">
                        
                          <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Username" autofocus>
                          {{-- <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus> --}}

                              @error('email')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <label for="password" class="col-sm-4 col-form-label text-md-right"><i class="material-icons">lock_outline</i></label>
                            <div class="col-sm-6">
                          
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                  </div>

                  {{-- <div class="footer text-center">
                    <a href="#pablo" class="btn btn-primary btn-link btn-wd btn-lg">Get Started</a>
                  </div> --}}


                  <div class="form-group row mb-0">
                    <div class="mr-auto ml-auto">
                        <button type="submit" class="btn btn-primary btn-wd">
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('password.request'))
                            {{-- <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a> --}}
                        @endif
                      </div>
                  </div>
            </form>
          </div>


          </div>
        </div>
      </div>
    </div>
    <footer class="footer">
      <div class="container">
        
        <div class="copyright float-right">
          GoJahit
          &copy;
          <script>
            document.write(new Date().getFullYear())
          </script> Develop with <i class="material-icons">favorite</i> by
          <a href="https://github.com/feronikanm" target="_blank">feronikanm</a>
        </div>
      </div>
    </footer>
  </div>





@endsection


{{-- @extends('layouts.app')

@section('content')

@endsection --}}
