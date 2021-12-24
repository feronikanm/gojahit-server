@extends('adminpro.main')
{{-- @extends('adminlayouts.main_show_page') --}}

@section('title', 'Data Pelanggan')

@section('page_name', 'Data Pelanggan')

@section('content')
    
<div class="content">
    <div class="container-fluid">


      <div class="row">
        <div class="col-md-6">
          <div class="card card-profile">
            <div class="card-avatar">
              <a href="javascript:;">
      
                {{-- <img src="{{ url('img_pelanggan/'.$data->foto_pelanggan) }}" style="width: 120px; height: 120px; border-radius: 10px;" class="card-img-top mb-3" alt="..."> --}}
                <img class="img" src="{{ url('img_pelanggan/'.$data->foto_pelanggan) }}" style="width: 130px; height: 130px;" />
              </a>
            </div>
            
            <div class="card-body">
              <h6 class="card-category text-primary">Nama Pelanggan</h6>
              <h4 class="card-title">{{ $data->nama_pelanggan }}</h4>
              <p class="card-description">{{ $data->email_pelanggan }}</p>  
            
            </div>

          </div>
    </div>
  </div>




  <div class="row">
    <div class="col-md-6">
      <div class="card">
        
              <div class="card-header card-header-tabs" data-background-color="purple">
                  <h4 class="card-title">Detail Data</h4>
              </div>
              <div class="card-content">
                
                <div class="card-content table-responsive table-full-width" style="margin-left: 50px">
                  <div class="row">
                    <label class="col-sm-3 col-form-label text-primary">{{ __('ID Pelanggan') }}</label>
                    <div class="col-sm-5">{{ $data->id_pelanggan }}</div>
                  </div>
        
                  <div class="row">
                    <label class="col-sm-3 col-form-label text-primary">{{ __('Nama') }}</label>
                    <div class="col-sm-5">{{ $data->nama_pelanggan }}</div>
                  </div>
                  
                  <div class="row">
                    <label class="col-sm-3 col-form-label text-primary">{{ __('Email') }}</label>
                    <div class="col-sm-5">{{ $data->email_pelanggan }}</div>
                  </div>
        
                  <div class="row">
                    <label class="col-sm-3 col-form-label text-primary">{{ __('Password') }}</label>
                    <div class="col-sm-5">{{ $data->password_pelanggan }}</div>
                  </div>
        
                  <div class="row">
                    <label class="col-sm-3 col-form-label text-primary">{{ __('No. Telp') }}</label>
                    <div class="col-sm-5">{{ $data->telp_pelanggan }}</div>
                  </div>
        
                  <div class="row">
                    <label class="col-sm-3 col-form-label text-primary">{{ __('Latitude') }}</label>
                    <div class="col-sm-5">{{ $data->latitude_pelanggan }}</div>
                  </div>
        
                  <div class="row">
                    <label class="col-sm-3 col-form-label text-primary">{{ __('Longitude') }}</label>
                    <div class="col-sm-5">{{ $data->longitude_pelanggan }}</div>
                  </div>
        
                  <div class="row">
                    <label class="col-sm-3 col-form-label text-primary">{{ __('Alamat') }}</label>
                    <div class="col-sm-5">{{ $data->alamat_pelanggan }}</div>
                  </div>
        
                  <div class="row">
                    <label class="col-sm-3 col-form-label text-primary">{{ __('Jenis Kelamin') }}</label>
                    <div class="col-sm-5">{{ $data->jk_pelanggan }}</div>
                  </div>
        
                </div>
      

                
                <div class="form-footer text-right" style="margin-bottom: 60px">
                  <a type="button" class="btn btn-primary pull-right" href="/data_pelanggan/edit/{{ $data->id_pelanggan }}">Update Data</a>
                  <a type="button" class="btn btn-white pull-right" href="/data_pelanggan">Kembali</a>
                  {{-- <a type="button" class="btn btn-white pull-fill" href="/data_pelanggan">Kembali</a> --}}
                  {{-- <button type="submit" class="btn btn-primary pull-fill">Simpan</button> --}}
                </div>
                                
              </div>
              </div>
      </div>
  
{{-- 

    <div class="col-md-6">
      <div class="card">
        <div class="card-header card-header-tabs" data-background-color="purple">
          <h4 class="card-title">Data Pesanan</h4>
      </div>
        <div class="card-content">
          <div class="table-responsive">
            <table id="example1" class="table table-bordered table-striped ">
                <thead class="text-primary" >
                    <th class="text-center">ID Pesanan</th>
                    <th>Nama Penjahit</th>
                    <th>Tanggal Pesanan</th>
                    <th>Tanggal Pesanan Selesai</th>
                    <th>Status Pesanan</th>
                </thead>
                @php
                    $no = 1;
                @endphp
                <tbody>   
                    @foreach ($pesanan as $data_pesanan)
                        <tr>
                          <td class="text-center">{{ $data_pesanan->id_pesanan }}</td>
                          <td>{{ $data_pesanan->nama_penjahit }}</td>
                          <td>{{ $data_pesanan->tanggal_pesanan }}</td>
                          <td>{{ $data_pesanan->tanggal_pesanan_selesai }}</td>
                          <td>{{ $data_pesanan->status_pesanan }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table> 
        </div>
        </div>
      </div>
    </div> --}}


    <div class="col-md-6">
      <div class="card">
          
        <div class="card-header card-header-tabs" data-background-color="purple">
          <h4 class="card-title">Data Pesanan</h4>
      </div>

          <div class="card-content">
              <div class="material-datatables">
                  <table class="table table-bordered table-striped" cellspacing="0" width="100%" style="width:100%">
                      <thead class="text-primary">
                          <tr>
                            <th class="text-center">ID Pesanan</th>
                            <th>Nama Penjahit</th>
                            <th>Tanggal Pesanan</th>
                            <th>Tanggal Pesanan Selesai</th>
                            <th>Status Pesanan</th>
                          </tr>
                      </thead>

                      @php
                          $no = 1;
                      @endphp
                      <tbody>
                        @foreach ($pesanan as $data_pesanan)
                        <tr>
                          <td class="text-center">{{ $data_pesanan->id_pesanan }}</td>
                          <td>{{ $data_pesanan->nama_penjahit }}</td>
                          <td>{{ $data_pesanan->tanggal_pesanan }}</td>
                          <td>{{ $data_pesanan->tanggal_pesanan_selesai }}</td>
                          <td>{{ $data_pesanan->status_pesanan }}</td> 
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

  </div>


 



      {{-- <div class="row">

        <div class="col-md-6">
          <div class="card">
            <div class="card-header card-header-primary">
              <p class="card-category"></p>
              <h4 class="card-title ">Detail Data</h4>
              <p class="card-category"></p>
              </div>
            <div class="card-body ml-5">
       
              <div class="row">
                <label class="col-sm-3 col-form-label text-primary">{{ __('ID Pelanggan') }}</label>
                <div class="col-sm-7">{{ $data->id_pelanggan }}</div>
              </div>
 
              <div class="row">
                <label class="col-sm-3 col-form-label text-primary">{{ __('Nama') }}</label>
                <div class="col-sm-7">{{ $data->nama_pelanggan }}</div>
              </div>
              
              <div class="row">
                <label class="col-sm-3 col-form-label text-primary">{{ __('Email') }}</label>
                <div class="col-sm-7">{{ $data->email_pelanggan }}</div>
              </div>

              <div class="row">
                <label class="col-sm-3 col-form-label text-primary">{{ __('Password') }}</label>
                <div class="col-sm-7">{{ $data->password_pelanggan }}</div>
              </div>

              <div class="row">
                <label class="col-sm-3 col-form-label text-primary">{{ __('No. Telp') }}</label>
                <div class="col-sm-7">{{ $data->telp_pelanggan }}</div>
              </div>

              <div class="row">
                <label class="col-sm-3 col-form-label text-primary">{{ __('Latitude') }}</label>
                <div class="col-sm-7">{{ $data->latitude_pelanggan }}</div>
              </div>
    
              <div class="row">
                <label class="col-sm-3 col-form-label text-primary">{{ __('Longitude') }}</label>
                <div class="col-sm-7">{{ $data->longitude_pelanggan }}</div>
              </div>
    
              <div class="row">
                <label class="col-sm-3 col-form-label text-primary">{{ __('Alamat') }}</label>
                <div class="col-sm-7">{{ $data->alamat_pelanggan }}</div>
              </div>
    
              <div class="row">
                <label class="col-sm-3 col-form-label text-primary">{{ __('Jenis Kelamin') }}</label>
                <div class="col-sm-7">{{ $data->jk_pelanggan }}</div>
              </div>

              <a type="button" class="btn btn-primary btn-round pull-right" href="/data_pelanggan/edit/{{ $data->id_pelanggan }}">Update</a>
              <a type="button" class="btn btn-secondary btn-round pull-right" href="/data_pelanggan">Kembali</a>
    
              <a type="button" class="btn btn-primary float-right" href="/data_pelanggan/edit/{{ $data->id_pelanggan }}">Update Data</a>
              <a type="button" class="btn btn-secondary float-right" href="/data_pelanggan">Kembali</a>

            </div>
          </div>
        </div>
    

        <div class="col-md-6">
          <div class="card">
            <div class="card-header card-header-primary">
              <p class="card-category"></p>
              <h4 class="card-title">Data Pesanan</h4>
              <p class="card-category"></p>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped ">
                    <thead class="text-primary" >
                        <th class="text-center">ID Pesanan</th>
                        <th>Nama Penjahit</th>
                        <th>Tanggal Pesanan</th>
                        <th>Tanggal Pesanan Selesai</th>
                        <th>Status Pesanan</th>
                    </thead>
                    @php
                        $no = 1;
                    @endphp
                    <tbody>   
                        @foreach ($pesanan as $data_pesanan)
                            <tr>
                              <td class="text-center">{{ $data_pesanan->id_pesanan }}</td>
                              <td>{{ $data_pesanan->nama_penjahit }}</td>
                              <td>{{ $data_pesanan->tanggal_pesanan }}</td>
                              <td>{{ $data_pesanan->tanggal_pesanan_selesai }}</td>
                              <td>{{ $data_pesanan->status_pesanan }}</td>
                            </tr>
                        @endforeach
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