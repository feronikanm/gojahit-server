@extends('adminpro.main')

@section('title', 'Detail Data Pesanan')

@section('page_name', 'Detail Data Pesanan')

@section('content')


        
  <div class="content">
    <div class="container-fluid">


      <div class="row">
        <div class="col-md-6">
          <div class="card">


            <div class="card-header card-header-tabs" data-background-color="purple">
              <div class="nav nav-tabs" data-tabs="tabs">
                  <span class="nav-tabs-title"><h4 style=" text-shadow: 0 2px 5px rgba(33, 33, 33, 0.5); ">Detail Data</h4></span>
                  <a type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#tambahDataUkuran"><i class="material-icons">add</i> Masukkan Data Ukuran</a>
              </div>
          </div>

            {{-- <div class="card-header card-header-tabs" data-background-color="purple">
                <h4 class="card-title">Detail Data</h4>
            </div> --}}

            <div class="card-content">
              
              <div class="card-content table-responsive table-full-width" style="margin-left: 50px">
                <div class="row">
                  <label class="col-sm-3 col-form-label text-primary">{{ __('ID Pesanan') }}</label>
                  <div class="col-sm-5">{{ $data->id_pesanan }}</div>
                </div>
      
                <div class="row">
                  <label class="col-sm-3 col-form-label text-primary">{{ __('Nama Penjahit') }}</label>
                  <div class="col-sm-5">{{ $data->tbl_penjahit->nama_penjahit }}</div>
                </div>
                
                <div class="row">
                  <label class="col-sm-3 col-form-label text-primary">{{ __('Nama Pelanggan') }}</label>
                  <div class="col-sm-5">{{ $data->tbl_pelanggan->nama_pelanggan }}</div>
                </div>
      
                @foreach ($data_pesanan as $data_pesanans)
                <div class="row">
                    <label class="col-sm-3 col-form-label text-primary">{{ __('Kategori') }}</label>
                    <div class="col-sm-5">{{ $data_pesanans->nama_kategori }}</div>
                  </div>
                @endforeach
                
      
                <div class="row">
                  <label class="col-sm-3 col-form-label text-primary">{{ __('Tanggal Pesanan') }}</label>
                  <div class="col-sm-5">{{ $data->tanggal_pesanan }}</div>
                </div>
      
                <div class="row">
                  <label class="col-sm-3 col-form-label text-primary">{{ __('Catatan Pesanan') }}</label>
                  <div class="col-sm-5">{{ $data->catatan_pesanan }}</div>
                </div>
      
                <div class="row">
                  <label class="col-sm-3 col-form-label text-primary">{{ __('Asal Bahan') }}</label>
                  <div class="col-sm-5">{{ $data->asal_bahan }}</div>
                </div>
      
                <div class="row">
                  <label class="col-sm-3 col-form-label text-primary">{{ __('Bahan Jahitan') }}</label>
                  <div class="col-sm-5">{{ $data->bahan_jahit }}</div>
                </div>
      
                <div class="row">
                  <label class="col-sm-3 col-form-label text-primary">{{ __('Panjang Kain (m)') }}</label>
                  <div class="col-sm-5">{{ $data->panjang_bahan }}</div>
                </div>

                <div class="row">
                    <label class="col-sm-3 col-form-label text-primary">{{ __('Lebar Kain (m)') }}</label>
                    <div class="col-sm-5">{{ $data->lebar_bahan }}</div>
                  </div>

                  <div class="row">
                    <label class="col-sm-3 col-form-label text-primary">{{ __('Status Bahan') }}</label>
                    <div class="col-sm-5">{{ $data->status_bahan }}</div>
                  </div>

                  <div class="row">
                    <label class="col-sm-3 col-form-label text-primary">{{ __('Harga Bahan') }}</label>
                    <div class="col-sm-5">{{ $data->harga_bahan }}</div>
                  </div>

                  <div class="row">
                    <label class="col-sm-3 col-form-label text-primary">{{ __('Ongkos Penjahit') }}</label>
                    <div class="col-sm-5">{{ $data->ongkos_penjahit }}</div>
                  </div>

                  <div class="row">
                    <label class="col-sm-3 col-form-label text-primary">{{ __('Jumlah Jahitan') }}</label>
                    <div class="col-sm-5">{{ $data->jumlah_jahitan }}</div>
                  </div>

                  <div class="row">
                    <label class="col-sm-3 col-form-label text-primary">{{ __('Total Biaya') }}</label>
                    <div class="col-sm-5">{{ $data->total_biaya }}</div>
                  </div>

                  <div class="row">
                    <label class="col-sm-3 col-form-label text-primary">{{ __('Status Pesanan') }}</label>
                    <div class="col-sm-5">{{ $data->status_pesanan }}</div>
                  </div>
      
              </div>
    

              
              <div class="form-footer text-right" style="margin-bottom: 60px">
                <a type="button" class="btn btn-primary pull-right" href="/data_pesanan/edit/{{ $data->id_pesanan }}">Update Data</a>
                <a type="button" class="btn btn-white pull-right" href="/data_pesanan">Kembali</a>
              </div>             
            </div>




          </div>
        </div>
      </div>


      <div class="row">
        <div class="col-md-8">
          <div class="card">

            <div class="card-header card-header-tabs" data-background-color="purple">
                <h4 class="card-title">Data Ukuran Pesanan</h4>
              </div>

              <div class="card-content">

                <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                    <thead class=" text-primary">
                        <th class="text-center">No</th>
                        <th>Nama Ukuran</th>
                        <th>Ukuran</th>
                       
                        <th class="text-center">Actions</th>
                    </thead>
                    @php
                        $no = 1;
                    @endphp
                    <tbody>   
                        @foreach ($data_ukuran_detail_pesanan as $data_ukuran)
                            <tr>
                                <td class="text-center">{{ $no++ }}</td>
                                <td>{{ $data_ukuran->nama_ukuran }}</td>
                                <td>{{ $data_ukuran->ukuran_pesanan }}</td>
                            
                                <td class="td-actions text-center">
                                    <a type="button" rel="tooltip" data-placement="bottom"  class="btn btn-success" href="/data_ukuran_detail_pesanan/edit/{{ $data_ukuran->id_ukuran_detail_pesanan }}"><i class="material-icons">edit</i></a>
                                    <a type="button" rel="tooltip" data-placement="bottom"  class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')" href="/data_ukuran_detail_pesanan/delete/{{ $data_ukuran->id_ukuran_detail_pesanan }}"><i class="material-icons">close</i></a>
                                </td>
                                
                            </tr>
                            @endforeach
                    </tbody>
                    </table>
                </div>
                </div>


          </div>
        </div>
      </div>


    </div>
  </div>

    <!-- Modal Tambah Ukuran Pesanan-->
    <div class="modal fade" id="tambahDataUkuran" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Ukuran</h5>
            </div>

            <div class="modal-body">

                <form method="post" action="/data_ukuran_detail_pesanan/store" enctype="multipart/form-data">
                    {{ csrf_field() }}


                    <input type="hidden" name="id_pesanan" id="id_pesanan" value="{{ $data->id_pesanan }}">


                    <div>
                      <div class="form-group" id="exampleFormControlSelect1" >
                      <select class="selectpicker" data-style="btn btn-primary" title="Pilih Ukuran" name="id_ukuran">
                          @foreach ($data_ukuran_detail_kategori as $data_ukuran)
                              <option value="{{ $data_ukuran->id_ukuran }}">{{ $data_ukuran->nama_ukuran }}</option>
                          @endforeach
                      </select>
                      </div>
                    </div>


                    <div class="form-group">
                        <label for="exampleFormControlInput1">Ukuran (cm)</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1" name="ukuran_pesanan">
                      </div>
        
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </div>
                </form>
        </div>
        </div>
    </div>
<!-- End Modal Tambah Ukuran Pesanan-->


@endsection

