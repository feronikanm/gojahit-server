@extends('adminlayouts.welcome_main')

@section('title', 'Login')

@section('page_name', 'Login')

@section('content')

<div class="content">
  <div class="container-fluid">
    

      <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-8">
                  <div class="card">
                      <div class="card-header text-center">{{ __('Login Admin') }}</div>

                      <div class="logo" style="margin: auto">
        
                          <a href="https://github.com/feronikanm" target="_blank" class="simple-text logo-normal">
                            <img src="{{ url('assets/img/icon_mesin_jahit_grey.png') }}" alt="Go Jahit Logo" class="brand-image img-circle elevation-3" style="opacity: 1.0" width="200" height="200">
                          </a>
                        </div>
      
                      <div class="card-body">
                          <form method="POST" action="{{ route('login') }}">
                              @csrf


                              {{-- <div class="row">
                                  <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('Email') }}</label>
                                  <div class="col-sm-6">
                                    <div class="form-group">
                                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                      @error('email')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror
                                    </div>
                                  </div>
                              </div>

                              <div class="row">
                                  <label for="password" class="col-sm-4 col-form-label text-md-right">{{ __('Password') }}</label>
                                  <div class="col-sm-6">
                                    <div class="form-group">
                                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
      
                                      @error('password')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror
                                    </div>
                                  </div>
                              </div> --}}

                              <div class="form-group">
                                  <div class="row">
                                      <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('Username') }}</label>
                                      <div class="col-sm-6">
                                    
                                      <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
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
                                      <label for="password" class="col-sm-4 col-form-label text-md-right">{{ __('Password') }}</label>
                                      <div class="col-sm-6">
                                    
                                          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
      
                                          @error('password')
                                              <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                              </span>
                                          @enderror
                                      </div>
                                  </div>
                              </div>

                              
      
                              {{-- <div class="form-group row">
                                  <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
      
                                  <div class="col-md-6">
                                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
      
                                      @error('email')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror
                                  </div>
                              </div>
      

                              <div class="form-group row">
                                  <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
      
                                  <div class="col-md-6">
                                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
      
                                      @error('password')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror
                                  </div>
                              </div> --}}


                              
      
                              <div class="form-group row">
                                  <div class="col-md-6 offset-md-4">

                                      <div class="form-check">
                                          <label class="form-check-label" for="remember">
                                              <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                              {{ __('Remember Me') }}
                                              <span class="form-check-sign">
                                                  <span class="check"></span>
                                              </span>
                                          </label>
                                      </div>
                                      {{-- <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
      
                                          <label class="form-check-label" for="remember">
                                              {{ __('Remember Me') }}
                                          </label>
                                      </div> --}}
                                  </div>
                              </div>
      
                              <div class="form-group row mb-0">
                                  <div class="col-md-8 offset-md-4">
                                      <button type="submit" class="btn btn-primary">
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
    

  </div>
</div>
    
 

@endsection