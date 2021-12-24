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
                            <div class="nav nav-tabs" data-tabs="tabs">
                                <span class="nav-tabs-title"><h4 style=" text-shadow: 0 2px 5px rgba(33, 33, 33, 0.5); ">Data Rating</h4></span>
                                <a type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#tambahDataRating"><i class="material-icons">add</i> Tambah Data</a>
                            </div>
                        </div>
                        
                        {{-- <div class="card-header card-header-tabs" data-background-color="purple">
                            <h4 class="card-title">Data Rating</h4>
                        </div> --}}

                    <div class="card-content">

                        <div class="table-responsive">
                            <table id="datatables" class="table table-bordered table-striped">
                
                                <thead class="text-primary">
                                    <th class="text-center">No</th>
                                    <th>Nama Penjahit</th>
                                    <th>Kriteria 1</th>
                                    <th>Kriteria 2</th>
                                    <th>Kriteria 3</th>
                                    <th>Kriteria 4</th>
                                    <th class="text-center">Actions</th>
                                </thead>
                                @php
                                    $no = 1;
                                @endphp
                                <tbody>   
                                    @foreach ($rating_penjahit as $data_penjahit)
                                        <tr>
                                            <td class="text-center">{{ $no++ }}</td>
                                            <td>{{ $data_penjahit->nama_penjahit }} ({{ $data_penjahit->id_penjahit }})</td>
                                            <td>{{ $data_penjahit->kriteria_1 }}</td>
                                            <td>{{ $data_penjahit->kriteria_2 }}</td>
                                            <td>{{ $data_penjahit->kriteria_3 }}</td>
                                            <td>{{ $data_penjahit->kriteria_4 }}</td>
                                            <td class="td-actions text-center">
                                                <a type="button" rel="tooltip" data-placement="bottom" title="Edit Data" class="btn btn-success" href="/data_rating/edit/{{ $data_penjahit->id_rating }}"><i class="material-icons">edit</i></a>
                                                <a type="button" rel="tooltip" data-placement="bottom" title="Hapus Data" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')" href="/data_rating/delete/{{ $data_penjahit->id_rating }}"><i class="material-icons">close</i></a>
                                            </td>
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
  

  <!-- Modal Tambah Data-->
  <div class="modal fade" id="tambahDataRating" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Rating</h5>
        </div>
        <div class="modal-body">

            <form method="post" action="/data_rating/store" enctype="multipart/form-data">
                {{ csrf_field() }}


                <div>
                    <div class="form-group" id="exampleFormControlSelect1" >
                    <select class="selectpicker" data-style="btn btn-primary btn-round" title="Pilih Penjahit" name="id_penjahit">
                        @foreach ($penjahit as $penjahit)
                            <option value="{{ $penjahit->id_penjahit }}">{{ $penjahit->nama_penjahit }} ({{ $penjahit->id_penjahit }})</option>
                        @endforeach
                    </select>
                    </div>
                  </div>

                  <div class="form-group label-floating">
                    <label class="control-label">Kriteria 1 (1-3)</label>
                    <input type="number" class="form-control" name="kriteria_1" >
                </div>

                <div class="form-group label-floating">
                    <label class="control-label">Kriteria 2 (1-3)</label>
                    <input type="number" class="form-control" name="kriteria_2">
                </div>

                <div class="form-group label-floating">
                    <label class="control-label">Kriteria 3 (1-3)</label>
                    <input type="number" class="form-control" name="kriteria_3">
                </div>

                <div class="form-group label-floating">
                    <label class="control-label">Kriteria 4 (1-3)</label>
                    <input type="number" class="form-control" name="kriteria_4">
                </div>
        
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-simple" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary btn-simple">Tambah Data</button>
                </div>
            </form>
        </div>
        </div>
    </div>
  <!-- End Modal Tambah Data -->
    


@endsection