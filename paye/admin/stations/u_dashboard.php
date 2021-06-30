	<?php include('u_header.php'); ?>
	<?php
	include('../language/English/lang_left_menu.php');
	include('../language/English/lang_common.php');
	include('../language/English/lang_admin_dashboard.php');
	?>
	
	<?php 
	$sql = "select * FROM tblcategory WHERE branch_id = '$_SESSION[branchId]'";
	$res_cust = mysqli_query($conn, $sql);
	$num_rows_cust = mysqli_num_rows($res_cust);
				
	?>
	

	<!-- Content Header (Page header) -->
	<section class="content-header">
	  <h1><?php echo $_data['dashboard_title2']; ?></h1>
	  <ol class="breadcrumb">
		<li><a href=""><i class="fa fa-dashboard"></i> <?php echo $_data['home_breadcam']; ?></a></li>
		<li class="active"><?php echo $_data['home_breadcam']; ?></li>
	  </ol>
	</section>
	<!-- Main content -->
	<section class="content">
	  <!-- /.row start -->
	  <div class="row home_dash_box">
	  
	   <!-- ./col end -->
		<div class="col-lg-3 col-xs-6">
		  <div class="small-box bg-aqua">
			<div class="inner">
			  <h3><?php echo $num_rows_cust ; ?></h3>
			  <p><?php echo $_data['dashboard_total_cats']; ?></p>
			</div>
			<div class="icon"> <img height="80" width="80" src="../img/comittee.png"></a> </div>
			<a href="catlist.php" class="small-box-footer"><?php echo $_data['dashboard_more_info']; ?> <i class="fa fa-arrow-circle-right"></i></a></div>
		</div>
		<!-- ./col end -->
		
		<!-- col start -->
		<div class="col-lg-3 col-xs-6">
		  <div class="small-box bg-aqua">
			<div class="inner">
			  <h3><?php echo $_data['dashboard_returns']; ?></h3>
			  <p>&nbsp;</p>
			</div>
			<div class="icon"> <img height="50" width="50" src="../img/room.png"></a> </div>
			<a href="addreturns.php" class="small-box-footer"><?php echo $_data['dashboard_more_info']; ?> <i class="fa fa-arrow-circle-right"></i></a> </div>
			
		</div>
		<!-- ./col end -->
	  
		 
		
		<!-- col start -->
		<div class="col-lg-3 col-xs-6">
		  <div class="small-box bg-aqua">
			<div class="inner">
			  <h3>
				<?php echo $_data['dashboard_view_returns']; ?></h3>
			  <p>&nbsp;</p>
			</div>
			<div class="icon"> <img height="50" width="50" src="../img/report.png"></a> </div>
			<a href="returnslist.php" class="small-box-footer"><?php echo $_data['dashboard_more_info']; ?> <i class="fa fa-arrow-circle-right"></i></a> </div>
		</div>
		<!-- ./col end -->
		
		<!-- col start -->
		<div class="col-lg-3 col-xs-6">
		  <div class="small-box bg-aqua">
			<div class="inner">
			  <h3>
				<?php echo $_data['dashboard_print_returns']; ?></h3>
			  <p>&nbsp;</p>
			</div>
			<div class="icon"> <img height="50" width="50" src="../img/report.png"></a> </div>
			<a href="returns.php" class="small-box-footer"><?php echo $_data['dashboard_more_info']; ?> <i class="fa fa-arrow-circle-right"></i></a> </div>
		</div>
		<!-- ./col end -->
		
		<!-- ./col end -->
	  </div>
	  <!-- /.row end -->
	</section>
	<!-- /.content -->
	<?php include('u_footer.php'); ?>
