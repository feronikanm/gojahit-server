@extends('adminlayouts.welcome_main')

@section('title', 'Welcome')

@section('page_name', 'Welcome')

@section('content')
    


    <div class="page-header header-filter" data-parallax="true" style="background-image: url('../assets/img/city.jpg'); background-size: cover; background-position: top center;">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
             
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            {{-- <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a> --}}
                        @endif
                    @endauth
                </div>
            @endif    
            {{-- <h4 class="title">Selamat Datang</h4>        --}}
          </div>
        </div>
      </div>
    </div>

    {{-- <div class="content">
        <div class="container-fluid">
            <body class="antialiased">
                <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
                    @if (Route::has('login'))
                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                            @auth
                                <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                            @else
                                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>
        
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif             
                        Selamat datang
                      
                </div>
            </body>
        </div>
      </div> --}}

      





  @endsection