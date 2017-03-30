<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Reinlab</title>
		<!-- Tell the browser to be responsive to screen width -->
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<!-- Bootstrap 3.3.5 -->
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<!-- Ionicons -->
		<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<!-- Theme style -->
		<link rel="stylesheet" href="dist/css/AdminLTE.min.css">
		<!-- AdminLTE Skins. Choose a skin from the css/skins
			 folder instead of downloading all of them to reduce the load. -->
		<link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
		 <!-- Modal CSS -->
		<link href="dist/css/bootstrap-modal-bs3patch.css" rel="stylesheet" />
		<link href="dist/css/bootstrap-modal.css" rel="stylesheet" />
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
  <!-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT -->
  <!-- the fixed layout is not compatible with sidebar-mini -->
	<!--<body class="hold-transition skin-blue fixed sidebar-mini">-->
	<body class="hold-transition skin-green-light fixed sidebar-mini">
    <!-- Site wrapper -->
		<div class="wrapper">
		<!-- =============================================== -->
		<?php
			include('header.php');
			// include('navigation.php');
		?>
		<!-- =============================================== -->
		<!-- Content Wrapper. Contains page content -->
				
			<div class="content-wrapper">
				<!-- Main content -->
				<div id="insert_modal2" class="modal fade" tabindex="-1" data-width="1000" style="display: none;" data-keyboard="false" data-backdrop="static"></div>
				
				<section class="content-header">
					<h1>
						Dashboard
					</h1>
				</section>
				<section class="content">
				<div class="row">
					<div class="col-lg-3 col-xs-6">
					  <!-- small box -->
					  <div class="small-box bg-aqua">
						<div class="inner">
						<?php 
							$queryxyz = "SELECT COUNT(id)AS employeecount FROM hr_employeetbl WHERE systemstatusid = '1'";
							$resultxyz = pg_query($conn, $queryxyz);
							$totalrows_xyz = pg_num_rows($resultxyz);
							while ($rowxyz= pg_fetch_array($resultxyz, NULL, PGSQL_ASSOC)){		
							  $employeecount = $rowxyz['employeecount'];			
							}
						?>
						  <h3><?php echo $employeecount; ?></h3>
						  <p>Employee Count</p>
						</div>
						<div class="icon">
						  <i class="ion ion-bag"></i>
						</div>
						<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
					  </div>
					</div><!-- ./col -->
					<div class="col-lg-3 col-xs-6">
					  <!-- small box -->
					  <div class="small-box bg-green">
						<div class="inner">
						<?php 
							$queryxyz = "SELECT COUNT(id)AS employeecount FROM hr_employeetbl WHERE systemstatusid = '1' AND employmentstatusid = '1'";
							$resultxyz = pg_query($conn, $queryxyz);
							$totalrows_xyz = pg_num_rows($resultxyz);
							while ($rowxyz= pg_fetch_array($resultxyz, NULL, PGSQL_ASSOC)){		
							  $regemployeecount = $rowxyz['employeecount'];			
							}
						?>	
						  <h3><?php echo $regemployeecount; ?></h3>
						  <p>Regular</p>
						</div>
						<div class="icon">
						  <i class="ion ion-stats-bars"></i>
						</div>
						<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
					  </div>
					</div><!-- ./col -->
					<div class="col-lg-3 col-xs-6">
					  <!-- small box -->
					  <div class="small-box bg-yellow">
						<div class="inner">
						<?php 
							$queryxyz = "SELECT COUNT(id)AS employeecount FROM hr_employeetbl WHERE systemstatusid = '1' AND employmentstatusid = '2'";
							$resultxyz = pg_query($conn, $queryxyz);
							$totalrows_xyz = pg_num_rows($resultxyz);
							while ($rowxyz= pg_fetch_array($resultxyz, NULL, PGSQL_ASSOC)){		
							  $probiemployeecount = $rowxyz['employeecount'];			
							}
						?>	
						  <h3><?php echo $probiemployeecount; ?></h3>
						  <p>Probationary</p>
						</div>
						<div class="icon">
						  <i class="ion ion-person-add"></i>
						</div>
						<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
					  </div>
					</div><!-- ./col -->
					<div class="col-lg-3 col-xs-6">
					  <!-- small box -->
					  <div class="small-box bg-red">
						<div class="inner">
						<?php 
							$queryxyz = "SELECT COUNT(id)AS employeecount FROM hr_employeetbl WHERE systemstatusid = '1' AND employmentstatusid IN ('3','4','5','7')";
							$resultxyz = pg_query($conn, $queryxyz);
							$totalrows_xyz = pg_num_rows($resultxyz);
							while ($rowxyz= pg_fetch_array($resultxyz, NULL, PGSQL_ASSOC)){		
							  $othersployeecount = $rowxyz['employeecount'];			
							}
						?>	
						  <h3><?php echo $othersployeecount; ?></h3>
						  <p>Contractual/seasonal</p>
						</div>
						<div class="icon">
						  <i class="ion ion-pie-graph"></i>
						</div>
						<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
					  </div>
					</div><!-- ./col -->
				</div>
				
				
				</section><!-- /.content -->
			</div><!-- /.content-wrapper -->

			
			<!-- Control Sidebar -->
			<?php
				include('copy.php');
				include('sidenavigation.php');
			?>
			<div class="control-sidebar-bg"></div>
		</div><!-- ./wrapper -->

    <?php
		include('footer.php');
		include("checkpassword.php"); 
	?>
	</body>
</html>
