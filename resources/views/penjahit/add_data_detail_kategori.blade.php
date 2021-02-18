@extends('adminlayouts.main')

@section('title', 'Tambah Data')

@section('page_name', 'Tambah Data')

@section('content')
        

  <div class="content">
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
            <div class="card">
                
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Tambah Data</h4>
                </div>
                
                <div class="card-body">
      
                    <form method="post" action="/data_penjahit/show/kategori/store">
                      {{ csrf_field() }}

                      <div class="card-body ">
                        
          
                        <div class="row">
                          <label class="col-sm-2 col-form-label">{{ __('Nama Penjahit') }}</label>
                          <div class="col-sm-7">
                            <div class="form-group">
                              {{-- <label class="col-form-label" id="category">{{ $data->nama_penjahit }}</label> --}}

                              <input class="form-control" id="category" type="text" value="{{ $data->nama_penjahit }}" disabled />
                              <input class="form-control" name="id_penjahit" id="category" type="text" value="{{ $data->id_penjahit }}" hidden />
                            </div>
                          </div>
                        </div>

                        {{-- <div class="row">
                          <label class="col-sm-2 col-form-label">{{ __('Nama Penjahit') }}</label>
                          <div class="col-sm-7">
                            <div class="form-group" id="exampleFormControlSelect1" >
                              <select class="form-control" id="exampleFormControlSelect1" name="id_penjahit">
                                @foreach ($penjahit as $data_penjahit)
                                  <option value="{{ $data_penjahit->id_penjahit }}">{{ $data_penjahit->nama_penjahit }}</option>
                                @endforeach
                              </select>
                            </div>
                          </div>
                        </div>  --}}
                        
                        
                        <div class="row">
                          <label class="col-sm-2 col-form-label">{{ __('Kategori') }}</label>
                          <div class="col-sm-7">
                            <div class="form-group" id="exampleFormControlSelect1" >
                                <select class="form-control" id="exampleFormControlSelect1" name="id_kategori">
                                  @foreach ($kategori as $data_kategori)
                                  <option value="{{ $data_kategori->id_kategori }}">{{ $data_kategori->nama_kategori }}</option>
                                @endforeach
                                </select>
                            </div>
                          </div>
                        </div> 

                        <div class="row">
                          <label class="col-sm-2 col-form-label">{{ __('Keterangan') }}</label>
                          <div class="col-sm-7">
                            <div class="form-group">
                              {{-- <input class="form-control" name="keterangan_kategori" id="category" type="text" placeholder="{{ __('Keterangan') }}"   /> --}}
                              <textarea class="form-control" rows="3" name="keterangan_kategori" placeholder="{{ __('Keterangan tambahan mengenai bahan') }}"></textarea>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <label class="col-sm-2 col-form-label">{{ __('Bahan Jahit (Rp)') }}</label>
                          <div class="col-sm-7">
                            <div class="form-group">
                              <input class="form-control" name="bahan_jahit" id="category" type="text" placeholder="{{ __('Contoh : Katun') }}"   />
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <label class="col-sm-2 col-form-label">{{ __('Harga Bahan (Rp)') }}</label>
                          <div class="col-sm-7">
                            <div class="form-group">
                              <input class="form-control" name="harga_bahan" id="category" type="number" placeholder="{{ __('100xxxx') }}"   />
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <label class="col-sm-2 col-form-label">{{ __('Ongkos Jahit') }}</label>
                          <div class="col-sm-7">
                            <div class="form-group">
                              <input class="form-control" name="ongkos_penjahit" id="category" type="number" placeholder="{{ __('100xxxx') }}"   />
                            </div>
                          </div>
                        </div>
                        
                        <div class="row">
                          <label class="col-sm-2 col-form-label">{{ __('Perkiraan Lama Waktu Pengerjaan') }}</label>
                          <div class="col-sm-2">
                            <div class="form-group">
                              <input class="form-control" name="perkiraan_lama_waktu_pengerjaan" id="category" type="number" placeholder="{{ __('Contoh : 5') }}"   />
                            </div>
                          </div>
                          <label class="col-sm-5 col-form-label">{{ __('Hari') }}</label>
                        </div>
          
                      </div>
                          
                          <button type="submit" onclick="return confirm('Ingin menambahkan data?')" class="btn btn-primary float-right">Simpan</button>
                          <a type="button" class="btn btn-secondary float-right" href="/data_penjahit/show/{{ $data->id_penjahit }}">Kembali</a>
                      </form>
                      
                </div>
            </div>
            </div>
        </div>
        </div>
  </div>

@endsection

