@extends('adminpro.main')

@section('title', 'Data Pelanggan')

@section('page_name', 'Data Pelanggan')

@section('content')
    
<style>

table.dataTable thead th,
table.dataTable tfoot th {
  /* font-weight: bold; */
  /* padding: 10px 18px;  */
  /* border-bottom: 1px solid #111; */
}

div.dataTables_wrapper div.dataTables_length select {
  width: auto;
  display: inline-block;  /* ini yg kutambah */
  border: 1px solid #aaa; /* ini yg kutambah */
  border-radius: 5px;
  padding: 5px;
}
</style>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-tabs" data-background-color="purple">
                        
                        <div class="nav nav-tabs" data-tabs="tabs">
                            <span class="nav-tabs-title"><h4 style=" text-shadow: 0 2px 5px rgba(33, 33, 33, 0.5); ">Data Pelanggan</h4></span>
                        <a type="button" class="btn btn-primary pull-right " href="/data_pelanggan/add"><i class="material-icons">add</i> Tambah Data</a>

                        </div>
                    </div>

                    <div class="card-content">
                        <div class="toolbar">
                            <!--        Here you can write extra buttons/actions for the toolbar              -->
                        </div>
                        <div class="material-datatables">
                            <table id="datatables" class="table table-bordered table-striped" cellspacing="0" width="100%" style="width:100%">
                                <thead class="text-primary">
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        {{-- <th>Telp</th> --}}
                                        <th>Latitude</th>
                                        <th>Longitude</th>
                                        <th>Alamat</th>
                                        {{-- <th>Jenis Kelamin</th> --}}
                                        {{-- <th>Foto</th> --}}
                                        <th class="disabled-sorting text-center">Actions</th>
                                    </tr>
                                </thead>

                                @php
                                    $no = 1;
                                @endphp
                                <tbody>
                                    @foreach ($pelanggan as $data_pelanggan)
                                    <tr>
                                        <td class="text-center">{{ $no++ }}</td>
                                        <td>{{ $data_pelanggan->nama_pelanggan }}</td>
                                        <td>{{ $data_pelanggan->email_pelanggan }}</td>
                                        <td>{{ $data_pelanggan->password_pelanggan }}</td>
                                        {{-- <td>{{ $data_pelanggan->telp_pelanggan }}</td> --}}
                                        <td>{{ $data_pelanggan->latitude_pelanggan }}</td>
                                        <td>{{ $data_pelanggan->longitude_pelanggan }}</td>
                                        <td>{{ $data_pelanggan->alamat_pelanggan }}</td>
                                        {{-- <td>{{ $data_pelanggan->jk_pelanggan }}</td> --}}
                                        {{-- <td>
                                            <img src="{{ url('img_pelanggan/'.$data_pelanggan->foto_pelanggan) }}" style="width: 120px; height: 120px; border-radius: 10px;" class="card-img-top mb-3" alt="...">
                                        </td> --}}
                                        

                                        <td class="td-actions text-center">
                                            
                                                <a type="button" rel="tooltip" data-placement="bottom" title="Lihat Data" class="btn btn-info" href="/data_pelanggan/show/{{ $data_pelanggan->id_pelanggan }}"><i class="material-icons">person</i></a>
                                                <a type="button" rel="tooltip" data-placement="bottom" title="Edit Data" class="btn btn-success" href="/data_pelanggan/edit/{{ $data_pelanggan->id_pelanggan }}"><i class="material-icons">edit</i></a>
                                                <a type="button" rel="tooltip" data-placement="bottom" title="Hapus Data" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')" href="/data_pelanggan/delete/{{ $data_pelanggan->id_pelanggan }}"><i class="material-icons">close</i></a>
                                            
                                        </td>
                                        
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- end content-->
                </div>
                <!--  end card  -->
            </div>
            <!-- end col-md-12 -->
        </div>
        <!-- end row -->
    </div>
</div>

    

   
    
@endsection