@extends('adminpro.main')

@section('title', 'Data Kriteria')

@section('page_name', 'Data Kriteria')

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">

                        <div class="card-header card-header-tabs" data-background-color="purple">
                            <div class="nav nav-tabs" data-tabs="tabs">
                                <span class="nav-tabs-title"><h4 style=" text-shadow: 0 2px 5px rgba(33, 33, 33, 0.5); ">Data Kriteria</h4></span>
                                <a type="button" class="btn btn-primary pull-right " href="/data_kriteria/add"><i class="material-icons">add</i> Tambah Data</a>
                            </div>
                        </div>

                        <div class="card-content">
                            <div class="table-responsive">
                                <table id="datatables" class="table table-bordered table-striped">
                                    <thead class="text-primary">
                                        <th class="text-center" style="border-bottom: 1px solid rgb(117, 0, 146);">No</th>
                                        <th style="border-bottom: 1px solid rgb(117, 0, 146);">Nama Kriteria</th>
                                        <th class="text-center" style="border-bottom: 1px solid rgb(117, 0, 146);">Bobot Kriteria</th>
                                        <th class="text-center" style="border-bottom: 1px solid rgb(117, 0, 146);">Normalisasi Bobot Kriteria</th>
                                        <th class="text-center" style="border-bottom: 1px solid rgb(117, 0, 146);">Actions</th>
                                    </thead>
                                    @php
                                        $no = 1;
                                    @endphp
                                    <tbody>   
                                        @foreach ($kriteria as $data_kriteria)
                                            <tr>
                                                <td class="text-center">{{ $no++ }}</td>
                                                <td>{{ $data_kriteria->nama_kriteria }}</td>
                                                <td class="text-center">{{ $data_kriteria->bobot_kriteria }}</td>                                
                                                <td class="text-center">{{ $data_kriteria->normalisasi }}</td>
                                                <td class="td-actions text-center">
                                                    <a type="button" rel="tooltip" data-placement="bottom" title="Edit Data" class="btn btn-success" href="/data_kriteria/edit/{{ $data_kriteria->id_kriteria }}"><i class="material-icons">edit</i></a>
                                                </td>        
                                            </tr>
                                            @endforeach
                                            <thead>
                                                <th class="text-center text-primary" style="border-top: 1px solid rgb(117, 0, 146);" colspan="2">Total</th>
                                                <th class="text-center text-primary" style="border-top: 1px solid rgb(117, 0, 146);">{{ $total_bobot_kriteria }}</th>
                                                <th class="text-center text-primary" style="border-top: 1px solid rgb(117, 0, 146);"></th>
                                                <th class="text-center text-primary" style="border-top: 1px solid rgb(117, 0, 146);"></th>
                                            </thead>
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