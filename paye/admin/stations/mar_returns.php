<?php
	//ob_start();
	session_start();
	include("../config.php");
	if(!isset($_SESSION['branchId'])){
		header("Location:logout.php");
		die();
	}
	$lang_code_global = "English";
	$global_currency = "#";
	$currency_position = "left";
	$currency_sep = ".";

	
	include('../language/English/lang_returns_status.php');
  include('../language/English/lang_common.php');
  
	
	
	?>
	<!DOCTYPE html>
	<html>
	<head>
	<meta charset="UTF-8">
	<title>ODIRS e-Portal - Returns Summary</title>
	<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
	<!-- Bootstrap 3.3.4 -->
	<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<!-- Font Awesome Icons -->
	<link href="../dist/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<!-- Ionicons -->
	<link href="../dist/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
	<!-- Theme style -->
	<link href="../dist/css/AdminLTE.css" rel="stylesheet" type="text/css" />
	<!-- AdminLTE Skins. Choose a skin from the css/skins 
	 folder instead of downloading all of them to reduce the load. -->
	<link href="../dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
	<!-- iCheck for checkboxes and radio inputs -->
	<link href="../plugins/iCheck/all.css" rel="stylesheet" type="text/css" />
	<link href="../plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
	<link href="../dist/css/dataTables.responsive.css" rel="stylesheet" type="text/css" />
	<link href="../dist/css/dataTables.tableTools.min.css" rel="stylesheet" type="text/css" />
	<link href="../plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- jQuery 2.1.4 -->
	<script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
	<script src="../dist/js/printThis.js"></script>
	<script src="../dist/js/common.js"></script>
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
	<section class="content">
	
	<div id="printable">
	<!--------------------------------------- FIRST WEEK Main content ------------------------------->
	  <div align="center" style="margin:50px;">
		<input type="hidden" id="web_url" value="" />
		<div class="row">
		  <div class="col-xs-12">
			<div class="box box-info">
			  <div class="box-header">
			  <h2 style="text-decoration:font-weight:bold;color:orange" class="box-title">
			  ONDO STATE INTERNAL REVENUE SERVICE (INFORMAL SECTOR)</h2> <br/>
				<h3 style="text-decoration:font-weight:bold;color:orange" class="box-title">
				March, 2020</h3> <br/>
        <h4 style="text-decoration:font-weight:bold;color:orange">
        <?php  
						$sql = "select * from login where branch_id = '".$_SESSION["branchId"]."'";
						$query=$conn->query($sql);
                                while($row=mysqli_fetch_array($query))
                                    {
                    echo  $row['branch_name'] ; 
                    
									}
						?> 
          </h4>  
          <hr/><h3 style="text-decoration:font-weight:bold;color:orange" class="box-title">First Weekly Returns</h3>
			  </div>
          <div class="box-body">
          <table style="font-size:13px;" class="table sakotable table-bordered table-striped dt-responsive">
              <thead>
                <tr>
                  <th><?php echo $_data['text_2'];?></th>
                  <th><?php echo $_data['text_3'];?></th>
                  <th><?php echo $_data['text_4'];?></th>
                  <th><?php echo $_data['text_5'];?></th>
                  <th><?php echo $_data['text_6'];?></th>
                  <th><?php echo $_data['text_7'];?></th>
                  <th><?php echo $_data['text_8'];?></th>
				          <th><?php echo $_data['text_9'];?></th>
                  <th><?php echo $_data['text_10'];?></th>
				          <th><?php echo $_data['text_11'];?></th>
                  <th><?php echo $_data['text_12'];?></th>
                 
                 
                </tr>
              </thead>
              <tbody>
                <?php
			$first_sub_total = 0;
			$sql = "Select * FROM tblreturns WHERE week LIKE 'First%' AND created_date LIKE '%/03/2020%' AND branch_id = " . (int)$_SESSION['branchId']. " ";
            	$result = $conn->query($sql);
				while($row = $result->fetch_assoc()) {   
				$first_sub_total +=(float)$row['amt'];
				
				
				?>
                <tr>
                  <!--td><img class="photo_img_round" style="width:50px;height:50px;" src="<?php echo $image;  ?>" /></td-->
				  
                  <td><?php echo $row['name']; ?></td>
                  <td><?php echo $row['address']; ?></td>
				          <td><?php echo $row['phone']; ?></td>
                  <td><?php echo $row['tin']; ?></td>
                  <td><?php echo $row['confm_no']; ?></td>
                  <td><?php echo $row['occupt']; ?></td>
                  <td><?php echo $row['period']; ?></td>
                  <td><?php echo $row['tcc_recpt']; ?></td>
				          <td><?php echo $row['amt']; ?></td>
                  <td><?php echo $row['bank']; ?></td>
                  <td><?php echo $row['created_date']; ?></td>                 
                </tr>
                <?php } //mysql_close($link); ?>
              </tbody>
              <!--tfoot-->
                <tr>
                  <th>First Week Total</th>
                  <th>&nbsp;</th>
                  <th>&nbsp;</th>
                  <th>&nbsp;</th>
                  <th>&nbsp;</th>
				          <th>&nbsp;</th>
                  <th>&nbsp;</th>
                  <th>&nbsp;</th>
                  
				 
				  <th style="color:red;"><?php if($currency_position == 'left')
				  {echo $global_currency.number_format($first_sub_total, 2, '.', ',');}
				  else { echo number_format($first_sub_total, 2, '.', ',').$global_currency;} ?></th>
				  <th>&nbsp;</th>
				  <th>&nbsp;</th>
				</tr>
              <!--/tfoot-->
            </table>
          <div>
        </div>
      </div>
    </div>
  <!--/div>
  
  <!-------------------------------------- /.row end first ------------------------------>
  
  
  <!--div align="center" style="margin:50px;"-->
    <input type="hidden" id="web_url" value="" />
    <div class="row">
      <div class="col-xs-12">
        <div class="box box-info">
          <div class="box-header">
            <h3 style="text-decoration:font-weight:bold;color:orange" class="box-title">Second Weekly Returns</h3>
          </div>
          <div class="box-body">
            <table style="font-size:13px;" class="table sakotable table-bordered table-striped dt-responsive">
              <thead>
                <tr>
                  <th><?php echo $_data['text_2'];?></th>
                  <th><?php echo $_data['text_3'];?></th>
                  <th><?php echo $_data['text_4'];?></th>
                  <th><?php echo $_data['text_5'];?></th>
                  <th><?php echo $_data['text_6'];?></th>
                  <th><?php echo $_data['text_7'];?></th>
                  <th><?php echo $_data['text_8'];?></th>
				          <th><?php echo $_data['text_9'];?></th>
                  <th><?php echo $_data['text_10'];?></th>
				          <th><?php echo $_data['text_11'];?></th>
                  <th><?php echo $_data['text_12'];?></th>
                </tr>
              </thead>
              <tbody>
                <?php
			$second_sub_total = 0;
			$sql = "Select * FROM tblreturns WHERE week LIKE 'Second%' AND created_date LIKE '%/03/2020%' AND branch_id = " . (int)$_SESSION['branchId']. " ";
            	$result = $conn->query($sql);
				while($row = $result->fetch_assoc()) {   
				$second_sub_total +=(float)$row['amt'];
				
				?>
                <tr>
                  <!--td><img class="photo_img_round" style="width:50px;height:50px;" src="<?php echo $image;  ?>" /></td-->
				          <td><?php echo $row['name']; ?></td>
                  <td><?php echo $row['address']; ?></td>
				          <td><?php echo $row['phone']; ?></td>
                  <td><?php echo $row['tin']; ?></td>
                  <td><?php echo $row['confm_no']; ?></td>
                  <td><?php echo $row['occupt']; ?></td>
                  <td><?php echo $row['period']; ?></td>
                  <td><?php echo $row['tcc_recpt']; ?></td>
				          <td><?php echo $row['amt']; ?></td>
                  <td><?php echo $row['bank']; ?></td>
                  <td><?php echo $row['created_date']; ?></td>   
				        </tr>
                <?php } //mysql_close($link); ?>
              </tbody>
              <!--tfoot-->
                <tr>
                  <th>Second Week Total</th>
                  <th>&nbsp;</th>
                  <th>&nbsp;</th>
                  <th>&nbsp;</th>
                  <th>&nbsp;</th>
				          <th>&nbsp;</th>
                 <th>&nbsp;</th>
                 <th>&nbsp;</th>
                  
                  <th style="color:red;"><?php if($currency_position == 'left')
				  {echo $global_currency.number_format($second_sub_total, 2, '.', ',');}
				  else { echo number_format($second_sub_total, 2, '.', ',').$global_currency;} ?></th>
                  <th>&nbsp;</th>
				   <th>&nbsp;</th>
                </tr>
              <!--/tfoot-->
            </table>
          <div>
        </div>
      </div>
    </div>
  <!--/div>
  <!------------------------------------------- /.row end second---------------------------------------------------- -->
  
  
   <!--div align="center" style="margin:50px;"-->
    <input type="hidden" id="web_url" value="" />
    <div class="row">
      <div class="col-xs-12">
        <div class="box box-info">
          <div class="box-header">
            <h3 style="text-decoration:font-weight:bold;color:orange" class="box-title">Third Weekly Returns</h3>
          </div>
          <div class="box-body">
            <table style="font-size:13px;" class="table sakotable table-bordered table-striped dt-responsive">
              <thead>
                <tr>
                  <th><?php echo $_data['text_2'];?></th>
                  <th><?php echo $_data['text_3'];?></th>
                  <th><?php echo $_data['text_4'];?></th>
                  <th><?php echo $_data['text_5'];?></th>
                  <th><?php echo $_data['text_6'];?></th>
                  <th><?php echo $_data['text_7'];?></th>
                  <th><?php echo $_data['text_8'];?></th>
				          <th><?php echo $_data['text_9'];?></th>
                  <th><?php echo $_data['text_10'];?></th>
				          <th><?php echo $_data['text_11'];?></th>
                  <th><?php echo $_data['text_12'];?></th>
                </tr>
              </thead>
              <tbody>
                <?php
			$third_sub_total = 0;
      $sql = "Select * FROM tblreturns WHERE week LIKE 'Third%' AND created_date LIKE '%/03/2020%' AND branch_id = " . (int)$_SESSION['branchId']. " ";
            	$result = $conn->query($sql);
				while($row = $result->fetch_assoc()) {   
				$third_sub_total +=(float)$row['amt'];
				
				?>
                <tr>
                  <!--td><img class="photo_img_round" style="width:50px;height:50px;" src="<?php echo $image;  ?>" /></td-->
				          <td><?php echo $row['name']; ?></td>
                  <td><?php echo $row['address']; ?></td>
				          <td><?php echo $row['phone']; ?></td>
                  <td><?php echo $row['tin']; ?></td>
                  <td><?php echo $row['confm_no']; ?></td>
                  <td><?php echo $row['occupt']; ?></td>
                  <td><?php echo $row['period']; ?></td>
                  <td><?php echo $row['tcc_recpt']; ?></td>
				          <td><?php echo $row['amt']; ?></td>
                  <td><?php echo $row['bank']; ?></td>
                  <td><?php echo $row['created_date']; ?></td>  
                </tr>
                <?php } //mysql_close($link); ?>
              </tbody>
              <!--tfoot-->
                <tr>
                  <th>Third Week Total</th>
                  <th>&nbsp;</th>
                  <th>&nbsp;</th>
                  <th>&nbsp;</th>
                  <th>&nbsp;</th>
				          <th>&nbsp;</th>
                  <th>&nbsp;</th>
                  <th>&nbsp;</th>
              
                  <th style="color:red;"><?php if($currency_position == 'left')
				  {echo $global_currency.number_format($third_sub_total, 2, '.', ',');}
				  else { echo number_format($third_sub_total, 2, '.', ',').$global_currency;} ?></th>
                  <th>&nbsp;</th>
				   <th>&nbsp;</th>
                </tr>
              <!--/tfoot-->
            </table>
          <div>
        </div>
      </div>
    </div>
  <!--/div>
  <!--------------------------------------- /.row end thrid------------------------------------------------------------>
  
  
  <!--div align="center" style="margin:50px;"-->
    <input type="hidden" id="web_url" value="" />
    <div class="row">
      <div class="col-xs-12">
        <div class="box box-info">
          <div class="box-header">
            <h3 style="text-decoration:font-weight:bold;color:orange" class="box-title">Fourth Weekly Returns</h3>
          </div>
          <div class="box-body">
            <table style="font-size:13px;" class="table sakotable table-bordered table-striped dt-responsive">
              <thead>
                <tr>
                  <th><?php echo $_data['text_2'];?></th>
                  <th><?php echo $_data['text_3'];?></th>
                  <th><?php echo $_data['text_4'];?></th>
                  <th><?php echo $_data['text_5'];?></th>
                  <th><?php echo $_data['text_6'];?></th>
                  <th><?php echo $_data['text_7'];?></th>
                  <th><?php echo $_data['text_8'];?></th>
				          <th><?php echo $_data['text_9'];?></th>
                  <th><?php echo $_data['text_10'];?></th>
				          <th><?php echo $_data['text_11'];?></th>
                  <th><?php echo $_data['text_12'];?></th>
                </tr>
              </thead>
              <tbody>
                <?php
			$fourth_sub_total = 0;
      $sql = "Select * FROM tblreturns WHERE week LIKE 'Fourth%' AND created_date LIKE '%/03/2020%' AND branch_id = " . (int)$_SESSION['branchId']. " ";
            	$result = $conn->query($sql);
				while($row = $result->fetch_assoc()) {   
				$fourth_sub_total +=(float)$row['amt'];
				
				?>
                <tr>
                  <!--td><img class="photo_img_round" style="width:50px;height:50px;" src="<?php echo $image;  ?>" /></td-->
				          <td><?php echo $row['name']; ?></td>
                  <td><?php echo $row['address']; ?></td>
				          <td><?php echo $row['phone']; ?></td>
                  <td><?php echo $row['tin']; ?></td>
                  <td><?php echo $row['confm_no']; ?></td>
                  <td><?php echo $row['occupt']; ?></td>
                  <td><?php echo $row['period']; ?></td>
                  <td><?php echo $row['tcc_recpt']; ?></td>
				          <td><?php echo $row['amt']; ?></td>
                  <td><?php echo $row['bank']; ?></td>
                  <td><?php echo $row['created_date']; ?></td>  
                </tr>
                <?php } //mysql_close($link); ?>
              </tbody>
              <!--tfoot-->
                <tr>
                  <th>Fourth Week Total</th>
                  <th>&nbsp;</th>
                  <th>&nbsp;</th>
                  <th>&nbsp;</th>
                  <th>&nbsp;</th>
				          <th>&nbsp;</th>
                  <th>&nbsp;</th>
                  <th>&nbsp;</th>
              
                  <th style="color:red;"><?php if($currency_position == 'left')
				  {echo $global_currency.number_format($fourth_sub_total, 2, '.', ',');}
				  else { echo number_format($fourth_sub_total, 2, '.', ',').$global_currency;} ?></th>
                  <th>&nbsp;</th>
				   <th>&nbsp;</th>
                </tr>
              <!--/tfoot-->
            </table>
          <div>
        </div>
      </div>
    </div>
  <!--/div>
  <!---------------------------------------------------- /.row end fourth-------------------------------- -->
  
  
   <!--div align="center" style="margin:50px;"-->
    <input type="hidden" id="web_url" value="" />
    <div class="row">
      <div class="col-xs-12">
        <div class="box box-info">
          <div class="box-header">
            <h3 style="text-decoration:font-weight:bold;color:orange" class="box-title">Fifth Weekly Returns</h3>
          </div>
          <div class="box-body">
            <table style="font-size:13px;" class="table sakotable table-bordered table-striped dt-responsive">
              <thead>
                <tr>
                  <th><?php echo $_data['text_2'];?></th>
                  <th><?php echo $_data['text_3'];?></th>
                  <th><?php echo $_data['text_4'];?></th>
                  <th><?php echo $_data['text_5'];?></th>
                  <th><?php echo $_data['text_6'];?></th>
                  <th><?php echo $_data['text_7'];?></th>
                  <th><?php echo $_data['text_8'];?></th>
				          <th><?php echo $_data['text_9'];?></th>
                  <th><?php echo $_data['text_10'];?></th>
				          <th><?php echo $_data['text_11'];?></th>
                  <th><?php echo $_data['text_12'];?></th>                   
                </tr>
              </thead>
              <tbody>
                <?php
			$fifth_sub_total = 0;
			$sql = "Select * FROM tblreturns WHERE week LIKE 'Fifth%' AND created_date LIKE '%/03/2020%' AND branch_id = " . (int)$_SESSION['branchId']. " ";
            	$result = $conn->query($sql);
				while($row = $result->fetch_assoc()) {   
				$fifth_sub_total +=(float)$row['amt'];
				
				?>
                <tr>
                  <!--td><img class="photo_img_round" style="width:50px;height:50px;" src="<?php echo $image;  ?>" /></td-->
				          <td><?php echo $row['name']; ?></td>
                  <td><?php echo $row['address']; ?></td>
				          <td><?php echo $row['phone']; ?></td>
                  <td><?php echo $row['tin']; ?></td>
                  <td><?php echo $row['confm_no']; ?></td>
                  <td><?php echo $row['occupt']; ?></td>
                  <td><?php echo $row['period']; ?></td>
                  <td><?php echo $row['tcc_recpt']; ?></td>
				          <td><?php echo $row['amt']; ?></td>
                  <td><?php echo $row['bank']; ?></td>
                  <td><?php echo $row['created_date']; ?></td>  
				        </tr>
                <?php } //mysql_close($link); ?>
              </tbody>			  
			   <!--tfoot-->
               <tr>
                  <th>Fifth Week Total</th>
                  <th>&nbsp;</th>
                  <th>&nbsp;</th>
                  <th>&nbsp;</th>
                  <th>&nbsp;</th>
				          <th>&nbsp;</th>
               	  <th>&nbsp;</th>
                   <th>&nbsp;</th>
                  <th style="color:red;"><?php if($currency_position == 'left')
				  {echo $global_currency.number_format($fifth_sub_total, 2, '.', ',');
				  }else { echo number_format($fifth_sub_total, 2, '.', ',').$global_currency;} ?></th>				  
				  <th>&nbsp;</th>
				  <th>&nbsp;</th> 
                </tr>
              <!--/tfoot-->
			  			  
              <tfoot>  
				<tr>
                  <th><h3>Grand Total</h3></th>
                  <th>&nbsp;</th>
                  <th>&nbsp;</th>
                  <th>&nbsp;</th>
                  <th>&nbsp;</th>
				          <th>&nbsp;</th>
                  <th>&nbsp;</th>
                  <th>&nbsp;</th>
                
                  <th style="color:red;"><h3>
				   <?php
           			$grand_total = $first_sub_total + $second_sub_total + $third_sub_total + $fourth_sub_total + $fifth_sub_total;?>
			<?php if($currency_position == 'left'){echo $global_currency.number_format($grand_total, 2, '.', ',');}
			else { echo number_format($grand_total, 2, '.', ',').$global_currency;} ?></h3>
				  
				  </th>				  
				  <th>&nbsp;</th>
				  <th>&nbsp;</th> 
                </tr>

				</tfoot>
				<!--tr><th></th><th></th></tr-->		  
            </table>
			
          </div>
        </div>
      </div>
    </div>
  </div>
 
  
<div align="center"><a class="btn btn-primary btn_save" onClick="javascript:print('printable','ODIRS - March 2020 Returns Summary');" 
href="javascript:void(0);"><?php echo $_data['text_13'];?></a></div>


</body>
</html>