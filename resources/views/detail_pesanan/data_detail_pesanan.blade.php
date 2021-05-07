@extends('adminpro.main')
{{-- @extends('adminlayouts.main') --}}

@section('title', 'Data Detail Pesanan')

@section('page_name', 'Data Detail Pesanan')

@section('content')
    
    <div class="content">
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
            <div class="card">

                {{-- ini untuk layout adminlayouts
                <div class="card-header card-header-primary">
                    <p class="card-category"></p>
                    <h4 class="card-title ">Data Detail Pesanan</h4>
                    <p class="card-category"></p>
                </div> --}}

                <div class="card-header card-header-tabs" data-background-color="purple">
                    <h4 class="card-title">Data Kriteria</h4>
                </div>

                {{-- <div class="card-body"> --}}
                <div class="card-content">

                <div class="table-responsive">

                    {{-- <table id="example1" class="table"> --}}
                    <table id="datatables" class="table table-bordered table-striped">
                    
                        <thead class=" text-primary">
                        <th class="text-center">No</th>
                        <th>ID Pesanan</th>
                        <th>Catatan</th>
                        <th>Kategori</th>
                        <th>Bahan</th>
                        <th>Asal Bahan</th>
                        <th>Panjang</th>
                        <th>Lebar</th>
                        <th>Status Bahan</th>
                        <th>Harga</th>
                        <th>Ongkos Penjahit</th>
                        <th>Jumlah</th>
                        <th>Biaya</th>
                        <th>Total Biaya</th>
                        <th class="text-right">Actions</th>
                    </thead>
                    @php
                        $no = 1;
                    @endphp
                    <tbody>   
                        @foreach ($detail_pesanan as $data_detail_pesanan)
                            <tr>
                                <td class="text-center">{{ $no++ }}</td>
                                <td>{{ $data_detail_pesanan->tbl_pesanan->id_pesanan }}</td>
                                <td>{{ $data_detail_pesanan->catatan_pesanan }}</td>
                                <td>{{ $data_detail_pesanan->kategori }}</td>
                                <td>{{ $data_detail_pesanan->bahan_jahit }}</td>
                                <td>{{ $data_detail_pesanan->asal_bahan }}</td>
                                <td>{{ $data_detail_pesanan->panjang_bahan }}</td>
                                <td>{{ $data_detail_pesanan->lebar_bahan }}</td>
                                <td>{{ $data_detail_pesanan->status_bahan }}</td>
                                <td>{{ $data_detail_pesanan->harga_bahan }}</td>
                                <td>{{ $data_detail_pesanan->ongkos_penjahit }}</td>
                                <td>{{ $data_detail_pesanan->jumlah_jahitan }}</td>
                                <td>{{ $data_detail_pesanan->biaya_jahitan }}</td>
                                <td>{{ $data_detail_pesanan->total_biaya }}</td>
                                
                                <td class="td-actions text-right">
                                    <form action="#" method="POST">
                                        <button type="button" rel="tooltip" class="btn btn-info">
                                            <i class="material-icons">person</i>
                                        </button>
                                        <button type="button" rel="tooltip" class="btn btn-success">
                                            <i class="material-icons">edit</i>
                                        </button>
                                        <button type="button" rel="tooltip" class="btn btn-danger">
                                            <i class="material-icons">close</i>
                                        </button>
                                    </form>
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