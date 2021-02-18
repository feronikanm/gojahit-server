@extends('adminlayouts.main')

@section('title', 'Data Detail Kategori')

@section('page_name', 'Data Detail Kategori')

@section('content')
        

  <div class="content">
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
            <div class="card">
                
                <div class="card-header card-header-tabs card-header-primary">
                    <div class="nav-tabs-navigation">
                      <div class="nav-tabs-wrapper">
                        <span class="nav-tabs-title" style="font-size: 1.125rem; text-shadow: 0 2px 5px rgba(33, 33, 33, 0.5); ">Data Detail Ketegori</span>
                        <ul class="nav nav-tabs justify-content-end" data-tabs="tabs">
                          <li class="nav-item">
                            <a type="button" class="nav-link active" href="/data_detail_kategori/add"><i class="material-icons">add</i> Tambah Data</a>
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
                        <th>Nama Penjahit</th>
                        <th>Kategori Penjahit</th>
                        <th>Keterangan Kategori</th>
                        <th>Bahan</th>
                        <th>Harga Bahan</th>
                        <th>Ongkos Penjahit</th>
                        <th>Perkiraan Lama Waktu</th>
                        <th class="text-center">Actions</th>
                    </thead>
                    @php
                        $no = 1;
                    @endphp
                    <tbody>   
                        @foreach ($detail_kategori as $data_detail_kategori)
                            <tr>
                                <td class="text-center">{{ $no++ }}</td>
                                
                                <td>{{ $data_detail_kategori->nama_penjahit }}</td>
                                
                                <td>
                                                {{ $data_detail_kategori->nama_kategori }}    
                                </td>
                                <td>
                                        {{ $data_detail_kategori->keterangan_kategori }}    
                                </td>
                                <td>
                                        {{ $data_detail_kategori->bahan_jahit }}    
                                </td>
                                <td>
                                        {{ $data_detail_kategori->harga_bahan }}    
                                </td>
                                <td>
                                        {{ $data_detail_kategori->ongkos_penjahit }}    
                                </td>
                                <td>
                                        {{ $data_detail_kategori->perkiraan_lama_waktu_pengerjaan }}    
                                </td>

                                <td class="td-actions text-center">
                                    <a type="button" rel="tooltip" data-placement="bottom" title="Lihat Data" class="btn btn-info" href="/data_detail_kategori/show/{{ $data_detail_kategori->id_detail_kategori }}"><i class="material-icons">trending_flat</i></a>
                                    <a type="button" rel="tooltip" data-placement="bottom" title="Edit Data" class="btn btn-success" href="/data_detail_kategori/edit/{{ $data_detail_kategori->id_detail_kategori }}"><i class="material-icons">edit</i></a>
                                    <a type="button" rel="tooltip" data-placement="bottom" title="Hapus Data" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')" href="/data_detail_kategori/delete/{{ $data_detail_kategori->id_detail_kategori }}"><i class="material-icons">close</i></a>
                                    
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

    {{-- <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
            <div class="card">
                
                <div class="card-header card-header-tabs card-header-primary">
                    <div class="nav-tabs-navigation">
                      <div class="nav-tabs-wrapper">
                        <span class="nav-tabs-title" style="font-size: 1.125rem; text-shadow: 0 2px 5px rgba(33, 33, 33, 0.5); ">Data Detail Ketegori</span>
                        <ul class="nav nav-tabs justify-content-end" data-tabs="tabs">
                          <li class="nav-item">
                            <a type="button" class="nav-link active" href="/data_detail_kategori/add"><i class="material-icons">add</i> Tambah Data</a>
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
                        <th>Nama Penjahit</th>
                        <th>Kategori Penjahit</th>
                        <th>Keterangan Kategori</th>
                        <th>Bahan</th>
                        <th>Harga Bahan</th>
                        <th>Ongkos Penjahit</th>
                        <th>Perkiraan Lama Waktu</th>
                        <th class="text-center">Actions</th>
                    </thead>
                    @php
                        $no = 1;
                    @endphp
                    <tbody>   
                        @foreach ($penjahit as $data_penjahit)
                            <tr>
                                <td class="text-center">{{ $no++ }}</td>
                                
                                <td>{{ $data_penjahit->nama_penjahit }}</td>
                                
                                <td>
                                        @foreach ($data_penjahit->tbl_kategori as $data_kategori)
                                            <ul>
                                                {{ $data_kategori->nama_kategori }}    
                                            </ul>         
                                        @endforeach
                                </td>
                                <td>
                                    @foreach ($data_penjahit->tbl_detail_kategori as $data_detail_kategori)
                                    <ul>
                                        {{ $data_detail_kategori->keterangan_kategori }}    
                                    </ul>            
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($data_penjahit->tbl_detail_kategori as $data_detail_kategori)
                                    <ul>
                                        {{ $data_detail_kategori->bahan_jahit }}    
                                    </ul>            
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($data_penjahit->tbl_detail_kategori as $data_detail_kategori)
                                    <ul>
                                        {{ $data_detail_kategori->harga_bahan }}    
                                    </ul>            
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($data_penjahit->tbl_detail_kategori as $data_detail_kategori)
                                    <ul>
                                        {{ $data_detail_kategori->ongkos_penjahit }}    
                                    </ul>            
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($data_penjahit->tbl_detail_kategori as $data_detail_kategori)
                                    <ul>
                                        {{ $data_detail_kategori->perkiraan_lama_waktu_pengerjaan }}    
                                    </ul>            
                                    @endforeach
                                </td>

                                <td class="td-actions text-left">
                                    @foreach ($data_penjahit->tbl_detail_kategori as $data_detail_kategori)
                                    <ul> 
                                      <a type="button" rel="tooltip" data-placement="bottom" title="Lihat Data" class="btn btn-info" href="/data_detail_kategori/show/{{ $data_detail_kategori->id_detail_kategori }}"><i class="material-icons">trending_flat</i></a>
                                    
                                    </ul>            
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
        </div> --}}


        


        {{-- ======== --}}


        {{-- <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                    <p class="card-category"></p>
                    <h4 class="card-title ">Data Detail Ketegori</h4>
                    <p class="card-category"></p>
                    </div>
                    <div class="card-body">
                    <div class="table-responsive">
                        <table id="example1" class="table">
                        <thead class=" text-primary">
                            <th class="text-center">No</th>
                            <th>Nama Penjahit</th>
                            <th>Kategori Penjahit</th>
                            <th>Keterangan Kategori</th>
                            <th>Bahan</th>
                            <th>Harga Bahan</th>
                            <th>Ongkos Penjahit</th>
                            <th>Perkiraan Lama Waktu</th>
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
                                    <td>{{ $data_detail_kategori->keterangan_kategori }}</td>
                                    <td>{{ $data_detail_kategori->bahan_jahit }}</td>
                                    <td>{{ $data_detail_kategori->harga_bahan }}</td>
                                    <td>{{ $data_detail_kategori->ongkos_penjahit }}</td>
                                    <td>{{ $data_detail_kategori->perkiraan_lama_waktu_pengerjaan }}</td>
                                    <td class="td-actions text-right">
                                        <form action="#" method="POST">
                                            <button type="button" rel="tooltip" class="btn btn-info">
                                                <i class="material-icons">person</i>
                                            </button>
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
                        </tbody>
                        </table>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div> --}}


  </div>


@endsection