<?php
include("connect.php");
session_start();
extract($_POST);
if(isset($_POST['btn']))
{	
	$username=$_POST['email'];
    $password=$_POST['password'];
	$pass = md5($password);
	$sql="select * from admin where email='".$username."' and password='".$password."' ";
	//$sql="select * from registration where username='$username'";

	$re = $conn->query($sql)->fetch_assoc();
	
	if(!empty($re))
	{
		
		 //$_SESSION['id']=$re['id'];
		 /*echo $_SESSION['id'];exit();*/
		$_SESSION['fname']=$re['fname'];
		$_SESSION['lname']=$re['lname'];
		$_SESSION['mobile']=$re['mobile'];
		$_SESSION['email']=$re['email'];
		//$_SESSION['password']=$re['password'];
		//$_SESSION['branch']=$re['branch'];
		$_SESSION['gender']=$re['gender'];
		header("location:a_dashboard.php");
		 

		}
	
	else
	{
	?>
	<script>
		alert('Invalid User And Password');
		window.location='index.php';
	</script>
	<?php
		
	}

}
?>