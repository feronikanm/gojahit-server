@extends('adminpro.main')

@section('title', 'Tambah Data')

@section('page_name', 'Tambah Data')

@section('content')

  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8">
          <div class="card">
                
            <div class="card-header card-header-tabs" data-background-color="purple">
              <h4 class="card-title ">Tambah Data</h4>
            </div>
                
            <div class="card-body">
      
              <form method="post" action="/data_detail_kategori/store" class="form-horizontal">
                {{ csrf_field() }}

                <div class="card-content">
                     
                  <div class="row">
                    <label class="col-sm-2 label-on-left">Nama Penjahit</label>
                    <div class="col-lg-5 col-md-6 col-sm-7">
                      <div class="form-group">
                        <select class="form-control selectpicker" data-style="btn btn-primary btn-round" title="Nama Penjahit" name="id_penjahit">
                          @foreach ($penjahit as $data_penjahit)
                            <option value="{{ $data_penjahit->id_penjahit }}">{{ $data_penjahit->nama_penjahit }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                  </div>  
          
                  <div class="row">
                    <label class="col-sm-2 label-on-left">Kategori</label>
                    <div class="col-lg-5 col-md-6 col-sm-7"> 
                      <div class="form-group">
                        <select class="form-control selectpicker" data-style="btn btn-primary btn-round" title="Kategori" name="id_kategori">
                          @foreach ($kategori as $data_kategori)
                            <option value="{{ $data_kategori->id_kategori }}">{{ $data_kategori->nama_kategori }}</option>
                          @endforeach
                        </select>
                      </div> 
                    </div>
                  </div>
                        
                  <div class="row">
                    <label class="col-sm-2 label-on-left">Keterangan</label>
                    <div class="col-sm-7">
                      <div class="form-group label-floating is-empty">
                        <textarea class="form-control" rows="3" name="keterangan_kategori" placeholder="{{ __('Keterangan tambahan mengenai bahan') }}"></textarea>                                  
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <label class="col-sm-2 label-on-left">Bahan Jahit</label>
                    <div class="col-sm-7">
                      <div class="form-group label-floating is-empty">
                        <input class="form-control" name="bahan_jahit" id="category" type="text" placeholder="{{ __('Contoh : Katun') }}"  />                                  
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <label class="col-sm-2 label-on-left">Harga Bahan (Rp)</label>
                    <div class="col-sm-7">
                      <div class="form-group label-floating is-empty">
                        <input class="form-control" name="harga_bahan" id="category" type="number" placeholder="{{ __('100xxxx') }}"   />                                  
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <label class="col-sm-2 label-on-left">Ongkos Jahit (Rp)</label>
                    <div class="col-sm-7">
                      <div class="form-group label-floating is-empty">
                        <input class="form-control" name="ongkos_penjahit" id="category" type="number" placeholder="{{ __('100xxx') }}"   />                                  
                      </div>
                    </div>
                  </div>
  
                  <div class="row">
                    <label class="col-sm-2 label-on-left">Perkiraan Lama Waktu Pengerjaan</label>
                    <div class="col-sm-2">
                      <div class="form-group label-floating is-empty">
                        <input class="form-control" name="perkiraan_lama_waktu_pengerjaan" id="category" type="number" placeholder="{{ __('Contoh : 5') }}" />                                  
                      </div>
                    </div>
                  </div>   

                  <div class="form-footer text-right">
                    <a type="button" class="btn btn-white pull-fill" href="/data_detail_kategori">Kembali</a>
                    <button type="submit" onclick="return confirm('Ingin menambahkan data?')" class="btn btn-primary pull-fill">Simpan</button>
                  </div>  
          
                </div>          
              </form>          
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection