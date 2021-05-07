@extends('adminpro.main')

@section('title', 'Data Pelanggan')

@section('page_name', 'Data Pelanggan')

@section('content')
    


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
                </div>
                <div class="material-datatables">
                    <table id="datatables" class="table table-bordered table-striped" cellspacing="0" width="100%" style="width:100%">
                        <thead class="text-primary">
                            <tr>
                                <th class="text-center">No</th>
                                <th>Nama</th>
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



<div class="row">
    <div class="col-md-8">
      <div class="card">
            <form method="post" action="/data_pelanggan/store" enctype="multipart/form-data" class="form-horizontal">
              {{ csrf_field() }}
              <div class="card-header card-header-tabs" data-background-color="purple">
                  <h4 class="card-title">Tambah Data Pelanggan</h4>
              </div>
              <div class="card-content">
                
                <div class="row">
                    <label class="col-sm-2 label-on-left">Nama</label>
                    <div class="col-sm-7">
                        <div class="form-group label-floating is-empty">
                            {{-- <label class="control-label"></label> --}}
                            <input class="form-control" name="nama_pelanggan" type="text" placeholder="your name"  autofocus />
                            {{-- <span class="help-block">A block of help text that breaks onto a new line.</span> --}}
                        </div>
                    </div>
                </div>

    
                <div class="row">
                <label class="col-sm-2 label-on-left">Foto</label>

                    <div class="col-md-4 col-sm-4">
                      <br>
                        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                            <div class="fileinput-new thumbnail">
                                <img src="../adminpro/assets/img/image_placeholder.jpg" alt="...">
                            </div>
                            <div class="fileinput-preview fileinput-exists thumbnail"></div>
                            <div>
                                <span class="btn btn-primary btn-round btn-file">
                                    <span class="fileinput-new">Select image</span>
                                    <span class="fileinput-exists">Change</span>
                                    <input type="file" name="foto_pelanggan" />
                                </span>

                                <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                            </div>
                        </div>
                    </div> 
                </div>

                
                <div class="form-footer text-right">
                  <div class="checkbox pull-left">
                    <div class="category form-category">
                      <small>*</small> Required fields
                    </div>
                  </div>
                  <a type="button" class="btn btn-white pull-fill" href="/data_pelanggan">Kembali</a>
                  <button type="submit" class="btn btn-primary pull-fill">Simpan</button>
                </div>

                
              </div>
              </div>
          </form>
      </div>
  </div>


  <div class="row">
    <div class="col-md-8">
      <div class="card">
            <form method="post" action="/data_pelanggan/store" enctype="multipart/form-data" class="form-horizontal">
              {{ csrf_field() }}
              <div class="card-header card-header-tabs" data-background-color="purple">
                  <h4 class="card-title">Tambah Data Pelanggan</h4>
              </div>
              <div class="card-content">
                
               
                <div class="row">
                  <label class="col-sm-2 label-on-left">Latitude</label>
                  <div class="col-sm-7">
                      <div class="form-group label-floating is-empty">
                          <input class="form-control" name="latitude_pelanggan" type="text" placeholder="{{ __('Latitude') }}"   />
                      </div>
                  </div>
                </div>

                
                <div class="form-footer text-right">
                  <a type="button" class="btn btn-white pull-fill" href="/data_pelanggan">Kembali</a>
                  <button type="submit" class="btn btn-primary pull-fill">Simpan</button>
                </div>
                                
              </div>
              </div>
          </form>
      </div>
  </div>

  <div class="row">
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="card-header card-header-tabs" data-background-color="orange">
                <h4 class="card-title">Employees Stats</h4>
                <p class="category">New employees on 15th September, 2016</p>
            </div>
            <div class="card-content table-responsive">
                <table class="table table-hover">
                    <thead class="text-warning">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Salary</th>
                        <th>Country</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Dakota Rice</td>
                            <td>$36,738</td>
                            <td>Niger</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Minerva Hooper</td>
                            <td>$23,789</td>
                            <td>Curaçao</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Sage Rodriguez</td>
                            <td>$56,142</td>
                            <td>Netherlands</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Philip Chaney</td>
                            <td>$38,735</td>
                            <td>Korea, South</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  </div>

  