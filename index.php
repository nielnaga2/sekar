<?php
	//$user = $_COOKIE['user'];
	include("koneksi_lokal.php");
	if(isset($_COOKIE['user']) ) 
	{
		$user = $_COOKIE['user'];
	}
	else
	{
		header( 'Location: login_awal.php' ) ;
	}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>

		<!-- Meta data -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta content="Siabang GP" name="description">
		<meta content="Siabang GP" name="author">
		<meta name="keywords" content="siabanggp, balikpapan"/>

		<!-- Title -->
		<title>Aplikasi Penilaian Tower</title>

		<!--Favicon -->
		<link rel="icon" href="assets/images/brand/favicon.ico" type="image/x-icon"/>

		<!--Bootstrap css -->
		<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

		<!-- Style css -->
		<link href="assets/css/style.css" rel="stylesheet" />
		<link href="assets/css/dark.css" rel="stylesheet" />
		<link href="assets/css/skin-modes.css" rel="stylesheet" />

		<!-- Animate css -->
		<link href="assets/css/animated.css" rel="stylesheet" />

		<!--Sidemenu css -->
       <link href="assets/css/sidemenu.css" rel="stylesheet">

		<!-- P-scroll bar css-->
		<link href="assets/plugins/p-scrollbar/p-scrollbar.css" rel="stylesheet" />

		<!---Icons css-->
		<link href="assets/css/icons.css" rel="stylesheet" />

		<!-- Simplebar css -->
		<link rel="stylesheet" href="assets/plugins/simplebar/css/simplebar.css">

		<!-- INTERNAL Select2 css -->
		<link href="assets/plugins/select2/select2.min.css" rel="stylesheet" />
		
		<!-- INTERNAL File Uploads css -->
		<link href="assets/plugins/fancyuploder/fancy_fileupload.css" rel="stylesheet" />

		<!-- INTERNAL File Uploads css-->
        <link href="assets/plugins/fileupload/css/fileupload.css" rel="stylesheet" type="text/css" />
		
	    <!-- Color Skin css -->
		<link id="theme" href="assets/colors/color1.css" rel="stylesheet" type="text/css"/>

	</head>

	<body class="app sidebar-mini">

		<!---Global-loader-->
		<div id="global-loader" >
			<img src="assets/images/svgs/loader.svg" alt="loader">
		</div>
		<!--- End Global-loader-->

		<!-- Page -->
		<div class="page">
			<div class="page-main">

				<!--aside open-->
				<?php
					//include 'sidebar.php';					
				?>
				<!--aside closed-->

				<!-- App-Content -->
				<div class="app-content main-content">
					<div class="side-app">

						<!--app header-->
						<?php
							include 'header.php';					
						?>
						<!--/app header-->

						<!--Page header-->
						
						<!--End Page header-->

						<!-- Row-1 -->						
						<?php
							include 'home.php';					
						?>
						<!-- End Row-1 -->

						<!-- Row-2 -->
						
						<!-- End Row-2 -->

						<!-- Row-3 -->
						<!-- End Row-3 -->

						<!--Row-->
						<!--End row-->

					</div>
				</div>
				<!-- End app-content-->
			</div>


			<!--Footer-->
			<div class="footer br-bl-7 br-br-7 border-top-0">
				<div class="container">
					<div class="row align-items-center">
						<div class="social">
							<ul class="text-center">
								<li>
									<a class="icons-list-item" href=""><i class="fa fa-gear"></i></a>
								</li>
								<li>
									<a class="icons-list-item" href="?"><i class="fa fa-home"></i></a>
								</li>
								<li>
									<a class="icons-list-item" href=""><i class="fa fa-user"></i></a>
								</li>								
							</ul>
						</div>						
					</div>
				</div>
			</div>
			<!-- End Footer-->

		</div>
		<!-- End Page -->

		<!-- Back to top -->
		<a href="#top" id="back-to-top"><i class="fe fe-chevrons-up"></i></a>

		<!-- Jquery js-->
		<script src="assets/js/jquery-3.5.1.min.js"></script>

		<!-- Bootstrap4 js-->
		<script src="assets/plugins/bootstrap/popper.min.js"></script>
		<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

		<!--Othercharts js-->
		<script src="assets/plugins/othercharts/jquery.sparkline.min.js"></script>

		<!-- Circle-progress js-->
		<script src="assets/js/circle-progress.min.js"></script>

		<!-- Jquery-rating js-->
		<script src="assets/plugins/rating/jquery.rating-stars.js"></script>

		<!--Sidemenu js-->
		<script src="assets/plugins/sidemenu/sidemenu.js"></script>

		<!-- P-scroll js-->
		<script src="assets/plugins/p-scrollbar/p-scrollbar.js"></script>
		<script src="assets/plugins/p-scrollbar/p-scroll1.js"></script>
		<script src="assets/plugins/p-scrollbar/p-scroll.js"></script>

		<!--INTERNAL Peitychart js-->
		<script src="assets/plugins/peitychart/jquery.peity.min.js"></script>
		<script src="assets/plugins/peitychart/peitychart.init.js"></script>

		<!--INTERNAL Apexchart js-->
		<!--
		<script src="assets/js/apexcharts.js"></script>
		-->

		<!--INTERNAL ECharts js-->
		<script src="assets/plugins/echarts/echarts.js"></script>

		<!--INTERNAL Chart js -->
		<!--
		<script src="assets/plugins/chart/chart.bundle.js"></script>
		<script src="assets/plugins/chart/utils.js"></script>
		-->
		<!--INTERNAL Chart js -->
		<script src="assets/js/apexcharts.js"></script>
		<script src="assets/js/apexchart-custom.js"></script>

		<!-- INTERNAL Data tables -->
		<script src="assets/plugins/datatable/js/jquery.dataTables.js"></script>
		<script src="assets/plugins/datatable/js/dataTables.bootstrap4.js"></script>
		<script src="assets/plugins/datatable/js/dataTables.buttons.min.js"></script>
		<script src="assets/plugins/datatable/js/buttons.bootstrap4.min.js"></script>
		<script src="assets/plugins/datatable/js/jszip.min.js"></script>
		<script src="assets/plugins/datatable/js/pdfmake.min.js"></script>
		<script src="assets/plugins/datatable/js/vfs_fonts.js"></script>
		<script src="assets/plugins/datatable/js/buttons.html5.min.js"></script>
		<script src="assets/plugins/datatable/js/buttons.print.min.js"></script>
		<script src="assets/plugins/datatable/js/buttons.colVis.min.js"></script>
		<script src="assets/plugins/datatable/dataTables.responsive.min.js"></script>
		<script src="assets/plugins/datatable/responsive.bootstrap4.min.js"></script>
		<script src="assets/js/datatables.js"></script>
		
		<!-- INTERNAL Select2 js -->
		<script src="assets/plugins/select2/select2.full.min.js"></script>
		<script src="assets/js/select2.js"></script>
		
		<!-- INTERNAL File-Uploads Js-->
		<script src="assets/plugins/fancyuploder/jquery.ui.widget.js"></script>
        <script src="assets/plugins/fancyuploder/jquery.fileupload.js"></script>
        <script src="assets/plugins/fancyuploder/jquery.iframe-transport.js"></script>
        <script src="assets/plugins/fancyuploder/jquery.fancy-fileupload.js"></script>
        <script src="assets/plugins/fancyuploder/fancy-uploader.js"></script>

		<!-- INTERNAL File uploads js -->
        <script src="assets/plugins/fileupload/js/dropify.js"></script>
		<script src="assets/js/filupload.js"></script>
		
		<!--INTERNAL Moment js-->
		<script src="assets/plugins/moment/moment.js"></script>

		<!--INTERNAL Index js-->
		<script src="assets/js/index1.js"></script>

		<!-- Simplebar JS -->
		<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>

		<!-- Custom js-->
		<script src="assets/js/custom.js"></script>
		
	</body>
</html>