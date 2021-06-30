<?php
include("check.php");
?>
<?php 
include("header.php");
include("connect.php");
?>

<?php

$sql ="select * from upload WHERE user_id='".$_SESSION['user_id']."'";
$result=$conn->query($sql);
$row = mysqli_fetch_array($result);

$schedule = $row['schedule'];
$payroll = $row['payroll'];
$letter = $row['letter'];
$certificate = $row['certificate'];

?>

<div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header"></h1>
                        </div>
                    </div>
                  
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                    <div class="panel-heading">
                       <b>  Result</b>
                    </div>
                                
                    <div class="panel-body">
                        <br>
                        <div class="table-responsive">
 <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <div class="col-sm-6">
                    <div id="dataTables-example_filter" class="dataTables_filter">
                        <thead>
                    <tr>
                    <th>Sr. No</th>
                    <th>Staff Schedule</th>
                    <th>Staff PayRoll</th>
                    <th>Application Letter</th>
                    <th>Certificate of Incorporation</th>
                   </tr>
                </thead>
                 <tbody>

                 <?php
                                            $count = 1;
                                            while ($row = mysqli_fetch_assoc($result)) {
                                            $id = $row['id'];
                                            }
                 ?>
                     <?php
foreach ($result as $row) {
     
    ?>                    

                 <tr>
                 <td><?php echo $count; ?></td>
                                        <td> <a href="<?php echo  $row['schedule']; ?>" download><?php echo $row['schedule']; ?></a></td>
                                        <td> <a href="<?php echo $row['payroll']; ?>" download><?php echo $row['payroll']; ?></a></td>
                                        <td> <a href="<?php echo $row['letter']; ?>" download><?php echo $row['letter']; ?></a></td>
                                        <td> <a href="<?php echo  $row['certificate']; ?>" download><?php echo $row['certificate']; ?></a></td>
                                        <?php $count++; } ?>
                </tr>

                                        </tbody>
                                        </table>
<?php
include("footer.php");
?>