@extends('adminpro.main')
{{-- @extends('adminlayouts.main') --}}

@section('title', 'Tambah Data Kriteria')

@section('page_name', 'Tambah Data Kriteria')

@section('content')
        

  <div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
            <div class="card">


                  <div class="card-header card-header-tabs" data-background-color="purple">
                    <h4 class="card-title ">Tambah Data Kriteria</h4>
                  </div>

                {{-- <div class="card-header card-header-primary">
                  <p class="card-category"></p>
                  <h4 class="card-title ">Tambah Data Kriteria</h4>
                  <p class="card-category"></p>
                </div> --}}
                <div class="card-content">
      

                    <form method="post" action="/data_kriteria/store" class="form-horizontal">
                      @csrf
                        {{-- <div class="form-group">
                          <label for="exampleInputEmail1">Nama Utilitas</label>
                          <input type="text" class="form-control" name="nama_utilitas"  placeholder="Nama Utilitas">
                        </div> --}}

                        {{-- <div class="card-content ">
                          <div class="row">
                            <label class="col-sm-2 col-form-label">{{ __('Nama Kriteria') }}</label>
                            <div class="col-sm-7">
                              <div class="form-group">
                                <input class="form-control" name="nama_kriteria" id="category" type="text" placeholder="{{ __('Nama Kriteria') }}"   />
                              </div>
                            </div>
                          </div>             --}}
                       
                          <div class="row">
                            <label class="col-sm-2 label-on-left">Nama Kriteria</label>
                            <div class="col-sm-7">
                                <div class="form-group label-floating is-empty">
                                    <input class="form-control" name="nama_kriteria" type="text" placeholder="Nama Kriteria"  autofocus />
                                </div>
                            </div>
                          </div>

                          {{-- <div class="row">
                            <label class="col-sm-2 col-form-label">{{ __('Bobot Kriteria') }}</label>
                            <div class="col-sm-7">
                              <div class="form-group">
                                <input class="form-control" name="bobot_kriteria" id="category" type="text" placeholder="{{ __('Bobot Kriteria : 1 - 100') }}"  />
                              </div>
                            </div>
                          </div>            
                        </div> --}}

                        <div class="row">
                          <label class="col-sm-2 label-on-left">Bobot Kriteria</label>
                          <div class="col-sm-7">
                              <div class="form-group label-floating is-empty">
                                  <input class="form-control" name="bobot_kriteria" type="number" placeholder="Nama Ukuran" />
                              </div>
                          </div>
                        </div>
                      
                          
                        {{-- <button type="submit" class="btn btn-primary float-right">Simpan</button>
                        <a type="button" class="btn btn-secondary float-right" href="/data_kriteria">Kembali</a> --}}

                        
                      
                        <div class="form-footer text-right">
                          <div class="checkbox pull-left">
                            <div class="category form-category">
                            </div>
                          </div>
                          <a type="button" class="btn btn-white pull-fill" href="/data_kriteria">Kembali</a>
                          <button type="submit" class="btn btn-primary pull-fill">Simpan</button>
                        </div>  


                      </form>
                      

                </div>
            </div>
            </div>
        </div>
        </div>

  </div>


@endsection