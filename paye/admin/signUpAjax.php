<?php
//include("header.php");
include("connect.php");
//include("general.php");

if(isset($_REQUEST['btn']))
{
  $appNo = "ODIRS/PAYE/".date("Y")."/".time();
  $pass=$_POST['pass'];

  $reg_date = date('Y-m-d h:i:s');
  $result = $conn->query("select * from paye_applicant where appNo=$appNo");
 
  if(mysqli_num_rows($result)>0)
  {
    $_GLOBALS['message']="Sorry the Enrollment Number you entered is not available. Try with some other name.";
    ?>
    <script>
        alert('Sorry the Enrollment Number you entered is not available. Try with some other name');
        window.location='applicant.php';
      </script>
    <?php
  }else if(empty($_REQUEST['org_name'])||empty ($_REQUEST['email'])||empty ($_REQUEST['pass'])||empty ($_REQUEST['pswd_again'])||empty($_REQUEST['phone'])||empty($_REQUEST['appNo'])||empty($_REQUEST['sem'])||empty($_REQUEST['branch'])||empty($_REQUEST['reg_date'])||empty($_REQUEST['address']))
  
  {

    $q = "insert into paye_applicant (name,email,pass,phone,appNo,sem,branch,reg_date,address) 
    values ('".$_POST['name']."', '".$_POST['email']."', '".$_POST['pass']."', '".$_POST['phone']."', '$appNo', '".$_POST['sem']."',
    '".$_POST['branch']."','$reg_date','".$_POST['address']."')";

     $res=$conn->query($q);?>
   <!--script>window.location='applicant_login.php';</script-->
   <?php
    $r_id = mysqli_insert_id($conn);
    $pass = md5($_POST['pass']);
    $q1 = "insert into applicant_login (r_id, appNo, pass) values ('$r_id', '$appNo','".$pass."')";
   $res1=$conn->query($q1);
    
  }

  $url = "signUpMsg.php?appNo=".$appNo; 
    echo '<script language="javascript">location.href ="'.$url.'"</script>';
  
}

?>