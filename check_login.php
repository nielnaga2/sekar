<html>
	<head>
		<link rel="stylesheet" href="sweetalert/bootstrap.min.css">
		<link rel="stylesheet" href="sweetalert/sweetalert2.min.css">
		<link rel="stylesheet" href="sweetalert/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	</head>
	
	<body>
	</body>
	<script src="sweetalert/jquery.min.js"></script>
	<script src="sweetalert/bootstrap.min.js"></script>
	<script src="sweetalert/sweetalert2.min.js"></script>
	<?php
	include("koneksi_lokal.php");
	$tgl = date("Y-m-d");
	$user = $_POST['user'];
	$pass = $_POST['pass'];

	
	$line1 = mysqli_query($db,"select * from user where username = '$user' and password = '$pass';");
	if($line2=mysqli_fetch_array($line1))
	{
		$user = $line2['username'];
		$tipe = $line2['tipe'];
		setcookie("user",$user,time()+88800);
		setcookie("tipe",$tipe,time()+88800);
		?>
		<script type="text/javascript">
			Swal.fire({
			  title	: 'Sukses',
			  text	: 'Selamat, Anda berhasil Login',
			  type	: 'success'
			}).then(function() {
				window.location = "index.php";
			});
		</script> 
		<?php		
	}
	else
	{	
		?>
		<script type="text/javascript">
			Swal.fire({
			  title	: 'Failure',
			  text	: 'Maaf, Login Gagal Ulangi Lagi',
			  type	: 'error'
			}).then(function() {
				window.location = "login.php";
			});
		</script> 
		<?php		
	}
?>
	
</html>