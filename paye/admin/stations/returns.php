	
	<?php include('u_header.php'); 
	
	/**include('language/English/lang_left_menu.php');
	include('language/English/lang_common.php');
	include('language/English/lang_admin_dashboard.php');**/

	
	if(!isset($_SESSION['branchId'])){
		header("Location: logout.php");
		die();
	}
	
	?>
		<!-- Content Header (Page header) -->
	<section class="content-header">
	  <h1>Monthly Returns<small>Control Panel</small> </h1>
	  <ol class="breadcrumb">
		<li><a href="u_dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active"><a href="returns.php">Returns</a></li>
	  </ol>
	</section>
	<!-- Main content -->
	<section class="content">
	  <!-- Small boxes (Stat box) -->
	  <div class="row home_dash_box">
	  
	  
		<div class="col-lg-3 col-xs-6">
		  <!-- small box -->
		  <div class="small-box bg-aqua">
			<div class="inner">
			  <h3>Print</h3>
			  <h4>January 2020</h4>
			</div>
			<div class="icon dashboard_image"> <img height="80" width="80" src="../img/report.png"></a>
			</div><a target="_blank" href="jan_returns.php" class="small-box-footer">Print Returns 
			<i class="fa fa-arrow-circle-right"></i></a> </div>
		</div>
		
		<div class="col-lg-3 col-xs-6">
		  <!-- small box -->
		  <div class="small-box bg-aqua">
			<div class="inner">
			  <h3>Print</h3>
			  <h4>February 2020</h4>
			</div>
			<div class="icon dashboard_image"> <img height="80" width="80" src="../img/report.png"></a>
			</div><a target="_blank" href="feb_returns.php" class="small-box-footer">Print Returns 
			<i class="fa fa-arrow-circle-right"></i></a> </div>
		</div>
		
		<div class="col-lg-3 col-xs-6">
		  <!-- small box -->
		  <div class="small-box bg-aqua">
			<div class="inner">
			  <h3>Print</h3>
			  <h4>March 2020</h4>
			</div>
			<div class="icon dashboard_image"> <img height="80" width="80" src="../img/report.png"></a>
			</div><a target="_blank" href="mar_returns.php" class="small-box-footer">Print Returns 
			<i class="fa fa-arrow-circle-right"></i></a> </div>
		</div>
		
		<div class="col-lg-3 col-xs-6">
		  <!-- small box -->
		  <div class="small-box bg-aqua">
			<div class="inner">
			  <h3>Print</h3>
			  <h4>April 2020</h4>
			</div>
			<div class="icon dashboard_image"> <img height="80" width="80" src="../img/report.png"></a>
			</div><a target="_blank" href="apr_returns.php" class="small-box-footer">Print Returns
			<i class="fa fa-arrow-circle-right"></i></a> </div>
		</div>
		
		<div class="col-lg-3 col-xs-6">
		  <!-- small box -->
		  <div class="small-box bg-aqua">
			<div class="inner">
			  <h3>Print</h3>
			  <h4>May 2020</h4>
			</div>
			<div class="icon dashboard_image"> <img height="80" width="80" src="../img/report.png"></a>
			</div><a target="_blank" href="may_returns.php" class="small-box-footer">Print Returns 
			<i class="fa fa-arrow-circle-right"></i></a> </div>
		</div>
		
		<div class="col-lg-3 col-xs-6">
		  <!-- small box -->
		  <div class="small-box bg-aqua">
			<div class="inner">
			  <h3>Print</h3>
			  <h4>June 2020</h4>
			</div>
			<div class="icon dashboard_image"> <img height="80" width="80" src="../img/report.png"></a>
			</div><a target="_blank" href="jun_returns.php" class="small-box-footer">Print Returns 
			<i class="fa fa-arrow-circle-right"></i></a> </div>
		</div>
		
		<div class="col-lg-3 col-xs-6">
		  <!-- small box -->
		  <div class="small-box bg-aqua">
			<div class="inner">
			  <h3>Print</h3>
			  <h4>July 2020</h4>
			</div>
			<div class="icon dashboard_image"> <img height="80" width="80" src="../img/report.png"></a>
			</div><a target="_blank" href="jul_returns.php" class="small-box-footer">Print Returns 
			<i class="fa fa-arrow-circle-right"></i></a> </div>
		</div>
		
		<div class="col-lg-3 col-xs-6">
		  <!-- small box -->
		  <div class="small-box bg-aqua">
			<div class="inner">
			  <h3>Print</h3>
			  <h4>August 2020</h4>
			</div>
			<div class="icon dashboard_image"> <img height="80" width="80" src="../img/report.png"></a>
			</div><a a target="_blank" href="aug_returns.php" class="small-box-footer">Print Returns 
			<i class="fa fa-arrow-circle-right"></i></a> </div>
		</div>
		
		<div class="col-lg-3 col-xs-6">
		  <!-- small box -->
		  <div class="small-box bg-aqua">
			<div class="inner">
			  <h3>Print</h3>
			  <h4>September 2020</h4>
			</div>
			<div class="icon dashboard_image"> <img height="80" width="80" src="../img/report.png"></a>
			</div><a target="_blank" href="sep_returns.php" class="small-box-footer">Print Returns 
			<i class="fa fa-arrow-circle-right"></i></a> </div>
		</div>
		
		<div class="col-lg-3 col-xs-6">
		  <!-- small box -->
		  <div class="small-box bg-aqua">
			<div class="inner">
			  <h3>Print</h3>
			  <h4>October 2020</h4>
			</div>
			<div class="icon dashboard_image"> <img height="80" width="80" src="../img/report.png"></a>
			</div><a target="_blank" href="oct_returns.php" class="small-box-footer">Print Returns 
			<i class="fa fa-arrow-circle-right"></i></a> </div>
		</div>
		
		<div class="col-lg-3 col-xs-6">
		  <!-- small box -->
		  <div class="small-box bg-aqua">
			<div class="inner">
			  <h3>Print</h3>
			  <h4>November 2020</h4>
			</div>
			<div class="icon dashboard_image"> <img height="80" width="80" src="../img/report.png"></a>
			</div><a target="_blank" href="nov_returns.php" class="small-box-footer">Print Returns 
			<i class="fa fa-arrow-circle-right"></i></a> </div>
		</div>
		
		<div class="col-lg-3 col-xs-6">
		  <!-- small box -->
		  <div class="small-box bg-aqua">
			<div class="inner">
			  <h3>Print</h3>
			  <h4>December 2020</h4>
			</div>
			<div class="icon dashboard_image"> <img height="80" width="80" src="../img/report.png"></a>
			</div><a target="_blank" href="dec_returns.php" class="small-box-footer">Print Returns 
			<i class="fa fa-arrow-circle-right"></i></a> </div>
		</div>
		
		
		
	   
	  </div>
	  <!-- /.row -->
	</section>
	<!-- /.content -->
	<?php include('u_footer.php'); ?>
