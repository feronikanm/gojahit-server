<div class="sidebar" data-active-color="purple" data-background-color="white" data-image="{{ ('adminpro/assets/img/sidebar-1.jpg') }}">
    <!--
Tip 1: You can change the color of active element of the sidebar using: data-active-color="purple | blue | green | orange | red | rose"
Tip 2: you can also add an image using data-image tag
Tip 3: you can change the color of the sidebar with data-background-color="white | black"
-->
    <div class="logo">
        <a href="https://github.com/feronikanm" target="_blank" class="simple-text">
            G o - J a h i t
        </a>
    </div>
    <div class="logo logo-mini">
        <a href="https://github.com/feronikanm" target="_blank" class="simple-text">
            GO
        </a>
    </div>
    <div class="sidebar-wrapper">
        <div class="user">
            <div class="photo">
                <img src="{{ url('adminpro/assets/img/icon_mesin_jahit_grey.jpg') }}" />
            </div>
            <div class="info">
                <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                    <br>
                    {{ Auth::user()->name }}
                    {{-- <b class="caret"></b> --}}
                </a>
                {{-- <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li>
                            <a href="#">My Profile</a>
                        </li>
                        <li>
                            <a href="#">Edit Profile</a>
                        </li>
                        <li>
                            <a href="#">Settings</a>
                        </li>
                    </ul>
                </div> --}}
            </div>
        </div>
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
                    <i class="material-icons">timeline</i>
                    <p>Data Kategori</p>
                </a>
            </li>

            <li class="nav-item ">
                <a class="nav-link" href="{{ url('/data_detail_kategori') }}">
                    <i class="material-icons">apps</i>
                    <p>Data Detail Kategori</p>
                </a>
            </li>

            <li class="nav-item ">
                <a class="nav-link" href="{{ url('/data_ukuran') }}">
                    <i class="material-icons">content_paste</i>
                    <p>Data Ukuran</p>
                </a>
            </li>

            <li class="nav-item ">
                <a class="nav-link" href="{{ url('/data_pesanan') }}">
                    <i class="material-icons">layers</i>
                    <p>Data Pesanan</p>
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
                    <i class="material-icons">widgets</i>
                    <p>Data Kriteria</p>
                </a>
            </li>

            <li class="nav-item ">
                <a class="nav-link" href="{{ url('/data_rating') }}">
                    <i class="material-icons">stars</i>
                    <p>Data Rating</p>
                </a>
            </li>

            



            {{-- <li>
                <a data-toggle="collapse" href="#pagesExamples">
                    <i class="material-icons">image</i>
                    <p>Pages
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="pagesExamples">
                    <ul class="nav">
                        <li>
                            <a href="pages/pricing.html">Pricing</a>
                        </li>
                        <li>
                            <a href="pages/timeline.html">Timeline</a>
                        </li>
                        <li>
                            <a href="pages/login.html">Login Page</a>
                        </li>
                        <li>
                            <a href="pages/register.html">Register Page</a>
                        </li>
                        <li>
                            <a href="pages/lock.html">Lock Screen Page</a>
                        </li>
                        <li>
                            <a href="pages/user.html">User Profile</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a data-toggle="collapse" href="#componentsExamples">
                    <i class="material-icons">apps</i>
                    <p>Components
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="componentsExamples">
                    <ul class="nav">
                        <li>
                            <a href="components/buttons.html">Buttons</a>
                        </li>
                        <li>
                            <a href="components/grid.html">Grid System</a>
                        </li>
                        <li>
                            <a href="components/panels.html">Panels</a>
                        </li>
                        <li>
                            <a href="components/sweet-alert.html">Sweet Alert</a>
                        </li>
                        <li>
                            <a href="components/notifications.html">Notifications</a>
                        </li>
                        <li>
                            <a href="components/icons.html">Icons</a>
                        </li>
                        <li>
                            <a href="components/typography.html">Typography</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a data-toggle="collapse" href="#formsExamples">
                    <i class="material-icons">content_paste</i>
                    <p>Forms
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="formsExamples">
                    <ul class="nav">
                        <li>
                            <a href="forms/regular.html">Regular Forms</a>
                        </li>
                        <li>
                            <a href="forms/extended.html">Extended Forms</a>
                        </li>
                        <li>
                            <a href="forms/validation.html">Validation Forms</a>
                        </li>
                        <li>
                            <a href="forms/wizard.html">Wizard</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a data-toggle="collapse" href="#tablesExamples">
                    <i class="material-icons">grid_on</i>
                    <p>Tables
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="tablesExamples">
                    <ul class="nav">
                        <li>
                            <a href="tables/regular.html">Regular Tables</a>
                        </li>
                        <li>
                            <a href="tables/extended.html">Extended Tables</a>
                        </li>
                        <li>
                            <a href="tables/datatables.net.html">DataTables.net</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a data-toggle="collapse" href="#mapsExamples">
                    <i class="material-icons">place</i>
                    <p>Maps
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="mapsExamples">
                    <ul class="nav">
                        <li>
                            <a href="maps/google.html">Google Maps</a>
                        </li>
                        <li>
                            <a href="maps/fullscreen.html">Full Screen Map</a>
                        </li>
                        <li>
                            <a href="maps/vector.html">Vector Map</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a href="widgets.html">
                    <i class="material-icons">widgets</i>
                    <p>Widgets</p>
                </a>
            </li>
            <li>
                <a href="charts.html">
                    <i class="material-icons">timeline</i>
                    <p>Charts</p>
                </a>
            </li>
            <li>
                <a href="calendar.html">
                    <i class="material-icons">date_range</i>
                    <p>Calendar</p>
                </a>
            </li> --}}





        </ul>
    </div>
</div>


{{-- <div class="sidebar" data-active-color="rose" data-background-color="black" data-image="{{ ('adminpro/assets/img/sidebar-1.jpg') }}">
    <!--
Tip 1: You can change the color of active element of the sidebar using: data-active-color="purple | blue | green | orange | red | rose"
Tip 2: you can also add an image using data-image tag
Tip 3: you can change the color of the sidebar with data-background-color="white | black"
-->
    <div class="logo">
        <a href="http://www.creative-tim.com/" class="simple-text">
            Creative Tim
        </a>
    </div>
    <div class="logo logo-mini">
        <a href="http://www.creative-tim.com/" class="simple-text">
            Ct
        </a>
    </div>
    <div class="sidebar-wrapper">
        <div class="user">
            <div class="photo">
                <img src="{{ url('adminpro/assets/img/faces/avatar.jpg') }}" />
            </div>
            <div class="info">
                <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                    Tania Andrew
                    <b class="caret"></b>
                </a>
                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li>
                            <a href="#">My Profile</a>
                        </li>
                        <li>
                            <a href="#">Edit Profile</a>
                        </li>
                        <li>
                            <a href="#">Settings</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <ul class="nav">
            <li class="active">
                <a href="dashboard.html">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li>
                <a data-toggle="collapse" href="#pagesExamples">
                    <i class="material-icons">image</i>
                    <p>Pages
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="pagesExamples">
                    <ul class="nav">
                        <li>
                            <a href="pages/pricing.html">Pricing</a>
                        </li>
                        <li>
                            <a href="pages/timeline.html">Timeline</a>
                        </li>
                        <li>
                            <a href="pages/login.html">Login Page</a>
                        </li>
                        <li>
                            <a href="pages/register.html">Register Page</a>
                        </li>
                        <li>
                            <a href="pages/lock.html">Lock Screen Page</a>
                        </li>
                        <li>
                            <a href="pages/user.html">User Profile</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a data-toggle="collapse" href="#componentsExamples">
                    <i class="material-icons">apps</i>
                    <p>Components
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="componentsExamples">
                    <ul class="nav">
                        <li>
                            <a href="components/buttons.html">Buttons</a>
                        </li>
                        <li>
                            <a href="components/grid.html">Grid System</a>
                        </li>
                        <li>
                            <a href="components/panels.html">Panels</a>
                        </li>
                        <li>
                            <a href="components/sweet-alert.html">Sweet Alert</a>
                        </li>
                        <li>
                            <a href="components/notifications.html">Notifications</a>
                        </li>
                        <li>
                            <a href="components/icons.html">Icons</a>
                        </li>
                        <li>
                            <a href="components/typography.html">Typography</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a data-toggle="collapse" href="#formsExamples">
                    <i class="material-icons">content_paste</i>
                    <p>Forms
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="formsExamples">
                    <ul class="nav">
                        <li>
                            <a href="forms/regular.html">Regular Forms</a>
                        </li>
                        <li>
                            <a href="forms/extended.html">Extended Forms</a>
                        </li>
                        <li>
                            <a href="forms/validation.html">Validation Forms</a>
                        </li>
                        <li>
                            <a href="forms/wizard.html">Wizard</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a data-toggle="collapse" href="#tablesExamples">
                    <i class="material-icons">grid_on</i>
                    <p>Tables
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="tablesExamples">
                    <ul class="nav">
                        <li>
                            <a href="tables/regular.html">Regular Tables</a>
                        </li>
                        <li>
                            <a href="tables/extended.html">Extended Tables</a>
                        </li>
                        <li>
                            <a href="tables/datatables.net.html">DataTables.net</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a data-toggle="collapse" href="#mapsExamples">
                    <i class="material-icons">place</i>
                    <p>Maps
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="mapsExamples">
                    <ul class="nav">
                        <li>
                            <a href="maps/google.html">Google Maps</a>
                        </li>
                        <li>
                            <a href="maps/fullscreen.html">Full Screen Map</a>
                        </li>
                        <li>
                            <a href="maps/vector.html">Vector Map</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a href="widgets.html">
                    <i class="material-icons">widgets</i>
                    <p>Widgets</p>
                </a>
            </li>
            <li>
                <a href="charts.html">
                    <i class="material-icons">timeline</i>
                    <p>Charts</p>
                </a>
            </li>
            <li>
                <a href="calendar.html">
                    <i class="material-icons">date_range</i>
                    <p>Calendar</p>
                </a>
            </li>
        </ul>
    </div>
</div> --}}