@extends('adminlayouts.main')

@section('title', 'Tambah Data Kriteria')

@section('page_name', 'Tambah Data Kriteria')

@section('content')
        

  <div class="content">
    
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
            <div class="card">
                <div class="card-header card-header-primary">
                <p class="card-category"></p>
                <h4 class="card-title ">Tambah Data Kriteria</h4>
                <p class="card-category"></p>
                </div>
                <div class="card-body">
      

                    <form method="post" action="/data_kriteria/store">
                      @csrf
                        {{-- <div class="form-group">
                          <label for="exampleInputEmail1">Nama Utilitas</label>
                          <input type="text" class="form-control" name="nama_utilitas"  placeholder="Nama Utilitas">
                        </div> --}}

                        <div class="card-body ">
                          <div class="row">
                            <label class="col-sm-2 col-form-label">{{ __('Nama Kriteria') }}</label>
                            <div class="col-sm-7">
                              <div class="form-group">
                                <input class="form-control" name="nama_kriteria" id="category" type="text" placeholder="{{ __('Nama Kriteria') }}"   />
                              </div>
                            </div>
                          </div>            
                       
                          <div class="row">
                            <label class="col-sm-2 col-form-label">{{ __('Bobot Kriteria') }}</label>
                            <div class="col-sm-7">
                              <div class="form-group">
                                <input class="form-control" name="bobot_kriteria" id="category" type="text" placeholder="{{ __('Bobot Kriteria : 1 - 100') }}"  />
                              </div>
                            </div>
                          </div>            
                        </div>
                      
                          
                        <button type="submit" class="btn btn-primary float-right">Simpan</button>
                        {{-- <button type="button"><a class="btn btn-secondary pull-right" href="/data_utilitas">Kembali</a></button> --}}
                        <a type="button" class="btn btn-secondary float-right" href="/data_kriteria">Kembali</a>
                        {{-- <button type="button" class="btn btn-secondary pull-right">YOI</button> --}}
                      </form>
                      

                </div>
            </div>
            </div>
        </div>
        </div>

  </div>


@endsection