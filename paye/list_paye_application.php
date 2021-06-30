<?php include('u_header.php'); ?>
	<?php
	include('utility/common.php');
	include('language/English/lang_list_tax_payer_cat.php');
	$delinfo = 'none';
	$addinfo = 'none';
	$msg = "";
	if(isset($_GET['id']) && $_GET['id'] != '' && $_GET['id'] > 0){
		$sqlx= "DELETE FROM `upload` WHERE id = ".$_GET['id'];
		$result = $conn->query($sqlx);
		$delinfo = 'block';
	}
	if(isset($_GET['m']) && $_GET['m'] == 'add'){
		$addinfo = 'block';
		$msg = $_data['added_tax_payer_category_successfully'];
	}
	if(isset($_GET['m']) && $_GET['m'] == 'up'){
		$addinfo = 'block';
		$msg = $_data['update_tax_payer_category_successfully'];
	}
	?>
	<!-- Content Header (Page header) -->
	
	<section class="content-header">
	 
	  <ol class="breadcrumb">
		<li><a href="u_dashboard.php"><i class="fa fa-dashboard"></i><?php echo $_data['home_breadcam'];?></a></li>
		<li class="active"><?php echo $_data['add_new_tax_payer_category_breadcam'];?></li>
	  </ol>
	</section><br/>
	<!-- Main content -->
	<section class="content">
	<!-- Full Width boxes (Stat box) -->
	<div class="row">
	  <div class="col-xs-12">

		<div id="me" class="alert alert-danger alert-dismissable" style="display:<?php echo $delinfo; ?>">
		  <button aria-hidden="true" data-dismiss="alert" class="close" type="button"><i class="fa fa-close"></i></button>

		  <h4><i class="icon fa fa-ban"></i> <?php echo $_data['delete_text'];?> </h4>
		  <?php echo $_data['delete_tax_payer_category_information'];?> </div>
		<div id="you" class="alert alert-success alert-dismissable" style="display:<?php echo $addinfo; ?>">
		  <button aria-hidden="true" data-dismiss="alert" class="close" type="button"><i class="fa fa-close"></i></button>

		  <h4><i class="icon fa fa-check"></i><?php echo $_data['success'];?> !</h4>
		  <?php echo $msg; ?> </div>
		<div align="right" style="margin-bottom:1%;"> <a class="btn btn-primary" data-toggle="tooltip" href="upload_file.php" 
		data-original-title="<?php echo $_data['add_new_tax_payer_category_breadcam'];?>"><i class="fa fa-plus"></i></a> <a class="btn btn-primary" 
		data-toggle="tooltip" href="u_dashboard.php" data-original-title="<?php echo $_data['home_breadcam'];?>"><i class="fa fa-dashboard"></i></a> </div>
		<div class="box box-info">
		  <div class="box-header">
			<h3 class="box-title"><?php echo $_data['tax_payer_details'];?></h3>
		  </div>
		  <!-- /.box-header -->
		  <div class="box-body">
		      
			<!--table class="table sakotable table-bordered table-striped dt-responsive"-->
			<div class="table-responsive download-table">
				<table id = 'myTable' class="table table-bordered table-striped ">
			  <thead>
				<tr>
				<th><?php echo $_data['add_new_form_field_text_0'];?></th>
                <th><?php echo $_data['add_new_form_field_text_1'];?></th>
				<th><?php echo $_data['add_new_form_field_text_2'];?></th>  
			  <th><?php echo $_data['add_new_form_field_text_3'];?></th>
			  <th><?php echo $_data['add_new_form_field_text_4'];?></th>
			  <th><?php echo $_data['add_new_form_field_text_5'];?></th>
			  <th><?php echo $_data['add_new_form_field_text_6'];?></th>
			  <th><?php echo $_data['add_new_form_field_text_7'];?></th>
			  <th><?php echo $_data['add_new_form_field_text_8'];?></th>
				    
			  <th><?php echo $_data['action_text'];?></th>  
				
				</tr>
			  </thead>
			  <tbody>
				<?php
                //$sql = "SELECT * FROM tblCategory  where branch_id = $_SESSION[branchId]";
                $sql ="select * from upload  WHERE user_id='".$_SESSION['user_id']."'  ";
                $count = 1;
				$result = $conn->query($sql);
				while($row = $result->fetch_assoc()) {
                $id = $row['id'];     
				?>
				<tr>
				  <!--td><img class="photo_img_round" style="width:50px;height:50px;" src="<?php echo $image;  ?>" /></td-->
				  <td><?php echo $count; ?></td>
				  <td><?php echo $row['months']; ?></td>
				  <td><?php echo $row['year']; ?></td>
				  <td><?php echo $row['schedule']; ?></td>
                <td><?php echo $row['payroll']; ?></td>
			   <td><?php echo $row['letter']; ?></td>
               <td><?php echo $row['certificate']; ?></td>
			   <td><?php echo $row['date_of_inc']; ?></td>
			   <td><?php echo $row['up_date']; ?></td>
			   
			   
			   <td><a class="btn btn-success" data-toggle="tooltip" href="javascript:;" onClick="$('#nurse_view_<?php echo $row['id']; ?>')
				  .modal('show');" data-original-title="<?php echo $_data['view_text'];?>"><i class="fa fa-eye"></i></a> 
				  
				  <!--a class="btn btn-primary"
				   data-toggle="tooltip" href="addcat.php?id=<?php echo $row['id']; ?>" data-original-title="<?php echo $_data['edit_text'];?>">
				   <i class="fa fa-pencil"></i></a--> 
				   
				   <a class="btn btn-danger" data-toggle="tooltip" onClick="deleteReturns(<?php echo $row['id']; ?>);" 
				   href="javascript:;" data-original-title="<?php echo $_data['delete_text'];?>"><i class="fa fa-trash-o"></i></a>

				   <div id="nurse_view_<?php echo $row['id']; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					  <div class="modal-dialog">
						<div class="modal-content">
						  <div class="modal-header orange_header">
							<button aria-label="Close" data-dismiss="modal" class="close" type="button"><span aria-hidden="true"><i class="fa fa-close"></i></span></button>
							<h3 class="modal-title"><?php echo $_data['paye_payer_details'];?></h3>
						  </div>
						  <div class="modal-body model_view" align="center">&nbsp;
							<div><img class="photo_img_round" style="width:100px;height:100px;" src="img/no_image.jpg" /></div>
							
						  </div>
						  <div class="modal-body">
							<h3 style="text-decoration:underline;"><?php echo $_data['details_information'];?></h3>
							<div class="row">
							  <div class="col-xs-12">

							  
							   
							<b><?php echo $_data['add_new_form_field_text_1'];?> :</b> <?php echo $row['months']; ?><br/> 
                            <b><?php echo $_data['add_new_form_field_text_2'];?> :</b> <?php echo $row['year']; ?><br/>
							<b><?php echo $_data['add_new_form_field_text_3'];?> :</b> <?php echo $row['schedule']; ?><br/> 
                            <b><?php echo $_data['add_new_form_field_text_4'];?> :</b> <?php echo $row['payroll']; ?><br/>
                            <b><?php echo $_data['add_new_form_field_text_5'];?> :</b> <?php echo $row['letter']; ?><br/>
							<b><?php echo $_data['add_new_form_field_text_6'];?> :</b> <?php echo $row['certificate']; ?><br/> 
                            <b><?php echo $_data['add_new_form_field_text_7'];?> :</b> <?php echo $row['date_of_inc']; ?><br/>
                            <b><?php echo $_data['add_new_form_field_text_8'];?> :</b> <?php echo $row['up_date']; ?><br/>
				
							  </div>
							</div>
						  </div>
						</div>
						<!-- /.modal-content -->
					  </div>
					</div></td>
				
			   
				</tr>
				<?php $count++;}  ?>
			  </tbody>
			</table>
		  </div></div>
		  <!-- /.box-body -->
		</div>
		<!-- /.box -->
	  </div>
	  <!-- /.col -->
	</div>
	<!-- /.row -->
	<script type="text/javascript">
	function deleteReturns(Id){
		var iAnswer = confirm("Are you sure you want to delete this Record ?");
		if(iAnswer){
			window.location = 'list_paye_application.php?id=' + Id;
		}
	  }
	  
	  $( document ).ready(function() {
		setTimeout(function() {
			  $("#me").hide(3000);
			  $("#you").hide(3000);
		}, 3000);
	});
	</script>

<script type="text/javascript">
    $(document).ready( function () {
    $('#myTable').DataTable();
   } );
   </script>
	<?php include('u_footer.php'); ?>
