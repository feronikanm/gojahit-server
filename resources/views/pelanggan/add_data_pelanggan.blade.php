@extends('adminpro.main')
{{-- @extends('adminlayouts.main') --}}

@section('title', 'Tambah Data Pelanggan')

@section('page_name', 'Tambah Data Pelanggan')

@section('content')

  <div class="content">
    
    <div class="container-fluid">
      
      <div class="row">
      <div class="col-md-8">
        <div class="card">
              <form method="post" action="/data_pelanggan/store" enctype="multipart/form-data" class="form-horizontal">
                {{ csrf_field() }}
                <div class="card-header card-header-tabs" data-background-color="purple">
                    <h4 class="card-title">Tambah Data Pelanggan</h4>
                </div>
                <div class="card-content">
                  
                  <div class="row">
                      <label class="col-sm-2 label-on-left">Nama</label>
                      <div class="col-sm-7">
                          <div class="form-group label-floating is-empty">
                              {{-- <label class="control-label"></label> --}}
                              <input class="form-control" name="nama_pelanggan" type="text" placeholder="Nama Pelanggan"  autofocus />
                              {{-- <span class="help-block">A block of help text that breaks onto a new line.</span> --}}
                          </div>
                      </div>
                  </div>

                  <div class="row">
                      <label class="col-sm-2 label-on-left">Email <small>*</small></label>
                      <div class="col-sm-7">
                          <div class="form-group label-floating is-empty">
                              <input class="form-control" name="email_pelanggan" type="email" placeholder="name@mail.com" required="true"  />
                          </div>
                      </div>
                  </div>
 
                  <div class="row">
                    <label class="col-sm-2 label-on-left">Password <small>*</small></label>
                    <div class="col-sm-7">
                        <div class="form-group label-floating is-empty">
                            <input class="form-control" name="password_pelanggan" type="password" placeholder="xxxxxx"  required="true" />
                        </div>
                    </div>
                  </div>

                  <div class="row">
                    <label class="col-sm-2 label-on-left">No. Telp</label>
                    <div class="col-sm-7">
                        <div class="form-group label-floating is-empty">
                            <input class="form-control" name="telp_pelanggan" type="text" placeholder="08xxxxxx"   />
                        </div>
                    </div>
                  </div>

                  <div class="row">
                    <label class="col-sm-2 label-on-left">Latitude</label>
                    <div class="col-sm-7">
                        <div class="form-group label-floating is-empty">
                            <input class="form-control" name="latitude_pelanggan" type="text" placeholder="{{ __('Latitude') }}"   />
                        </div>
                    </div>
                  </div>

                  <div class="row">
                    <label class="col-sm-2 label-on-left">Longitude</label>
                    <div class="col-sm-7">
                        <div class="form-group label-floating is-empty">
                            <input class="form-control" name="longitude_pelanggan" type="text" placeholder="{{ __('Longitude') }}"   />
                        </div>
                    </div>
                  </div>

                  <div class="row">
                    <label class="col-sm-2 label-on-left">Alamat</label>
                    <div class="col-sm-7">
                        <div class="form-group label-floating is-empty">
                            <input class="form-control" name="alamat_pelanggan" type="text" placeholder="{{ __('Alamat') }}"   />
                        </div>
                    </div>
                  </div>


                  <div class="row">
                    <label class="col-sm-2 label-on-left">Jenis Kelamin</label>
                    <div class="col-sm-7 checkbox-radios">
                        <div class="radio">
                            <label>
                                <input type="radio" name="jk_pelanggan" value="Laki-laki" checked="true"> Laki-laki
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="jk_pelanggan" value="Perempuan"> Perempuan
                            </label>
                        </div>
                    </div>
                  </div>

      
                  <div class="row">
                  <label class="col-sm-2 label-on-left">Foto</label>

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
                                      <input type="file" name="foto_pelanggan" />
                                  </span>

                                  <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                              </div>
                          </div>
                      </div> 
                  </div>

                  
                  <div class="form-footer text-right">
                    <div class="checkbox pull-left">
                      <div class="category form-category">
                        <small>*</small> Required fields
                      </div>
                    </div>
                    <a type="button" class="btn btn-white pull-fill" href="/data_pelanggan">Kembali</a>
                    <button type="submit" class="btn btn-primary pull-fill">Simpan</button>
                  </div>

                  
                </div>
                </div>
            </form>
        </div>
    </div>



        {{-- <div class="row">
            <div class="col-md-8">
            <div class="card">
                <div class="card-header card-header-primary" data-background-color="purple">
                <p class="card-category"></p>
                <h4 class="card-title ">Tambah Data Pelanggan</h4>
                <p class="card-category"></p>
                </div>
                <div class="card-body">
      
                    <form method="post" action="/data_pelanggan/store" enctype="multipart/form-data" >
                      {{ csrf_field() }}

                      <div class="card-body ">

                        <div class="row">
                          <label class="col-sm-2 col-form-label">{{ __('Nama') }}</label>
                          <div class="col-sm-7">
                            <div class="form-group">
                              <input class="form-control" name="nama_pelanggan" id="category" type="text" placeholder="{{ __('Nama') }}"   />
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <label class="col-sm-2 col-form-label">{{ __('Email') }}</label>
                          <div class="col-sm-7">
                            <div class="form-group">
                              <input class="form-control" name="email_pelanggan" id="category" type="email" placeholder="{{ __('Email') }}"   />
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <label class="col-sm-2 col-form-label">{{ __('Password') }}</label>
                          <div class="col-sm-7">
                            <div class="form-group">
                              <input class="form-control" name="password_pelanggan" id="category" type="password" placeholder="{{ __('Password') }}"   />
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <label class="col-sm-2 col-form-label">{{ __('No. Telp') }}</label>
                          <div class="col-sm-7">
                            <div class="form-group">
                              <input class="form-control" name="telp_pelanggan" id="category" type="text" placeholder="{{ __('No. Telp') }}"   />
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <label class="col-sm-2 col-form-label">{{ __('Latitude') }}</label>
                          <div class="col-sm-7">
                            <div class="form-group">
                              <input class="form-control" name="latitude_pelanggan" id="category" type="text" placeholder="{{ __('Latitude') }}"   />
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <label class="col-sm-2 col-form-label">{{ __('Longitude') }}</label>
                          <div class="col-sm-7">
                            <div class="form-group">
                              <input class="form-control" name="longitude_pelanggan" id="category" type="text" placeholder="{{ __('Longitude') }}"   />
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <label class="col-sm-2 col-form-label">{{ __('Alamat') }}</label>
                          <div class="col-sm-7">
                            <div class="form-group">
                              <input class="form-control" name="alamat_pelanggan" id="category" type="text" placeholder="{{ __('Alamat') }}"   />
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <label class="col-sm-2 col-form-label">{{ __('Jenis Kelamin') }}</label>
                          <div class="col-sm-7">
                            <div class="form-group">

                              <div class="form-check form-check-radio">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="jk_pelanggan" id="exampleRadios1" value="Laki-laki" >
                                    Laki-laki
                                    <span class="circle">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                            <div class="form-check form-check-radio">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="jk_pelanggan" id="exampleRadios2" value="Perempuan">
                                    Perempuan
                                    <span class="circle">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                            </div>
                          </div>
                        </div>

                        
          
                        <div class="row">
                          <label for="image" class="col-sm-2 col-form-label">Foto</label>
                          <div class="col-sm-7">
                        

                            <input class="dropzone" id="gambar_kategori" type="file" class="form-control" name="foto_pelanggan">
                            <img src="#" id="category-img-tag" width="200px" />   
                          </div>
                          
                        </div>    
          
                      </div>
                          
                          <button type="submit" class="btn btn-primary float-right">Simpan</button>
                          <a type="button" class="btn btn-secondary float-right" href="/data_pelanggan">Kembali</a>
                      </form>
                      
                </div>
            </div>
            </div>
        </div> --}}

        </div>
  </div>

@endsection

