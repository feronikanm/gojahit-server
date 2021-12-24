@extends('adminpro.main')

@section('title', 'Tambah Data Pesanan')

@section('page_name', 'Tambah Data Pesanan')

@section('content')
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
        
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8">
          <div class="card">

            <div class="card-header card-header-tabs" data-background-color="purple">
              <h4 class="card-title ">Tambah Data</h4>
            </div>
                  
            <div class="card-body">

              <form method="post" action="/data_pesanan/store" enctype="multipart/form-data" class="form-horizontal">
                {{ csrf_field() }}

                <div class="card-content ">
                          
                    <input type="hidden" name="id_penjahit" id="id_penjahit" value="{{ $data->tbl_penjahit->id_penjahit }}">
                    <input type="hidden" name="id_detail_kategori" id="id_detail_kategori" value="{{ $data->id_detail_kategori }}">

                    <div class="row">
                        <label class="col-sm-2 label-on-left">Pilih Pelanggan</label>
                        <div class="col-sm-7">
                            <div class="form-group" id="exampleFormControlSelect1" >
                                <select class="selectpicker" data-style="btn btn-info" title="Pilih Pelanggan" name="id_pelanggan">
                                    @foreach ($pelanggans as $pelanggan)
                                        <option value="{{ $pelanggan->id_pelanggan }}">{{ $pelanggan->nama_pelanggan }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                      </div>

                      {{-- <div class="row">
                        <label class="col-sm-2 label-on-left">Tanggal Pesanan Selesai</label>
                        <div class="col-sm-7">
                          <div class="form-group label-floating is-empty">
                            <input type="text" class="form-control" id="datepicker" name="tanggal_pesanan_selesai" value="{{ date("d/m/Y") }}" />
                          </div>
                        </div>
                      </div> --}}

                  <div class="row">
                    <label class="col-sm-2 label-on-left">Catatan Pesanan</label>
                    <div class="col-sm-7">
                      <div class="form-group label-floating is-empty">
                        <textarea class="form-control" rows="3" name="catatan_pesanan" placeholder="{{ __('Catatan tambahan') }}"></textarea>                                  
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
                    <label class="col-sm-2 label-on-left">Asal Bahan</label>
                    <div class="col-sm-7 checkbox-radios">
                        <div class="radio">
                            <label>
                                <input type="radio" name="asal_bahan" value="Penjahit" checked="true"> Penjahit
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="asal_bahan" value="Pelanggan"> Pelanggan
                            </label>
                        </div>
                    </div>
                  </div>

                  <div class="row">
                    <label class="col-sm-2 label-on-left">Panjang Bahan (m)</label>
                    <div class="col-sm-7">
                      <div class="form-group label-floating is-empty">
                        <input class="form-control" name="harga_bahan" id="category" type="number" placeholder="{{ __('1') }}"   />                                  
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <label class="col-sm-2 label-on-left">Lebar Bahan (m)</label>
                    <div class="col-sm-7">
                      <div class="form-group label-floating is-empty">
                        <input class="form-control" name="harga_bahan" id="category" type="number" placeholder="{{ __('1') }}"   />                                  
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <label class="col-sm-2 label-on-left">Status Bahan</label>
                    <div class="col-sm-7 checkbox-radios">
                        <div class="radio">
                            <label>
                                <input type="radio" name="status_bahan" value="Milik Penjahit"> Milik Penjahit
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="status_bahan" value="Diantar ke lokasi penjahit" checked="true"> Diantar ke lokasi penjahit
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="status_bahan" value="Diambil oleh penjahit"> Diambil oleh penjahit
                            </label>
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
                    <label class="col-sm-2 label-on-left">Jumlah Jahitan</label>
                    <div class="col-sm-2">
                      <div class="form-group label-floating is-empty">
                        <input class="form-control" name="jumlah_jahitan" id="category" type="number" placeholder="{{ __('Contoh : 1') }}" />                                  
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <label class="col-sm-2 label-on-left">Status Pesanan</label>
                    <div class="col-sm-2">
                      <div class="form-group label-floating is-empty">
                        <input class="form-control" name="status_pesanan" id="category" type="text" />                                  
                      </div>
                    </div>
                  </div>

                  <div class="form-footer text-right">
                    <a type="button" class="btn btn-white pull-fill" href="/data_pesanan/penjahit/{{ $data->id_penjahit }}">Kembali</a>
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

  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
  <script>
  $( function() {
    // $( "#datepicker" ).datepicker();
    $('#datepicker').datepicker({ dateFormat: 'dd/mm/yy' }).val();
  
  var dateObject = $("#datepicker").datepicker("getDate"); // get the date object
var dateString = dateObject.getFullYear() + '-' + (dateObject.getMonth() + 1) + '-' + dateObject.getDate();// Y-n-j in php date() format
} );
  
</script>

@endsection

