@extends('adminpro.main')

@section('title', 'Data Pesanan')

@section('page_name', 'Pesanan')

@section('content')

    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
                
              <div class="card-header card-header-tabs" data-background-color="purple">
                <div class="nav nav-tabs" data-tabs="tabs">
                    <span class="nav-tabs-title"><h4 style=" text-shadow: 0 2px 5px rgba(33, 33, 33, 0.5); ">Data Pesanan</h4></span>
                    <a type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#exampleModal"><i class="material-icons">add</i> Tambah Data</a>
                </div>
            </div>

              {{-- <div class="card-header card-header-tabs" data-background-color="purple">
                <h4 class="card-title">Data Pesanan</h4>
              </div> --}}

                <div class="card-content">
                  <div class="table-responsive">
                    <table id="datatables" class="table table-bordered table-striped">
                      <thead class=" text-primary">
                          {{-- <th class="text-center">No</th> --}}
                          <th class="text-center">ID Pesanan</th>
                          <th>Nama Pelanggan</th>
                          <th>Nama Penjahit</th>
                          <th>Nama Kategori</th>
                          <th>Tanggal Pesanan</th>
                          <th>Tanggal Pesanan Selesai</th>
                          <th>Status Pesanan</th>
                          <th class="text-center">Actions</th>
                      </thead>
                      @php
                        $no = 1;
                      @endphp
                      <tbody>   
                        {{-- @foreach ($pesanan as $data_pesanan)
                          <tr>
                            <td class="text-center">{{ $data_pesanan->id_pesanan }}</td>
                            <td>{{ $data_pesanan->tbl_pelanggan->nama_pelanggan }}</td>
                            <td>{{ $data_pesanan->tbl_penjahit->nama_penjahit }}</td>
                            <td>{{ $data_pesanan->tanggal_pesanan }}</td>
                            <td>{{ $data_pesanan->tanggal_pesanan_selesai }}</td>
                            <td>{{ $data_pesanan->status_pesanan }}</td>
                            <td class="td-actions text-center">
                              <form action="#" method="POST">
                                <a type="button" rel="tooltip" data-placement="bottom" title="Lihat Data" class="btn btn-info" href="#"><i class="material-icons">person</i></a>
                                <a type="button" rel="tooltip" data-placement="bottom" title="Edit Data" class="btn btn-success" href="#"><i class="material-icons">edit</i></a>
                                <a type="button" rel="tooltip" data-placement="bottom" title="Hapus Data" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')" href="#"><i class="material-icons">close</i></a>
                              </form>
                            </td> 
                          </tr>
                        @endforeach --}}

                        @foreach ($data_pesanan as $data_pesanan)
                          <tr>
                            {{-- <td>{{ $no++ }}</td> --}}
                            <td class="text-center">{{ $data_pesanan->id_pesanan }}</td>
                            <td>{{ $data_pesanan->nama_pelanggan }}</td>
                            <td>{{ $data_pesanan->nama_penjahit }}</td>
                            <td>{{ $data_pesanan->nama_kategori }}</td>
                            <td>{{ $data_pesanan->tanggal_pesanan }}</td>
                            <td>{{ $data_pesanan->tanggal_pesanan_selesai }}</td>
                            <td>{{ $data_pesanan->status_pesanan }}</td>
                            <td class="td-actions text-center">
                                <a type="button" rel="tooltip" data-placement="bottom" title="Lihat Data" class="btn btn-info" href="/data_pesanan/show/{{ $data_pesanan->id_pesanan }}"><i class="material-icons">trending_flat</i></a>
                                <a type="button" rel="tooltip" data-placement="bottom" title="Edit Data" class="btn btn-success" href="/data_pesanan/edit/{{ $data_pesanan->id_pesanan }}"><i class="material-icons">edit</i></a>
                                <a type="button" rel="tooltip" data-placement="bottom" title="Hapus Data" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')" href="/data_pesanan/delete/{{ $data_pesanan->id_pesanan }}"><i class="material-icons">close</i></a>
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
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Pilih Penjahit</h5>
        </div>
        <div class="modal-body">

          <div class="card-content">

            <div class="table-responsive">
                <table id="datatables" class="table table-bordered table-striped">
                <thead class=" text-primary">
                    <th class="text-center">No</th>
                    <th>Nama Penjahit</th>
                   
                    <th class="text-center">Actions</th>
                </thead>
                @php
                    $no = 1;
                @endphp
                <tbody>   
                    @foreach ($penjahits as $data_penjahit)
                        <tr>
                            <td class="text-center">{{ $no++ }}</td>
                            <td>{{ $data_penjahit->nama_penjahit }}</td>
                        
                            <td class="td-actions text-center">
                                <a type="button" rel="tooltip" data-placement="bottom" class="btn btn-info" href="/data_pesanan/penjahit/{{ $data_penjahit->id_penjahit }}">Pilih</a>
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
  <!-- End Modal Tambah Data -->

    <!-- Modal -->
    {{-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Ukuran</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">

                <form method="post" action="/data_pesanan/store" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div>
                      <div class="form-group" id="exampleFormControlSelect1" >
                      <select class="selectpicker" data-style="btn btn-rose" title="Pilih Penjahit" name="id_penjahit">
                          @foreach ($penjahits as $penjahit)
                              <option value="{{ $penjahit->id_penjahit }}">{{ $penjahit->nama_penjahit }}</option>
                          @endforeach
                      </select>
                      </div>
                    </div>

                    <div>
                      <div class="form-group" id="exampleFormControlSelect1" >
                      <select class="selectpicker" data-style="btn btn-primary" title="Pilih Pelanggan" name="id_pelanggan">
                          @foreach ($pelanggans as $pelanggan)
                              <option value="{{ $pelanggan->id_pelanggan }}">{{ $pelanggan->nama_pelanggan }}</option>
                          @endforeach
                      </select>
                      </div>
                    </div>

                    <div>
                      <div class="form-group" id="exampleFormControlSelect1" >
                      <select class="selectpicker" data-style="btn btn-info" title="Pilih Kategori" name="id_pelanggan">
                          @foreach ($detail_kategori as $detail_kategori)
                              <option value="{{ $detail_kategori->id_detail_kategori }}">{{ $detail_kategori->nama_kategori }}</option>
                          @endforeach
                      </select>
                      </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Email address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlSelect1">Example select</label>
                        <select class="form-control selectpicker" data-style="btn btn-link" id="exampleFormControlSelect1">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                        </select>
                      </div>
                    
                      <div class="form-group">
                        <label for="exampleFormControlTextarea1">Example textarea</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>

                    <div class="row">
                        <label class="col-sm-4 col-form-label">{{ __('Nama Pelanggan') }}</label>
                        <div class="col-sm-4">
                          <div class="form-group" id="exampleFormControlSelect1" >
                              <select class="form-control" id="exampleFormControlSelect1" name="id_pelanggan">
                                @foreach ($pelanggans as $data_pelanggan)
                                    <option value="{{ $data_pelanggan->id_pelanggan }}">{{ $data_pelanggan->nama_pelanggan }}</option>
                                @endforeach
                              </select>
                          </div>
                        </div>
                      </div> 

                      <div class="row">
                        <label class="col-sm-4 col-form-label">{{ __('Nama Penjahit') }}</label>
                        <div class="col-sm-4">
                          <div class="form-group" id="exampleFormControlSelect1" >
                              <select class="form-control" id="exampleFormControlSelect1" name="id_penjahit">
                                @foreach ($penjahits as $data_penjahit)
                                    <option value="{{ $data_penjahit->id_penjahit }}">{{ $data_penjahit->nama_penjahit }}</option>
                                @endforeach
                              </select>
                          </div>
                        </div>
                      </div> 

                  
                      <div class="card-body ">
                        <div class="row">
                          <label class="col-sm-4 col-form-label">{{ __('Tanggal Pesanan Selesai') }}</label>
                          <div class="col-sm-4">
                            <div class="form-group">
                              <input class="form-control" name="nama_kriteria" id="category" type="text" placeholder="{{ __('Nama Kriteria') }}"   />
                            </div>
                          </div>
                        </div>   


                        <div class="form-group">
                          <label class="label-control">Datetime Picker</label>
                          <input type="text" class="form-control datetimepicker" value="21/06/2018"/>
                      </div>
            
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </div>
                </form>

        </div>
        </div>
    </div> --}}
<!-- End Modal -->


@endsection