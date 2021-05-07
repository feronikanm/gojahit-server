@extends('adminpro.main')
{{-- @extends('adminlayouts.main_show_page') --}}

@section('title', 'Data Kriteria')

@section('page_name', 'Data Kriteria')

@section('content')

    <div class="content">
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
            <div class="card">

                <div class="card-header card-header-tabs" data-background-color="purple">
                    <h4 class="card-title">Data Kriteria</h4>
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
                                {{-- <td class="text-center">{{ $normalisasi }}</td> --}}
                                {{-- <td class="text-center">{{ $bobot_kriteria/$total_bobot_kriteria }}</td> --}}
                                {{-- <td class="text-center">{{ $total }}</td> --}}

                                
                                <td class="text-center">
                                    @foreach ($normalisasi as $item)
                                            {{-- {{ $item }} --}}
                                            {{$value = json_decode ($item)}}                  

                                            {{-- {{ count(explode(",",$item)) }} --}}
                                    @endforeach
                                </td>

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










        {{-- <div class="row">
            <div class="col-md-12">
            <div class="card"> --}}

                {{-- <div class="card-header card-header-tabs card-header-primary">
                    <div class="nav-tabs-navigation">
                      <div class="nav-tabs-wrapper">
                        <span class="nav-tabs-title" style="font-size: 1.125rem; text-shadow: 0 2px 5px rgba(33, 33, 33, 0.5); ">Data Kriteria</span>
                        <ul class="nav nav-tabs justify-content-end" data-tabs="tabs">
                          <li class="nav-item">
                            <a type="button" class="nav-link active" href="/data_kriteria/add"><i class="material-icons">add</i> Tambah Data</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div> --}}

                {{-- <div class="card-header card-header-primary">
                    <h4 class="card-title ">Data Kriteria</h4>
                </div>


                <div class="card-body">
                <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                    <thead class="text-primary">
                        <th class="text-center">No</th>
                        <th>Nama Kriteria</th>
                        <th class="text-center">Bobot Kriteria</th>
                        <th class="text-center">Normalisasi Bobot Kriteria</th>
                        <th class="text-center">Actions</th>
                    </thead>
                    @php
                        $no = 1;
                    @endphp
                    <tbody>   
                        @foreach ($kriteria as $data_kriteria)
                            <tr>
                                <td class="text-center">{{ $no++ }}</td>
                                <td>{{ $data_kriteria->nama_kriteria }}</td>
                                <td class="text-center">{{ $data_kriteria->bobot_kriteria }}</td> --}}
                                {{-- <td class="text-center">{{ $normalisasi }}</td> --}}
                                {{-- <td class="text-center">{{ $bobot_kriteria/$total_bobot_kriteria }}</td> --}}
                                {{-- <td class="text-center">{{ $total }}</td> --}}

                                
                                {{-- <td class="text-center">
                                    @foreach ($normalisasi as $item)
                                            {{ $item }}
                                    @endforeach
                                </td>

                                <td class="td-actions text-center">
                                    <a type="button" rel="tooltip" data-placement="bottom" title="Edit Data" class="btn btn-success" href="/data_kriteria/edit/{{ $data_kriteria->id_kriteria }}"><i class="material-icons">edit</i></a>
                                    <a type="button" rel="tooltip" data-placement="bottom" title="Hapus Data" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')" href="/data_kriteria/delete/{{ $data_kriteria->id_kriteria }}"><i class="material-icons">close</i></a>
                                </td>
                                
                                
                            </tr>
                            @endforeach
                            <tr>
                                <td class="text-center text-primary" style="font-weight: bold; border-top: 1px solid #111;" colspan="2">Total</td>
                                <td class="text-center text-primary" style="font-weight: bold; border-top: 1px solid #111;">{{ $total_bobot_kriteria }}</td>
                                <td class="text-center" style="font-weight: bold; border-top: 1px solid #111;"> </td>
                                <td style="font-weight: bold; border-top: 1px solid #111;"></td>
                            </tr>
                    </tbody>
                    </table>
                </div>
                </div>
            </div>
            </div>
        </div> --}}


        </div>
    </div>


@endsection