@extends('adminpro.main')
{{-- @extends('adminlayouts.main') --}}

@section('title', 'Data Ukuran Detail Pesanan')

@section('page_name', 'Data Ukuran Detail Pesanan')

@section('content')
        

  <div class="content">
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
        <div class="card">

            <div class="card-header card-header-tabs" data-background-color="purple">
                <h4 class="card-title">Data Ukuran Detail Pesanan</h4>
            </div>

              <div class="card-content">

                <div class="table-responsive">
                    <table id="datatables" class="table table-bordered table-striped">
                    <thead class=" text-primary">
                        <th class="text-center">No</th>
                        <th class="text-center">ID Pesanan</th>
                        <th>Nama Kategori</th>
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
                                <td class="text-center">{{ $data_ukuran->id_pesanan }}</td>
                                <td>{{ $data_ukuran->nama_kategori }}</td>
                                <td>{{ $data_ukuran->nama_ukuran }}</td>
                                <td>{{ $data_ukuran->ukuran_pesanan }}</td>
                            
                                <td class="td-actions text-center">
                                    <a type="button" rel="tooltip" data-placement="bottom" title="Edit Data" class="btn btn-success" href="/data_ukuran_detail_pesanan/edit/{{ $data_ukuran->id_ukuran_detail_pesanan }}"><i class="material-icons">edit</i></a>
                                    <a type="button" rel="tooltip" data-placement="bottom" title="Hapus Data" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')" href="/data_ukuran_detail_pesanan/delete/{{ $data_ukuran->id_ukuran_detail_pesanan }}"><i class="material-icons">close</i></a>
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