<?php

	$db = mysqli_connect("localhost","root","","aplikasi_penilaian_tower");
	
	// Check connection
	if (mysqli_connect_errno()){
		echo "Koneksi database gagal : " . mysqli_connect_error();
	}


?>