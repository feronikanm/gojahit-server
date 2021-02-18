@extends('adminlayouts.main')

@section('title', 'Data Ukuran Detail Kategori')

@section('page_name', 'Ukuran Detail Kategori')

@section('content')
        

  <div class="content">
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
            <p class="card-category"></p>
            <h4 class="card-title ">Data Ukuran Detail Ketegori</h4>
            <p class="card-category"></p>
            </div>
            <div class="card-body">
            <div class="table-responsive">
                <table id="example1" class="table">
                <thead class=" text-primary">
                    <th class="text-center">No</th>
                    <th>Nama Penjahit</th>
                    <th>Nama Kategori</th>
                    <th>Ukuran</th>
                    <th class="text-right">Actions</th>
                </thead>
                @php
                    $no = 1;
                @endphp
                <tbody>   
                    @foreach ($detail_kategori as $data_detail_kategori)
                        <tr>
                            <td class="text-center">{{ $no++ }}</td>
                            <td>{{ $data_detail_kategori->tbl_penjahit->nama_penjahit }}</td>
                            <td>{{ $data_detail_kategori->tbl_kategori->nama_kategori }}</td>
                            {{-- <td>{{ $data_detail_kategori->tbl_ukuran->nama_ukuran }}</td> --}}
                            <td>
                                @foreach ($data_detail_kategori->tbl_ukuran as $data_ukuran)
                                    <li>
                                        {{ $data_ukuran->nama_ukuran }}
                                    </li>    
                                @endforeach
                            </td>

                            <td class="td-actions text-right">
                                @foreach ($data_detail_kategori->tbl_ukuran as $data_ukuran)
                                <form action="#" method="POST">
                                    <button type="button" rel="tooltip" class="btn btn-success">
                                        <i class="material-icons">edit</i>
                                    </button>
                                    <button type="button" rel="tooltip" class="btn btn-danger">
                                        <i class="material-icons">close</i>
                                    </button>
                                </form>
                                @endforeach
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