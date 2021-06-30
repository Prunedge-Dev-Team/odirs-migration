	<?php 
	include('u_header.php');
	include('../utility/common.php');
	include('../language/English/lang_add_tax_payer_cat.php');
	if(!isset($_SESSION['branchId'])){
		header("Location: logout.php");
		die();
	}
	
	$success = "none";
	$cat_name = '';
	$cat_designation = 0;
	$branch_id = '';
	$created_date = '';
	
	$title = $_data['add_new_tax_payer_category'];
	$button_text = $_data['save_button_text'];
	$successful_msg = $_data['added_tax_payer_category_successfully'];
	$form_url = "addcat.php";
	$cat_id="";
	$hdnid="0";
	//" . $_SESSION['id']['branch_id'] . "
	if(isset($_POST['txtCatName'])){
		if(isset($_POST['hdn']) && $_POST['hdn'] == '0'){
		if(isset($_POST['chkEmpStaus'])){
				$e_status = 1;
		}
		$sql = "INSERT INTO tblcategory(cat_name,cat_designation,branch_id) 
		values('$_POST[txtCatName]','$_POST[ddlMemberType]', '" . $_SESSION['branchId'] . "')";
		 if ($conn->query($sql) === TRUE) {	
			$url = "catlist.php?m=add"; 
          echo '<script language="javascript">location.href ="'.$url.'"</script>';
		//$url = 'returnslist.php?m=add';
		//header("Location: $url");
		}
		
	}
	
	else{
		
		$sql = "UPDATE `tblcategory` SET `cat_name`='".$_POST['txtCatName']."',`cat_designation`='".$_POST['ddlMemberType']."'
		 WHERE cat_id='".$_GET['id']."'";
		if ($conn->query($sql) === TRUE) {	
			$url = "catlist.php?m=up"; 
			echo '<script language="javascript">location.href ="'.$url.'"</script>';
		//mysql_query($sql,$link);
		//$url = 'returnslist.php?m=up';
		//header("Location: $url");
		}
	
	$success = "block";
	}
}
	if(isset($_GET['id']) && $_GET['id'] != ''){
	 $sql =  "SELECT * FROM tblcategory where cat_id = " . $_GET['id'] . " ";
	 $result = $conn->query($sql);
	 while($row = $result->fetch_assoc()) {
			//while($row = $result->fetch_assoc()) {                  
            $cat_name = $row['cat_name'];
			$cat_designation = $row['cat_designation'];
			//$created_date = $row['created_date'];
			$hdnid = $_GET['id'];
			$title = $_data['update_tax_payer_category'];
			$button_text =$_data['update_button_text'];
			$successful_msg="Update Tax Payer Category Successfully";
			$form_url = "addcat.php?id=".$_GET['id'];
                    //    } 
                    } 
					
					}
			?>
	<!-- Content Header (Page header) -->
	
	<section class="content-header">
	  <h1><?php echo $title;?></h1>
	  <ol class="breadcrumb">
		<li><a href="u_dashboard.php"><i class="fa fa-dashboard"></i>
		<?php echo $_data['home_breadcam'];?></a></li>
		<li class="active"><?php echo $_data['add_new_tax_payer_category_breadcam'];?></li>
		<!--li class="active"><?php echo $_data['add_new_tax_payer_category_breadcam'];?></li-->
	  </ol>
	</section>

	<!------------------------------------------------ Main content ------------------------------------------------------------------>
	<section class="content">
	<!-- Full Width boxes (Stat box) -->
	<div class="row">
	
	  <div class="col-md-12">
		 <div align="right" style="margin-bottom:1%;"> <a class="btn btn-primary" title="" data-toggle="tooltip" 
		 href="u_dashboard.php" data-original-title="<?php echo $_data['back_text'];?>">
		 <i class="fa fa-reply"></i></a> </div>
		<div class="box box-info">
		  <div class="box-header">
			<!--h3 class="box-title"><?php echo $_data['add_new_returns_entry_form'];?></h3-->

		  </div>
      
      <form onSubmit="return validateMe();" action="<?php echo $form_url; ?>" method="post" enctype="multipart/form-data">  
        <div class="box-body">
        
          <div class="form-group">
            <label for="txtCatName"><?php echo $_data['add_new_form_field_text_1'];?> :</label>
            <input type="text" name="txtCatName" id="txtCatName" value="<?php echo $cat_name; ?>" class="form-control" />
          </div>
          
          <div class="form-group">
            <label for="ddlMemberType"><?php echo $_data['add_new_form_field_text_2'];?> :</label>
			<input type="text" name="ddlMemberType" readonly ="true" value="<?php 
			//$sql =  "SELECT * FROM tbl_add_member_type where member_id = " . (int)$_SESSION['branchId'] . " ";
			$sql =  "SELECT * FROM rra_member where branch_id = " . (int)$_SESSION['branchId'] . " ";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                        echo "$row[branch_name]";
                        } 
                    } ?>" 
					
					class="form-control" />
          </div>
           
          
          <div class="form-group pull-right">
            <input type="submit" name="submit" class="btn btn-primary" value="<?php echo $button_text; ?>"/>
         </div>
        </div>
        <input type="hidden" value="<?php echo $hdnid; ?>" name="hdn"/>
         
      </form>
      <!-- /.box-body -->
		</div>
		<!-- /.box -->
	  </div>
	</div>


	<!-- /.row -->
	<script type="text/javascript">
	function validateMe(){
		if($("#txtCatName").val() == ''){
			alert(" Tax Payer Category info Required !!!");
			$("#txtCatName").focus();
			return false;
		}
		else if($("#ddlMemberType").val() == ''){
			alert("Tax District Required !!!");
			$("#ddlMemberType").focus();
			return false;
		}
		else{
			return true;
		}
	}
	</script>
	<?php include('u_footer.php'); ?>
