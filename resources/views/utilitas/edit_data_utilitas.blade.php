@extends('adminpro.main')
{{-- @extends('adminlayouts.main') --}}

@section('title', 'Edit Data Utilitas')

@section('page_name', 'Edit Data Utilitas')

@section('content')
        

  <div class="content">
    <div class="container-fluid">


      <div class="row">
        <div class="col-md-8">
          <div class="card">

              <div class="card-header card-header-tabs" data-background-color="purple">
                  <h4 class="card-title ">Edit Data Utilitas</h4>
              </div>
          
                <form method="post" action="/data_utilitas/update/{{ $data->id_utilitas }}" enctype="multipart/form-data" class="form-horizontal">
                  {{ csrf_field() }}


                  <div class="card-content">

                    <div class="row">
                      <label class="col-sm-2 label-on-left">Nama Utilitas</label>
                      <div class="col-sm-7">
                          <div class="form-group label-floating is-empty">
                              <input class="form-control" name="nama_utilitas" type="text" placeholder="Nama Utilitas" value="{{ $data->nama_utilitas }}" autofocus />
                          </div>
                      </div>
                    </div>

                    <div class="form-footer text-right">
                      <div class="checkbox pull-left">
                        <div class="category form-category">
                        </div>
                      </div>
                      <a type="button" class="btn btn-white pull-fill" href="/data_utilitas">Kembali</a>
                      <button type="submit" class="btn btn-primary pull-fill">Simpan</button>
                    </div>  
      
                  </div>                              
                </form>  
            </div>
          </div>
        </div>



        {{-- <div class="row">
            <div class="col-md-8">
            <div class="card">
                <div class="card-header card-header-primary">
                <p class="card-category"></p>
                <h4 class="card-title ">Edit Data Utilitas</h4>
                <p class="card-category"></p>
                </div>
                <div class="card-body">

                    <form method="post" action="/data_utilitas/update/{{ $data->id_utilitas }}">
                      @csrf

                        <div class="card-body ">
                          <div class="row">
                            <label class="col-sm-2 col-form-label">{{ __('Nama Utilitas') }}</label>
                            <div class="col-sm-7">
                              <div class="form-group">
                                <input class="form-control" name="nama_utilitas" id="category" type="text" placeholder="{{ __('Nama Utilitas') }}" value="{{ $data->nama_utilitas }}"  />
                              </div>
                            </div>
                          </div>            
                        </div>
                       
                        <button type="submit" class="btn btn-primary float-right">Simpan</button>
                        <a type="button" class="btn btn-secondary float-right" href="/data_utilitas">Kembali</a>
                      </form>
                </div>
            </div>
            </div>
        </div> --}}


      </div>
  </div>


@endsection