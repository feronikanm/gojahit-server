@extends('adminpro.main')

@section('title', 'Data Penilaian')

@section('page_name', 'Data Penilaian')

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">

                        <div class="card-header card-header-tabs" data-background-color="purple">
                            <h4 class="card-title ">Data Penilaian</h4>
                        </div>

                        <div class="card-content">
                            <div class="table-responsive">
                                <table id="datatables" class="table table-bordered table-striped">
                                    <thead class="text-primary">
                                        <th class="text-center" style="border-bottom: 1px solid rgb(117, 0, 146);">No</th>
                                        <th class="text-center" style="border-bottom: 1px solid rgb(117, 0, 146);">ID Penjahit</th>
                                        <th class="text-center" style="border-bottom: 1px solid rgb(117, 0, 146);">Nama Penjahit</th>
                                        <th class="text-center" style="border-bottom: 1px solid rgb(117, 0, 146);">Nilai Akhir</th>
                                    </thead>
                                    @php
                                        $no = 1;
                                    @endphp
                                    <tbody>   
                                        @foreach ($penilaian as $data_penilaian)
                                            <tr>
                                                <td class="text-center">{{ $no++ }}</td>
                                                <td class="text-center">{{ $data_penilaian->id_penjahit }}</td>                                
                                                <td class="text-center">{{ $data_penilaian->nama_penjahit }}</td>
                                                <td class="text-center">{{ $data_penilaian->nilai_akhir }}</td>      
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