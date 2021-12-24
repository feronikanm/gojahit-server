@extends('adminpro.main')

@section('title', 'Edit Data Rating')

@section('page_name', 'Edit Data Rating')

@section('content')
        

  <div class="content">
    <div class="container-fluid">


      <div class="row">
        <div class="col-md-8">
          <div class="card">

              <div class="card-header card-header-tabs" data-background-color="purple">
                  <h4 class="card-title ">Edit Data Rating</h4>
              </div>
          
                <form method="post" action="/data_rating/update/{{ $data->id_rating }}" enctype="multipart/form-data" class="form-horizontal">
                  {{ csrf_field() }}


                  <div class="card-content">

                    <input type="hidden" name="id_rating" id="id_rating" value="{{ $data->id_rating }}">
                    {{-- <input type="hidden" name="id_penjahit" id="id_penjahit" value="{{ $data->id_penjahit }}"> --}}

                    <div>
                      <div class="form-group" id="exampleFormControlSelect1" >
                      <select class="selectpicker" data-style="btn btn-primary btn-round" title="Pilih Penjahit" name="id_penjahit">
                          @foreach ($penjahit as $penjahit)
                              <option value="{{ $penjahit->id_penjahit }}">{{ $penjahit->nama_penjahit }} ({{ $penjahit->id_penjahit }})</option>
                          @endforeach
                      </select>
                      </div>
                    </div>


                    <div class="row">
                      <label class="col-sm-2 label-on-left">Kriteria 1</label>
                      <div class="col-sm-7">
                          <div class="form-group label-floating is-empty">
                              <input class="form-control" name="kriteria_1" type="number" placeholder="(1-3)" value="{{ $data->kriteria_1 }}" autofocus />
                          </div>
                      </div>
                    </div>

                    <div class="row">
                        <label class="col-sm-2 label-on-left">Kriteria 2</label>
                        <div class="col-sm-7">
                            <div class="form-group label-floating is-empty">
                                <input class="form-control" name="kriteria_2" type="number" placeholder="(1-3)" value="{{ $data->kriteria_2 }}" autofocus />
                            </div>
                        </div>
                      </div>

                      <div class="row">
                        <label class="col-sm-2 label-on-left">Kriteria 3</label>
                        <div class="col-sm-7">
                            <div class="form-group label-floating is-empty">
                                <input class="form-control" name="kriteria_3" type="number" placeholder="(1-3)" value="{{ $data->kriteria_3 }}" autofocus />
                            </div>
                        </div>
                      </div>

                      <div class="row">
                        <label class="col-sm-2 label-on-left">Kriteria 4</label>
                        <div class="col-sm-7">
                            <div class="form-group label-floating is-empty">
                                <input class="form-control" name="kriteria_4" type="number" placeholder="(1-3)" value="{{ $data->kriteria_4 }}" autofocus />
                            </div>
                        </div>
                      </div>


                    <div class="form-footer text-right">
                      <div class="checkbox pull-left">
                        <div class="category form-category">
                        </div>
                      </div>
                      <a type="button" class="btn btn-white pull-fill" href="/data_rating">Kembali</a>
                      <button type="submit" class="btn btn-primary pull-fill">Simpan</button>
                    </div>  
      
                  </div>           
                      
                </form>
                  
            </div>
          </div>
        </div>

        {{-- <div class="row">
            <div class="col-md-8">
            <div class="card">
                <div class="card-header card-header-primary">
                <p class="card-category"></p>
                <h4 class="card-title ">Edit Data Ukuran</h4>
                <p class="card-category"></p>
                </div>
                <div class="card-body">
      
                    <form method="post" action="/data_ukuran/update/{{ $data->id_ukuran }}" enctype="multipart/form-data">
                      @csrf

                      <input type="hidden" name="id_ukuran" id="id_ukuran" value="{{ $data->id_ukuran }}">

                        <div class="row">
                          <label class="col-sm-2 col-form-label">{{ __('Nama Ukuran') }}</label>
                          <div class="col-sm-7">
                            <div class="form-group">
                              <input class="form-control" name="nama_ukuran" id="category" type="text" placeholder="{{ __('Nama Ukuran') }}" value="{{ $data->nama_ukuran }}"  />
                            </div>
                          </div>
                        </div>
                      
                        <div class="row">
                          <label for="image" class="col-sm-2 col-form-label">Gambar Ukuran</label>
                          <img src="{{ url('img_ukuran/'.$data->gambar_ukuran) }}" style="width: 120px; height: 120px; border-radius: 10px;" class="card-img-top mb-3" alt="...">
                          <div class="col-sm-7">
                            <input id="gambar_kategori" type="file" class="form-control" name="gambar_ukuran" >
                            <img src="#" id="category-img-tag" width="200px"  />   <!--for preview purpose -->
                          </div>
                          
                        </div>   

                        <button type="submit" class="btn btn-primary float-right">Simpan</button>
                        <a type="button" class="btn btn-secondary float-right" href="/data_ukuran">Kembali</a>
                      </form>
                      

                </div>
            </div>
            </div>
        </div> --}}
    
        
    </div>
  </div>


@endsection