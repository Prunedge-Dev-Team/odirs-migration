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
$uploadDir = 'C:\xampp\htdocs\aPaye1\upload/';

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
$uploadDir = 'C:\xampp\htdocs\aPaye1\upload/';

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
$uploadDir = 'C:\xampp\htdocs\aPaye1\upload/';

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
$uploadDir = 'C:\xampp\htdocs\aPaye1\upload/';

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

$user_id = $_SESSION['user_id'];
//$date_of_inc = $_POST['date_of_inc'];
$sql = "INSERT INTO upload (user_id, schedule, payroll, letter, certificate, date_of_inc, month, size, type, path) ".
"VALUES ($user_id, '$fileName', '$fileName1', '$fileName2', '$fileName3', '$date_of_inc', '$month', '$fileSize', '$fileType', '$filePath')";
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

                                              
                    <div class="box-body">



                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Upload D/Levy</label>
                                                <div class="col-sm-9">
                                                    <select class="form-control" name="fileUploadName1"
                                                        id="fileUploadName1" required>
                                                        <option value="">Please Select to Upload</option>
                                                        <option value="1">D/Levy Receipt</option>
                                                        <!-- <option value="2">Land Use Receipt</option>
                                                        <option value="3">D/Assessment Receipt</option>
                                                        <option value="4">Other Receipt of Payments</option> -->
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Please provide a valid record.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <div class="col-sm-12">
                                                    <div class="input-group col-xs-12">
                                                        <input type="file" name="fileUpload1"
                                                            class="form-control file-upload-info"
                                                            placeholder="Upload file. size < 3000Kb" required />
                                                        <span class="input-group-append">
                                                            <button class="file-upload-browse btn btn-primary"
                                                                type="button">Upload</button>
                                                        </span>
                                                        <div class="invalid-feedback">
                                                            Please provide a valid record.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Upload LUC </label>
                                                <div class="col-sm-9">
                                                    <select class="form-control" name="fileUploadName2"
                                                        id="fileUploadName2" required>
                                                        <option value="">Please Select to Upload</option>
                                                        <!-- <option value="1">D/Levy Receipt</option> -->
                                                        <option value="2">Land Use Receipt</option>
                                                        <!-- <option value="3">D/Assessment Receipt</option>
                                                        <option value="4">Other Receipt of Payments</option> -->
                                                    </select>

                                                    <div class="invalid-feedback">
                                                        Please provide a valid record.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <div class="col-sm-12">
                                                    <div class="input-group col-xs-12">
                                                        <input type="file" name="fileUpload2"
                                                            class="form-control file-upload-info"
                                                            placeholder="Upload file. size < 3000Kb" required />
                                                        <span class="input-group-append">
                                                            <button class="file-upload-browse btn btn-primary"
                                                                type="button">Upload</button>
                                                        </span>
                                                        <div class="invalid-feedback">
                                                            Please provide a valid record.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Upload D/Assessmt</label>
                                                <div class="col-sm-9">
                                                    <select class="form-control" name="fileUploadName3"
                                                        id="fileUploadName3" required>
                                                        <option value="">Please Select to Upload</option>
                                                        <!-- <option value="1">D/Levy Receipt</option>
                                                        <option value="2">Land Use Receipt</option> -->
                                                        <option value="3">D/Assessment Receipt</option>
                                                        <!-- <option value="4">Other Receipt of Payments</option> -->
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Please provide a valid record.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <div class="col-sm-12">
                                                    <div class="input-group col-xs-12">
                                                        <input type="file" name="fileUpload3"
                                                            class="form-control file-upload-info"
                                                            placeholder="Upload file. size < 3000Kb" required />
                                                        <span class="input-group-append">
                                                            <button class="file-upload-browse btn btn-primary"
                                                                type="button">Upload</button>
                                                        </span>
                                                        <div class="invalid-feedback">
                                                            Please provide a valid record.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Upload Others</label>
                                                <div class="col-sm-9">
                                                    <select class="form-control" name="fileUploadName4"
                                                        id="fileUploadName4" required>
                                                        <option value="">Please Select to Upload</option>
                                                        <!-- <option value="1">D/Levy Receipt</option>
                                                        <option value="2">Land Use Receipt</option>
                                                        <option value="3">D/Assessment Receipt</option> -->
                                                        <option value="4">Other Receipt of Payments</option>
                                                    </select>

                                                    <div class="invalid-feedback">
                                                        Please provide a valid record.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <div class="col-sm-12">
                                                    <div class="input-group col-xs-12">
                                                        <input type="file" name="fileUpload4"
                                                            class="form-control file-upload-info"
                                                            placeholder="Upload file. size < 3000Kb" required />
                                                        <span class="input-group-append">
                                                            <button class="file-upload-browse btn btn-primary"
                                                                type="button">Upload</button>
                                                        </span>
                                                        <div class="invalid-feedback">
                                                            Please provide a valid record.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
        
   
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
	</div></div>
          

	
	<?php include('u_footer.php'); ?>
