<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>

		<!-- Meta data -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		
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

		<!---Icons css-->
		<link href="assets/css/icons.css" rel="stylesheet" />

	    <!-- Color Skin css -->
		<link id="theme" href="assets/colors/color1.css" rel="stylesheet" type="text/css"/>

	</head>

	<body class="h-100vh" style="background-color:#3ca9e8;">

		<div class="box">
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
		</div>

		<div class="page" style="margin-top:-100px">
			<div class="page-content">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div class="">
								<div class="text-white">
									<div class="card-body">
										<h4 class="text-white-80 mb-7 text-center">Selamat Datang</h4>
										<div class="row">											
											<div class="col-9 d-block mx-auto">
												<form action="check_login.php" method="POST" name="login">
												<div class="input-group mb-4">
													<div class="input-group-prepend">
														<div class="input-group-text">
															<i class="fe fe-user"></i>
														</div>
													</div>
													<input type="text" name="user"  class="form-control" placeholder="Username">
												</div>
												<div class="input-group mb-4">
													<div class="input-group-prepend">
														<div class="input-group-text">
															<i class="fe fe-lock"></i>
														</div>
													</div>
													<input type="password" name="pass" class="form-control" placeholder="Password">
												</div>
												<div class="row">
													<div class="col-12">
														<button type="submit" class="btn  btn-secondary btn-block px-4">Masuk</button>
													</div>
													<div class="col-12 text-center">
														<!--
														<a href="forgot-password.html" class="btn btn-link box-shadow-0 px-0 text-white-80">Forgot password?</a>
														-->
													</div>
												</div>												
												</form>
											</div>											
										</div>										
									</div>									
								</div>
							</div>
						</div>						
					</div>
				</div>
			</div>
		</div>

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

		<!-- Custom js-->
		<script src="assets/js/custom.js"></script>

	</body>
</html>
