<!doctype html>
<html lang="en">

<!-- Mirrored from iqonic.design/themes/streamitnew/dashboard/html/theme/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Sep 2020 07:03:49 GMT -->
<head>
    @can('crud-user')
    <style>
        .body {
            background-color: white;
        }

    </style>
    <base href="{{asset('/')}}">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Streamit - Responsive Bootstrap 4 Admin Dashboard Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="https://iqonic.design/themes/streamitnew/dashboard/html/assets/images/favicon.ico" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="admin_resource/assets/css/bootstrap.min.css">
    <!--datatable CSS -->
    <link rel="stylesheet" href="admin_resource/assets/css/dataTables.bootstrap4.min.css">
    <!-- Typography CSS -->
    <link rel="stylesheet" href="admin_resource/assets/css/typography.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="admin_resource/assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="admin_resource/assets/css/responsive.css">
</head>
<body>
<!-- loader Start -->
<div id="loading">
    <div id="loading-center">
    </div>
</div>
<!-- loader END -->
<!-- Wrapper Start -->
<div class="wrapper">
    <!-- Sidebar-->
    <div class="iq-sidebar">
        <div class="iq-sidebar-logo d-flex justify-content-between">
            <a href="{{route('admin.dashboard')}}" class="header-logo">
                <img src="admin_resource/assets/images/logo.png" class="img-fluid rounded-normal" alt="">
                <div class="logo-title">
                    <span class="text-primary text-uppercase">Streamit</span>
                </div>
            </a>
            <div class="iq-menu-bt-sidebar">
                <div class="iq-menu-bt align-self-center">
                    <div class="wrapper-menu">
                        <div class="main-circle"><i class="las la-bars"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div id="sidebar-scrollbar">
            <nav class="iq-sidebar-menu">
                <ul id="iq-sidebar-toggle" class="iq-menu">
                    <li class="active active-menu"><a href="{{route('admin.dashboard')}}" class="iq-waves-effect"><i class="las la-home iq-arrow-left"></i><span>Dashboard</span></a></li>
{{--                    <li><a href="rating.html" class="iq-waves-effect"><i class="las la-star-half-alt"></i><span>Rating </span></a></li>--}}
{{--                    <li><a href="comment.html" class="iq-waves-effect"><i class="las la-comments"></i><span>Comment</span></a></li>--}}
{{--                    <li><a href="{{route('user.index')}}" class="iq-waves-effect"><i class="las la-user-friends"></i><span style="color: white; font-size: 20px"><b>User</b></span></a></li>--}}
                    <li>
                        <a href="#user" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="las la-film"></i><span>User</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="user" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li><a href="{{route('user.create')}}"><i class="las la-user-plus"></i>Add User</a></li>
                            <li><a href="{{route('user.index')}}"><i class="las la-eye"></i>User List</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#movie" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="las la-film"></i><span>Movie</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="movie" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li><a href="{{route('movie.create')}}"><i class="las la-user-plus"></i>Add Movie</a></li>
                            <li><a href="{{route('movie.list')}}"><i class="las la-eye"></i>Movie List</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#category" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="las la-list-ul"></i><span>Category</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="category" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li><a href="{{route('category.create')}}"><i class="las la-user-plus"></i>Add Category</a></li>
                            <li><a href="{{route('category.index')}}"><i class="las la-eye"></i>Category List</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#language" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="las la-film"></i><span>Language</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="language" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li><a href="{{route('language.create')}}"><i class="las la-user-plus"></i>Add Language</a></li>
                            <li><a href="{{route('language.index')}}"><i class="las la-eye"></i>Language List</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#quality" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="las la-film"></i><span>Quality</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="quality" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li><a href="{{route('quality.create')}}"><i class="las la-user-plus"></i>Add Quality</a></li>
                            <li><a href="{{route('quality.index')}}"><i class="las la-eye"></i>Quality List</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#role" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="las la-film"></i><span>Role</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="role" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li><a href="{{route('role.create')}}"><i class="las la-user-plus"></i>Add Role</a></li>
                            <li><a href="{{route('role.index')}}"><i class="las la-eye"></i>Role List</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#comment" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="las la-film"></i><span>Comment</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="comment" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li><a href="{{route('view.index')}}"><i class="las la-user-plus"></i>Show Comments</a></li>
                        </ul>
                    </li>
                    <li>
                        <ul id="ui-elements" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li class="elements">
                                <a href="#sub-menu" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-play-circle-line"></i><span>UI Kit</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                <ul id="sub-menu" class="iq-submenu collapse" data-parent="#ui-elements">
                                    <li><a href="ui-colors.html"><i class="las la-palette"></i>colors</a></li>
                                    <li><a href="ui-typography.html"><i class="las la-keyboard"></i>Typography</a></li>
                                    <li><a href="ui-alerts.html"><i class="las la-tag"></i>Alerts</a></li>
                                    <li><a href="ui-badges.html"><i class="lab la-atlassian"></i>Badges</a></li>
                                    <li><a href="ui-breadcrumb.html"><i class="las la-bars"></i>Breadcrumb</a></li>
                                    <li><a href="ui-buttons.html"><i class="las la-tablet"></i>Buttons</a></li>
                                    <li><a href="ui-cards.html"><i class="las la-credit-card"></i>Cards</a></li>
                                    <li><a href="ui-carousel.html"><i class="las la-film"></i>Carousel</a></li>
                                    <li><a href="ui-embed-video.html"><i class="las la-video"></i>Video</a></li>
                                    <li><a href="ui-grid.html"><i class="las la-border-all"></i>Grid</a></li>
                                    <li><a href="ui-images.html"><i class="las la-images"></i>Images</a></li>
                                    <li><a href="ui-list-group.html"><i class="las la-list"></i>list Group</a></li>
                                    <li><a href="ui-media-object.html"><i class="las la-ad"></i>Media</a></li>
                                    <li><a href="ui-modal.html"><i class="las la-columns"></i>Modal</a></li>
                                    <li><a href="ui-notifications.html"><i class="las la-bell"></i>Notifications</a></li>
                                    <li><a href="ui-pagination.html"><i class="las la-ellipsis-h"></i>Pagination</a></li>
                                    <li><a href="ui-popovers.html"><i class="las la-eraser"></i>Popovers</a></li>
                                    <li><a href="ui-progressbars.html"><i class="las la-hdd"></i>Progressbars</a></li>
                                    <li><a href="ui-tabs.html"><i class="las la-database"></i>Tabs</a></li>
                                    <li><a href="ui-tooltips.html"><i class="las la-magnet"></i>Tooltips</a></li>
                                </ul>
                            </li>
                            <li class="form">
                                <a href="#forms" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="lab la-wpforms"></i><span>Forms</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                <ul id="forms" class="iq-submenu collapse" data-parent="#ui-elements">
                                    <li><a href="form-layout.html"><i class="las la-book"></i>Form Elements</a></li>
                                    <li><a href="form-validation.html"><i class="las la-edit"></i>Form Validation</a></li>
                                    <li><a href="form-switch.html"><i class="las la-toggle-off"></i>Form Switch</a></li>
                                    <li><a href="form-chechbox.html"><i class="las la-check-square"></i>Form Checkbox</a></li>
                                    <li><a href="form-radio.html"><i class="ri-radio-button-line"></i>Form Radio</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#wizard-form" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-archive-drawer-line"></i><span>Forms Wizard</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                <ul id="wizard-form" class="iq-submenu collapse" data-parent="#ui-elements">
                                    <li><a href="form-wizard.html"><i class="ri-clockwise-line"></i>Simple Wizard</a></li>
                                    <li><a href="form-wizard-validate.html"><i class="ri-clockwise-2-line"></i>Validate Wizard</a></li>
                                    <li><a href="form-wizard-vertical.html"><i class="ri-anticlockwise-line"></i>Vertical Wizard</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#tables" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-table-line"></i><span>Table</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                <ul id="tables" class="iq-submenu collapse" data-parent="#ui-elements">
                                    <li><a href="tables-basic.html"><i class="ri-table-line"></i>Basic Tables</a></li>
                                    <li><a href="data-table.html"><i class="ri-database-line"></i>Data Table</a></li>
                                    <li><a href="table-editable.html"><i class="ri-refund-line"></i>Editable Table</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#icons" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-list-check"></i><span>Icons</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                <ul id="icons" class="iq-submenu collapse" data-parent="#ui-elements">
                                    <li><a href="icon-dripicons.html"><i class="ri-stack-line"></i>Dripicons</a></li>
                                    <li><a href="icon-fontawesome-5.html"><i class="ri-facebook-fill"></i>Font Awesome 5</a></li>
                                    <li><a href="icon-lineawesome.html"><i class="ri-keynote-line"></i>line Awesome</a></li>
                                    <li><a href="icon-remixicon.html"><i class="ri-remixicon-line"></i>Remixicon</a></li>
                                    <li><a href="icon-unicons.html"><i class="ri-underline"></i>unicons</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{route('view.index')}}" class="iq-waves-effect"><i class="las la-user-friends"></i><span style="color: white; font-size: 20px"><b>Movie Page</b></span></a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- TOP Nav Bar -->
    <div class="iq-top-navbar">
        <div class="iq-navbar-custom">
            <nav class="navbar navbar-expand-lg navbar-light p-0">
                <div class="iq-menu-bt d-flex align-items-center">
                    <div class="wrapper-menu">
                        <div class="main-circle"><i class="las la-bars"></i></div>
                    </div>
                    <div class="iq-navbar-logo d-flex justify-content-between">
                        <a href="{{route('admin.dashboard')}}" class="header-logo">
                            <img src="admin_resource/assets/images/logo.png" class="img-fluid rounded-normal" alt="">
                            <div class="logo-title">
                                <span class="text-primary text-uppercase">Streamit</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="iq-search-bar ml-auto">
                    <form action="#" class="searchbox">
                        <input type="text" class="text search-input" placeholder="Search Here...">
                        <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                    </form>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"  aria-label="Toggle navigation">
                    <i class="ri-menu-3-line"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-list">
                        <li class="nav-item nav-icon search-content">
                            <a href="#" class="search-toggle iq-waves-effect text-gray rounded">
                                <i class="ri-search-line"></i>
                            </a>
                            <form action="#" class="search-box p-0">
                                <input type="text" class="text search-input" placeholder="Type here to search...">
                                <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                            </form>
                        </li>
                        <li class="nav-item nav-icon">
                            <div class="iq-sub-dropdown">
                                <div class="iq-card shadow-none m-0">
                                    <div class="iq-card-body p-0">
                                        <div class="bg-primary p-3">
                                            <h5 class="mb-0 text-white">All Notifications<small class="badge  badge-light float-right pt-1">4</small></h5>
                                        </div>
                                        <a href="#" class="iq-sub-card" >
                                            <div class="media align-items-center">
                                                <div class="">
                                                    <img class="avatar-40 rounded" src="admin_resource/assets/images/user/01.jpg" alt="">
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">Emma Watson Barry</h6>
                                                    <small class="float-right font-size-12">Just Now</small>
                                                    <p class="mb-0">95 MB</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="iq-sub-card" >
                                            <div class="media align-items-center">
                                                <div class="">
                                                    <img class="avatar-40 rounded" src="admin_resource/assets/images/user/02.jpg" alt="">
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">New customer is join</h6>
                                                    <small class="float-right font-size-12">5 days ago</small>
                                                    <p class="mb-0">Cyst Barry</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="iq-sub-card" >
                                            <div class="media align-items-center">
                                                <div class="">
                                                    <img class="avatar-40 rounded" src="admin_resource/assets/images/user/03.jpg" alt="">
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">Two customer is left</h6>
                                                    <small class="float-right font-size-12">2 days ago</small>
                                                    <p class="mb-0">Cyst Barry</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="iq-sub-card" >
                                            <div class="media align-items-center">
                                                <div class="">
                                                    <img class="avatar-40 rounded" src="admin_resource/assets/images/user/04.jpg" alt="">
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">New Mail from Fenny</h6>
                                                    <small class="float-right font-size-12">3 days ago</small>
                                                    <p class="mb-0">Cyst Barry</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item nav-icon dropdown">
                            <div class="iq-sub-dropdown">
                                <div class="iq-card shadow-none m-0">
                                    <div class="iq-card-body p-0 ">
                                        <div class="bg-primary p-3">
                                            <h5 class="mb-0 text-white">All Messages<small class="badge  badge-light float-right pt-1">5</small></h5>
                                        </div>
                                        <a href="#" class="iq-sub-card">
                                            <div class="media align-items-center">
                                                <div class="">
                                                    <img class="avatar-40 rounded" src="admin_resource/assets/images/user/01.jpg" alt="">
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">Barry Emma Watson</h6>
                                                    <small class="float-left font-size-12">13 Jun</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="iq-sub-card">
                                            <div class="media align-items-center">
                                                <div class="">
                                                    <img class="avatar-40 rounded" src="admin_resource/assets/images/user/02.jpg" alt="">
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">Lorem Ipsum Watson</h6>
                                                    <small class="float-left font-size-12">20 Apr</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="iq-sub-card">
                                            <div class="media align-items-center">
                                                <div class="">
                                                    <img class="avatar-40 rounded" src="admin_resource/assets/images/user/03.jpg" alt="">
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">Why do we use it?</h6>
                                                    <small class="float-left font-size-12">30 Jun</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="iq-sub-card">
                                            <div class="media align-items-center">
                                                <div class="">
                                                    <img class="avatar-40 rounded" src="admin_resource/assets/images/user/04.jpg" alt="">
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">Variations Passages</h6>
                                                    <small class="float-left font-size-12">12 Sep</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="iq-sub-card">
                                            <div class="media align-items-center">
                                                <div class="">
                                                    <img class="avatar-40 rounded" src="admin_resource/assets/images/user/05.jpg" alt="">
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">Lorem Ipsum generators</h6>
                                                    <small class="float-left font-size-12">5 Dec</small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="line-height pt-3">
                            <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
                                <img src="admin_resource/assets/images/user/1.jpg" class="img-fluid rounded-circle mr-3" alt="user">
                            </a>
                            <div class="iq-sub-dropdown iq-user-dropdown">
                                <div class="iq-card shadow-none m-0">
                                    <div class="iq-card-body p-0 ">
                                        <div class="bg-primary p-3">
                                            <h5 class="mb-0 text-white line-height">Hello</h5>
                                            <span class="text-white font-size-12">Available</span>
                                        </div>
                                        <div class="d-inline-block w-100 text-center p-3">
                                            <a class="bg-primary iq-sign-btn" href="{{route('admin.logout')}}" role="button">Sign out<i class="ri-login-box-line ml-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!-- TOP Nav Bar END -->
    <!-- Page Content  -->
    @yield('content')
</div>
<!-- Wrapper END -->
<!-- Footer -->
<footer class="iq-footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item"><a href="privacy-policy.html">Privacy Policy</a></li>
                    <li class="list-inline-item"><a href="terms-of-service.html">Terms of Use</a></li>
                </ul>
            </div>
            <div class="col-lg-6 text-right">
                Copyright 2020 <a href="#">Streamit</a> All Rights Reserved.
            </div>
        </div>
    </div>
</footer>
<!-- Footer END -->
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="admin_resource/assets/js/jquery.min.js"></script>
<script src="admin_resource/assets/js/popper.min.js"></script>
<script src="admin_resource/assets/js/bootstrap.min.js"></script>
<script src="admin_resource/assets/js/jquery.dataTables.min.js"></script>
<script src="admin_resource/assets/js/dataTables.bootstrap4.min.js"></script>
<!-- Appear JavaScript -->
<script src="admin_resource/assets/js/jquery.appear.js"></script>
<!-- Countdown JavaScript -->
<script src="admin_resource/assets/js/countdown.min.js"></script>
<!-- Select2 JavaScript -->
<script src="admin_resource/assets/js/select2.min.js"></script>
<!-- Counterup JavaScript -->
<script src="admin_resource/assets/js/waypoints.min.js"></script>
<script src="admin_resource/assets/js/jquery.counterup.min.js"></script>
<!-- Wow JavaScript -->
<script src="admin_resource/assets/js/wow.min.js"></script>
<!-- Slick JavaScript -->
<script src="admin_resource/assets/js/slick.min.js"></script>
<!-- Owl Carousel JavaScript -->
<script src="admin_resource/assets/js/owl.carousel.min.js"></script>
<!-- Magnific Popup JavaScript -->
<script src="admin_resource/assets/js/jquery.magnific-popup.min.js"></script>
<!-- Smooth Scrollbar JavaScript -->
<script src="admin_resource/assets/js/smooth-scrollbar.js"></script>
<!-- apex Custom JavaScript -->
<script src="admin_resource/assets/js/apexcharts.js"></script>
<!-- Chart Custom JavaScript -->
<script src="admin_resource/assets/js/chart-custom.js"></script>
<!-- Custom JavaScript -->
<script src="admin_resource/assets/js/custom.js"></script>
</body>
@endcan

<!-- Mirrored from iqonic.design/themes/streamitnew/dashboard/html/theme/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Sep 2020 07:05:14 GMT -->
</html>
