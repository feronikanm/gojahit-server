@extends('adminpro.main')

@section('title', 'Data Detail Kategori')

@section('page_name', 'Data Detail Kategori')

@section('content')
   
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                
                        <div class="card-header card-header-tabs" data-background-color="purple"> 
                            <div class="nav nav-tabs" data-tabs="tabs">
                                <span class="nav-tabs-title"><h4 style=" text-shadow: 0 2px 5px rgba(33, 33, 33, 0.5); ">Data Detail Ketegori</h4></span>
                                <a type="button" class="btn btn-primary pull-right " href="/data_detail_kategori/add"><i class="material-icons">add</i> Tambah Data</a>
                            </div>
                        </div>

                        <div class="card-content">

                            <div class="table-responsive">
                                <table id="datatables" class="table table-bordered table-striped">
                                    <thead class=" text-primary">
                                        <th class="text-center">No</th>
                                        <th>Nama Penjahit</th>
                                        <th>Kategori Penjahit</th>
                                        <th>Keterangan Kategori</th>
                                        <th>Bahan</th>
                                        <th>Harga Bahan</th>
                                        <th>Ongkos Penjahit</th>
                                        <th>Perkiraan Lama Waktu</th>
                                        <th class="text-center">Actions</th>
                                    </thead>
                                    @php
                                        $no = 1;
                                    @endphp
                                    <tbody>   
                                        @foreach ($detail_kategori as $data_detail_kategori)
                                            <tr>
                                                <td class="text-center">{{ $no++ }}</td>
                                                <td>{{ $data_detail_kategori->nama_penjahit }}</td>
                                                <td>{{ $data_detail_kategori->nama_kategori }}</td>
                                                <td>{{ $data_detail_kategori->keterangan_kategori }}</td>
                                                <td>{{ $data_detail_kategori->bahan_jahit }}</td>
                                                <td>{{ $data_detail_kategori->harga_bahan }}</td>
                                                <td>{{ $data_detail_kategori->ongkos_penjahit }}</td>
                                                <td>{{ $data_detail_kategori->perkiraan_lama_waktu_pengerjaan }}</td>
                                                <td class="td-actions text-center">
                                                    <a type="button" rel="tooltip" data-placement="bottom" title="Lihat Data" class="btn btn-info" href="/data_detail_kategori/show/{{ $data_detail_kategori->id_detail_kategori }}"><i class="material-icons">trending_flat</i></a>
                                                    <a type="button" rel="tooltip" data-placement="bottom" title="Edit Data" class="btn btn-success" href="/data_detail_kategori/edit/{{ $data_detail_kategori->id_detail_kategori }}"><i class="material-icons">edit</i></a>
                                                    <a type="button" rel="tooltip" data-placement="bottom" title="Hapus Data" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')" href="/data_detail_kategori/delete/{{ $data_detail_kategori->id_detail_kategori }}"><i class="material-icons">close</i></a>
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