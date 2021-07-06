<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="<?php echo base_url('bootstrap/assets/public/img/log_pln.png')?>">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>SIMOKAD</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,500,600" rel="stylesheet">
		<!--
		CSS
		============================================= -->
		<link rel="stylesheet" href="<?php echo base_url('bootstrap/assets/public/css/linearicons.css')?>">
		<link rel="stylesheet" href="<?php echo base_url('bootstrap/assets/public/css/font-awesome.min.css')?>">
		<link rel="stylesheet" href="<?php echo base_url('bootstrap/assets/public/css/nice-select.css')?>">
		<link rel="stylesheet" href="<?php echo base_url('bootstrap/assets/public/css/magnific-popup.css')?>">
		<link rel="stylesheet" href="<?php echo base_url('bootstrap/assets/public/css/bootstrap.css')?>">
		<link rel="stylesheet" href="<?php echo base_url('bootstrap/assets/public/css/main.css')?>">
     
    <style type="text/css">
        html, body {
            height: 100%;
            margin: 0;
        }

        #wrapper {
            min-height: 100%; 
        }
    </style>
	</head>
	<body>
        <div id="wrapper">
		<!-- Header Area -->
		<div class="main-wrapper-first" style="margin-top: 10px;">
			<header>
				<div class="container">
					<div class="header-wrap">
						<div class="header-top d-flex justify-content-between align-items-center">
							<div class="logo">
								<a href=""><img src="<?php echo base_url('bootstrap/assets/public/img/about.png')?>" alt="" style="width: 50px; height: 50px;"></a>
							</div>
							<div class="main-menubar d-flex align-items-center">
                                <nav class="hide">
                                    <?php if ($this->session->userdata('logged_in')==FALSE):?>
									<a href="<?php echo base_url('mhome')?>">Login</a>
                                    <?php endif ?>
									<a href="http://pln.co.id">PLN</a>
                                    <a href="<?php echo base_url('mpengajuan')?>">AJUKAN PEMINJAMAN</a>
								</nav>
								<div class="menu-bar"><span class="lnr lnr-menu"></span></div>
							</div>
						</div>
					</div>
				</div>
			</header>
		</div>
		<!-- End Header Area -->
		<!-- Banner Area -->
		<div class="main-wrapper">
			<div class="banner-area">
				<div class="container pt-30 pb-50">
                    <div class="row height justify-content-center align-items-center">
                    <div class="row">
						<div class="single_process col-md-4 p-10" style="border-style: solid; border-color: white; height: 150px; border-radius: 30px;">
                            <a href="<?php echo base_url('mhome/home')?>">
							<div class="desc pt-10 pb-10">
								<h2 class="text-center">(On Progress) Driver dan Mobil</h2>
                                <h3 class="text-center"><?php echo $totalstatus;?></h3>
							</div>
                            </a>
						</div>
						<div class="single_process col-md-4 p-10" style="border-style: solid; border-color: white; height: 150px; border-radius: 30px">
                            <a href="<?php echo base_url('mdriver/?p=avx')?>">
							<div class="desc pt-30 pb-10">
								<h2 class="text-center">(Pool) Driver</h2>
                                <h3 class="text-center"><?php echo $totaldriver ;?></h3>
							</div>
                            </a>
						</div>
						<div class="single_process col-md-4 p-10" style="border-style: solid; border-color: white; height: 150px; border-radius: 30px">
							<a href="<?php echo base_url('mcar/?p=avx')?>">
							<div class="desc pt-30 pb-10">
								<h2 class="text-center">(Pool) Mobil</h2>
                                <h3 class="text-center"><?php echo $totalmobil;?></h3>
							</div>
                            </a>
						</div>
                    </div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Banner Area -->
		<div class="main-wrapper">
            <div class="banner-area">
                <div class="container">
                    <div class="row height justify-content-center align-items-center">
                        <!-- Process Area -->
                        <section class="process-area pt-20 pb-40">
                            <div class="container">
                                <div class="row height justify-content-center align-items-center">
                                    <div class="col-lg-4 col-sm-6 col-xs-6">
                                        <div class="banner-content">
                                            <h1>Sistem Peminjaman dan Monitoring Kendaraan Dinas PT. PLN UIW KSKT</h1>
                                            <h2>
                                                SIMOKAD
                                            </h2>
                                            <?php if ($this->session->userdata('logged_in')==FALSE) : ?>
                                            <a href="<?php echo base_url('mhome')?>">
                                                <button class="primary-btn white-bg d-inline-flex align-items-center mt-10 ml-auto"><span class="mr-10">LOGIN</span><span class="lnr lnr-arrow-right"></span></button>
                                            </a>
                                            <?php endif ?>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
		</div>
        </div>

		<script src="<?php echo base_url('bootstrap/assets/public/js/vendor/jquery-2.2.4.min.js')?>"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="<?php echo base_url('bootstrap/assets/public/js/vendor/bootstrap.min.js')?>"></script>
		<script src="<?php echo base_url('bootstrap/assets/public/js/jquery.ajaxchimp.min.js')?>"></script>
		<script src="<?php echo base_url('bootstrap/assets/public/js/jquery.nice-select.min.js')?>"></script>
		<script src="<?php echo base_url('bootstrap/assets/public/js/jquery.magnific-popup.min.js')?>"></script>
		<script src="<?php echo base_url('bootstrap/assets/public/js/main.js')?>"></script>
	</body>
</html>