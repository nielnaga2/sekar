<!--Page header-->
<div class="page-header">
	<div class="page-leftheader">		
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2 fs-14"></i>FOC</a></li>
			<li class="breadcrumb-item active" aria-current="page"><a href="#">Input FOC</a></li>
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
<?php
	// Turn off all error reporting
	error_reporting(0);
	$act = isset($_GET['act']) ? $_GET['act'] : '';
	$bagianModul = isset($_GET['module']) ? $_GET['module'] : '';
	$id = isset($_GET['id']) ? $_GET['id'] : '';
	if(($act == "")||($act == "edit"))
	{
	$stid1 = mysqli_query($db,"	select * 
								from penilaian_tower 
								where id_penilaian_tower='$id'");
								
	$hasil1=mysqli_fetch_array($stid1);
?>
<!-- Row -->
<div class="row">
	<div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">		
		<div class="card">
			<div class="card-header bg-warning">
				<h4 class="card-title text-white">Input</h4>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<form class="form-horizontal" method="POST" action="?module=input_foc&act=save" enctype="multipart/form-data">
							<input type="hidden" name="id" value="<?php echo $id;?>">
							<!---- tower ---->
							<div class="form-group row">
								<label class="col-md-2 form-label">Tower</label>
								<div class="col-lg">
									<input class="form-control mb-4" placeholder="Nomor Tower" name="nomor_tower" type="text" value="<?php echo $hasil1['nomor_tower'];?>">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-md-2 form-label">Foto Tampak Nomor Tower</label>
								<div class="col-md-4">
									<?php if($act == "edit"){?>
									<img  class="border border-primary" src="upload/foto/<?php echo $id;?>_foto_tower.jpg" data-height="80"></img>
									<?php }?>
									<input type="file" class="dropify" name="foto_tower" data-height="80" />
								</div>
							</div>
							<div class="form-group row">								
								<div class="col-lg">
									<input class="form-control mb-4" placeholder="Nilai" name="nilai_tower" type="text" value="<?php echo $hasil1['nilai_tower'];?>">
								</div>
							</div>
							
							<!---- andongan ---->
							<div class="form-group row">
								<label class="col-md-2 form-label">Andongan</label>								
							</div>
							<div class="form-group row">
								<label class="col-md-2 form-label">Foto Andongan FOC ke arah Site A</label>
								<div class="col-md-4">
									<?php if($act == "edit"){?>
									<img  class="border border-primary" src="upload/foto/<?php echo $id;?>_foto_andongan_1.jpg" data-height="80"></img>
									<?php }?>
									<input type="file" class="dropify" name="foto_andongan_1" data-height="80" />
								</div>
							</div>
							<div class="form-group row">								
								<div class="col-lg">
									<input class="form-control mb-4" placeholder="Nilai" name="nilai_andongan_1" type="text" value="<?php echo $hasil1['nilai_andongan_1'];?>">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-md-2 form-label">Foto Andongan FOC ke arah Site B</label>
								<div class="col-md-4">
									<?php if($act == "edit"){?>
									<img  class="border border-primary" src="upload/foto/<?php echo $id;?>_foto_andongan_2.jpg" data-height="80"></img>
									<?php }?>
									<input type="file" class="dropify" name="foto_andongan_2" data-height="80" />
								</div>
							</div>
							<div class="form-group row">								
								<div class="col-lg">
									<input class="form-control mb-4" placeholder="Nilai" name="nilai_andongan_2" type="text" value="<?php echo $hasil1['nilai_andongan_2'];?>">
								</div>
							</div>
							
							<!---- tower fitman ---->
							<div class="form-group row">
								<label class="col-md-2 form-label">Tower Fitman</label>								
							</div>
							<div class="form-group row">
								<label class="col-md-2 form-label">Foto Tower Fitman tampak dari kanan</label>
								<div class="col-md-4">
									<?php if($act == "edit"){?>
									<img  class="border border-primary" src="upload/foto/<?php echo $id;?>_foto_tower_fitman_1.jpg" data-height="80"></img>
									<?php }?>
									<input type="file" class="dropify" name="foto_tower_fitman_1" data-height="80" />
								</div>
							</div>							
							<div class="form-group row">
								<label class="col-md-2 form-label">Foto Tower Fitman tampak dari kiri</label>
								<div class="col-md-4">
									<?php if($act == "edit"){?>
									<img  class="border border-primary" src="upload/foto/<?php echo $id;?>_foto_tower_fitman_2.jpg" data-height="80"></img>
									<?php }?>
									<input type="file" class="dropify" name="foto_tower_fitman_2" data-height="80" />
								</div>
							</div>
							<div class="form-group row">								
								<div class="col-lg">
									<input class="form-control mb-4" placeholder="Nilai" name="nilai_tower_fitman" type="text" value="<?php echo $hasil1['nilai_tower_fitman'];?>">
								</div>
							</div>
							
							<!---- Aksesoris Tension ---->
							<div class="form-group row">
								<label class="col-md-2 form-label">Aksesoris Tension</label>								
							</div>
							<div class="form-group row">
								<label class="col-md-2 form-label">Foto Aksesoris lengkap ke arah site A</label>
								<div class="col-md-4">
									<?php if($act == "edit"){?>
									<img  class="border border-primary" src="upload/foto/<?php echo $id;?>_foto_aksesoris_1.jpg" data-height="80"></img>
									<?php }?>
									<input type="file" class="dropify" name="foto_aksesoris_1" data-height="80" />
								</div>
							</div>
							<div class="form-group row">								
								<div class="col-lg">
									<input class="form-control mb-4" placeholder="Nilai" name="nilai_aksesoris_1" type="text" value="<?php echo $hasil1['nilai_aksesoris_1'];?>">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-md-2 form-label">Foto Aksesoris lengkap ke arah site B</label>
								<div class="col-md-4">
									<?php if($act == "edit"){?>
									<img  class="border border-primary" src="upload/foto/<?php echo $id;?>_foto_aksesoris_2.jpg" data-height="80"></img>
									<?php }?>
									<input type="file" class="dropify" name="foto_aksesoris_2" data-height="80" />
								</div>
							</div>
							<div class="form-group row">								
								<div class="col-lg">
									<input class="form-control mb-4" placeholder="Nilai" name="nilai_aksesoris_2" type="text" value="<?php echo $hasil1['nilai_aksesoris_2'];?>">
								</div>
							</div>
							
							<!---- Vibration DUmper ---->
							<div class="form-group row">
								<label class="col-md-2 form-label">Vibration Dumper</label>								
							</div>
							<div class="form-group row">
								<label class="col-md-2 form-label">Foto Tampak Damper ke arah site A</label>
								<div class="col-md-4">
									<?php if($act == "edit"){?>
									<img  class="border border-primary" src="upload/foto/<?php echo $id;?>_foto_dumper_1.jpg" data-height="80"></img>
									<?php }?>
									<input type="file" class="dropify" name="foto_dumper_1" data-height="80" />
								</div>
							</div>
							<div class="form-group row">								
								<div class="col-lg">
									<input class="form-control mb-4" placeholder="Jarak" name="jarak_dumper" type="text" value="<?php echo $hasil1['jarak_dumper'];?>">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-md-2 form-label">Foto Tampak Damper ke arah site B</label>
								<div class="col-md-4">
									<?php if($act == "edit"){?>
									<img  class="border border-primary" src="upload/foto/<?php echo $id;?>_foto_dumper_2.jpg" data-height="80"></img>
									<?php }?>
									<input type="file" class="dropify" name="foto_dumper_2" data-height="80" />
								</div>
							</div>
							<div class="form-group row">								
								<div class="col-lg">
									<input class="form-control mb-4" placeholder="Lilitan" name="lilitan_dumper" type="text" value="<?php echo $hasil1['lilitan_dumper'];?>">
								</div>
							</div>
							
							<!---- corona Coil ---->
							<div class="form-group row">
								<label class="col-md-2 form-label">Corona Coil</label>								
							</div>
							<div class="form-group row">
								<label class="col-md-2 form-label">Foto Tampak Corona Coil ke arah site A</label>
								<div class="col-md-4">
									<?php if($act == "edit"){?>
									<img  class="border border-primary" src="upload/foto/<?php echo $id;?>_foto_corona_coil_1.jpg" data-height="80"></img>
									<?php }?>
									<input type="file" class="dropify" name="foto_corona_coil_1" data-height="80" />
								</div>
							</div>							
							<div class="form-group row">
								<label class="col-md-2 form-label">Foto Tampak Corona Coil ke arah site B</label>
								<div class="col-md-4">
									<input type="file" class="dropify" name="foto_corona_coil_2" data-height="80" />
								</div>
							</div>
							<div class="form-group row">								
								<div class="col-lg">
									<input class="form-control mb-4" placeholder="Nilai" name="nilai_corona_coil" type="text" value="<?php echo $hasil1['nilai_corona_coil'];?>">
								</div>
							</div>
							
							<!---- Kabel ---->
							<div class="form-group row">
								<label class="col-md-2 form-label">Kabel</label>								
							</div>
							<div class="form-group row">
								<label class="col-md-2 form-label">Foto Tampak Spare Kabel dari sisi Kanan</label>
								<div class="col-md-4">
									<?php if($act == "edit"){?>
									<img  class="border border-primary" src="upload/foto/<?php echo $id;?>_foto_spare_kabel1.jpg" data-height="80"></img>
									<?php }?>
									<input type="file" class="dropify" name="foto_spare_kabel1" data-height="80" />
								</div>
							</div>							
							<div class="form-group row">
								<label class="col-md-2 form-label">Foto Tampak Spare Kabel dari sisi kiri</label>
								<div class="col-md-4">
									<?php if($act == "edit"){?>
									<img  class="border border-primary" src="upload/foto/<?php echo $id;?>_foto_spare_kabel2.jpg" data-height="80"></img>
									<?php }?>
									<input type="file" class="dropify" name="foto_spare_kabel2" data-height="80" />
								</div>
							</div>
							<div class="form-group row">								
								<div class="col-lg">
									<input class="form-control mb-4" placeholder="Nilai" name="nilai_spare_kabel" type="text" value="<?php echo $hasil1['nilai_spare_kabel'];?>">
								</div>
							</div>
							
							<!---- Olit ---->
							<div class="form-group row">
								<label class="col-md-2 form-label">Olit</label>								
							</div>
							<div class="form-group row">								
								<div class="col-lg">
									<input class="form-control mb-4" placeholder="Nilai" name="nilai_olit" type="text" value="<?php echo $hasil1['nilai_olit'];?>">
								</div>
							</div>
							
							<div class="form-group row">
								<label class="col-md-2 form-label"></label>
								<div class="col-md-4">
									<button class="btn btn-info"><i class="fe fe-save mr-1"></i> Submit Data </button>
								</div>								
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>	

<?php	
	}
	elseif($act == "save")
	{
		$id 	= $_POST['id'];
		$nomor_tower 	= $_POST['nomor_tower'];
		$nilai_tower 	= $_POST['nilai_tower'];
		$nilai_andongan_1 	= $_POST['nilai_andongan_1'];
		$nilai_andongan_2 	= $_POST['nilai_andongan_2'];
		$nilai_tower_fitman 	= $_POST['nilai_tower_fitman'];
		$nilai_aksesoris_1 	= $_POST['nilai_aksesoris_1'];
		$nilai_aksesoris_2 	= $_POST['nilai_aksesoris_2'];
		$jarak_dumper 	= $_POST['jarak_dumper'];
		$lilitan_dumper 	= $_POST['lilitan_dumper'];
		$nilai_corona_coil 	= $_POST['nilai_corona_coil'];
		$nilai_spare_kabel 	= $_POST['nilai_spare_kabel'];
		$nilai_olit 	= $_POST['nilai_olit'];
		
			
		$foto_tower = $_FILES['foto_tower']['tmp_name'];
		$foto_andongan_1 = $_FILES['foto_andongan_1']['tmp_name'];
		$foto_andongan_2 = $_FILES['foto_andongan_2']['tmp_name'];
		$foto_tower_fitman_1 = $_FILES['foto_tower_fitman_1']['tmp_name'];
		$foto_tower_fitman_2 = $_FILES['foto_tower_fitman_2']['tmp_name'];
		$foto_aksesoris_1 = $_FILES['foto_aksesoris_1']['tmp_name'];
		$foto_aksesoris_2 = $_FILES['foto_aksesoris_2']['tmp_name'];
		$foto_dumper_1 = $_FILES['foto_dumper_1']['tmp_name'];
		$foto_dumper_2 = $_FILES['foto_dumper_2']['tmp_name'];
		$foto_corona_coil_1 = $_FILES['foto_corona_coil_1']['tmp_name'];
		$foto_corona_coil_2 = $_FILES['foto_corona_coil_2']['tmp_name'];
		$foto_spare_kabel1 = $_FILES['foto_spare_kabel1']['tmp_name'];
		$foto_spare_kabel2 = $_FILES['foto_spare_kabel2']['tmp_name'];
		
		if($id == "")
		{
			$query=" insert into penilaian_tower 
					(
						nomor_tower,
						nilai_tower,
						nilai_andongan_1,
						nilai_andongan_2,
						nilai_tower_fitman,
						nilai_aksesoris_1,
						nilai_aksesoris_2,
						jarak_dumper,
						lilitan_dumper,
						nilai_corona_coil,
						nilai_spare_kabel,
						nilai_olit,
						tanggal_input
					) 
					values 
					(
						'$nomor_tower',
						'$nilai_tower',
						'$nilai_andongan_1',
						'$nilai_andongan_2',
						'$nilai_tower_fitman',
						'$nilai_aksesoris_1',
						'$nilai_aksesoris_2',
						'$jarak_dumper',
						'$lilitan_dumper',
						'$nilai_corona_coil',
						'$nilai_spare_kabel',
						'$nilai_olit',
						now()
					)";
		}
		else{
			$query=" update penilaian_tower 
					set
						nomor_tower = '$nomor_tower',
						nilai_tower = '$nilai_tower',
						nilai_andongan_1 = '$nilai_andongan_1',
						nilai_andongan_2 = '$nilai_andongan_2',
						nilai_tower_fitman = '$nilai_tower_fitman',
						nilai_aksesoris_1 = '$nilai_aksesoris_1',
						nilai_aksesoris_2 = '$nilai_aksesoris_2',
						jarak_dumper = '$jarak_dumper',
						lilitan_dumper = '$lilitan_dumper',
						nilai_corona_coil = '$nilai_corona_coil',
						nilai_spare_kabel = '$nilai_spare_kabel',
						nilai_olit = '$nilai_olit'			
					where id_penilaian_tower = '$id'";
			
		}
		$stid1 = mysqli_query($db,$query);
		
		if($id == ""){
			$query2="SELECT AUTO_INCREMENT as id_berikutnya
					FROM information_schema.tables
					WHERE table_name = 'penilaian_tower'
					AND table_schema = DATABASE( )";
			$stid2  = mysqli_query($db,$query2);
			$hasil2 = mysqli_fetch_array($stid2);
			$id_dekripsi = $hasil2['id_berikutnya']-1;
		}else{
			$id_dekripsi = $id;
		}	
		
		if (!empty($foto_tower)) {			
			$nama_file_foto = $_FILES['foto_tower']['name'];
			$file_extension_foto = strtolower(substr(strrchr($nama_file_foto, "."), 1));
			
			$nama_file_foto = $id_dekripsi."_foto_tower.jpg";				
			//direktori file
			$vdir_upload = "upload/foto/";
			$vfile_upload = $vdir_upload . $nama_file_foto;
			//Simpan file
			move_uploaded_file($_FILES["foto_tower"]["tmp_name"], $vfile_upload);
			
		}
		if (!empty($foto_andongan_1)) {			
			$nama_file_foto = $_FILES['foto_andongan_1']['name'];
			$file_extension_foto = strtolower(substr(strrchr($nama_file_foto, "."), 1));
			
			$nama_file_foto = $id_dekripsi."_foto_andongan_1.jpg";				
			//direktori file
			$vdir_upload = "upload/foto/";
			$vfile_upload = $vdir_upload . $nama_file_foto;
			//Simpan file
			move_uploaded_file($_FILES["foto_andongan_1"]["tmp_name"], $vfile_upload);			
		}
		if (!empty($foto_andongan_2)) {			
			$nama_file_foto = $_FILES['foto_andongan_2']['name'];
			$file_extension_foto = strtolower(substr(strrchr($nama_file_foto, "."), 1));
			
			$nama_file_foto = $id_dekripsi."_foto_andongan_2.jpg";				
			//direktori file
			$vdir_upload = "upload/foto/";
			$vfile_upload = $vdir_upload . $nama_file_foto;
			//Simpan file
			move_uploaded_file($_FILES["foto_andongan_2"]["tmp_name"], $vfile_upload);			
		}
		if (!empty($foto_tower_fitman_1)) {			
			$nama_file_foto = $_FILES['foto_tower_fitman_1']['name'];
			$file_extension_foto = strtolower(substr(strrchr($nama_file_foto, "."), 1));
			
			$nama_file_foto = $id_dekripsi."_foto_tower_fitman_1.jpg";				
			//direktori file
			$vdir_upload = "upload/foto/";
			$vfile_upload = $vdir_upload . $nama_file_foto;
			//Simpan file
			move_uploaded_file($_FILES["foto_tower_fitman_1"]["tmp_name"], $vfile_upload);			
		}
		if (!empty($foto_tower_fitman_2)) {			
			$nama_file_foto = $_FILES['foto_tower_fitman_2']['name'];
			$file_extension_foto = strtolower(substr(strrchr($nama_file_foto, "."), 1));
			
			$nama_file_foto = $id_dekripsi."_foto_tower_fitman_2.jpg";				
			//direktori file
			$vdir_upload = "upload/foto/";
			$vfile_upload = $vdir_upload . $nama_file_foto;
			//Simpan file
			move_uploaded_file($_FILES["foto_tower_fitman_2"]["tmp_name"], $vfile_upload);			
		}
		if (!empty($foto_aksesoris_1)) {			
			$nama_file_foto = $_FILES['foto_aksesoris_1']['name'];
			$file_extension_foto = strtolower(substr(strrchr($nama_file_foto, "."), 1));
			
			$nama_file_foto = $id_dekripsi."_foto_aksesoris_1.jpg";				
			//direktori file
			$vdir_upload = "upload/foto/";
			$vfile_upload = $vdir_upload . $nama_file_foto;
			//Simpan file
			move_uploaded_file($_FILES["foto_aksesoris_1"]["tmp_name"], $vfile_upload);			
		}
		if (!empty($foto_aksesoris_2)) {			
			$nama_file_foto = $_FILES['foto_aksesoris_2']['name'];
			$file_extension_foto = strtolower(substr(strrchr($nama_file_foto, "."), 1));
			
			$nama_file_foto = $id_dekripsi."_foto_aksesoris_2.jpg";				
			//direktori file
			$vdir_upload = "upload/foto/";
			$vfile_upload = $vdir_upload . $nama_file_foto;
			//Simpan file
			move_uploaded_file($_FILES["foto_aksesoris_2"]["tmp_name"], $vfile_upload);			
		}
		if (!empty($foto_dumper_1)) {			
			$nama_file_foto = $_FILES['foto_dumper_1']['name'];
			$file_extension_foto = strtolower(substr(strrchr($nama_file_foto, "."), 1));
			
			$nama_file_foto = $id_dekripsi."_foto_dumper_1.jpg";				
			//direktori file
			$vdir_upload = "upload/foto/";
			$vfile_upload = $vdir_upload . $nama_file_foto;
			//Simpan file
			move_uploaded_file($_FILES["foto_dumper_1"]["tmp_name"], $vfile_upload);			
		}
		if (!empty($foto_dumper_2)) {			
			$nama_file_foto = $_FILES['foto_dumper_2']['name'];
			$file_extension_foto = strtolower(substr(strrchr($nama_file_foto, "."), 1));
			
			$nama_file_foto = $id_dekripsi."_foto_dumper_2.jpg";				
			//direktori file
			$vdir_upload = "upload/foto/";
			$vfile_upload = $vdir_upload . $nama_file_foto;
			//Simpan file
			move_uploaded_file($_FILES["foto_dumper_2"]["tmp_name"], $vfile_upload);			
		}
		if (!empty($foto_corona_coil_1)) {			
			$nama_file_foto = $_FILES['foto_corona_coil_1']['name'];
			$file_extension_foto = strtolower(substr(strrchr($nama_file_foto, "."), 1));
			
			$nama_file_foto = $id_dekripsi."_foto_corona_coil_1.jpg";				
			//direktori file
			$vdir_upload = "upload/foto/";
			$vfile_upload = $vdir_upload . $nama_file_foto;
			//Simpan file
			move_uploaded_file($_FILES["foto_corona_coil_1"]["tmp_name"], $vfile_upload);			
		}
		if (!empty($foto_corona_coil_2)) {			
			$nama_file_foto = $_FILES['foto_corona_coil_2']['name'];
			$file_extension_foto = strtolower(substr(strrchr($nama_file_foto, "."), 1));
			
			$nama_file_foto = $id_dekripsi."_foto_corona_coil_2.jpg";				
			//direktori file
			$vdir_upload = "upload/foto/";
			$vfile_upload = $vdir_upload . $nama_file_foto;
			//Simpan file
			move_uploaded_file($_FILES["foto_corona_coil_2"]["tmp_name"], $vfile_upload);			
		}
		if (!empty($foto_spare_kabel1)) {			
			$nama_file_foto = $_FILES['foto_spare_kabel1']['name'];
			$file_extension_foto = strtolower(substr(strrchr($nama_file_foto, "."), 1));
			
			$nama_file_foto = $id_dekripsi."_foto_spare_kabel1.jpg";				
			//direktori file
			$vdir_upload = "upload/foto/";
			$vfile_upload = $vdir_upload . $nama_file_foto;
			//Simpan file
			move_uploaded_file($_FILES["foto_spare_kabel1"]["tmp_name"], $vfile_upload);			
		}
		if (!empty($foto_spare_kabel2)) {			
			$nama_file_foto = $_FILES['foto_spare_kabel2']['name'];
			$file_extension_foto = strtolower(substr(strrchr($nama_file_foto, "."), 1));
			
			$nama_file_foto = $id_dekripsi."_foto_spare_kabel2.jpg";				
			//direktori file
			$vdir_upload = "upload/foto/";
			$vfile_upload = $vdir_upload . $nama_file_foto;
			//Simpan file
			move_uploaded_file($_FILES["foto_spare_kabel2"]["tmp_name"], $vfile_upload);			
		}
		if($stid1){
		?>
		<script type="text/javascript">
			Swal.fire({
			  title	: 'Sukses',
			  text	: 'Selamat, Anda berhasil Edit Data',
			  type	: 'success'
			}).then(function() {
				window.location = "?module=data_foc";
			});
		</script> 
		<?php	
		}else{
		?>
		<script type="text/javascript">
			Swal.fire({
			  title	: 'Failure',
			  text	: 'Maaf, Edit Data gagal. Ulangi lagi',
			  type	: 'error'
			}).then(function() {
				window.location = "?module=data_foc";
			});
		</script> 
		<?php	
			
		}		
	}								