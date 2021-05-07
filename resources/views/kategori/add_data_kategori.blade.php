@extends('adminpro.main')
{{-- @extends('adminlayouts.main') --}}

@section('title', 'Tambah Data Kategori')

@section('page_name', 'Tambah Data Kategori')

@section('content')
        

  <div class="content">
    <div class="container-fluid">



      <div class="row">
        <div class="col-md-8">
          <div class="card">

              <div class="card-header card-header-tabs" data-background-color="purple">
                  <h4 class="card-title ">Tambah Data Kategori</h4>
              </div>
          
                <form method="post" action="/data_kategori/store" enctype="multipart/form-data" class="form-horizontal">
                  {{ csrf_field() }}


                  <div class="card-content">

                    <div class="row">
                      <label class="col-sm-2 label-on-left">Nama Kategori</label>
                      <div class="col-sm-7">
                          <div class="form-group label-floating is-empty">
                              <input class="form-control" name="nama_kategori" type="text" placeholder="Nama Kategori"  autofocus />
                          </div>
                      </div>
                    </div>
  
      
                    <div class="row">
                    <label class="col-sm-2 label-on-left">Gambar Kategori</label>
    
                        <div class="col-md-4 col-sm-4">
                          <br>
                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                <div class="fileinput-new thumbnail">
                                    <img src="../adminpro/assets/img/image_placeholder.jpg" alt="...">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                <div>
                                    <span class="btn btn-primary btn-round btn-file">
                                        <span class="fileinput-new">Select image</span>
                                        <span class="fileinput-exists">Change</span>
                                        <input type="file" name="gambar_kategori" />
                                    </span>
    
                                    <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                </div>
                            </div>
                        </div> 
                    </div>


                    <div class="form-footer text-right">
                      <div class="checkbox pull-left">
                        <div class="category form-category">
                        </div>
                      </div>
                      <a type="button" class="btn btn-white pull-fill" href="/data_kategori">Kembali</a>
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
                <h4 class="card-title ">Tambah Data Kategori</h4>
                <p class="card-category"></p>
                </div>
                <div class="card-body">
      

                    <form method="post" action="/data_kategori/store" enctype="multipart/form-data">
                      {{ csrf_field() }}


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
        </div> --}}


        </div>

  </div>




@endsection

