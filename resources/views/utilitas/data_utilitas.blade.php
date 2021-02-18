@extends('adminlayouts.main')

@section('title', 'Data Utilitas')

@section('page_name', 'Data Utilitas')

@section('content')

    <div class="content">
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
            <div class="card">
                {{-- <div class="card-header card-header-primary">
                    <p class="card-category"></p>
                    <h4 class="card-title ">Data Utilitas</h4>
                    <p class="card-category"></p>
                    <a type="button" class="btn btn-primary pull-right" href="/data_utilitas/add"><i class="material-icons">add</i> Tambah Data</a>

                    <ul class="nav nav-tabs justify-content-end" data-tabs="tabs">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/data_utilitas/add') }}" data-toggle="tab">
                                <i class="material-icons">add</i> Tambah Data
                                <div class="ripple-container"></div>
                            </a>
                        </li>
                    </ul>

                </div> --}}

                <div class="card-header card-header-tabs card-header-primary">
                    <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                        <span class="nav-tabs-title" style="font-size: 1.125rem; text-shadow: 0 2px 5px rgba(33, 33, 33, 0.5); ">Data Utilitas</span>
                        <ul class="nav nav-tabs justify-content-end" data-tabs="tabs">
                        <li class="nav-item">
                            <a type="button" class="nav-link active" href="/data_utilitas/add"><i class="material-icons">add</i> Tambah Data</a>
                        </li>
                        </ul>
                    </div>
                    </div>
                </div>
                
                <div class="card-body">
                <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                    <thead class=" text-primary">
                        <th class="text-center">No</th>
                        <th>Nama Utilitas</th>
                        <th class="text-center">Actions</th>
                    </thead>
                    @php
                        $no = 1;
                    @endphp
                    <tbody>   
                        @foreach ($utilitas as $data_utilitas)
                            <tr>
                                <td class="text-center">{{ $no++ }}</td>
                                <td>{{ $data_utilitas->nama_utilitas }}</td>

                                <td class="td-actions text-center">
                                    <a type="button" rel="tooltip" data-placement="bottom" title="Edit Data" class="btn btn-success" href="/data_utilitas/edit/{{ $data_utilitas->id_utilitas }}"><i class="material-icons">edit</i></a>
                                    <a type="button" rel="tooltip" data-placement="bottom" title="Hapus Data" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')"href="/data_utilitas/delete/{{ $data_utilitas->id_utilitas }}"><i class="material-icons">close</i></a>
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