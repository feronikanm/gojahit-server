@extends('adminlayouts.main')

@section('title', 'Edit Data Penjahit')

@section('page_name', 'Edit Data Penjahit')

@section('content')
    
<div class="content">

    <div class="container-fluid">    
      <div class="row">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">Edit Data Penjahit</h4>
            </div>
            
            <div class="card-body">

              <form method="post" action="/data_penjahit/update/{{ $data->id_penjahit }}"  enctype="multipart/form-data">
                  {{ csrf_field() }}

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
                        {{-- <input class="form-control" name="keterangan_toko" id="category" type="text" placeholder="{{ __('Keterangan Toko') }}"   /> --}}
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
                        {{-- <input class="form-control" name="hari_buka" id="category" type="text" placeholder="{{ __('Hari Buka') }}"   /> --}}
                        
                        <div class="form-check">
                          <label class="form-check-label">
                              <input class="form-check-input" name="hari_buka[]" type="checkbox" value="Senin"  {{ (is_array(old('hari_buka')) && in_array('Senin', old('hari_buka'))) ? ' checked' : '' }}>
                              {{-- <input class="form-check-input" name="hari_buka[]" type="checkbox" value="Senin"  {{  ($data->hari_buka == 'Senin' ? ' checked' : '') }}> --}}
                              {{-- <input type="checkbox" name="hari_buka[]"  value="Senin" @if(is_array(old('hari_buka')) && in_array('Senin', old('bidang'))) checked @endif>Pendidikan --}}
                              {{-- <input class="form-check-input" type="checkbox" name="hobby[]" value="2" @if(is_array(old('hobby')) && in_array(2, old('hobby'))) checked @endif> basketball --}}
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
                              Minggu
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





                {{-- <div>
                  <button type="submit" class="btn btn-primary pull-right">Save Changes</button>
                  <a class="btn btn-secondary pull-right" href="/data_penjahit">Back</a>
                </div> --}}

              </form>      
                           
            </div>
          
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection