@extends('adminpro.main')
{{-- @extends('adminlayouts.main_show_page') --}}

@section('title', 'Data Penjahit')

@section('page_name', 'Data Penjahit')

@section('content')
    
<div class="content">
    <div class="container-fluid">

      <div class="row">
        <div class="col-md-12">
          <div class="card card-profile">
            <div class="card-avatar">
              <a href="javascript:;">
      
                <img class="img" src="{{ url('img_penjahit/'.$data->foto_penjahit) }}" style="width: 130px; height: 130px;" />
              </a>
            </div>
            
            <div class="card-body">
              <h6 class="card-category  text-primary">Nama Toko</h6>
              <h4 class="card-title">{{ $data->nama_toko }}</h4>
              {{-- <p class="card-description">{{ $data->email_pelanggan }}</p> --}}  
            </div>

          </div>
        </div>
      </div>

{{-- <style>
  .col-form-label{
    font-weight: bold;
  }
</style> --}}
      
      <div class="row">

        <div class="col-md-6">
          <div class="card">

            
            {{-- <div class="card-header card-header-primary">
              <h4 class="card-title">Detail Data</h4>
            </div> --}}

            <div class="card-header card-header-tabs" data-background-color="purple">
              <h4 class="card-title">Detail Data</h4>
            </div>

            {{-- <div class="card-body ml-5 "> --}}
            <div class="card-content">
       
              <div class="card-content table-responsive table-full-width" style="margin-left: 50px">
                <div class="row">
                  <label class="col-sm-4 col-form-label text-primary ">{{ __('ID Penjahit') }}</label>
                  <div class="col-sm-8">{{ $data->id_penjahit }}</div>
                </div>

                <div class="row">
                  <label class="col-sm-4 col-form-label text-primary">{{ __('Nama Penjahit') }}</label>
                  <div class="col-sm-8">{{ $data->nama_penjahit }}</div>
                </div>
                
                <div class="row">
                  <label class="col-sm-4 col-form-label text-primary">{{ __('Email') }}</label>
                  <div class="col-sm-8">{{ $data->email_penjahit }}</div>
                </div>

                <div class="row">
                  <label class="col-sm-4 col-form-label text-primary">{{ __('Password') }}</label>
                  <div class="col-sm-8">{{ $data->password_penjahit }}</div>
                </div>

                <div class="row">
                  <label class="col-sm-4 col-form-label text-primary">{{ __('No. Telp') }}</label>
                  <div class="col-sm-8">{{ $data->telp_penjahit }}</div>
                </div>

                <div class="row">
                  <label class="col-sm-4 col-form-label text-primary">{{ __('Nama Toko') }}</label>
                  <div class="col-sm-8">{{ $data->nama_toko }}</div>
                </div>
      
                <div class="row">
                  <label class="col-sm-4 col-form-label text-primary">{{ __('Keterangan Toko') }}</label>
                  <div class="col-sm-8">{{ $data->keterangan_toko }}</div>
                </div>
      
                <div class="row">
                  <label class="col-sm-4 col-form-label text-primary">{{ __('Latitude') }}</label>
                  <div class="col-sm-8">{{ $data->latitude_penjahit }}</div>
                </div>
      
                <div class="row">
                  <label class="col-sm-4 col-form-label text-primary">{{ __('Longitude') }}</label>
                  <div class="col-sm-8">{{ $data->longitude_penjahit }}</div>
                </div>

                <div class="row">
                  <label class="col-sm-4 col-form-label text-primary">{{ __('Alamat') }}</label>
                  <div class="col-sm-8">{{ $data->alamat_penjahit }}</div>
                </div>

                <div class="row">
                  <label class="col-sm-4 col-form-label text-primary">{{ __('Spesifikasi Penjahit') }}</label>
                  <div class="col-sm-8">{{ $data->spesifikasi_penjahit }}</div>
                </div>

                <div class="row">
                  <label class="col-sm-4 col-form-label text-primary">{{ __('Jangkauan Kategori Penjahit') }}</label>
                  <div class="col-sm-8">{{ $data->jangkauan_kategori_penjahit }}</div>
                </div>

                {{-- <div class="row">
                  <label class="col-sm-4 col-form-label">{{ __('Hari Buka') }}</label>
                  <div class="col-sm-8">{{ $data->hari_buka }}</div>
                  <div class="col-sm-8">
                      @foreach ($data as $value)
                        {{ $value['hari_buka'] }},
                      @endforeach
                  </div>
                </div> --}}

                {{-- <div class="row">
                  <label class="col-sm-4 col-form-label text-primary">{{ __('Hari Buka') }}</label>
                  @foreach ($data->hari_buka as $hari_bukan)
                    <div class="col-sm-8">
                        {{ $hari_bukan }}
                        {{$value = json_decode ($hari_bukan->hari_buka)}}                  
                    </div>
                    @endforeach
                </div> --}}

                <div class="row">
                  <label class="col-sm-4 col-form-label text-primary">{{ __('Jam Buka') }}</label>
                  <div class="col-sm-8">{{ $data->jam_buka }}</div>
                </div>

                <div class="row">
                  <label class="col-sm-4 col-form-label text-primary">{{ __('Jam Tutup') }}</label>
                  <div class="col-sm-8">{{ $data->jam_tutup }}</div>
                </div>

                {{-- <div class="row">
                  <label class="col-sm-4 col-form-label">{{ __('Kategori') }}</label>
                </div>

                <div class="row">
                  @foreach ($kategori_penjahit as $kategori_penjahit)
                  
                    <div class="col-sm-8">
                      <li>
                        {{ $kategori_penjahit->nama_kategori }}
                      </li>
                    </div>
                  @endforeach
                </div> --}}

              </div>

              <div class="form-footer text-right" style="margin-bottom: 60px">
                <a type="button" class="btn btn-primary pull-right" href="/data_penjahit/edit/{{ $data->id_penjahit }}">Update Data</a>
                <a type="button" class="btn btn-white pull-right" href="/data_penjahit">Kembali</a>
              </div>

              {{-- <a type="button" class="btn btn-primary float-right" href="/data_penjahit/edit/{{ $data->id_penjahit }}">Update Data</a> --}}
              {{-- <a type="button" class="btn btn-secondary float-right" href="/data_penjahit">Kembali</a> --}}

            </div>
          </div>
        </div>


        

        <div class="col-md-6">
          <div class="card">
            
            {{-- <div class="card-header card-header-tabs card-header-primary  mb-3">
              <div class="nav-tabs-navigation">
                <div class="nav-tabs-wrapper">
                  <span class="nav-tabs-title" style="font-size: 1.125rem; ">Ketegori</span>
                  <ul class="nav nav-tabs justify-content-end" data-tabs="tabs">
                    <li class="nav-item">
                      <a type="button" rel="tooltip" data-placement="bottom" title="Tambah Data" class="nav-link active" href="/data_penjahit/show/kategori/add/{{ $data->id_penjahit }}"><i class="material-icons">add</i> Tambah Data</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div> --}}

            <div class="card-header card-header-tabs" data-background-color="purple">
                        
              <div class="nav nav-tabs" data-tabs="tabs">
                  <span class="nav-tabs-title"><h4>Ketegori</h4></span>
                  <a type="button" class="btn btn-primary pull-right " href="/data_penjahit/show/kategori/add/{{ $data->id_penjahit }}"><i class="material-icons">add</i> Tambah Data</a>
              </div>
          </div>
            
            {{-- <div class="card-header card-header-primary">
              <h4 class="card-title">Kategori</h4>
            </div> --}}
            

            {{-- <div class="card-body"> --}}
            <div class="card-content">
              <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped ">
                    <thead class="text-primary" >
                        <th class="text-center">No</th>
                        <th>Kategori</th>
                        <th class="text-center">Gambar Kategori</th>
                        <th class="text-center">Action</th>
                    </thead>
                    @php
                        $no = 1;
                    @endphp
                    <tbody>   
                        @foreach ($kategori_penjahit as $kategori)
                            <tr>
                                <td class="text-center">{{ $no++ }}</td>
                                <td>{{ $kategori->nama_kategori }}</td>
                                <td class="text-center">
                                    <img src="{{ url('img_kategori/'.$kategori->gambar_kategori) }}" style="width: 120px; height: 120px; border-radius: 10px;" class="card-img-top mb-3" alt="...">
                                </td>  
                                <td class="td-actions text-center">
                                  <a type="button" rel="tooltip" data-placement="bottom" title="Lihat Data" class="btn btn-info" href="/data_penjahit/show/ukuran/{{ $kategori->id_detail_kategori }}"><i class="material-icons">trending_flat</i></a>
                                  <a type="button" rel="tooltip" data-placement="bottom" title="Edit Data" class="btn btn-success" href="/data_penjahit/show/kategori/edit/{{ $kategori->id_detail_kategori }}"><i class="material-icons">edit</i></a>
                                  <a type="button" rel="tooltip" data-placement="bottom" title="Hapus Data" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')" href="/data_penjahit/show/kategori/delete/{{ $kategori->id_detail_kategori }}"><i class="material-icons">close</i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table> 
            </div>
            </div>
          </div>
        </div>

      {{-- </div> --}}

      {{-- <div class="row"> --}}
        <div class="col-md-6">
          <div class="card">


            {{-- <div class="card-header card-header-primary">
              <h4 class="card-title">Data Pesanan</h4>
            </div> --}}

            <div class="card-header card-header-tabs" data-background-color="purple">
              <h4 class="card-title">Data Pesanan</h4>
            </div>


            {{-- <div class="card-body"> --}}
            <div class="card-content">
              <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped ">
                    <thead class="text-primary" >
                        <th class="text-center">ID Pesanan</th>
                        <th>Nama Pelanggan</th>
                        <th>Tanggal Pesanan</th>
                        <th>Tanggal Pesanan Selesai</th>
                        <th>Status Pesanan</th>
                    </thead>
                    @php
                        $no = 1;
                    @endphp
                    <tbody>   
                        @foreach ($pesanan as $data_pesanan)
                            <tr>
                              <td class="text-center">{{ $data_pesanan->id_pesanan }}</td>
                              <td>{{ $data_pesanan->nama_pelanggan }}</td>
                              <td>{{ $data_pesanan->tanggal_pesanan }}</td>
                              <td>{{ $data_pesanan->tanggal_pesanan_selesai }}</td>
                              <td>{{ $data_pesanan->status_pesanan }}</td>
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


@endsection