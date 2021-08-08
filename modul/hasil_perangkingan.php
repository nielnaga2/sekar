<!--Page header-->
<div class="page-header">
	<div class="page-leftheader">		
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2 fs-14"></i>FOC</a></li>
			<li class="breadcrumb-item active" aria-current="page"><a href="#">Hasil Perangkingan</a></li>
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
				<h4 class="card-title text-white">Hasil Perangkingan</h4>
			</div>
			
				
				
				
			
				
		
				
				
					<div class="table-responsive">
						<table class="table card-table table-vcenter text-nowrap table-success" >
							<thead  class="bg-success text-white">
								<tr >
									<th class="text-white">Kode Tower</th>
									<th class="text-white">Nama Tower</th>
									<th class="text-white">Hasil</th>
									<th class="text-white">Peringkat</th>
								</tr>
							</thead>
							<tbody>
							<?php
								$stid1 = mysqli_query($db,"select * from view_penilaian_tower_ranking order by id_penilaian_tower asc;");
								$a=1;
								while($hasil1=mysqli_fetch_array($stid1))
								{
								?>
								<tr>
									<th scope="row"><?php echo 'T'.$a;?></th>
									<td><?php echo $hasil1['nomor_tower'];?></td>
									<td><?php echo $hasil1['hasil'];?></td>
									<td><?php echo $hasil1['ranking'];?></td>														
								</tr>
								<?php
								$a++;
								}
								?>
								
								
							</tbody>
						</table>
					</div>
			
					
			
		</div>
		
		
	</div>
</div>									