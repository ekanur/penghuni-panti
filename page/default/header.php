<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Sistem Informasi Penghuni Panti ABCD | Panti ABCD</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    


    <!--     Fonts and icons     -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

    <link rel="stylesheet" href="assets/css/dataTables.bootstrap.min.css">
    <style type="text/css">
        input[readonly], select[readonly], textarea[readonly]{
            border: none;
            background-color: transparent !important;
            font-weight: bolder;
            text-transform: uppercase;
            color: #606060;
        }
    </style>

</head>
<body>

    <div class="wrapper">
        <div class="sidebar" data-color="azure" data-image="assets/img/bg.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="" class="simple-text">
                Panti ABCD
            </a>
        </div>

        <ul class="nav">
            
            <li>
                
                <a href="<?php echo $app_url ?>">
                    <i class="pe-7s-graph"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li>
                
                <a href="<?php echo $app_url ?>/?act=data-klien">
                    <i class="pe-7s-user"></i>
                    <p>Data Klien</p>
                </a>
            </li>
            <li>
                <a href="<?php echo $app_url ?>/?act=alat-bantu">
                    <i class="pe-7s-umbrella"></i>
                    <p>Alat Bantu</p>
                </a>
            </li>
            <li>
                <a href="<?php echo $app_url ?>/?act=intervensi">
                    <i class="pe-7s-headphones"></i>
                    <p>Intervensi</p>
                </a>
            </li>
            
            
        </ul>
    </div>
</div>

<div class="main-panel">
    <nav class="navbar navbar-default navbar-fixed">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
            </div>
            <div class="collapse navbar-collapse">
                <form class="navbar-form navbar-left navbar-search-form" role="search">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                        <input name="q" type="text" value="" class="form-control" placeholder="Cari nama...">
                    </div>
                </form>
                

                <ul class="nav navbar-nav navbar-right">
                 
                    <li>
                        <a href="?act=logout">
                            Log out
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>