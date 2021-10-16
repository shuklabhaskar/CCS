<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords"
          ontent="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <link rel="preconnect" href="{{url('https://fonts.gstatic.com')}}">
    <link rel="shortcut icon" href="{{url('img/icons/icon-48x48.png')}}"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
          integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>


    <title>DASHBOARD POWERED BY ATEK</title>

    <link href="{{url('css/light.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

    <script
        src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>

</head>

<body>
<div class="wrapper">
    <nav id="sidebar" class="sidebar js-sidebar">
        <div class="sidebar-content js-simplebar">
            <a class="sidebar-brand" href="{{url('index.blade.php')}}">
                <span class="align-middle">MMOPL</span>
            </a>

            <ul class="sidebar-nav">
                <li class="sidebar-header">
                    INVENTORIES
                </li>

                <li class="sidebar-item  @if(request()->is ('/') ) active @endif">
                    <a class="sidebar-link" href="{{url('/')}}">
                        <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-item @if(request()->is ('station') || request()->is('station/create')) active @endif">
                    <a data-bs-target="#dashboards" data-bs-toggle="collapse" class="sidebar-link"><i
                            class="fas fa-train"></i>
                        <span class="align-middle">STATIONS</span>
                    </a>

                    <ul id="dashboards" class="sidebar-dropdown list-unstyled collapse
                        @if(request()->is('station') || request()->is('station/create')) show @endif"
                        data-bs-parent="#sidebar">

                        <li class="sidebar-item @if(request()->is ('station')) active @endif">
                            <a class="sidebar-link" href="{{url('station')}}">STATION LIST
                                <span class="sidebar-badge badge bg-primary"></span>
                            </a>
                        </li>

                        <li class="sidebar-item @if(request()->is ('station/create')) active @endif">
                            <a class="sidebar-link" href="{{url('station/create')}}">
                                {{-- <i class="align-middle" data-feather="user"></i> --}}<span class="align-middle">CREATE STATION</span>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="sidebar-item @if(request()->is ('equipment/1') || request()->is('equipment/2')) active @endif">
                    <a data-bs-target="#equips" data-bs-toggle="collapse" class="sidebar-link">
                        <i class="far fa-hdd"></i><span class="align-middle">EQUIPMENTS</span>
                    </a>

                    <ul id="equips"
                        class="sidebar-dropdown list-unstyled collapse @if(request()->is ('equipment/1') || request()->is('equipment/2')) show @endif"
                        data-bs-parent="#sidebar">

                        <li class="sidebar-item @if(request()->is ('equipment/1')) active @endif">
                            <a class="sidebar-link" href="{{url('/equipment/1')}}">
                                 <span
                                     class="align-middle">AG EQUIPMENTS</span>
                            </a>
                        </li>

                        <li class="sidebar-item @if(request()->is ('equipment/2')) active @endif">
                            <a class="sidebar-link" href="{{url('/equipment/2')}}">
                                {{-- <i class="align-middle" data-feather="user-plus"></i>--}} <span
                                    class="align-middle">POST EQUIPMENTS</span>
                            </a>
                        </li>


                    </ul>
                </li>


                {{-- START: FARE INVENTORY NAV--}}

                <li class="sidebar-item  @if(request()->is ('fare') || request()->is('Create/far')) active @endif">
                    <a data-bs-target="#fare" data-bs-toggle="collapse" class="sidebar-link">
                        <i class="far fa-hdd"></i><span class="align-middle">FARE INVENTORY</span>
                    </a>

                    <ul id="fare"
                        class="sidebar-dropdown list-unstyled collapse  @if(request()->is ('fare') || request()->is('Create/fare')) show @endif"
                        data-bs-parent="#sidebar">

                        <li class="sidebar-item @if(request()->is ('fare')) active @endif">
                            <a class="sidebar-link" href="{{url('fare')}}"> <span
                                    class="align-middle">FARE</span>
                            </a>
                        </li>

                        <li class="sidebar-item  @if(request()->is ('Create/fare')) active @endif">
                            <a class="sidebar-link" href="{{url('Create/fare')}}"><span
                                    class="align-middle">CREATE FARE</span>
                            </a>
                        </li>

                    </ul>
                </li>

                {{-- END: FARE INVENTORY NAV--}}


                {{--START OF QR INVENTORY--}}

                <li class="sidebar-item  @if(request()->is ('QrType') || request()->is('pass') || request()->is('Create/QrType')) active @endif">
                    <a data-bs-target="#QR" data-bs-toggle="collapse" class="sidebar-link">
                        <i class="far fa-hdd"></i><span class="align-middle">QR INVENTORY</span>
                    </a>

                    <ul id="QR"
                        class="sidebar-dropdown list-unstyled collapse  @if(request()->is ('QrType') || request()->is('pass') || request()->is('Create/QrType')) show @endif"
                        data-bs-parent="#sidebar">

                        <li class="sidebar-item @if(request()->is ('QrType')) active @endif">
                            <a class="sidebar-link" href="{{url('QrType')}}"> <span
                                    class="align-middle">QR TYPE</span>
                            </a>
                        </li>

                        <li class="sidebar-item @if(request()->is ('Create/QrType')) active @endif">
                            <a class="sidebar-link" href="{{url('Create/QrType')}}"> <span
                                    class="align-middle">CREATE QR</span>
                            </a>
                        </li>

                        <li class="sidebar-item  @if(request()->is ('pass')) active @endif">
                            <a class="sidebar-link" href="{{url('pass')}}"><span
                                    class="align-middle">PASS INVENTORY</span>
                            </a>
                        </li>

                    </ul>
                </li>

                {{--END OF QR INVENTORY--}}

            </ul>
        </div>
    </nav>

    <div class="main">
        <nav class="navbar navbar-expand navbar-light navbar-bg">
            <a class="sidebar-toggle js-sidebar-toggle">
                <i class="hamburger align-self-center"></i>
            </a>

            <form class="d-none d-sm-inline-block">
                <div class="input-group input-group-navbar">
                    <input type="text" class="form-control" placeholder="Search…" aria-label="Search">
                    <button class="btn" type="button">
                        <i class="align-middle" data-feather="search"></i>
                    </button>
                </div>
            </form>

         {{--   <ul class="navbar-nav d-none d-lg-block">
                <li class="nav-item px-2 dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button"
                       data-bs-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        Mega Menu
                    </a>
                    <div class="dropdown-menu dropdown-menu-start dropdown-mega" aria-labelledby="servicesDropdown">
                        <div class="d-md-flex align-items-start justify-content-start">
                            <div class="dropdown-mega-list">
                                <div class="dropdown-header">UI Elements</div>
                                <a class="dropdown-item" href="#">Alerts</a>
                                <a class="dropdown-item" href="#">Buttons</a>
                                <a class="dropdown-item" href="#">Cards</a>
                                <a class="dropdown-item" href="#">Carousel</a>
                                <a class="dropdown-item" href="#">General</a>
                                <a class="dropdown-item" href="#">Grid</a>
                                <a class="dropdown-item" href="#">Modals</a>
                                <a class="dropdown-item" href="#">Tabs</a>
                                <a class="dropdown-item" href="#">Typography</a>
                            </div>
                            <div class="dropdown-mega-list">
                                <div class="dropdown-header">Forms</div>
                                <a class="dropdown-item" href="#">Layouts</a>
                                <a class="dropdown-item" href="#">Basic Inputs</a>
                                <a class="dropdown-item" href="#">Input Groups</a>
                                <a class="dropdown-item" href="#">Advanced Inputs</a>
                                <a class="dropdown-item" href="#">Editors</a>
                                <a class="dropdown-item" href="#">Validation</a>
                                <a class="dropdown-item" href="#">Wizard</a>
                            </div>
                            <div class="dropdown-mega-list">
                                <div class="dropdown-header">Tables</div>
                                <a class="dropdown-item" href="#">Basic Tables</a>
                                <a class="dropdown-item" href="#">Responsive Table</a>
                                <a class="dropdown-item" href="#">Table with Buttons</a>
                                <a class="dropdown-item" href="#">Column Search</a>
                                <a class="dropdown-item" href="#">Muulti Selection</a>
                                <a class="dropdown-item" href="#">Ajax Sourced Data</a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>--}}

            <div class="navbar-collapse collapse">
                <ul class="navbar-nav navbar-align">
                    <li class="nav-item dropdown">
                        <a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
                            <div class="position-relative">
                                <i class="align-middle" data-feather="bell"></i>
                                <span class="indicator">4</span>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0"
                             aria-labelledby="alertsDropdown">
                            <div class="dropdown-menu-header">
                                4 New Notifications
                            </div>
                            <div class="list-group">
                                <a href="#" class="list-group-item">
                                    <div class="row g-0 align-items-center">
                                        <div class="col-2">
                                            <i class="text-danger" data-feather="alert-circle"></i>
                                        </div>
                                        <div class="col-10">
                                            <div class="text-dark">Update completed</div>
                                            <div class="text-muted small mt-1">Restart server 12 to complete the
                                                update.
                                            </div>
                                            <div class="text-muted small mt-1">30m ago</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="row g-0 align-items-center">
                                        <div class="col-2">
                                            <i class="text-warning" data-feather="bell"></i>
                                        </div>
                                        <div class="col-10">
                                            <div class="text-dark">Lorem ipsum</div>
                                            <div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate
                                                hendrerit et.
                                            </div>
                                            <div class="text-muted small mt-1">2h ago</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="row g-0 align-items-center">
                                        <div class="col-2">
                                            <i class="text-primary" data-feather="home"></i>
                                        </div>
                                        <div class="col-10">
                                            <div class="text-dark">Login from 192.186.1.8</div>
                                            <div class="text-muted small mt-1">5h ago</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="row g-0 align-items-center">
                                        <div class="col-2">
                                            <i class="text-success" data-feather="user-plus"></i>
                                        </div>
                                        <div class="col-10">
                                            <div class="text-dark">New connection</div>
                                            <div class="text-muted small mt-1">Christina accepted your request.</div>
                                            <div class="text-muted small mt-1">14h ago</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="dropdown-menu-footer">
                                <a href="#" class="text-muted">Show all notifications</a>
                            </div>
                        </div>
                    </li>


                    <li class="nav-item">
                        <a class="nav-icon js-fullscreen d-none d-lg-block" href="#">
                            <div class="position-relative">
                                <i class="align-middle" data-feather="maximize"></i>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-icon pe-md-0 dropdown-toggle" href="#" data-bs-toggle="dropdown">
                            <i class="align-middle" data-feather="settings"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1"
                                                                                  data-feather="user"></i> Profile</a>
                            <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="pie-chart"></i>
                                Analytics</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="pages-settings.html"><i class="align-middle me-1"
                                                                                   data-feather="settings"></i> Settings
                                &
                                Privacy</a>
                            <a class="dropdown-item" href="#"><i class="align-middle me-1"
                                                                 data-feather="help-circle"></i> Help Center</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Log out</a>
                        </div>
                    </li>

                </ul>
            </div>
        </nav>

        @yield('content')

        <footer class="footer">
            <div class="container-fluid">
                <div class="row text-muted">
                    <div class="col-6 text-start">
                        <p class="mb-0">
                            <a class="text-muted" href="https://adminkit.io/" target="_blank"><strong>ATEK</strong></a>
                            &copy;
                        </p>
                    </div>
                    <div class="col-6 text-end">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a class="text-muted" href="https://adminkit.io/" target="_blank">Support</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="text-muted" href="https://adminkit.io/" target="_blank">Help Center</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="text-muted" href="https://adminkit.io/" target="_blank">Privacy</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="text-muted" href="https://adminkit.io/" target="_blank">Terms</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>

<script src="{{url('js/app.js')}}"></script>
<script src="{{ url('js/datatables.js') }}"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        flatpickr(".flatpickr-minimum");
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        $("#datatables-reponsive").DataTable({
            responsive: true,
            scrollY: '50vh',
            scrollCollapse: true,
            paging: false,

        });

    });

</script>


</body>

</html>
