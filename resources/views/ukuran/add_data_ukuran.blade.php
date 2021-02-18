@extends('adminlayouts.main')

@section('title', 'Tambah Data Ukuran')

@section('page_name', 'Tambah Data Ukuran')

@section('content')
        

  <div class="content">
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
            <div class="card">
                <div class="card-header card-header-primary">
                <p class="card-category"></p>
                <h4 class="card-title ">Tambah Data Ukuran</h4>
                <p class="card-category"></p>
                </div>
                <div class="card-body">
      
                    <form method="post" action="/data_ukuran/store" enctype="multipart/form-data">
                      {{ csrf_field() }}

                      <div class="card-body ">
                        <div class="row">
                          <label class="col-sm-2 col-form-label">{{ __('Nama Ukuran') }}</label>
                          <div class="col-sm-7">
                            <div class="form-group">
                              <input class="form-control" name="nama_ukuran" id="category" type="text" placeholder="{{ __('Nama Ukuran') }}"   />
                            </div>
                          </div>
                        </div>
          
                        <div class="row">
                          <label for="image" class="col-sm-2 col-form-label">Gambar Ukuran</label>
                          <div class="col-sm-7">
                            <input id="gambar_kategori" type="file" class="form-control" name="gambar_ukuran">
                            <img src="#" id="category-img-tag" width="200px" />   <!--for preview purpose -->
                          </div>
                          
                        </div>    
          
                      </div>
                          
                          <button type="submit" class="btn btn-primary float-right">Simpan</button>
                          <a type="button" class="btn btn-secondary float-right" href="/data_ukuran">Kembali</a>
                      </form>
                      
                </div>
            </div>
            </div>
        </div>
        </div>
  </div>

@endsection

