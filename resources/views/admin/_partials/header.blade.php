<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Clan TeamGoldMasters</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->

    <link rel="stylesheet" href="{{URL::asset('/dist/css/adminlte.min.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <style>

    </style>
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="/" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="/contact" class="nav-link">Contact</a>
            </li>
        </ul>

        <!-- SEARCH FORM -->
        <form class="form-inline ml-3">
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </form>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">


            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
                    <i class="fa fa-th-large"></i>
                </a>
            </li>
        </ul>
    </nav>

    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="/" class="brand-link">
            <img src="{{URL::asset('logo.png')}}"
                 alt="AdminLTE Logo"
                 class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">TeamGoldMasters</span>
        </a>
        <div class="sidebar">
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-newspaper-o"></i>
                            <p>
                                News Management
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/admin/articles/" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>All Articles</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/articles/create" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>New Article</p>
                                </a>
                            </li>
                            <hr>
                            <li class="nav-item">
                                <a href="/admin/categories" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>All Categories</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/categories/create" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>New Category</p>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-newspaper-o"></i>
                            <p>
                                Members And Users
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/admin/users/" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>All Users</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/members/" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>All Team Members</p>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-newspaper-o"></i>
                            <p>
                                Pages Text Management
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/admin/pages/homepage" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>Homepage Text</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </nav>
        </div>
    </aside>
