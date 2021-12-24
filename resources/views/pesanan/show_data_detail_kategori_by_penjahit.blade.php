@extends('adminpro.main')

@section('title', 'Detail Kategori')

@section('page_name', 'Detail Kategori')

@section('content')
        
    <div class="content">
        <div class="container-fluid">

          <div class="row">
            <div class="col-md-12">
            <div class="card">

                <div class="card-header card-header-tabs" data-background-color="purple">
                    <h4 class="card-title ">Data Detail Kategori oleh {{ $penjahit->nama_penjahit }}</h4>
                </div>

                <div class="card-content">
                    <div class="table-responsive">
                      <table id="example1" class="table table-bordered table-striped ">
                          <thead class="text-primary" >
                              <th class="text-center">No</th>
                              <th>Kategori</th>
                              <th>Keterangan</th>
                              <th>Bahan Jahit</th>
                              <th>Harga Bahan (Rp)</th>
                              <th>Ongkos Jahit (Rp)</th>
                              <th>Lama Pengerjaan (Hari)</th>
                              <th class="text-center">Action</th>
                          </thead>
                          @php
                              $no = 1;
                          @endphp
                          <tbody>   
                              @foreach ($detail_kategori_penjahit as $kategori)
                                  <tr>
                                      <td class="text-center">{{ $no++ }}</td>
                                      <td>{{ $kategori->nama_kategori }}</td>
                                      <td>{{ $kategori->keterangan_kategori }}</td>
                                      <td>{{ $kategori->bahan_jahit }}</td>
                                      <td>{{ $kategori->harga_bahan }}</td>
                                      <td>{{ $kategori->ongkos_penjahit }}</td>
                                      <td>{{ $kategori->perkiraan_lama_waktu_pengerjaan }}</td>
                                      <td class="td-actions text-center">
                                        <a type="button" rel="tooltip" data-placement="bottom" class="btn btn-info" href="/data_pesanan/add/{{ $kategori->id_detail_kategori }}">Pilih</a>
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

@endsection