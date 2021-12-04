@extends('adminpro.main')
{{-- @extends('adminlayouts.main') --}}

@section('title', 'Data Ukuran Detail Pesanan')

@section('page_name', 'Data Ukuran Detail Pesanan')

@section('content')
        

  <div class="content">
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
        <div class="card">
            
            {{-- ini untuk layout adminlayouts
            <div class="card-header card-header-primary">
                <p class="card-category"></p>
                <h4 class="card-title ">Data Ukuran Detail Pesanan</h4>
                <p class="card-category"></p>
            </div> --}}

            <div class="card-header card-header-tabs" data-background-color="purple">
                <h4 class="card-title">Data Ukuran Detail Pesanan</h4>
            </div>

            {{-- <div class="card-body"> --}}
            <div class="card-body">

            <div class="table-responsive">

                {{-- <table id="example1" class="table"> --}}
                <table id="datatables" class="table">

                <thead class=" text-primary">
                    <th class="text-center">No</th>
                    <th class="text-center">ID Pesanan</th>
                    <th>Kategori</th>
                    <th>Nama Ukuran</th>
                    <th>Ukuran</th>
                    <th class="text-right">Actions</th>
                </thead>
                @php
                    $no = 1;
                @endphp
                <tbody>   
                        <tr>
                            <td class="text-center">{{ $no++ }}</td>
                            <td class="text-center"></td>
                            <td></td>

                            <td></td>

                            <td></td>
                            
                            <td class="td-actions text-right"></td> 
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


@endsection