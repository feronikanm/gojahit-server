@extends('adminpro.main')
{{-- @extends('adminlayouts.main') --}}

@section('title', 'Edit Data Kriteria')

@section('page_name', 'Edit Data Kriteria')

@section('content')
        

  <div class="content">
    <div class="container-fluid">


      <div class="row">
        <div class="col-md-8">
          <div class="card">

              <div class="card-header card-header-tabs" data-background-color="purple">
                  <h4 class="card-title ">Edit Data Kriteria</h4>
              </div>
          
                <form method="post" action="/data_kriteria/update/{{ $data->id_kriteria }}" enctype="multipart/form-data" class="form-horizontal">
                  {{ csrf_field() }}


                  <div class="card-content">

                    <div class="row">
                      <label class="col-sm-2 label-on-left">Nama Kriteria</label>
                      <div class="col-sm-7">
                          <div class="form-group label-floating is-empty">
                              <input class="form-control" name="nama_utilitas" type="text" placeholder="Nama Utilitas" value="{{ $data->nama_kriteria }}" autofocus />
                          </div>
                      </div>
                    </div>

{{-- 
                    @foreach ($utilitas as $data_utilitas)

                    <div class="col-lg-5 col-md-6 col-sm-3">
                      <select class="selectpicker" data-style="btn btn-primary btn-round" title="Single Select">
                        <option value="{{ $data_utilitas->nama_utilitas }}">{{ $data_utilitas->nama_utilitas }}</option>
                      </select>
                    </div>
                      @endforeach --}}


                 

                    <div class="row">
                      <label class="col-sm-2 label-on-left">Bobot Kriteria</label>
                      <div class="col-sm-7">
                          <div class="form-group label-floating is-empty">
                              <input class="form-control" name="bobot_kriteria" type="text" placeholder="Bobot Kriteria" value="{{ $data->bobot_kriteria }}" autofocus />
                          </div>
                      </div>
                    </div>

                    <div class="form-footer text-right">
                      <div class="checkbox pull-left">
                        <div class="category form-category">
                        </div>
                      </div>
                      <a type="button" class="btn btn-white pull-fill" href="/data_kriteria">Kembali</a>
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
                <h4 class="card-title ">Edit Data Kriteria</h4>
                <p class="card-category"></p>
                </div>
                <div class="card-body">
                    <form method="post" action="/data_kriteria/update/{{ $data->id_kriteria }}">
                      @csrf
                        <div class="card-body ">
                          <div class="row">
                            <label class="col-sm-2 col-form-label">{{ __('Nama Kriteria') }}</label>
                            <div class="col-sm-7">
                              <div class="form-group">
                                <input class="form-control" name="nama_kriteria" id="category" type="text" placeholder="{{ __('Nama Kriteria') }}" value="{{ $data->nama_kriteria }}"  />
                              </div>
                            </div>
                          </div>            

                          <div class="row">
                            <label class="col-sm-2 col-form-label">{{ __('Bobot Kriteria') }}</label>
                            <div class="col-sm-7">
                              <div class="form-group">
                                <input class="form-control" name="bobot_kriteria" id="category" type="text" placeholder="{{ __('Bobot Kriteria') }}" value="{{ $data->bobot_kriteria }}"  />
                              </div>
                            </div>
                          </div>            
                        </div>
                      
                          
                        <button type="submit" class="btn btn-primary float-right">Simpan</button>
                        <a type="button" class="btn btn-secondary float-right" href="/data_kriteria">Kembali</a>
                      </form>
                      

                </div>
            </div>
            </div>
        </div> --}}


    </div>
  </div>


@endsection