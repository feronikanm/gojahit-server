@extends('adminpro.main')
{{-- @extends('adminlayouts.main') --}}

@section('title', 'Edit Data')

@section('page_name', 'Edit Data')

@section('content')
        

  <div class="content">
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
            <div class="card">
                
                {{-- <div class="card-header card-header-primary">
                  <h4 class="card-title ">Edit Data</h4>
                </div> --}}
                <div class="card-header card-header-tabs" data-background-color="purple">
                  <h4 class="card-title ">Edit Data</h4>
              </div>
                
                <div class="card-body">
      
                    <form method="post" action="/data_detail_kategori/update/{{ $data->id_detail_kategori }}" class="form-horizontal">
                      {{ csrf_field() }}

                      <input type="hidden" name="id_detail_kategori" id="id_detail_kategori" value="{{ $data->id_detail_kategori }}">
                      <input type="hidden" name="id_penjahit" id="id_penjahit" value="{{ $data->tbl_penjahit->id_penjahit }}">

                      <div class="card-content ">
                        
        
                        
                        {{-- <div class="row">
                          <label class="col-sm-2 col-form-label">{{ __('Kategori') }}</label>
                          <div class="col-sm-7">
                            <div class="form-group">
                              <input class="form-control" id="category" type="text" value="{{ $data->tbl_kategori->nama_kategori }}" disabled />
                              <input class="form-control" name="id_kategori" id="category" type="hidden" value="{{ $data->tbl_kategori->id_kategori  }}"  />
                            </div>
                          </div>
                        </div> --}}


                        <div class="row">
                          <label class="col-sm-2 label-on-left">Kategori</label>
                          <div class="col-sm-7">
                              <div class="form-group label-floating is-empty">
                                <input class="form-control" id="category" type="text" value="{{ $data->tbl_kategori->nama_kategori }}" disabled />
                                <input class="form-control" name="id_kategori" id="category" type="hidden" value="{{ $data->tbl_kategori->id_kategori  }}"  />
                              </div>
                          </div>
                      </div>


                        {{-- <div class="row">
                          <label class="col-sm-2 col-form-label">{{ __('Keterangan') }}</label>
                          <div class="col-sm-7">
                            <div class="form-group">
                              <textarea class="form-control" rows="3" name="keterangan_kategori" placeholder="{{ __('Keterangan') }}" value="{{ $data->keterangan_kategori }}"></textarea>
                            </div>
                          </div>
                        </div> --}}

                        <div class="row">
                          <label class="col-sm-2 label-on-left">Keterangan</label>
                          <div class="col-sm-7">
                              <div class="form-group label-floating is-empty">
                                <textarea class="form-control" rows="3" name="keterangan_kategori" placeholder="{{ __('Keterangan') }}" value="{{ $data->keterangan_kategori }}"></textarea>                                  
                              </div>
                          </div>
                      </div>

                        {{-- <div class="row">
                          <label class="col-sm-2 col-form-label">{{ __('Bahan Jahit') }}</label>
                          <div class="col-sm-7">
                            <div class="form-group">
                              <input class="form-control" name="bahan_jahit" id="category" type="text" placeholder="{{ __('Contoh : Katun') }}" value="{{ $data->bahan_jahit }}"  />
                            </div>
                          </div>
                        </div> --}}

                        <div class="row">
                          <label class="col-sm-2 label-on-left">Bahan Jahit</label>
                          <div class="col-sm-7">
                              <div class="form-group label-floating is-empty">
                                <input class="form-control" name="bahan_jahit" id="category" type="text" placeholder="{{ __('Contoh : Katun') }}" value="{{ $data->bahan_jahit }}"  />                                  
                              </div>
                          </div>
                        </div>

                        {{-- <div class="row">
                          <label class="col-sm-2 col-form-label">{{ __('Harga Bahan (Rp)') }}</label>
                          <div class="col-sm-7">
                            <div class="form-group">
                              <input class="form-control" name="harga_bahan" id="category" type="number" placeholder="{{ __('100xxxx') }}" value="{{ $data->harga_bahan }}"  />
                            </div>
                          </div>
                        </div> --}}

                        <div class="row">
                          <label class="col-sm-2 label-on-left">Harga Bahan (Rp)</label>
                          <div class="col-sm-7">
                              <div class="form-group label-floating is-empty">
                                <input class="form-control" name="harga_bahan" id="category" type="number" placeholder="{{ __('100xxxx') }}" value="{{ $data->harga_bahan }}"  />                                  
                              </div>
                          </div>
                        </div>

                        {{-- <div class="row">
                          <label class="col-sm-2 col-form-label">{{ __('Ongkos Jahit (Rp)') }}</label>
                          <div class="col-sm-7">
                            <div class="form-group">
                              <input class="form-control" name="ongkos_penjahit" id="category" type="number" placeholder="{{ __('100xxx') }}" value="{{ $data->ongkos_penjahit }}"  />
                            </div>
                          </div>
                        </div> --}}

                        <div class="row">
                          <label class="col-sm-2 label-on-left">Ongkos Jahit (Rp)</label>
                          <div class="col-sm-7">
                              <div class="form-group label-floating is-empty">
                                <input class="form-control" name="ongkos_penjahit" id="category" type="number" placeholder="{{ __('100xxx') }}" value="{{ $data->ongkos_penjahit }}"  />                                  
                              </div>
                          </div>
                        </div>
                        
                        {{-- <div class="row">
                          <label class="col-sm-2 col-form-label">{{ __('Perkiraan Lama Waktu Pengerjaan') }}</label>
                          <div class="col-sm-1">
                            <div class="form-group">
                              <input class="form-control" name="perkiraan_lama_waktu_pengerjaan" id="category" type="number" value="{{ $data->perkiraan_lama_waktu_pengerjaan }}"  />
                            </div>
                          </div>
                          <label class="col-sm-6 col-form-label">{{ __('Hari') }}</label>
                        </div> --}}

                        <div class="row">
                          <label class="col-sm-2 label-on-left">Perkiraan Lama Waktu Pengerjaan</label>
                          <div class="col-sm-7">
                              <div class="form-group label-floating is-empty">
                                <input class="form-control" name="perkiraan_lama_waktu_pengerjaan" id="category" type="number" value="{{ $data->perkiraan_lama_waktu_pengerjaan }}"  />                                  
                              </div>
                          </div>
                        </div>
          

                        <div class="form-footer text-right">
                          <a type="button" class="btn btn-white pull-fill" href="/data_detail_kategori">Kembali</a>
                          <button type="submit" class="btn btn-primary pull-fill">Simpan</button>
                        </div>

                      </div>
                          


                  
                          {{-- <button type="submit" onclick="return confirm('Ingin mengubah data?')" class="btn btn-primary float-right">Simpan</button>
                          <a type="button" class="btn btn-secondary float-right" href="/data_detail_kategori">Kembali</a> --}}
                      </form>
                      
                </div>
            </div>
            </div>
        </div>
        </div>
  </div>

  {{-- <script>
    function myFunction() {
      document.getElementById("exampleFormControlSelect1").value = "{{ $data->tbl_kategori->nama_kategori }}";
    }
    </script> --}}

@endsection

