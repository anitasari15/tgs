<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>KEJAM - Koperasi Peminjaman</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/style-responsive.css" rel="stylesheet">

    <script src="<?php echo base_url() ?>assets/js/chart-master/Chart.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="home" class="logo"><b>KOPERASI SIMPAN PINJAM CERIA</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">

            </div>
            <div class="top-menu">
              <ul class="nav pull-right top-menu">
                    <li><a class="logout" href="<?php echo base_url('visitor/logout') ?>">Logout</a></li>
              </ul>
            </div>
        </header>

        <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                  <p class="centered"><a href="<?php echo site_url() ?>home"><img src="<?php echo site_url() ?>assets/img/lambang.png" class="img-circle" width="60"></a></p>
                  <h5 class="centered">ADMIN</h5>
                    
                  <li class="mt">
                      <a  href="<?php echo site_url() ?>home">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="<?php echo site_url() ?>ctrNasabah">
                          <i class="fa fa-desktop" ></i>
                          <span>Data Anggota</span>
                          
                      </a>
                  </li>


                  <li class="sub-menu">
                      <a href="<?php echo site_url() ?>home/artikel">
                          <i class="fa fa-desktop" ></i>
                          <span>Data Artikel</span>
                          
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a class href="<?php echo site_url() ?>ctrpinjam">
                          <i class="fa fa-cogs"></i>
                          <span>Data Pinjaman</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a  href="<?php echo site_url() ?>ctrangsuran" >
                          <i class="fa fa-book"></i>
                          <span>Data Angsuran</span>
                      </a>
                  </li>               
               <!-- <li class="sub-menu">
                      <a href="<?php echo site_url() ?>ctrUser" >
                          <i class="fa fa-book"></i>
                          <span>Data User</span>
                      </a>
                  </li> -->

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <section id="main-content">
      <section class="wrapper">