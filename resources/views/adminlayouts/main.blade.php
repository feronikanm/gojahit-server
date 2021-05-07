<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  {{-- <link rel="apple-touch-icon" sizes="76x76" href="{{ url('assets/img/apple-icon.png') }}"> --}}
  <link rel="icon" type="image/png" href="{{ url('assets/img/icon_mesin_jahit.png') }}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>@yield('title')</title>
  
  
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />

  {{-- <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"> --}}

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  

  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ url('admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  
  <!-- Font Awesome -->
  {{-- <link rel="stylesheet" href="{{ url('admin/plugins/fontawesome-free/css/all.min.css') }}"> --}}

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- CSS Files -->
  <link href="{{ url('assets/css/material-dashboard.css?v=2.1.2') }}" rel="stylesheet" />
  {{-- <link href="{{ url('assets/css/material-kit.css?v=2.0.4') }}" rel="stylesheet" /> --}}

  
  <!-- Daterange picker -->
  {{-- <link rel="stylesheet" href="{{ url('admin/plugins/daterangepicker/daterangepicker.css') }}">  --}}

  <!-- DataTables -->
  <link rel="stylesheet" href="{{ url('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
  <link rel="stylesheet" href="{{ url('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ url('admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">

  {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css"> --}}

  {{-- <link rel="stylesheet" href="https://csdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css"> --}}
  {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.semanticui.min.css"> --}}

</head>


<body class="">
  <div class="wrapper ">

    @include('adminlayouts.sidebar')

    <div class="main-panel">
      
      
        <!-- Navbar -->
        @include('adminlayouts.header')
        <!-- End Navbar -->


        @yield('content')
      
      

        @include('adminlayouts.footer')
    </div>
  </div>

  {{-- <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
      <a href="#" data-toggle="dropdown">
        <i class="fa fa-cog fa-2x"> </i>
      </a>
      <ul class="dropdown-menu">
        <li class="header-title"> Sidebar Filters</li>
        <li class="adjustments-line">
          <a href="javascript:void(0)" class="switch-trigger active-color">
            <div class="badge-colors ml-auto mr-auto">
              <span class="badge filter badge-purple" data-color="purple"></span>
              <span class="badge filter badge-azure" data-color="azure"></span>
              <span class="badge filter badge-green" data-color="green"></span>
              <span class="badge filter badge-warning" data-color="orange"></span>
              <span class="badge filter badge-danger" data-color="danger"></span>
              <span class="badge filter badge-rose active" data-color="rose"></span>
            </div>
            <div class="clearfix"></div>
          </a>
        </li>
        <li class="header-title">Images</li>
        <li class="active">
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-1.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-2.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-3.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-4.jpg" alt="">
          </a>
        </li>

      </ul>
    </div>
  </div> --}}



  <!--   Core JS Files   -->
  <script src="{{ url('assets/js/core/jquery.min.js') }}"></script>
  <script src="{{ url('assets/js/core/popper.min.js') }}"></script>
  <script src="{{ url('assets/js/core/bootstrap-material-design.min.js') }}"></script>
  <script src="{{ url('assets/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
  <script src="{{ url('assets/js/plugins/moment.min.js') }}"></script>
  <!-- Plugin for the momentJs  -->
  <script src="{{ url('assets/js/plugins/moment.min.js') }}"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="{{ url('assets/js/plugins/sweetalert2.js') }}"></script>
  <!-- Forms Validations Plugin -->
  <script src="{{ url('assets/js/plugins/jquery.validate.min.js') }}"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="{{ url('assets/js/plugins/jquery.bootstrap-wizard.js') }}"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="{{ url('assets/js/plugins/bootstrap-selectpicker.js') }}"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="{{ url('assets/js/plugins/bootstrap-datetimepicker.min.js') }}"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="{{ url('assets/js/plugins/jquery.dataTables.min.js') }}"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="{{ url('assets/js/plugins/bootstrap-tagsinput.js') }}"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="{{ url('assets/js/plugins/jasny-bootstrap.min.js') }}"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="{{ url('assets/js/plugins/fullcalendar.min.js') }}"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="{{ url('assets/js/plugins/jquery-jvectormap.js') }}"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="{{ url('assets/js/plugins/nouislider.min.js') }}"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js') }}"></script>
  <!-- Library for adding dinamically elements -->
  <script src="{{ url('assets/js/plugins/arrive.min.js') }}"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="{{ url('assets/js/plugins/chartist.min.js') }}"></script>
  <!--  Notifications Plugin    -->
  <script src="{{ url('assets/js/plugins/bootstrap-notify.js') }}"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ url('assets/js/material-dashboard.js?v=2.1.2') }}" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="{{ url('assets/demo/demo.js') }}"></script>

<!-- daterangepicker -->
{{-- <script src="{{ url('admin/plugins/moment/moment.min.js') }}"></script> --}}
{{-- <script src="{{ url('admin/plugins/daterangepicker/daterangepicker.js') }}"></script> --}}

  <!-- DataTables  & Plugins -->
  <script src="{{ url('admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ url('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ url('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
  <script src="{{ url('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
  <script src="{{ url('admin/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
  <script src="{{ url('admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
  <script src="{{ url('admin/plugins/jszip/jszip.min.js') }}"></script>
  <script src="{{ url('admin/plugins/pdfmake/pdfmake.min.js') }}"></script>
  <script src="{{ url('admin/plugins/pdfmake/vfs_fonts.js') }}"></script>
  <script src="{{ url('admin/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
  <script src="{{ url('admin/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
  <script src="{{ url('admin/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
  {{-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> --}}
  {{-- <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script> --}}
  {{-- <script src="https://cdn.datatables.net/1.10.23/js/dataTables.semanticui.min.js"></script> --}}
  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.js"></script> --}}


  



  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

        if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
          if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
            $('.fixed-plugin .dropdown').addClass('open');
          }

        }

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();

    });
  </script>

  <script>
    $(function(){
      $('.nav-item .nav-link').filter(function(){return this.href==location.href}).parent().addClass('active')
      
      //$('.nav-item .nav-link').filter(function(){return this.href==location.href}).parent().addClass('active').siblings().removeClass('active')
      
      // $('.nav-item .nav-link').click(function(){
      //     $(this).parent().addClass('active').siblings().removeClass('active')	
      // })
    })
  </script>

    {{-- <script>
      $('.nav-item .nav-link').click(function(){
      $('.nav-item .nav-link ').removeClass('active');
      $(this).parent().addClass('active');
        });
    </script> --}}


    <script>


      $(function () {
        $("#example1").DataTable({
          "responsive": true, 
          "lengthChange": true, 
          "autoWidth": false,
          "processing": true,
          "ordering": false,
          //  "buttons": ["print", ],
          //  "buttons": ["copy", "csv", "excel", "pdf", "print", ],
          "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
        //   "lengthMenu": [
        //     [ 10, 25, 50, -1 ],
        //     [ '10 rows', '25 rows', '50 rows', 'Show all' ]
        // ],
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      // }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": false,
          "info": true,
          "autoWidth": false,
          "responsive": true,      
        });
      });
    </script>



<script>
  function readURL(input) {
  if (input.files && input.files[0]) {
      var reader = new FileReader();
      
      reader.onload = function (e) {
          $('#category-img-tag').attr('src', e.target.result);
      }
      
      reader.readAsDataURL(input.files[0]);
  }
}

$("#gambar_kategori").change(function(){
  readURL(this);
});
</script>

<script>
$('.datepicker').datepicker({
    format: 'mm/dd/yyyy',
    startDate: '-3d'
});
</script>


<script>



</script>

    
</body>

</html>