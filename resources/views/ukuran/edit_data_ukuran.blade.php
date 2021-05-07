@extends('adminpro.main')
{{-- @extends('adminlayouts.main') --}}

@section('title', 'Edit Data Ukuran')

@section('page_name', 'Edit Data Ukuran')

@section('content')
        

  <div class="content">
    <div class="container-fluid">


      <div class="row">
        <div class="col-md-8">
          <div class="card">

              <div class="card-header card-header-tabs" data-background-color="purple">
                  <h4 class="card-title ">Edit Data Ukuran</h4>
              </div>
          
                <form method="post" action="/data_ukuran/update/{{ $data->id_ukuran }}" enctype="multipart/form-data" class="form-horizontal">
                  {{ csrf_field() }}


                  <div class="card-content">

                    <input type="hidden" name="id_ukuran" id="id_ukuran" value="{{ $data->id_ukuran }}">


                    <div class="row">
                      <label class="col-sm-2 label-on-left">Nama Ukuran</label>
                      <div class="col-sm-7">
                          <div class="form-group label-floating is-empty">
                              <input class="form-control" name="nama_ukuran" type="text" placeholder="Nama Ukuran" value="{{ $data->nama_ukuran }}" autofocus />
                          </div>
                      </div>
                    </div>
  
      
                    <div class="row">
                    <label class="col-sm-2 label-on-left">Gambar Ukuran</label>
    
                        <div class="col-md-4 col-sm-4">
                          <br>
                          <img src="{{ url('img_ukuran/'.$data->gambar_ukuran) }}" style="width: 120px; height: 120px; border-radius: 10px;" class="card-img-top mb-3" alt="...">
                          <br><br>
                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                <div class="fileinput-new thumbnail">
                                    <img src="{{ url('adminpro/assets/img/image_placeholder.jpg') }}" alt="...">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                <div>
                                    <span class="btn btn-primary btn-round btn-file">
                                        <span class="fileinput-new">Select image</span>
                                        <span class="fileinput-exists">Change</span>
                                        <input type="file" name="gambar_ukuran" />
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
                      <a type="button" class="btn btn-white pull-fill" href="/data_ukuran">Kembali</a>
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
                <h4 class="card-title ">Edit Data Ukuran</h4>
                <p class="card-category"></p>
                </div>
                <div class="card-body">
      
                    <form method="post" action="/data_ukuran/update/{{ $data->id_ukuran }}" enctype="multipart/form-data">
                      @csrf

                      <input type="hidden" name="id_ukuran" id="id_ukuran" value="{{ $data->id_ukuran }}">

                        <div class="row">
                          <label class="col-sm-2 col-form-label">{{ __('Nama Ukuran') }}</label>
                          <div class="col-sm-7">
                            <div class="form-group">
                              <input class="form-control" name="nama_ukuran" id="category" type="text" placeholder="{{ __('Nama Ukuran') }}" value="{{ $data->nama_ukuran }}"  />
                            </div>
                          </div>
                        </div>
                      
                        <div class="row">
                          <label for="image" class="col-sm-2 col-form-label">Gambar Ukuran</label>
                          <img src="{{ url('img_ukuran/'.$data->gambar_ukuran) }}" style="width: 120px; height: 120px; border-radius: 10px;" class="card-img-top mb-3" alt="...">
                          <div class="col-sm-7">
                            <input id="gambar_kategori" type="file" class="form-control" name="gambar_ukuran" >
                            <img src="#" id="category-img-tag" width="200px"  />   <!--for preview purpose -->
                          </div>
                          
                        </div>   

                        <button type="submit" class="btn btn-primary float-right">Simpan</button>
                        <a type="button" class="btn btn-secondary float-right" href="/data_ukuran">Kembali</a>
                      </form>
                      

                </div>
            </div>
            </div>
        </div> --}}
    
        
    </div>
  </div>


@endsection