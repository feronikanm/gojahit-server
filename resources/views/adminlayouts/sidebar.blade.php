
<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
  <!--
    Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

    Tip 2: you can also add an image using data-image tag
-->

<style>
  .elevation-2 {
    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23) !important;
  }

  .elevation-3 {
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23) !important;
  }

  .img-circle {
    border-radius: 50%;
  }
</style>

  <div class="logo">
    
    <a href="https://github.com/feronikanm" target="_blank" class="simple-text logo-normal">
      <img src="{{ url('assets/img/icon_mesin_jahit_grey.png') }}" alt="Go Jahit Logo" class="img-circle elevation-2" style="opacity: 1.0" width="100" height="100">
      <br>
      <br>
      <span class="brand-text font-weight-light">G o - J a h i t</span>
      {{-- <br> --}}
      {{-- Go Jahit --}}
    </a>
  </div>

  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item ">
        <a class="nav-link" href="{{ url('/dashboard') }}">
          <i class="material-icons">dashboard</i>
          <p>Dashboard</p>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="{{ url('/data_pelanggan') }}">
          <i class="material-icons">person</i>
          <p>Data Pelanggan</p>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="{{ url('/data_penjahit') }}">
          <i class="material-icons">local_library</i>
          <p>Data Penjahit</p>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="{{ url('/data_kategori') }}">
          <i class="material-icons">list_alt</i>
          <p>Data Kategori</p>
        </a>
      </li>
      <li class="nav-item ">
          <a class="nav-link" href="{{ url('/data_detail_kategori') }}">
            <i class="material-icons">content_paste</i>
            <p>Data Detail Kategori</p>
          </a>
        </li>
      <li class="nav-item ">
        <a class="nav-link" href="{{ url('/data_ukuran') }}">
          <i class="material-icons">edit_road</i>
          <p>Data Ukuran</p>
          {{-- moving --}}
          {{-- architecture --}}
          {{-- gesture --}}
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="{{ url('/data_pesanan') }}">
          <i class="material-icons">layers</i>
          <p>Data Pesanan</p>
          {{-- menu_book --}}
          {{-- storage --}}
          {{-- format_list_bulleted --}}
          {{-- border_color --}}
          {{-- shopping_bag --}}
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="{{ url('/data_detail_pesanan') }}">
          <i class="material-icons">shopping_cart</i>
          <p>Data Detail Pesanan</p>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="{{ url('/data_utilitas') }}">
          <i class="material-icons">bubble_chart</i>
          <p>Data Utilitas</p>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="{{ url('/data_kriteria') }}">
          <i class="material-icons">rule</i>
          <p>Data Kriteria</p>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="{{ url('/data_rating') }}">
          <i class="material-icons">stars</i>
          <p>Data Rating</p>
        </a>
      </li>
    </ul>
  </div>
</div>

