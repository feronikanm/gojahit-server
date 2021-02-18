@extends('adminlayouts.main')

@section('title', 'Edit Data Kategori')

@section('page_name', 'Edit Data Kategori')

@section('content')
        

  <div class="content">
    
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
            <div class="card">
                <div class="card-header card-header-primary">
                <p class="card-category"></p>
                <h4 class="card-title ">Edit Data Kategori1</h4>
                <p class="card-category"></p>
                </div>
                <div class="card-body">
      

                    <form method="post" action="/data_kategori/update/{{ $data->id_kategori }}" enctype="multipart/form-data">
                      @csrf

                      <input type="hidden" name="id_kategori" id="id_kategori" value="{{ $data->id_kategori }}">

                        {{-- <div class="form-group">
                          <label for="exampleInputEmail1">Nama Kategori</label>
                          <input type="text" class="form-control" name="nama_kategori"  value="{{ $data->nama_kategori }}">
                        </div> --}}


                        <div class="row">
                          <label class="col-sm-2 col-form-label">{{ __('Nama Kategori') }}</label>
                          <div class="col-sm-7">
                            <div class="form-group">
                              <input class="form-control" name="nama_kategori" id="category" type="text" placeholder="{{ __('Nama Kategori') }}" value="{{ $data->nama_kategori }}"  />
                            </div>
                          </div>
                        </div>
                      
                        <div class="row">
                          <label for="image" class="col-sm-2 col-form-label">Gambar Kategori</label>
                          <img src="{{ url('img_kategori/'.$data->gambar_kategori) }}" style="width: 120px; height: 120px; border-radius: 10px;" class="card-img-top mb-3" alt="...">
                          <div class="col-sm-7">
                            <input id="gambar_kategori" type="file" class="form-control" name="gambar_kategori" >
                            <img src="#" id="category-img-tag" width="200px"  />   <!--for preview purpose -->
                          </div>
                          
                        </div>   

                        <button type="submit" class="btn btn-primary float-right">Simpan</button>
                        <a type="button" class="btn btn-secondary float-right" href="/data_kategori">Kembali</a>
                      </form>
                      

                </div>
            </div>
            </div>
        </div>
        </div>

  </div>


@endsection