	<?php 
	include('u_header.php');
	include('../utility/common.php');
	include('../language/English/lang_add_returns.php');
	if(!isset($_SESSION['branchId'])){
		header("Location: logout.php");
		die();
	}
	$success = "none";
	//$sno = '';
	$name = '';
	$address = '';
	$phone = '';
	$tin = '';
	$confm_no = '';
	$occupt = '';
	$period = '';
	$tcc_recpt = '';
	$amt = '0.00';
	$bank = '';
	$created_date = '';
	$week = '';
	//$month = '';
	$tax_station = 0 ;
	//$r_designation = 0;
	$branch_id = '';
	
	$title = $_data['add_new_returns'];
	$button_text = $_data['save_button_text'];
	$successful_msg = $_data['added_returns_successfully'];
	$form_url = "addreturns.php";
	$rid="";
	$hdnid="0";
	$url = '';
	
	if(isset($_POST['txtName'])){
		if(isset($_POST['hdn']) && $_POST['hdn'] == '0'){
		if(isset($_POST['chkEmpStaus'])){
				$e_status = 1;
		}
		$sql = "INSERT INTO tblreturns (name,address,phone,tin,confm_no,occupt,period,tcc_recpt,amt,bank,created_date,week,
		 tax_station,branch_id) values('$_POST[txtName]','$_POST[txtAddress]', '$_POST[txtPhone]', '$_POST[txtTin]',
		 '$_POST[txtConfmNo]',  '$_POST[ddlOccupt]', '$_POST[ddlPeriod]', '$_POST[ddlTccRecpt]', '$_POST[txtAmount]',
		  '$_POST[txtBank]', '$_POST[txtDate]', '$_POST[ddlWeek]',  '$_POST[ddlMemberType]', '" . $_SESSION['branchId'] . "')";
		if ($conn->query($sql) === TRUE) {	
			$url = "returnslist.php?m=add"; 
          echo '<script language="javascript">location.href ="'.$url.'"</script>';
		
		}
		
	}
	else{
		
		$sql = "UPDATE `tblreturns` SET `name`='".$_POST['txtName']."',
		`address`='".$_POST['txtAddress']."',
		`phone`='".$_POST['txtPhone']."', `tin`='".$_POST['txtTin']."', `confm_no`='".$_POST['txtConfmNo']."', `occupt`='".$_POST['ddlOccupt']."', 
		`period`='".$_POST['ddlPeriod']."', `tcc_recpt`='".$_POST['ddlTccRecpt']."', `amt`='".$_POST['txtAmount']."', 
		`bank`='".$_POST['txtBank']."', `created_date`='".$_POST['txtDate']."', `week`='".$_POST['ddlWeek']."', `tax_station`='".$_POST['ddlMemberType']."'  
		 WHERE rid='".$_GET['id']."'";
		 if ($conn->query($sql) === TRUE) {	
			$url = "returnslist.php?m=up"; 
			echo '<script language="javascript">location.href ="'.$url.'"</script>';
		
		}
	}
	$success = "block";
	}

	if(isset($_GET['id']) && $_GET['id'] != ''){
	$sql =  "SELECT * FROM tblreturns where rid = " . $_GET['id']. " ";
    $result = $conn->query($sql);
	
		while($row = $result->fetch_assoc()) {
			
			$name = $row['name'];
			$address = $row['address'];
			$phone = $row['phone'];
			$tin = $row['tin'];
			$confm_no = $row['confm_no'];
			$occupt = $row['occupt'];
			$period = $row['period'];
			$tcc_recpt = $row['tcc_recpt'];
			$amt = $row['amt'];
			$bank = $row['bank'];
			$created_date = $row['created_date'];
			$week = $row['week'];
			//$month = $row['month'];
			$tax_station = $row['tax_station'];
			//$rid = $_GET['id'];
			$hdnid = $_GET['id'];
			$title = $_data['update_returns'];
			$button_text =$_data['update_button_text'];
			$successful_msg="Update Returns Successfully";
			$form_url = "addreturns.php?id=".$_GET['id'];
		}
	}
	?>
	<!-- Content Header (Page header) -->
	
	<section class="content-header">
	  <h1><?php echo $title;?></h1>
	  <ol class="breadcrumb">
		<li><a href="u_dashboard.php"><i class="fa fa-dashboard"></i><?php echo $_data['home_breadcam'];?></a>     </li>
		<li class="active"><?php echo $_data['add_new_returns_information_breadcam'];?></li>
		<li class="active"><?php echo $_data['add_new_returns_breadcam'];?></li>
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
			<h3 class="box-title"><?php echo $_data['add_new_returns_entry_form'];?></h3>
		  </div>
      
      <form onSubmit="return validateMe();" action="<?php echo $form_url; ?>" method="post" enctype="multipart/form-data">  
        <div class="box-body">
        
          
        
         <div class="form-group">
            <label for="txtName"><?php echo $_data['add_new_form_field_text_1'];?> :</label>
            <input type="text" name="txtName" id="txtName" value="<?php echo $name; ?>" class="form-control" />
          </div>
          
          <div class="form-group">
            <label for="txtAddress"><?php echo $_data['add_new_form_field_text_2'];?> :</label>
            <input type="text" name="txtAddress" id="txtAddress" value="<?php echo $address; ?>" class="form-control" />
          </div>
          
          <div class="form-group">
            <label for="txtPhone"><?php echo $_data['add_new_form_field_text_3'];?> :</label>
            <input type="text" name="txtPhone" id="txtPhone" value="<?php echo $phone; ?>" class="form-control" />
          </div>
          
          <div class="form-group">
            <label for="txtTin"><?php echo $_data['add_new_form_field_text_4'];?> :</label>
            <input type="text" name="txtTin" id="txtTin" value="<?php echo $tin; ?>" class="form-control" />
          </div>
          
          <div class="form-group">
            <label for="txtConfmNo"><?php echo $_data['add_new_form_field_text_5'];?> :</label>
            <input type="text" name="txtConfmNo" id="txtConfmNo" value="<?php echo $confm_no; ?>" class="form-control" />
          </div>
		  
		  			
			<div class="form-group">
            <label for="ddlOccupt"><?php echo $_data['add_new_form_field_text_6'];?> :</label>
            <select name="ddlOccupt" id="ddlOccupt" value="<?php echo $occupt; ?>" class="form-control">
			<option value="<?php echo $occupt; ?>"> <?php echo $occupt; ?></option>
              <!--option value=" <?php echo $occupt; ?>">==Select Occupation==</option-->
              <?php 
			  		$sql =  "SELECT * FROM tblcategory WHERE branch_id = " . (int)$_SESSION['branchId']. " ";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) { 
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                        echo "<option value=$row[cat_name]>$row[cat_name]</option>";
                        } 
                    } else {
                       // echo "0 results";
                         
                   }
                   // $conn->close();
					var_dump($result);
			  ?>
            </select>
          </div>
            
            <div class="form-group">
            <label for="ddlPeriod"><?php echo $_data['add_new_form_field_text_7'];?> :</label>
            <select name="ddlPeriod" id="ddlPeriod"  placeholder="Select Period" class="form-control">
			 <option value="<?php echo $period; ?>"> <?php echo $period; ?></option>
			    <option value="2021">2021</option>
			    <option value="2020">2020</option>
                <option value="2019">2019</option>
                <option value="2018">2018</option>
                <option value="2017">2017</option>
                <option value="2016">2016</option>
                <option value="2015">2015</option>
            </select></div>
            
            <div class="form-group">
            <label for="ddlTccRecpt"><?php echo $_data['add_new_form_field_text_8'];?> :</label>
            <select name="ddlTccRecpt" id="ddlTccRecpt" class="form-control">
			<option value="<?php echo $tcc_recpt; ?>"> <?php echo $tcc_recpt; ?></option>
                <option value="TCC">TCC</option>
                <option value="RECEIPT">RECEIPT</option>
            </select></div>
          
          <div class="form-group">
            <label for="txtAmount"><?php echo $_data['add_new_form_field_text_9'];?>:</label>
            <input type="text" name="txtAmount" id="txtAmount" value="<?php echo $amt; ?>" class="form-control" />
          </div>
            
          <div class="form-group">
            <label for="txtBank"><?php echo $_data['add_new_form_field_text_10'];?>:</label>
            <input type="text" name="txtBank" value="<?php echo $bank;?>" id="txtBank" class="form-control"/>
          </div>
           
          <div class="form-group">
            <label for="txtDate"><?php echo $_data['add_new_form_field_text_11'];?>:</label>
            <input type="text" name="txtDate" value="<?php echo $created_date;?>" id="txtDate" class="form-control datepicker"/>
          </div>
		  
		   <div class="form-group">
            <label for="ddlWeek"><?php echo $_data['add_new_form_field_text_12'];?> :</label>
            <select name="ddlWeek" id="ddlWeek" class="form-control">
            <option value="<?php echo $week; ?>"> <?php echo $week; ?></option>
                <option value="First Week">First Week</option>
                <option value="Second Week">Second Week</option>
                <option value="Third Week">Third Week</option>
                <option value="Fourth Week">Fourth Week</option>
                <option value="Fifth Week">Fifth Week</option>
            </select></div> 
			
			<!--div class="form-group">
            <label for="ddlMonth"><?php echo $_data['add_new_form_field_text_12'];?> :</label>
            <select name="ddlMonth" id="ddlMonth" class="form-control">
              <option value="">--<?php echo $_data['add_new_form_field_text_12'];?>--</option>
              <?php 
			   $sql =  "SELECT * FROM tbl_add_month_setup";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) { 
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                        echo "<option value=$row[month_name]>$row[month_name]</option>";
                        } 
                    } else {
                        echo "0 results";
                         
                   }
                   // $conn->close();
					var_dump($result);
			 ?>
			   </select>
          </div-->
		  
		  <div class="form-group">
            <label for="ddlMemberType"><?php echo $_data['add_new_form_field_text_13'];?>:</label>
			<input type="text" name="ddlMemberType" readonly ="true" value="<?php 
			$sql =  "SELECT * FROM rra_member where branch_id = " . (int)$_SESSION['branchId'] . " ";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                        echo "$row[branch_name]";
                        } 
                    } ?>" class="form-control" />
          </div>


		  
          
          <!--div class="form-group">
            <label for="ddlMemberType"><?php echo $_data['add_new_form_field_text_13'];?> :</label>
            <select name="ddlMemberType" id="ddlMemberType" class="form-control">
			<option value="<?php echo $tax_station; ?>"> <?php echo $tax_station; ?></option>
              <?php
			  $sql =  "SELECT * FROM tbl_add_member_type where member_id = " . (int)$_SESSION['branchId'] . " ";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) { 
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                        echo "<option value=$row[member_type]>$row[member_type]</option>";
                        } 
                    } else {
                        echo "0 results";
                         
                   }
                    $conn->close();
					var_dump($result);
						?>
            </select></div-->
           
          
          <div class="form-group pull-right">
            <input type="submit" name="submit" class="btn btn-primary" value="<?php echo $button_text; ?>"/>
         </div>
        </div>
        <input type="hidden" value="<?php echo $hdnid; ?>" name="hdn"/>
         
      </form>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div></div>



<!-- /.row -->
<script type="text/javascript">
function validateMe(){
	if($("#txtSNo").val() == ''){
		alert("Sno Required !!!");
		$("#txtSNo").focus();
		return false;
	}
	else if($("#txtName").val() == ''){
		alert("Add Name Required !!!");
		$("#txtName").focus();
		return false;
	}
	else if($("#txtAddress").val() == ''){
		alert("Tax Payer Address Required !!!");
		$("#txtAddress").focus();
		return false;
	}
	else if($("#txtPhone").val() == ''){
		alert("Tax Payer Phone No Required !!!");
		$("#txtPhone").focus();
		return false;
	}
	else if($("#txtConfmNo").val() == ''){
		alert("Confirmation No Required !!!");
		$("#txtConfmNo").focus();
		return false;
	}
	else if($("#ddlOccupt").val() == ''){
		alert("Occupation Required !!!");
		$("#ddlOccupt").focus();
		return false;
	}
	else if($("#ddlPeriod").val() == ''){
		alert("Period/Year Required !!!");
		$("#ddlPeriod").focus();
		return false;
	}
	else if($("#ddlTccRecpt").val() == ''){
		alert("TCC or Receipt Required !!!");
		$("#ddlTccRecpt").focus();
		return false;
	}
	else if($("#txtAmount").val() == ''){
		alert("Amount Info Required !!!");
		$("#txtAmount").focus();
		return false;
	}
	else if($("#txtBank").val() == ''){
		alert("Bank Info Required !!!");
		$("#txtBank").focus();
		return false;
	}
	else if($("#txtDate").val() == ''){
		alert("Date Required !!!");
		$("#txtDate").focus();
		return false;
	}
	else if($("#txtMonth").val() == ''){
		alert("Month Required !!!");
		$("#txtMonth").focus();
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
