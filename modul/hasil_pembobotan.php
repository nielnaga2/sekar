<!--Page header-->
<div class="page-header">
	<div class="page-leftheader">		
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2 fs-14"></i>FOC</a></li>
			<li class="breadcrumb-item active" aria-current="page"><a href="#">Hasil Pembobotan</a></li>
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
				<h4 class="card-title text-white">Hasil Pembobotan</h4>
			</div>
			
				
				
				
			
				
		
				
				
					<div class="table-responsive">
						<table class="table card-table table-vcenter text-nowrap table-success" >
							<thead  class="bg-success text-white">
								<tr >
									<th class="text-white">No</th>
									<th class="text-white">K1</th>
									<th class="text-white">K2</th>
									<th class="text-white">K3</th>
									<th class="text-white">K4</th>
									<th class="text-white">K5</th>
									<th class="text-white">K6</th>
									<th class="text-white">K7</th>
									<th class="text-white">K8</th>
									<th class="text-white">K9</th>
									<th class="text-white">K10</th>
									<th class="text-white">K11</th>
									
								</tr>
							</thead>
							<tbody>
							<?php
								$stid1 = mysqli_query($db,"select * from view_penilaian_tower order by id_penilaian_tower asc;");
								$a=1;
								while($hasil1=mysqli_fetch_array($stid1))
								{
								?>
								<tr>
									<th scope="row"><?php echo 'T'.$a;?></th>
									<td><?php echo $hasil1['K1'];?></td>
									<td><?php echo $hasil1['K2'];?></td>
									<td><?php echo $hasil1['K3'];?></td>
									<td><?php echo $hasil1['K4'];?></td>
									<td><?php echo $hasil1['K5'];?></td>
									<td><?php echo $hasil1['K6'];?></td>
									<td><?php echo $hasil1['K7'];?></td>
									<td><?php echo $hasil1['K8'];?></td>
									<td><?php echo $hasil1['K9'];?></td>
									<td><?php echo $hasil1['K10'];?></td>
									<td><?php echo $hasil1['K11'];?></td>									
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