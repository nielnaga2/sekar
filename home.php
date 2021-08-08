<?php
	$bagianModul = isset($_GET['module']) ? $_GET['module'] : '';
	if($bagianModul == "")
	{
		$nama_menu="Dashboard";
	}
	elseif($bagianModul == "foc")
	{
		$nama_menu="Pekerjaan FOC";
	}	
	elseif($bagianModul == "input_foc")
	{
		$nama_menu="Input FOC";
	}
	elseif($bagianModul == "fot")
	{
		$nama_menu="Pekerjaan FOT";
	}
	elseif($bagianModul == "pop")
	{
		$nama_menu="Pekerjaan POP";
	}	
	elseif($bagianModul == "data_foc")
	{
		$nama_menu="Data FOC";
	}		
?>
<?php if ($bagianModul==''){ ?>
	<!--Page header-->
	<div class="page-header">
		<div class="page-leftheader">
			<h4 class="page-title mb-0">Selamat Datang</h4>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2 fs-14"></i>Home</a></li>
				<li class="breadcrumb-item active" aria-current="page"><a href="#">Dashboard</a></li>
			</ol>
		</div>
		<div class="page-rightheader">
			<div class="btn btn-list">
				<!--
				<a href="#" class="btn btn-info"><i class="fe fe-settings mr-1"></i> General Settings </a>
				<a href="#" class="btn btn-danger"><i class="fe fe-printer mr-1"></i> Print </a>
				<a href="#" class="btn btn-warning"><i class="fe fe-shopping-cart mr-1"></i> Buy Now </a>
				-->
			</div>
		</div>
	</div>
	<!--End Page header-->
	<div class="row">
		<div class="col-md-12 col-lg-4">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title">Silahkan pilih jenis pekerjaan</h5>
					<p class="card-text">Daftar Pekerjaan</p>
					<a class="btn btn-primary" href="?module=fot">FOT</a>
					<a class="btn btn-secondary" href="?module=foc">FOC</a>
					<a class="btn btn-warning" href="?module=pop">POP</a>
				</div>				
			</div>
		</div>		
	</div>
				
<?php 
}
elseif ($bagianModul=='foc'){  
	include "modul/foc.php";
	echo'<div class="clear"></div>';		
}
elseif ($bagianModul=='input_foc'){  
	include "modul/input_foc.php";
	echo'<div class="clear"></div>';		
}
elseif ($bagianModul=='fot'){  
	include "modul/fot.php";
	echo'<div class="clear"></div>';		
}
elseif ($bagianModul=='pop'){  
	include "modul/pop.php";
	echo'<div class="clear"></div>';		
}
elseif ($bagianModul=='data_foc'){  
	include "modul/data_foc.php";
	echo'<div class="clear"></div>';		
}
elseif ($bagianModul=='hasil_pembobotan'){  
	include "modul/hasil_pembobotan.php";
	echo'<div class="clear"></div>';		
}
elseif ($bagianModul=='hasil_perangkingan'){  
	include "modul/hasil_perangkingan.php";
	echo'<div class="clear"></div>';		
}
?>	

