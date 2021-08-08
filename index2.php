
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
		<title>SIABANG GP - Dinas Pekerjaan Umum Kota Balikpapan</title>

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
					include 'koneksi_lokal.php';					
					include 'sidebar_tamu.php';					
				?>
				<!--aside closed-->

				<!-- App-Content -->
				<div class="app-content main-content">
					<div class="side-app">

						<!--app header-->
						<?php
							include 'header_tamu.php';					
						?>
						<!--/app header-->

						<!--Page header-->
						
						<!--End Page header-->

						<!-- Row-1 -->
						<?php
							include 'home_tamu.php';					
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
			<footer class="footer">
				<div class="container">
					<div class="row align-items-center flex-row-reverse">
						<div class="col-md-12 col-sm-12 text-center">
							Copyright © 2021 <a href="#">Siabang GP</a> - Tiw Work -
						</div>
					</div>
				</div>
			</footer>
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

		<!--INTERNAL Moment js-->
		<script src="assets/plugins/moment/moment.js"></script>

		<!--INTERNAL Index js-->
		<script src="assets/js/index1.js"></script>

		<!-- Simplebar JS -->
		<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>

		<!-- Custom js-->
		<script src="assets/js/custom.js"></script>
		<?php
		if($bagianModul == ""){
			$stid1 = mysqli_query($db, "	SELECT 	*
										FROM view_kondisi_gedung
									"); 
			while($hasil1 = mysqli_fetch_array($stid1)){
			$row1 = array();		
			$row2 = array();		
			$row3 = array();		
			$row1	= substr($hasil1['nama_gedung'],0,20).'..';
			$row2	= ($hasil1['nilai_tingkat_kerusakan']/100);	
			$row2	= $row2*$hasil1['luas_lantai'];
			$row3	= $hasil1['luas_lantai'];			
			$dataPoints1[] = $row1;
			$dataPoints2[] = $row2;			
			$dataPoints3[] = $row3;			
			}
			
			$stid1 = mysqli_query($db, "	SELECT 	count(*) as jumlah 										
										FROM view_kondisi_gedung
									"); 	
			$hasil1 = mysqli_fetch_array($stid1);
			$jumlah_gedung = $hasil1['jumlah'];
			
			$stid1 = mysqli_query($db, "	SELECT 	count(*) as jumlah 										
											FROM view_kondisi_gedung
											where id_kategori_gedung = 1
										"); 	
			$hasil1 = mysqli_fetch_array($stid1);
			$jumlah_gedung_sederhana = $hasil1['jumlah'];
			
			
			$stid1 = mysqli_query($db, "	SELECT 	count(*) as jumlah 										
											FROM view_kondisi_gedung
											where id_kategori_gedung = 2
										"); 	
			$hasil1 = mysqli_fetch_array($stid1);
			$jumlah_gedung_tidak_sederhana = $hasil1['jumlah'];
			
			
			$stid1 = mysqli_query($db, "	SELECT 	count(*) as jumlah 										
											FROM view_kondisi_gedung
											where id_kategori_gedung = 3
										"); 	
			$hasil1 = mysqli_fetch_array($stid1);
			$jumlah_gedung_khusus = $hasil1['jumlah'];
		
			$row4 = array();
			$dataPoints4[] = $jumlah_gedung_sederhana;
			
			$dataPoints4[] = $jumlah_gedung_tidak_sederhana;
			
			$dataPoints4[] = $jumlah_gedung_khusus;		
					
			$dataPoints5 = array((int)$jumlah_gedung_sederhana,(int)$jumlah_gedung_tidak_sederhana,(int)$jumlah_gedung_khusus);
		?>
		<script>
			/* E-chart */
			  var chartdata2 = [
				{
				  name: "Luas Gedung",
				  symbolSize: 20,
				  barWidth: 20,
				  type: "bar",
				  data: <?php echo json_encode($dataPoints3); ?>,
				  itemStyle: {
					normal: {
					  barBorderRadius: [50, 50, 0, 0],
					  color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [
						{ offset: 0, color: "#705ec8" },
						{ offset: 1, color: "#20c2fa" },
					  ]),
					},
				  },
				},
				/*
				{
				  name: "Luas Kerusakan",
				  type: "line",
				  smooth: true,
				  data: <?php echo json_encode($dataPoints2); ?>,
				  itemStyle: {
					normal: {
					  barBorderRadius: [50, 50, 0, 0],
					  color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [
						{ offset: 0, color: "#fd6f82" },
						{ offset: 1, color: "#fb1c52" },
					  ]),
					},
				  },
				},
				*/
			  ];
			  var chart = document.getElementById("bar_chart_1");
			  var barChart = echarts.init(chart);
			  var option = {
				grid: {
				  top: "6",
				  right: "0",
				  bottom: "17",
				  left: "25",
				},
				xAxis: {
				  data: <?php echo json_encode($dataPoints1); ?>,
				  axisLine: {
					lineStyle: {
					  color: "rgba(67, 87, 133, .09)",
					},
				  },
				  axisLabel: {
					fontSize: 10,
					color: "#8e9cad",
				  },
				},
				tooltip: {
				  show: true,
				  showContent: true,
				  alwaysShowContent: true,
				  triggerOn: "mousemove",
				  trigger: "axis",
				  axisPointer: {
					label: {
					  show: false,
					},
				  },
				},
				yAxis: {
				  splitLine: {
					lineStyle: {
					  color: "rgba(67, 87, 133, .09)",
					},
				  },
				  axisLine: {
					lineStyle: {
					  color: "rgba(67, 87, 133, .09)",
					},
				  },
				  axisLabel: {
					fontSize: 10,
					color: "#8e9cad",
				  },
				},
				series: chartdata2,
				color: ["#ef6430", "#2205bf"],
			  };
			  barChart.setOption(option);
			  /* E-chart */
		
			var options41 = {
				series: <?php echo json_encode($dataPoints5); ?>,
				colors: ['#2dce89', '#705ec8', '#fcbf09', '#ff5b51',  '#fa057a'],
				chart: {
					height: 300,
					type: 'donut',
				},
				legend: {
					show: false,
				},
				responsive: [{
					breakpoint: 480,
					options: {
						chart: {
							width: 200
						},
						legend: {
							show: false,
							position: 'bottom'
						}
					}
				}]
			};
			var donut_chart1 = new ApexCharts(document.querySelector("#donut_chart1"), options41);
			donut_chart1.render();
			
			/*sparkline*/
			  var randomizeArray = function (arg) {
				var array = arg.slice();
				var currentIndex = array.length,
				  temporaryValue,
				  randomIndex;
				while (0 !== currentIndex) {
				  randomIndex = Math.floor(Math.random() * currentIndex);
				  currentIndex -= 1;

				  temporaryValue = array[currentIndex];
				  array[currentIndex] = array[randomIndex];
				  array[randomIndex] = temporaryValue;
				}
				return array;
			  };

			  var sparklineData = [0, 45, 54, 38, 56, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93, 53, 61, 27, 54, 43, 19, 46];
			  //Spark1
			  var spark1 = {
				chart: {
				  type: "area",
				  height: 60,
				  sparkline: {
					enabled: true,
				  },
				  dropShadow: {
					enabled: true,
					blur: 3,
					opacity: 0.2,
				  },
				},
				stroke: {
				  show: true,
				  curve: "smooth",
				  lineCap: "butt",
				  colors: undefined,
				  width: 2,
				  dashArray: 0,
				},
				fill: {
				  gradient: {
					enabled: false,
				  },
				},
				tooltip: {
				  enabled: false,
				},
				series: [
				  {
					name: "Total Sales",
					data: randomizeArray(sparklineData),
				  },
				],
				yaxis: {
				  min: 0,
				},
				colors: ["#fa057a"],
			  };
			  var spark1 = new ApexCharts(document.querySelector("#spark1"), spark1);
			  spark1.render();

			  var sparklineData2 = [0, 45, 93, 53, 61, 27, 54, 43, 19, 46, 54, 38, 56, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 31];
			  //Spark2
			  var spark2 = {
				chart: {
				  type: "area",
				  height: 60,
				  sparkline: {
					enabled: true,
				  },
				  dropShadow: {
					enabled: true,
					blur: 3,
					opacity: 0.2,
				  },
				},
				stroke: {
				  show: true,
				  curve: "smooth",
				  lineCap: "butt",
				  colors: undefined,
				  width: 2,
				  dashArray: 0,
				},
				fill: {
				  gradient: {
					enabled: false,
				  },
				},
				tooltip: {
				  enabled: false,
				},
				series: [
				  {
					name: "Total User",
					data: randomizeArray(sparklineData2),
				  },
				],
				yaxis: {
				  min: 0,
				},
				colors: ["#2dce89"],
			  };
			  var spark2 = new ApexCharts(document.querySelector("#spark2"), spark2);
			  spark2.render();

			  var sparklineData3 = [0, 35, 41, 35, 27, 93, 53, 61, 27, 54, 43, 19, 46, 45, 54, 38, 56, 24, 65, 31, 37, 39, 62, 51];
			  //Spark3
			  var spark3 = {
				chart: {
				  type: "area",
				  height: 60,
				  sparkline: {
					enabled: true,
				  },
				  dropShadow: {
					enabled: true,
					blur: 3,
					opacity: 0.2,
				  },
				},
				stroke: {
				  show: true,
				  curve: "smooth",
				  lineCap: "butt",
				  colors: undefined,
				  width: 2,
				  dashArray: 0,
				},
				fill: {
				  gradient: {
					enabled: false,
				  },
				},
				tooltip: {
				  enabled: false,
				},
				series: [
				  {
					name: "Total Income",
					data: randomizeArray(sparklineData3),
				  },
				],
				yaxis: {
				  min: 0,
				},
				colors: ["#ff5b51"],
			  };
			  var spark3 = new ApexCharts(document.querySelector("#spark3"), spark3);
			  spark3.render();

			  var sparklineData4 = [0, 35, 41, 35, 27, 93, 53, 61, 27, 54, 43, 19, 46, 45, 54, 38, 56, 24, 65, 31, 37, 39, 62, 51];
			  //Spark4
			  var spark4 = {
				chart: {
				  type: "area",
				  height: 60,
				  sparkline: {
					enabled: true,
				  },
				  dropShadow: {
					enabled: true,
					blur: 3,
					opacity: 0.2,
				  },
				},
				stroke: {
				  show: true,
				  curve: "smooth",
				  lineCap: "butt",
				  colors: undefined,
				  width: 2,
				  dashArray: 0,
				},
				fill: {
				  gradient: {
					enabled: false,
				  },
				},
				tooltip: {
				  enabled: false,
				},
				series: [
				  {
					name: "Total Tax",
					data: randomizeArray(sparklineData3),
				  },
				],
				yaxis: {
				  min: 0,
				},
				colors: ["#fcbf09"],
			  };
			  var spark4 = new ApexCharts(document.querySelector("#spark4"), spark4);
			  spark4.render();
			  //Spark5
			  var spark5 = {
				chart: {
				  type: "area",
				  height: 60,
				  sparkline: {
					enabled: true,
				  },
				  dropShadow: {
					enabled: true,
					blur: 3,
					opacity: 0.2,
				  },
				},
				stroke: {
				  show: true,
				  curve: "smooth",
				  lineCap: "butt",
				  colors: undefined,
				  width: 2,
				  dashArray: 0,
				},
				fill: {
				  gradient: {
					enabled: false,
				  },
				},
				tooltip: {
				  enabled: false,
				},
				series: [
				  {
					name: "Total Tax",
					data: randomizeArray(sparklineData3),
				  },
				],
				yaxis: {
				  min: 0,
				},
				colors: ["#fcbf09"],
			  };
			  var spark5 = new ApexCharts(document.querySelector("#spark5"), spark5);
			  spark5.render();
			  //Spark6
			  var spark6 = {
				chart: {
				  type: "area",
				  height: 60,
				  sparkline: {
					enabled: true,
				  },
				  dropShadow: {
					enabled: true,
					blur: 3,
					opacity: 0.2,
				  },
				},
				stroke: {
				  show: true,
				  curve: "smooth",
				  lineCap: "butt",
				  colors: undefined,
				  width: 2,
				  dashArray: 0,
				},
				fill: {
				  gradient: {
					enabled: false,
				  },
				},
				tooltip: {
				  enabled: false,
				},
				series: [
				  {
					name: "Total Tax",
					data: randomizeArray(sparklineData3),
				  },
				],
				yaxis: {
				  min: 0,
				},
				colors: ["#2dce89"],
			  };
			  var spark6 = new ApexCharts(document.querySelector("#spark6"), spark6);
			  spark6.render();
		</script>
		<?php
		}
		?>
		
	</body>
</html>