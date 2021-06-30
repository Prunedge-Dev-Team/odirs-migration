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
                                                <label class="col-sm-3 col-form-label">Staff Schedule</label>
                                                <div class="col-sm-9">
                                                    <select class="form-control" name="fileUploadName1"
                                                        id="fileUploadName1" required>
                                                        <option value="">Please Select to Upload</option>
                                                        <option value="1">Upload Staff Schedule (xlsx & csv File Type)</option>
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
                                                <label class="col-sm-3 col-form-label">Staff Payroll</label>
                                                <div class="col-sm-9">
                                                    <select class="form-control" name="fileUploadName2"
                                                        id="fileUploadName2" required>
                                                        <option value="">Please Select to Upload</option>
                                                        <!-- <option value="1">D/Levy Receipt</option> -->
                                                        <option value="2">Staff Payroll (xlsx & csv File Type)</option>
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
                                                <label class="col-sm-3 col-form-label">Attachment Letter</label>
                                                <div class="col-sm-9">
                                                    <select class="form-control" name="fileUploadName3"
                                                        id="fileUploadName3" required>
                                                        <option value="">Please Select to Upload</option>
                                                        <!-- <option value="1">D/Levy Receipt</option>
                                                        <option value="2">Land Use Receipt</option> -->
                                                        <option value="3">Attachment Letter (PDF Format)</option>
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
                                                <label class="col-sm-3 col-form-label">Certificate of Inc.</label>
                                                <div class="col-sm-9">
                                                    <select class="form-control" name="fileUploadName4"
                                                        id="fileUploadName4" required>
                                                        <option value="">Please Select to Upload</option>
                                                        <!-- <option value="1">D/Levy Receipt</option>
                                                        <option value="2">Land Use Receipt</option>
                                                        <option value="3">D/Assessment Receipt</option> -->
                                                        <option value="4">Certificate of Incorporation (PDF Format)</option>
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
      <?php include "new_uploadAjax.php"; ?>
      <!-- /.box-body -->
		</div>
		<!-- /.box -->
	  </div>
	</div></div>
          

	
	<?php include('u_footer.php'); ?>
