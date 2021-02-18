@extends('adminlayouts.main')

@section('title', 'Tambah Data Penjahit')

@section('page_name', 'Tambah Data Penjahit')

@section('content')
        

  <div class="content">
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
            <div class="card">
                <div class="card-header card-header-primary">
                <p class="card-category"></p>
                <h4 class="card-title ">Tambah Data Penjahit</h4>
                <p class="card-category"></p>
                </div>
                <div class="card-body">
      
                    <form method="post" action="/data_penjahit/store" enctype="multipart/form-data">
                      {{ csrf_field() }}

                      <div class="card-body ">

                        <div class="row">
                          <label class="col-sm-3 col-form-label">{{ __('Nama') }}</label>
                          <div class="col-sm-7">
                            <div class="form-group">
                              <input class="form-control" name="nama_penjahit" id="category" type="text" placeholder="{{ __('Nama') }}"   />
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <label class="col-sm-3 col-form-label">{{ __('Email') }}</label>
                          <div class="col-sm-7">
                            <div class="form-group">
                              <input class="form-control" name="email_penjahit" id="category" type="email" placeholder="{{ __('Email') }}"   />
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <label class="col-sm-3 col-form-label">{{ __('Password') }}</label>
                          <div class="col-sm-7">
                            <div class="form-group">
                              <input class="form-control" name="password_penjahit" id="category" type="password" placeholder="{{ __('Password') }}"   />
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <label class="col-sm-3 col-form-label">{{ __('No. Telp') }}</label>
                          <div class="col-sm-7">
                            <div class="form-group">
                              <input class="form-control" name="telp_penjahit" id="category" type="number" placeholder="{{ __('08222xxxxxxx') }}"   />
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <label class="col-sm-3 col-form-label">{{ __('Nama Toko') }}</label>
                          <div class="col-sm-7">
                            <div class="form-group">
                              <input class="form-control" name="nama_toko" id="category" type="text" placeholder="{{ __('Nama Toko') }}"   />
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <label class="col-sm-3 col-form-label">{{ __('Keterangan Toko') }}</label>
                          <div class="col-sm-7">
                            <div class="form-group">
                              <textarea class="form-control" rows="3" name="keterangan_toko" placeholder="{{ __('Keterangan Toko') }}"></textarea>
                              {{-- <input class="form-control" name="keterangan_toko" id="category" type="text" placeholder="{{ __('Keterangan Toko') }}"   /> --}}
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <label class="col-sm-3 col-form-label">{{ __('Latitude') }}</label>
                          <div class="col-sm-7">
                            <div class="form-group">
                              <input class="form-control" name="latitude_penjahit" id="category" type="text" placeholder="{{ __('Latitude') }}"   />
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <label class="col-sm-3 col-form-label">{{ __('Longitude') }}</label>
                          <div class="col-sm-7">
                            <div class="form-group">
                              <input class="form-control" name="longitude_penjahit" id="category" type="text" placeholder="{{ __('Longitude') }}"   />
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <label class="col-sm-3 col-form-label">{{ __('Alamat') }}</label>
                          <div class="col-sm-7">
                            <div class="form-group">
                              <input class="form-control" name="alamat_penjahit" id="category" type="text" placeholder="{{ __('Alamat') }}"   />
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <label class="col-sm-3 col-form-label">{{ __('Spesifikasi Penjahit') }}</label>
                          <div class="col-sm-7">
                            <div class="form-group">
                              <input class="form-control" name="spesifikasi_penjahit" id="category" type="text" placeholder="{{ __('Spesifikasi Penjahit') }}"   />
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <label class="col-sm-3 col-form-label">{{ __('Jangkauan Kategori Penjahit') }}</label>
                          <div class="col-sm-7">
                            <div class="form-group">
                              <input class="form-control" name="jangkauan_kategori_penjahit" id="category" type="text" placeholder="{{ __('Jangkauan Kategori Penjahit') }}"   />
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
                                    <input class="form-check-input" name="hari_buka[]" type="checkbox" value="Senin">
                                    Senin
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                </label>
                              </div>

                              <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" name="hari_buka[]" type="checkbox" value="Selasa">
                                    Selasa
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                </label>
                              </div>

                              <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" name="hari_buka[]" type="checkbox" value="Rabu">
                                    Rabu
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                </label>
                              </div>

                              <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" name="hari_buka[]" type="checkbox" value="Kamis">
                                    Kamis
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                </label>
                              </div>

                              <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" name="hari_buka[]" type="checkbox" value="Jumat">
                                    Jum'at
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                </label>
                              </div>

                              <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" name="hari_buka[]" type="checkbox" value="Sabtu">
                                    Sabtu
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                </label>
                              </div>

                              <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" name="hari_buka[]" type="checkbox" value="Minggu">
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
                              <input class="form-control" name="jam_buka" id="category" type="time" placeholder="{{ __('Jam Buka') }}"   />
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <label class="col-sm-3 col-form-label">{{ __('Jam Tutup') }}</label>
                          <div class="col-sm-7">
                            <div class="form-group">
                              <input class="form-control" name="jam_tutup" id="category" type="time" placeholder="{{ __('Jam Tutup') }}"   />
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
                          
                          <button type="submit" class="btn btn-primary float-right">Simpan</button>
                          <a type="button" class="btn btn-secondary float-right" href="/data_penjahit">Kembali</a>
                      </form>
                      
                </div>
            
              </div>
            </div>
        </div>
        </div>
  </div>

@endsection

