<?php
   include("connect.php");
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="login_css/style.css">
	<link rel="stylesheet" href="login_css/w3.css">
	<link rel="stylesheet" href="login_css/all.css">
	<link rel="stylesheet" href="login_css/all.min.css">
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
</head>
<body>
	<div class="container mx-auto">
		<div class="contact-box">
			
			<div class="right"><i>Your Application has been successfully submitted. Below is your PAYE Registration Number.</i>
                            <hr>
							<b>PAYE Application No:</b>
                          
							<?php  if(isset($_GET['appNo'])){ echo $_GET['appNo'] ; }  else{ echo ""; }  ?>
							
							<hr/>
							
				<a  href="index.php" class="btn style">Login Here</a>
			</div>

			

			<div class="left w3-card-4">
				<h1 class=w3-margin>Instruction</h1><hr/>
				<p>
				Kindly note that, your email address and your password are both required to login.<br/>
                Hence, endeavor to keep your username number and password safe.<br/><hr/>
                <h6>The Executive Chairman, ODIRS.</h6>
				</p>
			</div>
		</div>
	</div>
</body>
</html>
