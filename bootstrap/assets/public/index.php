<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Maze</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,500,600" rel="stylesheet">
		<!--
		CSS
		============================================= -->
		<link rel="stylesheet" href="css/linearicons.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/nice-select.css">
		<link rel="stylesheet" href="css/magnific-popup.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/main.css">
	</head>
	<body>
		<!-- Header Area -->
		<div class="main-wrapper-first" style="margin-top: 50px;">
			<header>
				<div class="container">
					<div class="header-wrap">
						<div class="header-top d-flex justify-content-between align-items-center">
							<div class="logo">
								<a href="index.html"><img src="img/about.png" alt="" style="width: 50px; height: 50px;"></a>
							</div>
							<div class="main-menubar d-flex align-items-center">
								<nav class="hide">
									<a href="index.html">Home</a>
									<a href="generic.html">Generic</a>
									<a href="elements.html">Elements</a>
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
				<div class="container">
                    <div class="row height justify-content-center align-items-center">
						<div class="single_process col-md-5 p-10">
                            <a href="<?php echo base_url()?>">
							<div class="desc">
								<h2>On Progress</h2>
								<h2>Driver dan Mobil</h2>
                                <p>2<?php echo $totalstatus;?></p>
							</div>
                            </a>
						</div>
						<div class="single_process col-md-4 p-10">
                            <a href="<?php echo base_url('mdriver/?p=avx')?>">
							<div class="desc">
								<h2>(Pool) Driver</h2>
                                <p><?php echo $totaldriver ;?></p>
							</div>
                            </a>
						</div>
						<div class="single_process col-md-3 p-10">
							<a href="<?php echo base_url('mcar/?p=avx')?>">
							<div class="desc">
								<h2>(Pool) Mobil</h2>
                                <p><?php echo $totalmobil;?></p>
							</div>
                            </a>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		<!-- End Banner Area -->
		<div class="main-wrapper">
            <div class="banner-area">
			<!-- Process Area -->
			<section class="process-area pt-0 pb-50">
				<div class="container">
					<div class="row height justify-content-center align-items-center">
						<div class="col-lg-5 col-sm-6 col-xs-6">
							<div class="banner-content">
								<h1>Sistem Monitoring Kendaraan Dinas PT. PLN UIW KSKT</h1>
								<p>
									SIMOKAD
								</p>
								<button class="primary-btn white-bg d-inline-flex align-items-center mt-10 ml-auto"><span class="mr-10">Send Message</span><span class="lnr lnr-arrow-right"></span></button>
							</div>
						</div>
						<div class="col-lg-5 col-sm-6 col-xs-6">
                            
                                <img class="img-fluid mx-auto" src="img/log_pln.png" alt="" style="width: 400px; height: 400px;">
                            
						</div>
					</div>
				</div>
			</section>
            </div>
			
			<!-- Start footer Area -->
			<footer class="footer relative pt-5 pb-10">
				<div class="container">
					<div class="footer-content d-flex flex-column align-items-center">
					</div>
				</div>
			</footer>
			<!-- End footer Area -->
		</div>

		<script src="js/vendor/jquery-2.2.4.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="js/vendor/bootstrap.min.js"></script>
		<script src="js/jquery.ajaxchimp.min.js"></script>
		<script src="js/jquery.nice-select.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>
