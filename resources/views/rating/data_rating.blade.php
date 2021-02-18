@extends('adminlayouts.main')

@section('title', 'Data Rating')

@section('page_name', 'Data Rating')

@section('content')

        
  <div class="content">
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
            <p class="card-category"></p>
            <h4 class="card-title ">Data Rating</h4>
            <p class="card-category"></p>
            </div>
            <div class="card-body">
            <div class="table-responsive">
                <table id="example1" class="table">
                
                    <thead class="text-primary">
                        <th></th>
                        @foreach ($kriteria as $data_kriteria)
                            <th>{{ $data_kriteria->nama_kriteria }}</th>
                        @endforeach
                        {{-- <th class="text-center">Rating Penjahit</th> --}}
                        <th class="text-right">Actions</th>
                    </thead>
                    @php
                        $no = 1;
                    @endphp
                    <tbody>   
                        @foreach ($rating_penjahit as $data_penjahit)
                            <tr>
                                <td>{{ $data_penjahit->nama_penjahit }}</td>
                                
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
                            <tr>
                                <td>{{ $nilai_terbanyak }}</td>
                            </tr>
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