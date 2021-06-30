   <?php 
	
	session_start();
	include("connect.php");
	include('language/English/lang_left_menu.php');
	include('language/English/lang_common.php');
	?>
	
	<?php
    if(!isset($_SESSION['user_id'])){
        header("Location:index.php");
    }
   
	?>
	

	<!DOCTYPE html>
	<html>
	<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
	<title>ODIRS PAYE Portal</title>
	<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
	<!-- Bootstrap 3.3.4 -->
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<!-- Font Awesome Icons -->
	<link href="dist/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<!-- Ionicons -->
	<link href="dist/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
	<!-- Theme style -->
	<!--link href="dist/css/AdminLTE.css" rel="stylesheet" type="text/css" /-->
	<link rel="stylesheet" href="dist1/css/AdminLTE.min.css">
	
	<!-- AdminLTE Skins. Choose a skin from the css/skins 
	 folder instead of downloading all of them to reduce the load. -->
	<link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
	<!-- iCheck for checkboxes and radio inputs -->
	<link href="plugins/iCheck/all.css" rel="stylesheet" type="text/css" />
	<link href="plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
	<link href="dist/css/dataTables.responsive.css" rel="stylesheet" type="text/css" />
	<link href="dist/css/dataTables.tableTools.min.css" rel="stylesheet" type="text/css" />
	<link href="plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- jQuery 2.1.4 -->
	<script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
	<script src="dist/js/printThis.js"></script>
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		</head>
	<body class="skin-green sidebar-mini">
	<!-- Site wrapper -->
	<div class="wrapper">
	<!-- =================START HEADER FILE HERE============================== -->
	<header class="main-header">
	  <!-- Logo -->
	  <a  href="" class="logo">
	  <!-- mini logo for sidebar mini 50x50 pixels -->
	  <span class="logo-mini">ODIRS</span>
	  <!-- logo for regular state and mobile devices -->
	  <span class="logo-lg"><b>ODIRS</b> PAYE Portal</span> </a>
	  <!-- Header Navbar: style can be found in header.less -->
	  <nav class="navbar navbar-static-top" role="navigation">
		<!-- Sidebar toggle button-->
		<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"> <span class="sr-only">Toggle navigation</span> 
		<span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>
		<div class="navbar-custom-menu">
		  <ul class="nav navbar-nav">
			<!-- Messages: style can be found in dropdown.less-->
			<ul class="dropdown-menu">
			  <li>
				<!-- inner menu: contains the actual data -->
				<ul class="menu">
				  <li>
					<!-- start message -->
					<a href="#">
					<div class="pull-left"> <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"/> </div>
					</a> </li>
				  <!-- end message -->
				</ul>
			  </li>
			  <li class="footer"><a href="#"></a></li>
			</ul>
			</li>
			<!-- User Account: style can be found in dropdown.less -->
			<li class="dropdown user user-menu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-user fa-lg"></i> 
			<span class="hidden-xs">
			<?php
                    if(isset ($_SESSION['user_id']))
                    {
                    echo $_SESSION['user_name'];

                    }
                    else
                    {
						header("Location: logout.php");
                    }
                ?>
					<!--?php  
						$sql = "select * from login where branch_id = '".$_SESSION["branchId"]."'";
						$query=$conn->query($sql);
                                while($row=mysqli_fetch_array($query))
                                    {
										echo $row['name'] ;
									}
						?--> 
			</span></a>
			  <ul class="dropdown-menu">
				<!-- User image -->
				<li class="user-header"> <img src="assets/img/user.png" class="img-circle" alt="User Image" />
				  <p>  
				  <small>
				  <?php
                   $sql = "select * from paye_applicant  where id = '".$_SESSION["user_id"]."'";
					$query=$conn->query($sql);
					while($row=mysqli_fetch_array($query))
					{
					   echo $row['name']; 
					   
					}
					?></small>
				  </li>
				<!-- Menu Body -->
				<!-- Menu Footer-->
				<li class="user-footer">
				  <div class="pull-left"><a data-target="#user_profile" data-toggle="modal" class="btn btn-success btn-flat" style="color: #000;">Profile</a></div>
				  <div class="pull-right"> <a href="logout.php" class="btn btn-danger btn-flat" style="color: #000;">Sign out</a> </div>
				</li>
			  </ul>
			</li>
		  </ul>
		</div>
	  </nav>
	</header>
	<!-- ==================END HEADER FILE HERE============================= -->
	<!-- Left side column. contains the sidebar -->
	<aside class="main-sidebar">
	  <!-- sidebar: style can be found in sidebar.less -->
	  <section class="sidebar" style="margin-top:10px;">
		<!-- sidebar menu: : style can be found in sidebar.less -->
		
		<ul class="sidebar-menu">
		
		  <li class="<?php if($page_name != '' && $page_name == 'dashboard'){echo 'active';}?>"><a href="u_dashboard.php">
		  <i class="fa fa-dashboard"></i> <span><?php echo $_data['menu_dashboard']; ?></span></a> </li>
		  
		  
		 
	
		  <li class="treeview <?php if($page_name != '' && $page_name == 'addcat' || $page_name == 'catlist'){echo 'active';}?>"> <a href="#"> 
		  <i class="fa fa-empire"></i> <span><?php echo $_data['menu_cat_information']; ?></span> <i class="fa fa-angle-left pull-right"></i> </a>
			<ul class="treeview-menu">
			<li class="<?php if($page_name != '' && $page_name == 'catlist'){echo 'active';}?>"><a href="upload_file.php">
			<i class="fa fa-arrow-circle-right"></i><?php echo $_data['menu_cat_list']; ?></a></li>
			  <li class="<?php if($page_name != '' && $page_name == 'addcat'){echo 'active';}?>"><a href="list_paye_application.php">
			  <i class="fa fa-arrow-circle-right"></i><?php echo $_data['menu_add_cat']; ?></a></li>
			</ul>
		</li>			 
	</ul>	  
		  <!-------------------------------------------------------------------------------------------------------------->
		 
			</ul>
		  </li>
		</ul>
	  </section>
	  <!-- /.sidebar -->
	</aside>
	<!-- =============================================== -->
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
	<!-- Add the sidebar's background. This div must be placed
	 immediately after the control sidebar -->
	 <form id="updateprofile" action="ajax/updateProfile.php" method="post">
	  <div class="modal fade" role="dialog" id="user_profile" aria-labelledby="gridSystemModalLabel">
		<div class="modal-dialog" role="document">
		  <div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  <h4 class="modal-title" id="gridSystemModalLabel">Update Your Profile</h4>
			</div>
			<div class="modal-body">
			  <?php 
				$image = 'img/no_image.jpg';	
				if(isset($_SESSION['login_id']['image'])){
					if(file_exists('/img/upload/' . $_SESSION['branchId']['image']) && $_SESSION['branchId']['image'] != ''){
						$image = 'img/upload/' . $_SESSION['branchId']['image'];
					}
				}
			  ?>
			  <div align="center">
			      <img class="photo_img_round" style="width:100px;height:100px;" src="img/no_image.jpg"" /></div>
			  <h4 align="center">
			  <?php 
			  
			  $sql = "select * from paye_applicant  where id = '".$_SESSION["user_id"]."'";
			  $query=$conn->query($sql);
			  while($row=mysqli_fetch_array($query))
			  {
				 echo $row['name']; 
				 
			  }
			  ?> 
			  
			  </h4>
			  <h4 align="center">
				<!--?php if($_SESSION['branchId'] == '1'){echo 'Admin';} else if($_SESSION['id'] == '2'){echo 'Owner';} else if($_SESSION['login_type'] == '3'){echo 'Employee';} else if($_SESSION['login_type'] == '4'){echo 'Employee';} else {echo 'Admin User';}?-->
			  </h4>
			  <div class="form-group">
				<label class="control-label">Name:&nbsp;&nbsp;</label>
				
				
				<input type="text" class="form-control" id="txtProfileName" name="txtProfileName" value="<?php $sql = "select * from paye_applicant  where id = '".$_SESSION["user_id"]."'";
					$query=$conn->query($sql);
					while($row=mysqli_fetch_array($query))
					{
					   echo $row['name']; 
					   
					} ?>">
			  </div>
			  <div class="form-group">
				<label class="control-label">Email:&nbsp;&nbsp;</label>
				<input type="text" class="form-control" id="txtProfileEmail" name="txtProfileEmail" value="<?php 
				$query=$conn->query($sql);
				while($row=mysqli_fetch_array($query))
				{
				   echo $row['email']; 
				   
				}
				?>">
			  </div>
			  <div class="form-group">
				<label class="control-label">Password:&nbsp;&nbsp;</label>
				<input type="text" class="form-control" id="txtProfilePassword" name="txtProfilePassword" value="<?php 
				$query=$conn->query($sql);
				while($row=mysqli_fetch_array($query))
				{
				   echo $row['pass']; 
				   
				}
				?>">
			  </div>
			  <div style="color:orange;font-weight:bold;text-align:left;font-size:15px;">After update application will be logout automatically.</div>
			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-primary" onClick="javascript:$('#updateprofile').submit();">Update</button>
			</div>
		  </div>
		  <!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	  </div>
	  <!-- /.modal -->
	 
	  
	</form>
<!--?php }?>