@extends('adminpro.main')

@section('title', 'Dokumentasi')

@section('page_name', 'Dokumentasi')

@section('content')
    

  <div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="green">
                        <i class="material-icons">language</i>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">API Dokumentasi</h4>
                        <div class="row">
                            <div class="col-md-10">

                                <div class="table-responsive table-sales">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>Base URL</td>
                                                <td><a href="https://penjahitapi.000webhostapp.com" target="_blank">https://penjahitapi.000webhostapp.com</a></td>
                                            </tr>

                                            <tr>
                                                <td>URL API</td>
                                                <td><a href="https://penjahitapi.000webhostapp.com/api" target="_blank">https://penjahitapi.000webhostapp.com/api</a></td>
                                            </tr>

                                            <tr>
                                                <td>URL IMAGE PENJAHIT</td>
                                                <td><a href="https://penjahitapi.000webhostapp.com/img_penjahit/" target="_blank">https://penjahitapi.000webhostapp.com/img_penjahit/</a></td>
                                            </tr>

                                            <tr>
                                                <td>URL IMAGE PELANGGAN</td>
                                                <td><a href="https://penjahitapi.000webhostapp.com/img_pelanggan/" target="_blank">https://penjahitapi.000webhostapp.com/img_pelanggan/</a></td>
                                            </tr>

                                            <tr>
                                                <td>URL IMAGE KATEGORI</td>
                                                <td><a href="https://penjahitapi.000webhostapp.com/img_kategori/" target="_blank">https://penjahitapi.000webhostapp.com/img_kategori/</a></td>
                                            </tr>

                                            <tr>
                                                <td>URL IMAGE UKURAN</td>
                                                <td><a href="https://penjahitapi.000webhostapp.com/img_ukuran/" target="_blank">https://penjahitapi.000webhostapp.com/img_ukuran/</a></td>
                                            </tr>
                                     


                                        </tbody>
                                    </table>
                                </div>
                                
                            </div>

                            {{-- <div class="col-md-6 col-md-offset-1">
                                <div id="worldMap" class="map"></div>
                            </div> --}}

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="blue">
                        <i class="material-icons">language</i>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">PATH URL</h4>
                        <div class="row">
                            <div class="col-md-10">

                                <div class="table-responsive table-sales">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>URL Pelanggan</td>
                                                <td>URL API + <b>/pelanggan</b></td>
                                                <td><a href="https://penjahitapi.000webhostapp.com/api/pelanggan" target="_blank">https://penjahitapi.000webhostapp.com/api/pelanggan</a></td>
                                            </tr>

                                            <tr>
                                                <td>URL Penjahit</td>
                                                <td>URL API + <b>/penjahit</b></td>
                                                <td><a href="https://penjahitapi.000webhostapp.com/api/penjahit" target="_blank">https://penjahitapi.000webhostapp.com/api/penjahit</a></td>
                                            </tr>

                                            <tr>
                                                <td>URL Kategori</td>
                                                <td>URL API + <b>/kategori</b></td>
                                                <td><a href="https://penjahitapi.000webhostapp.com/api/kategori" target="_blank">https://penjahitapi.000webhostapp.com/api/kategori</a></td>
                                            </tr>

                                            <tr>
                                                <td>URL Ukuran</td>
                                                <td>URL API + <b>/ukuran</b></td>
                                                <td><a href="https://penjahitapi.000webhostapp.com/api/ukuran" target="_blank">https://penjahitapi.000webhostapp.com/api/ukuran</a></td>
                                            </tr>

                                            <tr>
                                                <td>URL Utilitas</td>
                                                <td>URL API + <b>/utilitas</b></td>
                                                <td><a href="https://penjahitapi.000webhostapp.com/api/utilitas" target="_blank">https://penjahitapi.000webhostapp.com/api/utilitas</a></td>
                                            </tr>

                                            <tr>
                                                <td>URL Rating</td>
                                                <td>URL API + <b>/rating</b></td>
                                                <td><a href="https://penjahitapi.000webhostapp.com/api/rating" target="_blank">https://penjahitapi.000webhostapp.com/api/rating</a></td>
                                            </tr>

                                            <tr>
                                                <td>URL Pesanan</td>
                                                <td>URL API + <b>/pesanan</b></td>
                                                <td><a href="https://penjahitapi.000webhostapp.com/api/pesanan" target="_blank">https://penjahitapi.000webhostapp.com/api/pesanan</a></td>
                                            </tr>

                                            <tr>
                                                <td>URL Nilai</td>
                                                <td>URL API + <b>/nilai</b></td>
                                                <td><a href="https://penjahitapi.000webhostapp.com/api/nilai" target="_blank">https://penjahitapi.000webhostapp.com/api/nilai</a></td>
                                            </tr>

                                            <tr>
                                                <td>URL Detail Kategori</td>
                                                <td>URL API + <b>/detail_kategori</b></td>
                                                <td><a href="https://penjahitapi.000webhostapp.com/api/detail_kategori" target="_blank">https://penjahitapi.000webhostapp.com/api/detail_kategori</a></td>
                                            </tr>

                                            <tr>
                                                <td>URL Detail Pesanan</td>
                                                <td>URL API + <b>/detail_pesanan</b></td>
                                                <td><a href="https://penjahitapi.000webhostapp.com/api/detail_pesanan" target="_blank">https://penjahitapi.000webhostapp.com/api/detail_pesanan</a></td>
                                            </tr>

                                            <tr>
                                                <td>URL Ukuran Detail Kategori</td>
                                                <td>URL API + <b>/ukuran_detail_kategori</b></td>
                                                <td><a href="https://penjahitapi.000webhostapp.com/api/ukuran_detail_kategori" target="_blank">https://penjahitapi.000webhostapp.com/api/ukuran_detail_kategori</a></td>
                                            </tr>

                                            <tr>
                                                <td>URL Ukuran Detail Pesanan</td>
                                                <td>URL API + <b>/ukuran_detail_pesanan</b></td>
                                                <td><a href="https://penjahitapi.000webhostapp.com/api/ukuran_detail_pesanan" target="_blank">https://penjahitapi.000webhostapp.com/api/ukuran_detail_pesanan</a></td>
                                            </tr>





                                        </tbody>
                                    </table>
                                </div>
                                
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="purple">
                        <i class="material-icons">language</i>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">Cara Mengakses API</h4>
                        <div class="row">
                            <div class="col-md-10">

                                <div class="table-responsive table-sales">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>GET</td>
                                                <td>URL API + PATH URL</td>
                                                <td><a href="https://penjahitapi.000webhostapp.com/api/pelanggan" target="_blank">https://penjahitapi.000webhostapp.com/api/pelanggan</a></td>
                                            </tr>

                                            <tr>
                                                <td>INSERT</td>
                                                <td>URL API + PATH URL + <b>/insert_data</b></td>
                                                <td><a href="https://penjahitapi.000webhostapp.com/api/pelanggan/insert_data" target="_blank">https://penjahitapi.000webhostapp.com/api/pelanggan/insert_data</a></td>
                                            </tr>

                                            <tr>
                                                <td>UPDATE</td>
                                                <td>URL API + PATH URL + <b>/update</b></td>
                                                <td><a href="https://penjahitapi.000webhostapp.com/api/pelanggan/update" target="_blank">https://penjahitapi.000webhostapp.com/api/pelanggan/update</a></td>
                                            </tr>

                                            <tr>
                                                <td>DELETE</td>
                                                <td>URL API + PATH URL + <b>/delete</b></td>
                                                <td><a href="https://penjahitapi.000webhostapp.com/api/pelanggan/delete" target="_blank">https://penjahitapi.000webhostapp.com/api/pelanggan/delete</a></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                                
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
       
   

    </div>
</div>

  @endsection