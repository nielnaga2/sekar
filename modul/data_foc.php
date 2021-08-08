<!--Page header-->
<div class="page-header">
	<div class="page-leftheader">		
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2 fs-14"></i>FOC</a></li>
			<li class="breadcrumb-item active" aria-current="page"><a href="#">DATA FOC</a></li>
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

<!-- Row -->
<div class="row">
	<div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
		<div class="card">
			<div class="card-header bg-warning">
				<h4 class="card-title text-white">Data FOC</h4>
			</div>
			
				
			<div class="card-body">				
				<p class="card-text">Pengadaan Pembangunan Jalur Fiber Optik (ADSS) Untuk Pengaktifan Peralatan Komunikasi GI 275 KV Lahat-Lubuk Linggau-Bangko-Muaro Bungo-Kiliranjao</p>
			</div>	
			<div class="card-body">				
				<p class="card-text">DAFTAR TOWER</p>
				<?php
				$stid1 = mysqli_query($db,"select * from penilaian_tower order by id_penilaian_tower asc;");
				while($hasil1=mysqli_fetch_array($stid1))
				{
				?>
				<p class="card-text"><a class="btn btn-success" href="?module=input_foc&act=edit&id=<?php echo $hasil1['id_penilaian_tower'];?>"><?php echo $hasil1['nomor_tower'];?></a></p>
				<?php
				}
				?>
			</div>
			<div class="card-body">				
				<p class="card-text">HASIL PENILAIAN PERANGKAT TOWER</p>
				<p class="card-text"><a class="btn btn-success" href="?module=hasil_pembobotan">HASIL PEMBOBOTAN</a></p>
				<p class="card-text"><a class="btn btn-warning" href="?module=hasil_perangkingan">HASIL PERANGKINGAN</a></p>				
			</div>			
			
		</div>
		
		
	</div>
</div>									