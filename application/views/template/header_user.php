<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>KEJAM - Koperasi Peminjaman</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url() ?>assets/user/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url() ?>assets/user/css/heroic-features.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="<?php echo site_url() ?>CtrUser/index">KEJAM</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
             <!--  <a class="nav-link" href="<?php echo site_url() ?>CtrUser/index">Home</a>
                <span class="sr-only">(current)</span>
              </a> -->
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url() ?>CtrUser/index">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url() ?>CtrUser/anggota">Anggota</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url() ?>CtrUser/transaksi">Transaksi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url() ?>CtrUser/angsuran">Angsuran</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url() ?>visitor/logout">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <?php if($this->session->flashdata('user_registered')): ?>
          <?php echo '<div class="alert alert-success" role="alert">'.$this->session->flashdata('user_registered').'</div>'; ?>
        <?php endif; ?>

    

    <!-- Page Content -->
    <div class="container">

      <!-- Jumbotron Header -->
      <header class="jumbotron my-4">
        <h1 class="display-3">SELAMAT DATANG DI KEJAM (KOPERASI PINJAMAN)</h1>
        <p class="lead">Koperasi kami memiliki keunggulan untuk membantu semua anggota yang ingin meminjam uang tanpa bunga alias 0%</p>
        <!-- <a href="#" class="btn btn-primary btn-lg">Call to action!</a> -->
      </header>