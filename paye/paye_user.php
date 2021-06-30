<?php
include("connect.php");
session_start();
extract($_POST);
if(isset($_POST['btn']))
{
    $encry_pass = md5($pass);
    //$appNo=$_POST['appNo'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    
    //$q="select * from applicant_login where appNo ='$appNo'";
    $q="select * from applicant_login where email ='$email'";
    $res=$conn->query($q);
    $num=mysqli_num_rows($res);
     
    $row=$res->fetch_assoc();
     if(!empty($row)){ 
    $rid=$row['r_id'];

    $q2 = "select sem, branch from paye_applicant where id= $rid";
    $res2=$conn->query($q2);
    $row2=$res2->fetch_assoc();

    if($num>0)
    {
        
        $_SESSION['user_id']=$row['r_id'];
        $_SESSION['user_name']=$row['appNo'];
       $_SESSION['user_sem']=$row2['sem'];
        $_SESSION['user_branch']=$row2['branch'];
        $_SESSION['user_email']=$row2['email'];
        if($row['pass']== $encry_pass)
        {
            
            header('location:u_dashboard.php');

        } 
        else
		{
?>
			<script>
				alert('Invalid User And pass');
				window.location='index.php';
			</script>
	<?php
		
		}
	}
}
 else
	{
	?>
	<script>
		alert('Invalid User And pass');
		window.location='index.php';
	</script>
	<?php
		
	}

}

?>