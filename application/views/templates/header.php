<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('bootstrap/assets/img/apple-icon.png')?>">
    <link rel="icon" type="image/png" href="<?php echo base_url('bootstrap/assets/img/logopln.png')?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        SIMOKAD
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!-- Fonts and icons -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="<?php echo base_url('bootstrap/assets/css/bootstrap.min.css')?>" rel="stylesheet" />
    <link href="<?php echo base_url('bootstrap/assets/css/now-ui-dashboard.css?v=1.2.0')?>" rel="stylesheet" />
    <!-- JavaScript Pie
    <script type="text/javascript" src="http://www.google.com/jsapi"></script>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="http://code.highcharts.com/highcharts.js"></script>-->
    <!-- Data Tables -->
    <link href="<?php echo base_url('bootstrap/assets/css/datatables.min.css')?>" rel="stylesheet" />
    <link href="<?php echo base_url('bootstrap/assets/css/button/buttons.bootstrap.min.css')?>" rel="stylesheet" />
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="orange">
          <!--
            Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
        -->
          <div class="logo">
            <a href="<?php echo base_url() ?>" class="simple-text logo-normal" align="center">
              SIMOKAD
            </a>
          </div>
          <div class="sidebar-wrapper">
            <ul class="nav">
            <?php if ($this->session->userdata('logged_in')==TRUE) : ?>
              <li class="<?php if ($this->uri->segment(1)=='mdashboard'){echo 'active';}?> ">
                <a href="<?php echo base_url('mdashboard') ?>">
                  <i class="now-ui-icons design_app"></i>
                  <p>Dashboard</p>
                </a>
              </li>
            <?php endif ?>
              <li class="<?php if ($this->uri->segment(1)=='mhome'){echo 'active';}?> ">
                <a href="<?php echo base_url('mhome/home') ?>">
                  <i class="now-ui-icons design_bullet-list-67"></i>
                  <p>Status</p>
                </a>
              </li>
            <li class="<?php if ($this->uri->segment(1)=='mdriver'){echo 'active';}?>">
                <a href="<?php echo base_url('mdriver') ?>">
                  <i class="now-ui-icons users_single-02"></i>
                  <p>Driver</p>
                </a>
              </li>
            <?php if ($this->session->userdata('logged_in')==TRUE) : ?>
              <li class="<?php if ($this->uri->segment(1)=='mjenis'){echo 'active';}?>">
                <a href="<?php echo base_url('mjenis') ?>">
                  <i class="now-ui-icons transportation_bus-front-12"></i>
                  <p>Jenis Kendaraan</p>
                </a>
              </li>
            <?php endif ?>
              <li class="<?php if ($this->uri->segment(1)=='mcar'){echo 'active';}?>">
                <a href="<?php echo base_url('mcar') ?>">
                  <i class="now-ui-icons transportation_bus-front-12"></i>
                  <p>Kendaraan</p>
                </a>
              </li> 
            <?php if($this->session->userdata('level')=='superadmin') : ?>
              <li class="<?php if ($this->uri->segment(1)=='muser'){echo 'active';}?>">
                <a href="<?php echo base_url('muser') ?>">
                  <i class="now-ui-icons users_circle-08"></i>
                  <p>User</p>
                </a>
              </li>
            <?php endif ?>
            <?php if($this->session->userdata('level')=='admin') : ?>
              <li class="<?php if ($this->uri->segment(1)=='muser'){echo 'active';}?>">
                <a href="<?php echo base_url('muser') ?>">
                  <i class="now-ui-icons users_circle-08"></i>
                  <p>User</p>
                </a>
              </li>
            <?php endif ?>
            <?php if($this->session->userdata('level')=='superadmin') : ?>
              <li class="<?php if ($this->uri->segment(1)=='mhistory'){echo 'active';}?>">
                <a href="<?php echo base_url('mhistory') ?>">
                  <i class="now-ui-icons files_single-copy-04"></i>
                  <p>History</p>
                </a>
              </li>
            <?php endif ?>
            <?php if($this->session->userdata('logged_in')==TRUE) : ?>
              <li class="<?php if ($this->uri->segment(1)=='mpengajuan'){echo 'active';}?>">
                <a href="<?php echo base_url('mpengajuan') ?>">
                  <i class="now-ui-icons files_paper"></i>
                  <p>Pengajuan</p>
                </a>
              </li>
            <?php endif ?>
            <?php if($this->session->userdata('logged_in')!=TRUE) : ?>
              <li class="<?php if ($this->uri->segment(1)=='mpengajuan'){echo 'active';}?>">
                <a href="<?php echo base_url('mpengajuan') ?>">
                  <i class="now-ui-icons files_paper"></i>
                  <p>Ajukan</p>
                </a>
              </li>
            <?php endif ?>
              <li class="active-pro">
                <a href="http://www.pln.co.id">
                  <p class="text-center">PLN UIW KSKT</p>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg fixed-top navbar-transparent  bg-primary  navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        <a class="navbar-brand" href="<?php echo base_url()?>">Sistem Peminjaman dan Monitoring Kendaraan Dinas</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="navbar-nav">
                            <?php if($this->session->userdata('logged_in')==TRUE) : ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="now-ui-icons users_single-02"></i>
                                    <p>
                                        <span class="d-lg-none d-md-block">Account</span>
                                    </p>
                                </a>                    
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item">Halo, <span class="name"><?php echo ($this->session->userdata['fullname']) ?></span></a>
                                    <?php if($this->session->userdata('level')=='superadmin') : ?>
                                        <a class="dropdown-item" href="<?php echo base_url('muser')?>">Kelola Akun</a>
                                    <?php endif ?>
                                    <?php if($this->session->userdata('level')!='superadmin') : ?>
                                        <a class="dropdown-item" href="<?php echo base_url('mpengajuan/tampilkan')?>">Status Pengajuan</a>
                                    <?php endif ?>
                                    <a class="dropdown-item" href="<?php echo base_url('mhome/logout')?>">Keluar</a>
                                </div>
                            <?php endif ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>