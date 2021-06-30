<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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
			<h3 class=w3-margin>User Login Instruction</h3><hr/>
				<p>After a Successful login, applicants are required to upload the following supporting documents in the following format 
				<b>(businessname/type of file/month/year)</b><hr/>
				<li>Rename your Staff Schedule as:<br/> <b>yourbusinessname-staffschedule-january-2020</b></li>
				<li>Rename your Staff Payroll as:<br/> <b>yourbusinessname-payroll-january-2020</b></li>
				<li>Rename Your Application Letter as:<br/> <b>yourbusinessname-appletter-january-2020</b></li>
				<li>Rename Your Certificate of Incorporation as:<br/> <b>yourbusinessname-certificate of inc-january-2020</b></li>
				 </p>
				
				
				
				<hr/>

				<p><b>For futher enquiries, please call the following numbers:<br/> 0818-839-7000 | 0902 847 7004 | 0810 486 4804.</b></p><hr/>
			</div>

			
				
			
			<div class="right">
                <!--a href="#"><i class="fa fa-home fa-2x w3-text-green"  src="img/irs_logo.png"></i></a-->
                <img src="login_img/logo.png" style="height: 100px; width: 300px;" class="main-logo" 
                alt="odirs_logo" id="main_logo" hspace="20">
                <hr/>
				<form action="paye_user.php" method="POST"><h2>Login</h2>
				<input type="text" class="field" name="email" placeholder="Username: companymail@gmail.com">
				<input type="password" class="field" name="pass" placeholder="Password: *********************">
				<button class="btn" name="btn">Login</button>
				<a  href="signup.php" class="btn style">Register Here</a>
			</form><hr/>
			</div>
		</div>
	</div>
</body>
</html>