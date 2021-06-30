<?php 
	include('u_header2.php');
	include('utility/common.php');
	include('language/English/lang_add_tax_payer_cat.php');
	
	
	$success = "none";
	$cat_name = '';
	$cat_designation = 0;
	$branch_id = '';
	$created_date = '';
	$title = $_data['add_new_tax_payer_category'];
	$button_text = $_data['save_button_text'];
    $successful_msg = $_data['added_tax_payer_category_successfully'];

if(isset($_POST['btn']) && $_FILES['fname']['size']>0)
{
// File 1 ///////////////////////////////////////////////////    
$fileName=$_FILES['fname']['name'];
$tmpName=$_FILES['fname']['tmp_name'];
$fileSize=$_FILES['fname']['size'];
$fileType=$_FILES['fname']['type'];
$uploadDir = 'admin/upload/';

$filePath = $uploadDir . $fileName;

$result = move_uploaded_file($tmpName, $filePath);
if (!$result) {
echo "Error uploading file";
exit;
}
if(!get_magic_quotes_gpc())
{
$fileName = addslashes($fileName);
$filePath = addslashes($filePath);
}
//File 2///////////////////////////////////////////////////////

$fileName1=$_FILES['fname1']['name'];
$tmpName=$_FILES['fname1']['tmp_name'];
$fileSize=$_FILES['fname1']['size'];
$fileType=$_FILES['fname1']['type'];
$uploadDir = 'admin/upload/';

$filePath = $uploadDir . $fileName1;

$result = move_uploaded_file($tmpName, $filePath);
if (!$result) {
echo "Error uploading file";
exit;
}
if(!get_magic_quotes_gpc())
{
$fileName1 = addslashes($fileName1);
$filePath = addslashes($filePath);
}
//File 3/////////////////////////////////////////////////////////

$fileName2=$_FILES['fname2']['name'];
$tmpName=$_FILES['fname2']['tmp_name'];
$fileSize=$_FILES['fname2']['size'];
$fileType=$_FILES['fname2']['type'];
$uploadDir = 'admin/upload/';

$filePath = $uploadDir . $fileName2;

$result = move_uploaded_file($tmpName, $filePath);
if (!$result) {
echo "Error uploading file";
exit;
}
if(!get_magic_quotes_gpc())
{
$fileName2 = addslashes($fileName2);
$filePath = addslashes($filePath);
}
//File 4/////////////////////////////////////////////////////////

$fileName3=$_FILES['fname3']['name'];
$tmpName=$_FILES['fname3']['tmp_name'];
$fileSize=$_FILES['fname3']['size'];
$fileType=$_FILES['fname3']['type'];
$uploadDir = 'admin/upload/';

$filePath = $uploadDir . $fileName3;

$result = move_uploaded_file($tmpName, $filePath);
if (!$result) {
echo "Error uploading file";
exit;
}
if(!get_magic_quotes_gpc())
{
$fileName3 = addslashes($fileName3);
$filePath = addslashes($filePath);
}
//////////////////////////////////////////////////////////////////
$months = $_POST['months'];
$year = $_POST['year'];
$date_of_inc = $_POST['date_of_inc'];
$up_date = date('Y-m-d h:i:s');
$user_id = $_SESSION['user_id'];
//$date_of_inc = $_POST['date_of_inc'];
$sql = "INSERT INTO upload (user_id, schedule, payroll, letter, certificate, date_of_inc, months, year, size, type, path, up_date) ".
"VALUES ($user_id, '$fileName', '$fileName1', '$fileName2', '$fileName3', '$date_of_inc', '$months', '$year', '$fileSize', '$fileType', '$filePath', '$up_date')";

$url = "list_paye_application.php?m=add"; 
    echo '<script language="javascript">location.href ="'.$url.'"</script>';

if($conn->query($sql)==TRUE)
  {
    echo '<script language="javascript">location.href ="'.$url.'"</script>'; ?>
  <?php
  }else
  {
    echo "Something Wrong" . $conn->error;
  }
 }
    

	
			?>
	<!-- Content Header (Page header) -->
	
	<!-- Content Header (Page header) -->
	
	<section class="content-header">
	  <!--h1><?php echo $title;?></h1-->
    <br/>
	  <ol class="breadcrumb">
		<li><a href="u_dashboard.php"><i class="fa fa-dashboard"></i>
		<?php echo $_data['home_breadcam'];?></a></li>
		<li class="active"><?php echo $_data['add_new_tax_payer_category_breadcam'];?></li>
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
			<h3 class="box-title"><?php echo $_data['add_new_tax_payer_category'];?></h3>

		  </div>


	<!------------------------------------------------ Main content ------------------------------------------------------------------>
	<form  method="POST" enctype="multipart/form-data">
<!--div id="page-wrapper">
    <div class="container-fluid">
    <div class="row">
    <div class="col-lg-12">
    <h3 style="margin-top: 5%;">Upload Your Organization PAYE Documents
 </h3>
 </div>
        </div>
                    
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                          
                                            <form role="form">

                                                   <div class="row">
                                                    <div class="col-lg-6"-->
                                              
                                                    <div class="box-body">

                                                    <div class="col-lg-6">
                    <div class="form-group">
                    <label for="month">Month</label>
                    <select type="text" class="form-control" name="months" required>
                    <option value="Select Month">Select Month</option>
                    <option value="January">January</option>
                    <option value="February">February</option>
                    <option value="March">March</option>
                    <option value="April">April</option>
                    <option value="May">May</option>
                    <option value="June">June</option>
                    <option value="July">July</option>
                    <option value="August">August</option>
                    <option value="September">September</option>
                    <option value="October">October</option>
                    <option value="November">November</option>
                    <option value="December">December</option>
                    </select>
                   </div></div>


                   <div class="col-lg-6">
                    <div class="form-group">
                    <label for="year">Year</label>
                    <select type="text" class="form-control" name="year" required>
                    <option value="Select Month">Select Year</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                    </select>
                   </div></div>
        
                    <div class="col-lg-6">
                   <div class="form-group">
                    <label >Upload Staff Schedule (xlsx & csv File Type)</label>
                   <input type="file" name="fname" class="form-control"  required>
                    </div></div>

                    <div class="col-lg-6">
                    <div class="form-group">
                    <label >Staff Payroll (xlsx & csv File Type)</label>
                   <input type="file" name="fname1" class="form-control"  required>
                    </div></div>

                    <div class="col-lg-6">             
                    <div class="form-group">
                    <label >Attachment Letter (PDF Format)</label>
                   <input type="file" name="fname2" class="form-control"  required>
                    </div></div>

                    <div class="col-lg-6">
                    <div class="form-group">
                    <label >Certificate of Incorporation (PDF Format)</label>
                   <input type="file" name="fname3" class="form-control"  required>
                    </div></div>


                   <div class="col-lg-6">
                    <div class="form-group">
                    
                    </div></div>
                   

                   <div class="col-lg-6">
                    <div class="form-group">
                    <label >Date of Business Commencement</label>
                   <input type="date" name="date_of_inc" class="form-control"  required>
                    </div></div>

                    <hr/>

                    


                    
                    
          <div class="form-group pull-right">
            <input type="submit" name="btn" class="btn btn-primary" value="<?php echo $button_text; ?>"/>
         </div>
        </div>
        <input type="hidden" value="<?php echo $hdnid; ?>" name="hdn"/>
         
      </form>

      <!-- /.box-body -->
		</div>
		<!-- /.box -->
	  </div>
	</div>
            <!--/form>
        </div>
  
</div></div>
<button type="submit" class="btn btn-default" name="btn">Submit</button></center-->
                                        

	
	<?php include('u_footer.php'); ?>
