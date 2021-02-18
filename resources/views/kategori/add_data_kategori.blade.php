@extends('adminlayouts.main')

@section('title', 'Tambah Data Kategori')

@section('page_name', 'Tambah Data Kategori')

@section('content')
        

  <div class="content">
    
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
            <div class="card">
                <div class="card-header card-header-primary">
                <p class="card-category"></p>
                <h4 class="card-title ">Tambah Data Kategori</h4>
                <p class="card-category"></p>
                </div>
                <div class="card-body">
      

                    <form method="post" action="/data_kategori/store" enctype="multipart/form-data">
                      {{ csrf_field() }}

      {{-- ini bisa dari aku --}}
                        {{-- <div class="form-group">
                          <label for="exampleInputEmail1">Nama Kategori</label>
                          <input type="text" class="form-control" name="nama_kategori" placeholder="Nama Kategori">
                        </div> --}}

                        {{-- <div class="form-group">
                          <input type="file" class="" name="gambar_kategori">
                      </div> --}}

{{-- /////////////// --}}

                      {{-- <div class="form-group">
                        <label for="exampleInputEmail1">Gambar Kategori</label>
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="customFile" name="gambar_kategori">
                          <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                      </div> --}}
                      
{{-- /////////////// --}}

                    
                      {{-- <div class="form-group">
                          <input type="file" class="" name="gambar_kategori">
                      </div> --}}


                      <div class="card-body ">
                        <div class="row">
                          <label class="col-sm-2 col-form-label">{{ __('Nama Kategori') }}</label>
                          <div class="col-sm-7">
                            <div class="form-group">
                              <input class="form-control" name="nama_kategori" id="category" type="text" placeholder="{{ __('Nama Kategori') }}"   />
                            </div>
                          </div>
                        </div>
          
        


                        <div class="row">
                          <label for="image" class="col-sm-2 col-form-label">Gambar Kategori</label>
                          <div class="col-sm-7">
                            <input id="gambar_kategori" type="file" class="form-control" name="gambar_kategori">
                            <img src="#" id="category-img-tag" width="200px" />   <!--for preview purpose -->
                          </div>
                          
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

