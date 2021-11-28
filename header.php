<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>MNP COD Portal - Dashboard</title>
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/vendors.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN STACK CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/app.css">
    <!-- END STACK CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.css">
    <!-- END Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/calendars/fullcalendar.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/calendars/fullcalendar.min.css">
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" href="assets/css/circle.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.css" type="text/css">
    <link rel="stylesheet" href="assets/css/CustomScrollbar.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/datatables.min.css">
    <!-- END Custom CSS-->
</head>

<body class="vertical-layout vertical-menu 2-columns menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">
    <!-- fixed-top-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top">
        <div class="navbar-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mobile-menu d-lg-none"><a class="nav-link nav-menu-main menu-toggle hidden-xs is-active" href="#"><i class="ft-menu font-large-1"></i></a></li>
                    <li class="nav-item"> <a class="navbar-brand" href="dashboard.html"> <img class="brand-logo img-fluid" alt="stack admin logo" src="assets/images/logo.png"> </a> </li>
                    <li class="nav-item d-lg-none"> <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="fa fa-ellipsis-v"></i></a> </li>
                </ul>
            </div>
            <div class="navbar-container content">
                <div class="collapse navbar-collapse" id="navbar-mobile">
                    <div class="row">
                        <div class="col-12 d-flex align-items-center justify-content-around">
                            <div class="menuText">
                                <h1 class="menuIdentity">Customer <span>Portal</span><span>.</span></h1>
                            </div>
                            <div class="dropdown">
                                <button class="user-dropdown" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="avatar avatar-online">
                                        <img src="app-assets/images/portrait/small/avatar-s-1.png" alt="avatar">
                                    </span>
                                    <span class="user-name">Hi Namsil </span><i class="fas fa-angle-down text-white"></i>
                                </button>
                                <div class="dropdown-menu user-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                            <div class="nav navbar-nav search-bar">
                                <form action="">
                                    <div class="row align-items-center">
                                        <div class="col-12">
                                            <input type="search" placeholder="Your order number info..." class="form-control">
                                            <button type="submit" class="search-btn"><img src="assets/images/searchbar-button.png" class="img-fluid" alt=""></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <ul class="nav navbar-nav d-flex justify-content-end align-items-center">
                                <li class="dropdown dropdown-notification nav-item grey-badge mr-xl-3 mr-2"> <a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="far fa-envelope"></i> <span class="badge badge-pill badge-default badge-danger badge-default badge-up">5</span> </a>
                                    <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right notification-container">
                                        <li class="notif-scroll-body">
                                            <a href="javascript:void(0)">
                                                <div class="notification-block">
                                                    <div class="top">
                                                        <img src="assets/images/calender.png" class="notif-icon" alt="">
                                                        <p>2021-08-04 06:24:19</p>
                                                    </div>
                                                    <div class="bottom">
                                                        <p>Dear Customer, this is to inform you that reason of Return Shipments
                                                            (RTS) updated ondaily basis. Please contact us immediately in case
                                                            of any query..... </p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)">
                                                <div class="notification-block">
                                                    <div class="top">
                                                        <img src="assets/images/calender.png" class="notif-icon" alt="">
                                                        <p>2021-08-04 06:24:19</p>
                                                    </div>
                                                    <div class="bottom">
                                                        <p>Dear Customer, this is to inform you that reason of Return Shipments
                                                            (RTS) updated ondaily basis. Please contact us immediately in case
                                                            of any query..... </p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="grey-badge">
                                    <a href="javascript:void(0)" class="nav-link nav-link-label"><i class="far fa-user-circle"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="main-menu menu-fixed menu-light menu-accordion" data-scroll-to-active="true">
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="nav-item active">
                    <a href="dashboard.php">
                        <img src="images/dashboard.png" alt="" class="sidebar-icon">
                    </a>
                </li>
                <li class="nav-item">
                    <a href="my-profile.php">
                        <img src="images/booking.png" alt="" class="sidebar-icon">
                    </a>
                </li>
                <li class="nav-item">
                    <a href="progress.php">
                        <img src="images/worldwide.png" alt="" class="sidebar-icon">
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#">
                        <img src="images/user.png" alt="" class="sidebar-icon">
                    </a>
                </li>
                <li class="nav-item">
                    <a href="support.php">
                        <img src="images/box.png" alt="" class="sidebar-icon">
                    </a>
                </li>
                <li class="nav-item">
                    <a href="community.php">
                        <img src="images/report.png" alt="" class="sidebar-icon">
                    </a>
                </li>
                <li class="social-item nav-item mt-lg-5">
                    <a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li class="social-item nav-item">
                    <a href=" javascript:void(0)"><i class="fab fa-instagram"></i></a>
                </li>
                <li class="social-item nav-item">
                    <a href=" javascript:void(0)"><i class="fab fa-twitter"></i></a>
                </li>
            </ul>
        </div>
    </div>