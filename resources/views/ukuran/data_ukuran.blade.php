@extends('adminpro.main')
{{-- @extends('adminlayouts.main') --}}

@section('title', 'Data Ukuran')

@section('page_name', 'Data Ukuran')

@section('content')

    <div class="content">
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
            <div class="card">

                {{-- ini untuk layout adminlayouts

                <div class="card-header card-header-tabs card-header-primary">
                    <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                        <span class="nav-tabs-title" style="font-size: 1.125rem; text-shadow: 0 2px 5px rgba(33, 33, 33, 0.5); ">Data Ukuran</span>
                        <ul class="nav nav-tabs justify-content-end" data-tabs="tabs">
                        <li class="nav-item">
                            <a type="button" class="nav-link active" href="/data_ukuran/add"><i class="material-icons">add</i> Tambah Data</a>
                        </li>
                        </ul>
                    </div>
                    </div>
                </div> --}}

                <div class="card-header card-header-tabs" data-background-color="purple">
                        
                    <div class="nav nav-tabs" data-tabs="tabs">
                        <span class="nav-tabs-title"><h4 style=" text-shadow: 0 2px 5px rgba(33, 33, 33, 0.5); ">Data Ukuran</h4></span>
                        <a type="button" class="btn btn-primary pull-right " href="/data_ukuran/add"><i class="material-icons">add</i> Tambah Data</a>
                    </div>
                </div>

                {{-- <div class="card-header card-header-primary">
                <p class="card-category"></p>
                <h4 class="card-title ">Data Ukuran</h4>
                <p class="card-category"></p>
                <a type="button" class="btn btn-primary pull-right" href="/data_ukuran/add"><i class="material-icons">add</i> Tambah Data</a>
                </div> --}}

                {{-- <div class="card-body"> --}}
                <div class="card-content">

                <div class="table-responsive">
                    {{-- <table id="example1" class="table table-bordered table-striped"> --}}
                    <table id="datatables" class="table table-bordered table-striped">

                    <thead class="text-primary">
                        <th class="text-center">No</th>
                        <th>Nama Ukuran</th>
                        <th class="text-center">Gambar Ukuran</th>
                        <th class="text-center">Actions</th>
                    </thead>
                    @php
                        $no = 1;
                    @endphp
                    <tbody>   
                        @foreach ($ukuran as $data_ukuran)  
                            <tr>
                                <td class="text-center">{{ $no++ }}</td>
                                <td>{{ $data_ukuran->nama_ukuran }}</td>
                                <td class="text-center">
                                    <img src="{{ url('img_ukuran/'.$data_ukuran->gambar_ukuran) }}" style="width: 120px; height: 120px; border-radius: 20px;" class="card-img-top mb-3" alt="...">
                                </td>
  
                                <td class="td-actions text-center">
                                    <a type="button" rel="tooltip" data-placement="bottom" title="Edit Data" class="btn btn-success" href="/data_ukuran/edit/{{ $data_ukuran->id_ukuran }}"><i class="material-icons">edit</i></a>
                                    <a type="button" rel="tooltip" data-placement="bottom" title="Hapus Data" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')" href="/data_ukuran/delete/{{ $data_ukuran->id_ukuran }}"><i class="material-icons">close</i></a>
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

