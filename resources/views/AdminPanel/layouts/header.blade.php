<!DOCTYPE html>
<html dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>
     workflow
    </title>

<!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <link rel="stylesheet" href="{{ URL::to('/') }}/AdminAssets/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ URL::to('/') }}/AdminAssets/dist/css/fontawesome4.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{ URL::to('/') }}/AdminAssets/dist/css/AdminLTE.css">

    <!-- Waves Effect Css -->
    <link href="{{ URL::to('/') }}/AdminAssets/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{ URL::to('/') }}/AdminAssets/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Sweetalert Css -->
    <link href="{{ URL::to('/') }}/AdminAssets/plugins/sweetalert/sweetalert.css" rel="stylesheet" />

    <!-- Bootstrap Select Css -->
    <link href="{{ URL::to('/') }}/AdminAssets/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" />

    <!-- JQuery DataTable Css -->
    <link href="{{ URL::to('/') }}/AdminAssets/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
    <!-- date range picker -->
    <link rel="stylesheet" type="text/css" href="plugins/daterangepicker/daterangepicker.css" />
    <link href="{{ URL::to('/') }}/AdminAssets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />

    <!-- file input -->
    <link href="{{ URL::to('/') }}/AdminAssets/plugins/bootstrap-fileinput/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
    <!-- system style -->
    <link rel="stylesheet" href="{{ URL::to('/') }}/AdminAssets/dist/css/skins/skin-blue.css">
    <link rel="stylesheet" href="{{ URL::to('/') }}/AdminAssets/dist/css/bootstrap-rtl.min.css">
    <link rel="stylesheet" href="{{ URL::to('/') }}/AdminAssets/dist/css/basic.css">
    <link rel="stylesheet" href="{{ URL::to('/') }}/AdminAssets/dist/css/custom.css">


</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="skin-blue fixed sidebar-mini  ">
<div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

        <!-- Logo -->
        <a href="Dashboard.php" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg">  <strong> </strong></span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Camera-->
                    <li class="messages-menu">
                        <!-- Menu toggle button -->
                        <a href="{{route('user-logout')}}" title="تسجيل الخروج">
                            <i class="material-icons">power_settings_new</i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->

    @include('AdminPanel.layouts.sidebar')

    <div class="content-wrapper">

        <!-- preloader-->
        <!--<div class="thecube">
            <div class="cube c1"></div>
            <div class="cube c2"></div>
            <div class="cube c4"></div>
            <div class="cube c3"></div>
          </div>


        <!-- Page Loader -->
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="preloader" dir="ltr">
                    <div class="spinner-layer pl-blue">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


