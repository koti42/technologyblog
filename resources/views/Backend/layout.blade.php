<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/Backend/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/Backend/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="/node_modules/bootstrap/scss/_pagination.scss">
    <script type="text/javascript" src="/ckeditor/ckeditor.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="alertify/alertify.min.js"></script>
    <!-- include the style -->
    <link rel="stylesheet" href="alertify/alertify.min.css" />
    <!-- include a theme -->
    <link rel="stylesheet" href="alertify/css/themes/default.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>






    <!-- include semantic ui theme  -->
    <link rel="stylesheet" href="{PATH}/themes/semantic.css">

    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>



    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>

    <!--
        RTL version
    -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.rtl.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.rtl.min.css"/>
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.rtl.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.rtl.min.css"/>


    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="/Backend/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="/Backend/assets/images/favicon.ico"/>
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            <a class="navbar-brand brand-logo" href="#"><img src="/Backend/assets/images/logo.svg" alt="logo"/></a>
            <a class="navbar-brand brand-logo-mini" href="#"><img src="/Backend/assets/images/logo-mini.svg"
                                                                           alt="logo"/></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="mdi mdi-menu"></span>
            </button>
            <div class="search-field d-none d-md-block">
                <form class="d-flex align-items-center h-100" action="#">
                    <div class="input-group">
                        <div class="input-group-prepend bg-transparent">
                            <i class="input-group-text border-0 mdi mdi-magnify"></i>
                        </div>
                        <input type="text" class="form-control bg-transparent border-0" placeholder="Search projects">
                    </div>
                </form>
            </div>
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item nav-profile dropdown">
                    <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown"
                       aria-expanded="false">
                        <div class="nav-profile-img">
                            <img src="/Backend/assets/images/faces/face1.jpg" alt="image">
                            <span class="availability-status online"></span>
                        </div>
                        <div class="nav-profile-text">
                            <p class="mb-1 text-black">Mehmet Küçükçelebi</p>
                        </div>
                    </a>
                    <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                        <a class="dropdown-item" href="#">
                            <i class="mdi mdi-cached mr-2 text-success"></i> Activity Log </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            <i class="mdi mdi-logout mr-2 text-primary"></i> Signout </a>
                    </div>

                </li>
                <li class="nav-item d-none d-lg-block full-screen-link">
                    <a class="nav-link">
                        <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
                    </a>
                </li>


                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                        data-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </ul>
        </div>

    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item nav-profile">
                    <a href="#" class="nav-link">
                        <div class="nav-profile-image">
                            <img src="/Backend/assets/images/faces/face1.jpg" alt="profile">
                            <span class="login-status online"></span>
                            <!--change to offline or busy as needed-->
                        </div>

                        <div class="nav-profile-text d-flex flex-column">
                            <span class="font-weight-bold mb-2">Mehmet K.</span>
                            <span class="text-secondary text-small">Project Manager</span>
                        </div>
                        <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
                    </a>

                </li>
                <span>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('Backend.home')}}">
                        <span class="menu-title">Dashboard</span>
                        <i class="mdi mdi-home menu-icon"></i>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
                       aria-controls="ui-basic">
                        <span class="menu-title">Sayfalar</span>
                        <i class="menu-arrow"></i>
                        <i class="mdi mdi-crosshairs-gps menu-icon"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link"
                                                    href="{{route('haberler.index')}}">Oyun Haberleri</a>
                            </li>
                            <li class="nav-item"><a class="nav-link"
                                                    href="{{route('inceleme.index')}}">İnceleme Haberleri</a></li>
                            <li class="nav-item"><a class="nav-link"
                                                    href="{{route('yorum_onay.index')}}">Yorum Onayları</a></li>
                            <li class="nav-item"><a class="nav-link"
                                                    href="{{route('Sosyal-medya.index')}}">Sosyal Medya Hesapları</a></li>

                        </ul>
                    </div>
                </li>
                            <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span class="menu-title">Yazar Profilleri</span>
                        <i class="mdi mdi-laptop-windows menu-icon"></i>
                    </a>
                </li>

                </span>

            </ul>
        </nav>
        <!-- partial -->


        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row" id="proBanner">
                    <div class="col-12">
                        <div class="page-header">
                            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                  <i class="mdi mdi-home"></i>
                </span> <a href="{{route('Backend.home')}}">Dashboard</a>
                            </h3>

                        </div>


                    @yield('content')

                    <!-- yield buraya ekleyebiliriz-->
                    </div>

                </div>

            </div>

        </div>


        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="/Backend/assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="/Backend/assets/vendors/chart.js/Chart.min.js"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="/Backend/assets/js/off-canvas.js"></script>
<script src="/Backend/assets/js/hoverable-collapse.js"></script>
<script src="/Backend/assets/js/misc.js"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="/Backend/assets/js/dashboard.js"></script>
<script src="/Backend/assets/js/todolist.js"></script>
<!-- End custom js for this page -->
</body>
</html>
