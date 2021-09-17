@extends('adminpro.main')

@section('title', 'Data Rating')

@section('page_name', 'Data Rating')

@section('content')
    
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">

                        <div class="card-header card-header-tabs" data-background-color="purple">
                            <h4 class="card-title">Data Rating</h4>
                        </div>

                    <div class="card-content">

                        <div class="table-responsive">
                            <table id="datatables" class="table table-bordered table-striped">
                
                
                                <thead class="text-primary">
                                    <th>No</th>
                                    <th>Nama Penjahit</th>
                                    <th>Kriteria 1</th>
                                    <th>Kriteria 2</th>
                                    <th>Kriteria 3</th>
                                    <th>Kriteria 4</th>
                                </thead>
                                @php
                                    $no = 1;
                                @endphp
                                <tbody>   
                                    @foreach ($rating_penjahit as $data_penjahit)
                                        <tr>
                                            <td class="text-center">{{ $no++ }}</td>
                                            <td>{{ $data_penjahit->nama_penjahit }}</td>
                                            <td>{{ $data_penjahit->kriteria_1 }}</td>
                                            <td>{{ $data_penjahit->kriteria_2 }}</td>
                                            <td>{{ $data_penjahit->kriteria_3 }}</td>
                                            <td>{{ $data_penjahit->kriteria_4 }}</td>

                                    
                                    </form>
                                </td>
                                
                            </tr>
                            @endforeach
        
                    </tbody>
                
                    {{-- <thead class=" text-primary">
                    <th class="text-center">No</th>
                    <th>Nama Penjahit</th>
                    <th>Nama Kriteria</th>
                    <th class="text-center">Rating Penjahit</th>
                    <th class="text-right">Actions</th>
                </thead>
                @php
                    $no = 1;
                @endphp
                <tbody>   
                    @foreach ($rating_penjahit as $data_penjahit)
                        <tr>
                            <td class="text-center">{{ $no++ }}</td>
                            <td>{{ $data_penjahit->nama_penjahit }}</td>
                            <td>{{ $data_penjahit->nama_kriteria }}</td>
                            <td class="text-center">{{ $data_penjahit->rating_penjahit }}</td>
                            <td class="td-actions text-right">
                                <form action="#" method="POST">
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
                </tbody> --}}
                </table>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
  </div>


@endsection