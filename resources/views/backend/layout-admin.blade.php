<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="{{asset('./backend/images/admin.png')}}" type="image/x-icon" />
        <title>ADMIN</title>
        <!-- plugins:css -->
        <link rel="stylesheet" href="{{asset('/backend/vendors/iconfonts/mdi/css/materialdesignicons.min.css')}}">
        <!-- inject:css -->
        <link rel="stylesheet" href="{{asset('/backend/css/shared/style.css')}}">
        <link rel="stylesheet" href="{{asset('/backend/css/css/style.css')}}">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <script type="text/javascript" src="{{asset('/backend/ckeditor/ckeditor.js')}}"></script>


        <!-- endinject -->
        <!-- Layout styles -->
        <%= stylesheet_pack_tag 'admin.scss'%>
        <link rel="stylesheet" href="{{asset('/backend/css/demo_1/style.css')}}">
        <link rel="stylesheet" href="{{asset('/backend/css/demo_1/main.css')}}">

        <!-- End Layout styles -->
    </head>
    <body>
        <?php
            $message = Session::get('message');
            if ($message) {
                echo "<script type='text/javascript'>alert('$message');</script>";
                Session::put('message', null);
            }
            
        ?>
        <div class="container-scroller">
            <!-- partial:partials/_navbar.html -->
            <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
                <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
                    <a class="navbar-brand brand-logo" href="/admin">
                        <img src="https://f.hubspotusercontent40.net/hubfs/19948095/logo-1.svg" alt="logo" />
                    </a>
                    <a class="navbar-brand brand-logo-mini" href="">
                        <img src="https://f.hubspotusercontent40.net/hubfs/19948095/logo-1.svg" alt="logo" />
                    </a>
                </div>
                <div class="navbar-menu-wrapper d-flex align-items-center">
                    <ul class="navbar-nav">
                        <li class="nav-item font-weight-semibold d-none d-lg-block">
                            <h2>Quản lý BLOG</h2>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
                            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                                <img class="img-xs rounded-circle" src="{{asset('/backend/images/admin.png')}}" alt="Profile image">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                                <div class="dropdown-header text-center">
                                    <img class="img-md rounded-circle" src="{{asset('/backend/images/admin.png')}}" alt="Profile image">
                                    <p class="mb-1 mt-3 font-weight-semibold">
                                        Trần Quang Huy
                                    </p>
                                    <p class="font-weight-light text-muted mb-0">
                                    tqhuy.19it3@vku.udn.vn
                                    </p>
                                </div>
                                <a href="/profile" class="dropdown-item">Hồ sơ <span class="badge badge-pill badge-danger">1</span><i class="dropdown-item-icon ti-dashboard"></i></a>
                                <a href="{{route('admin.logout')}}" class="dropdown-item">Đăng xuất<i class="dropdown-item-icon ti-power-off"></i></a>
                            </div>
                        </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                        <span class="mdi mdi-menu"></span>
                    </button>
                </div>
            </nav>
            <!-- partial -->
            <div class="container-fluid page-body-wrapper">
                <!-- partial:partials/_sidebar.html -->
                <nav class="sidebar sidebar-offcanvas" id="sidebar">
                    <ul class="nav">
                        <li class="nav-item nav-profile">
                            <a href="#" class="nav-link">
                                <div class="profile-image">
                                    <img class="img-xs rounded-circle" src="{{asset('/backend/images/admin.png')}}" alt="profile image">
                                    <div class="dot-indicator bg-success"></div>
                                </div>
                                <div class="text-wrapper">
                                    <p class="profile-name">
                                        Trần Quang Huy
                                    </p>
                                    <p class="designation">Quản trị viên</p>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.bai-viet.index') }}">
                                <i class="menu-icon typcn typcn-document-text"></i>
                                <span class="menu-title">Trang chủ</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                                <i class="menu-icon typcn typcn-coffee"></i>
                                <span class="menu-title">Quản lý bài viết</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="collapse" id="ui-basic">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item">
                                        <a href="{{ route('admin.bai-viet.xem-bai-viet') }}" class="nav-link">Xem bài viết</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('admin.bai-viet.them-bai-viet') }}" class="nav-link">Thêm bài viết</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!----------------------->
                @yield('admin-content')
                <!----------------------->
            </div> 
            
        </div>
        <script src="{{asset('/backend/vendors/js/vendor.bundle.addons.js')}}"></script>
        <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
        

        <script src="{{asset('/backend/js/shared/off-canvas.js')}}"></script>
        <script src="{{asset('/backend/js/shared/misc.js')}}"></script>
    </body>
</html>