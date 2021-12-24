@extends('adminpro.main')
{{-- @extends('adminlayouts.main') --}}

@section('title', 'Edit Data Penjahit')

@section('page_name', 'Edit Data Penjahit')

@section('content')
    
<div class="content">
    <div class="container-fluid">  

      <div class="row">
        <div class="col-md-8">
          <div class="card">

            {{-- <div class="card-header card-header-primary">
              <h4 class="card-title">Edit Data Penjahit</h4>
            </div> --}}

            <div class="card-header card-header-tabs" data-background-color="purple">
              <h4 class="card-title">Edit Data Penjahit</h4>
            </div>

            <form method="post" action="/data_penjahit/update/{{ $data->id_penjahit }}"  enctype="multipart/form-data" class="form-horizontal">
              {{ csrf_field() }}

              <div class="card-content">
                  
                <input type="hidden" name="id_penjahit" id="id_penjahit" value="{{ $data->id_penjahit }}">


                <div class="row">
                    <label class="col-sm-2 label-on-left">Nama</label>
                    <div class="col-sm-7">
                        <div class="form-group label-floating is-empty">
                            <input class="form-control" name="nama_penjahit" type="text" placeholder="Nama Penjahit" value="{{ $data->nama_penjahit }}"  autofocus />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <label class="col-sm-2 label-on-left">Email <small>*</small></label>
                    <div class="col-sm-7">
                        <div class="form-group label-floating is-empty">
                            <input class="form-control" name="email_penjahit" type="email" placeholder="name@mail.com" value="{{ $data->email_penjahit }}" required="true"  />
                        </div>
                    </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 label-on-left">Password <small>*</small></label>
                  <div class="col-sm-7">
                      <div class="form-group label-floating is-empty">
                          <input class="form-control" name="password_penjahit" type="password" placeholder="xxxxxx" value="{{ $data->password_penjahit }}" required="true" />
                      </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 label-on-left">No. Telp</label>
                  <div class="col-sm-7">
                      <div class="form-group label-floating is-empty">
                          <input class="form-control" name="telp_penjahit" type="text" placeholder="08xxxxxx" value="{{ $data->telp_penjahit }}"  />
                      </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 label-on-left">Nama Toko</label>
                  <div class="col-sm-7">
                      <div class="form-group label-floating is-empty">
                          <input class="form-control" name="nama_toko" type="text" placeholder="Toko Jaya Makmur" value="{{ $data->nama_toko }}"  />
                      </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 label-on-left">Keterangan Toko</label>
                  <div class="col-sm-7">
                      <div class="form-group label-floating is-empty">
                          <textarea class="form-control" rows="3" name="keterangan_toko" placeholder="{{ __('Keterangan Toko') }}"></textarea>
                          
                          {{-- <input class="form-control" rows="3" name="keterangan_toko" type="text" placeholder="Toko Jaya Makmur" value="{{ $data->keterangan_toko }}"  /> --}}
                      </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 label-on-left">Latitude</label>
                  <div class="col-sm-7">
                      <div class="form-group label-floating is-empty">
                          <input class="form-control" name="latitude_penjahit" type="text" placeholder="{{ __('Latitude') }}" value="{{ $data->latitude_penjahit }}"    />
                      </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 label-on-left">Longitude</label>
                  <div class="col-sm-7">
                      <div class="form-group label-floating is-empty">
                          <input class="form-control" name="longitude_penjahit" type="text" placeholder="{{ __('Longitude') }}" value="{{ $data->longitude_penjahit }}"    />
                      </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 label-on-left">Alamat</label>
                  <div class="col-sm-7">
                      <div class="form-group label-floating is-empty">
                          <input class="form-control" name="alamat_penjahit" type="text" placeholder="{{ __('Alamat') }}" value="{{ $data->alamat_penjahit }}"    />
                      </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 label-on-left">Spesifikasi Penjahit</label>
                  <div class="col-sm-7">
                      <div class="form-group label-floating is-empty">
                          <input class="form-control" name="spesifikasi_penjahit" type="text" placeholder="{{ __('Spesifikasi Penjahit') }}" value="{{ $data->spesifikasi_penjahit }}"    />
                      </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 label-on-left">Jangkauan Kategori Penjahit</label>
                  <div class="col-sm-7">
                      <div class="form-group label-floating is-empty">
                          <input class="form-control" name="jangkauan_kategori_penjahit" type="text" placeholder="{{ __('Jangkauan Kategori Penjahit') }}" value="{{ $data->jangkauan_kategori_penjahit }}"    />
                      </div>
                  </div>
                </div>

                {{-- <div class="row">
                  <label class="col-sm-2 label-on-left">Hari Buka</label>
                  <div class="col-sm-7 checkbox-radios">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="hari_buka[]" value="Senin" {{ (is_array(old('hari_buka')) && in_array('Senin', old('hari_buka'))) ? ' checked' : '' }}> Senin
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="hari_buka[]" value="Selasa" {{ (is_array(old('hari_buka')) && in_array('Selasa', old('hari_buka'))) ? ' checked' : '' }}> Selasa
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="hari_buka[]" value="Rabu" {{ (is_array(old('hari_buka')) && in_array('Rabu', old('hari_buka'))) ? ' checked' : '' }}> Rabu
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="hari_buka[]" value="Kamis" {{ (is_array(old('hari_buka')) && in_array('Selasa', old('hari_buka'))) ? ' checked' : '' }}> Kamis
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="hari_buka[]" value="Jumat" {{ (is_array(old('hari_buka')) && in_array('Jumat', old('hari_buka'))) ? ' checked' : '' }}> Jum'at
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="hari_buka[]" value="Sabtu" {{ (is_array(old('hari_buka')) && in_array('Sabtu', old('hari_buka'))) ? ' checked' : '' }}> Sabtu
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="hari_buka[]" value="Minggu" {{ (is_array(old('hari_buka')) && in_array('Minggu', old('hari_buka'))) ? ' checked' : '' }}> Minggu
                        </label>
                    </div>
                </div>
                  
                </div> --}}

                <div class="row">
                  <label class="col-sm-2 label-on-left">Jam Buka</label>
                  <div class="col-sm-3">
                      <div class="form-group label-floating is-empty">
                          <input class="form-control" id="disabledInput" name="jam_buka" type="text" placeholder="{{ __('Jam Buka') }}" value="{{ $data->jam_buka }}"    />
                      </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group label-floating is-empty">
                        <input class="form-control timepicker" name="jam_buka" type="time"   />
                    </div>
                </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 label-on-left">Jam Tutup</label>
                  <div class="col-sm-3">
                      <div class="form-group label-floating is-empty">
                          <input class="form-control" id="disabledInput" name="jam_tutup" type="text" placeholder="{{ __('Jam Tutup') }}" value="{{ $data->jam_tutup }}"    />
                      </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group label-floating is-empty">
                        <input class="form-control timepicker" name="jam_tutup" type="time"    />
                    </div>
                </div>
                </div>

    
                <div class="row">
                <label class="col-sm-2 label-on-left">Foto</label>

                    <div class="col-md-4 col-sm-4">
                      <br>
                      <img src="{{ url('img_pelanggan/'.$data->foto_penjahit) }}" style="width: 120px; height: 120px; border-radius: 10px;" class="card-img-top mb-3" alt="...">
                        <br>
                        <br>
                        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                            <div class="fileinput-new thumbnail">
                                <img src="{{ url('adminpro/assets/img/image_placeholder.jpg') }}" alt="...">
                            </div>
                            <div class="fileinput-preview fileinput-exists thumbnail"></div>
                            <div>
                                <span class="btn btn-primary btn-round btn-file">
                                    <span class="fileinput-new">Select image</span>
                                    <span class="fileinput-exists">Change</span>
                                    <input type="file" name="foto_penjahit" />
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
                  <a type="button" class="btn btn-white pull-fill" href="/data_penjahit">Kembali</a>
                  <button type="submit" class="btn btn-primary pull-fill">Simpan</button>
                </div>

                
              </div>
            
              {{-- ============= --}}
            {{-- <div class="card-body">
                <input type="hidden" name="id_penjahit" id="id_penjahit" value="{{ $data->id_penjahit }}">
                      
                
                <div class="card-body ">

                  <div class="row">
                    <label class="col-sm-3 col-form-label">{{ __('Nama') }}</label>
                      <div class="col-sm-7">
                        <div class="form-group">
                          <input class="form-control" name="nama_penjahit" id="category" type="text" placeholder="{{ __('Nama') }}" value="{{ $data->nama_penjahit }}"  />
                        </div>
                    </div>
                  </div>

                  <div class="row">
                    <label class="col-sm-3 col-form-label">{{ __('Email') }}</label>
                    <div class="col-sm-7">
                      <div class="form-group">
                        <input class="form-control" name="email_penjahit" id="category" type="email" placeholder="{{ __('Email') }}" value="{{ $data->email_penjahit }}"  />
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <label class="col-sm-3 col-form-label">{{ __('Password') }}</label>
                    <div class="col-sm-7">
                      <div class="form-group">
                        <input class="form-control" name="password_penjahit" id="category" type="password" placeholder="{{ __('Password') }}" value="{{ $data->password_penjahit }}"  />
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <label class="col-sm-3 col-form-label">{{ __('No. Telp') }}</label>
                    <div class="col-sm-7">
                      <div class="form-group">
                        <input class="form-control" name="telp_penjahit" id="category" type="number" placeholder="{{ __('08222xxxxxxx') }}" value="{{ $data->telp_penjahit }}"  />
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <label class="col-sm-3 col-form-label">{{ __('Nama Toko') }}</label>
                    <div class="col-sm-7">
                      <div class="form-group">
                        <input class="form-control" name="nama_toko" id="category" type="text" placeholder="{{ __('Nama Toko') }}" value="{{ $data->nama_toko }}"  />
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <label class="col-sm-3 col-form-label">{{ __('Keterangan Toko') }}</label>
                    <div class="col-sm-7">
                      <div class="form-group">
                        <textarea class="form-control" rows="3" name="keterangan_toko" placeholder="{{ __('Keterangan Toko') }}" value="{{ $data->keterangan_toko }}" ></textarea>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <label class="col-sm-3 col-form-label">{{ __('Latitude') }}</label>
                    <div class="col-sm-7">
                      <div class="form-group">
                        <input class="form-control" name="latitude_penjahit" id="category" type="text" placeholder="{{ __('Latitude') }}" value="{{ $data->latitude_penjahit }}"  />
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <label class="col-sm-3 col-form-label">{{ __('Longitude') }}</label>
                    <div class="col-sm-7">
                      <div class="form-group">
                        <input class="form-control" name="longitude_penjahit" id="category" type="text" placeholder="{{ __('Longitude') }}" value="{{ $data->longitude_penjahit }}"  />
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <label class="col-sm-3 col-form-label">{{ __('Alamat') }}</label>
                    <div class="col-sm-7">
                      <div class="form-group">
                        <input class="form-control" name="alamat_penjahit" id="category" type="text" placeholder="{{ __('Alamat') }}" value="{{ $data->alamat_penjahit }}"  />
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <label class="col-sm-3 col-form-label">{{ __('Spesifikasi Penjahit') }}</label>
                    <div class="col-sm-7">
                      <div class="form-group">
                        <input class="form-control" name="spesifikasi_penjahit" id="category" type="text" placeholder="{{ __('Spesifikasi Penjahit') }}" value="{{ $data->spesifikasi_penjahit }}"  />
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <label class="col-sm-3 col-form-label">{{ __('Jangkauan Kategori Penjahit') }}</label>
                    <div class="col-sm-7">
                      <div class="form-group">
                        <input class="form-control" name="jangkauan_kategori_penjahit" id="category" type="text" placeholder="{{ __('Jangkauan Kategori Penjahit') }}" value="{{ $data->jangkauan_kategori_penjahit }}"  />
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <label class="col-sm-3 col-form-label">{{ __('Hari Buka') }}</label>
                    <div class="col-sm-7">
                      <div class="form-group">
                        
                        <div class="form-check">
                          <label class="form-check-label">
                              <input class="form-check-input" name="hari_buka[]" type="checkbox" value="Senin"  {{ (is_array(old('hari_buka')) && in_array('Senin', old('hari_buka'))) ? ' checked' : '' }}>
                              Senin
                              <span class="form-check-sign">
                                  <span class="check"></span>
                              </span>
                          </label>
                        </div>

                        <div class="form-check">
                          <label class="form-check-label">
                              <input class="form-check-input" name="hari_buka[]" type="checkbox" value="Selasa" {{ (is_array(old('hari_buka')) && in_array('Selasa', old('hari_buka'))) ? ' checked' : '' }}>
                              Selasa
                              <span class="form-check-sign">
                                  <span class="check"></span>
                              </span>
                          </label>
                        </div>

                        <div class="form-check">
                          <label class="form-check-label">
                              <input class="form-check-input" name="hari_buka[]" type="checkbox" value="Rabu" {{ (is_array(old('hari_buka')) && in_array('Rabu', old('hari_buka'))) ? ' checked' : '' }}>
                              Rabu
                              <span class="form-check-sign">
                                  <span class="check"></span>
                              </span>
                          </label>
                        </div>

                        <div class="form-check">
                          <label class="form-check-label">
                              <input class="form-check-input" name="hari_buka[]" type="checkbox" value="Kamis" {{ (is_array(old('hari_buka')) && in_array('Kamis', old('hari_buka'))) ? ' checked' : '' }}>
                              Kamis
                              <span class="form-check-sign">
                                  <span class="check"></span>
                              </span>
                          </label>
                        </div>

                        <div class="form-check">
                          <label class="form-check-label">
                              <input class="form-check-input" name="hari_buka[]" type="checkbox" value="Jumat" {{ (is_array(old('hari_buka')) && in_array('Jumat', old('hari_buka'))) ? ' checked' : '' }}>
                              Jum'at
                              <span class="form-check-sign">
                                  <span class="check"></span>
                              </span>
                          </label>
                        </div>

                        <div class="form-check">
                          <label class="form-check-label">
                              <input class="form-check-input" name="hari_buka[]" type="checkbox" value="Sabtu" {{ (is_array(old('hari_buka')) && in_array('Sabtu', old('hari_buka'))) ? ' checked' : '' }}>
                              Sabtu
                              <span class="form-check-sign">
                                  <span class="check"></span>
                              </span>
                          </label>
                        </div>

                        <div class="form-check">
                          <label class="form-check-label">
                              <input class="form-check-input" name="hari_buka[]" type="checkbox" value="Minggu" {{ (is_array(old('hari_buka')) && in_array('Minggu', old('hari_buka'))) ? ' checked' : '' }}>
                              Sabtu
                              <span class="form-check-sign">
                                  <span class="check"></span>
                              </span>
                          </label>
                        </div>

                      </div>
                    </div>
                  </div>

                  

                  <div class="row">
                    <label class="col-sm-3 col-form-label">{{ __('Jam Buka') }}</label>
                    <div class="col-sm-7">
                      <div class="form-group">
                        <input class="form-control" name="jam_buka" id="category" type="time" placeholder="{{ __('Nama') }}" value="{{ $data->jam_buka }}"  />
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <label class="col-sm-3 col-form-label">{{ __('Jam Tutup') }}</label>
                    <div class="col-sm-7">
                      <div class="form-group">
                        <input class="form-control" name="jam_tutup" id="category" type="time" placeholder="{{ __('Nama') }}" value="{{ $data->jam_tutup }}"  />
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <label for="image" class="col-sm-3 col-form-label">Foto Penjahit</label>
                    <div class="col-sm-7">
                      <input id="gambar_kategori" type="file" class="form-control" name="foto_penjahit">
                      <img src="#" id="category-img-tag" width="300px" />   <!--for preview purpose -->
                    </div>
                  </div>    
    

                </div>
                    
                    <button type="submit" class="btn btn-primary  float-right">Simpan</button>
                    <a type="button" class="btn btn-secondary  float-right" href="/data_penjahit">Kembali</a>


                  
                           
            </div> --}}



          </form>  
          
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection