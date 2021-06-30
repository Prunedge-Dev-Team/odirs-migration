<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
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
			<div class="left w3-card-4 w3-hide-small w3-hide-medium">
			<h3 class=w3-margin>User Sign-Up Instruction</h3><hr/>
				<br/>
				<p>Sign-up here first to apply for PAYE. You will be redirected to another page after signing up.
				Click login on this page and provide your generated username and password.
				Note that, your email address is your username.
				 After a successful login, you will again be redirected to your dashboard.
				 Before uploading, rename all your documents to your organization name using the format depicted below: <br/>
				  </p><hr/>

				  <b> organization name/filename/month</b>
				<hr/>
				Upload your documents and provide other relevant details. All Uploaded documents can be viewed
				on your dashboard for future reference.
			</div>
			<div class="right">
                <!--a href="#"><i class="fa fa-home fa-2x w3-text-orange"></i></a-->
                <img src="login_img/logo.png" style="height: 50px; width: 150px;" class="main-logo" 
                alt="odirs_logo" id="main_logo" hspace="20">
                <form action="" method="POST"><h2>Sign Up</h2>
                <input type="text" class="field" id="name" name="name" placeholder=" Company Name" required>
                <input type="text" class="field" id="email" name="email" placeholder=" Email" required>
                <input type="text" class="field" id="phone" name="phone" placeholder=" Phone" required>
                <input type="text" class="field" id="address" name="address" placeholder="Company's Address" required>
                <input type="password" class="field" id="pass" name="pass" placeholder="Password" required>
                <input type="password" class="field" id="pswd_again" name="conf_pass" placeholder="Confirm Password" required>
                
               				<!-- <textarea placeholder="Message" class="field"></textarea> -->
				<button class="btn" name="btn">Register</button>
				<br>
				<a href="index.php" class="w3-text-red loginstyle">Already have an accout? Login</a>
            </form>
            <?php include "signUpAjax.php"; ?>
			</div>
		</div>
	</div>
</body>
</html>