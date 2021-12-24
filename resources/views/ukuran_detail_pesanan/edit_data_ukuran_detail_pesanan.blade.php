@extends('adminpro.main')

@section('title', 'Detail Data Pesanan')

@section('page_name', 'Detail Data Pesanan')

@section('content')


        
  <div class="content">
    <div class="container-fluid">


      <div class="row">
        <div class="col-md-8">
          <div class="card">

            <div class="card-header card-header-tabs" data-background-color="purple">
                <h4 class="card-title">Detail Data</h4>
            </div>

            
              

                <form method="post" action="/data_ukuran_detail_pesanan/update/{{ $data->id_ukuran_detail_pesanan }}" enctype="multipart/form-data" class="form-horizontal">
                    {{ csrf_field() }}


                    <div class="card-content">

                    <input type="hidden" name="id_ukuran_detail_pesanan" id="id_ukuran_detail_pesanan" value="{{ $data->id_ukuran_detail_pesanan }}">
                    <input type="hidden" name="id_pesanan" id="id_pesanan" value="{{ $data->id_pesanan }}">
                    <input type="hidden" name="id_ukuran" id="id_ukuran" value="{{ $data->id_ukuran }}">

                    <div class="row">
                        <label class="col-sm-2 label-on-left">Ukuran (cm)</label>
                        <div class="col-sm-7">
                            <div class="form-group label-floating is-empty">
                                <input class="form-control" name="ukuran_pesanan" type="number" value="{{ $data->ukuran_pesanan }}" autofocus />
                            </div>
                        </div>
                      </div>

        
                      <div class="form-footer text-right">
                        <div class="checkbox pull-left">
                          <div class="category form-category">
                          </div>
                        </div>
                        <a type="button" class="btn btn-white pull-fill" href="/data_ukuran_detail_pesanan">Kembali</a>
                        <button type="submit" class="btn btn-primary pull-fill">Simpan</button>
                      </div>  

        
                    </div>
                   
                </form>
          </div>
        </div>
      </div>





    </div>
  </div>



@endsection

