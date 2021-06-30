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
				<h3 class=w3-margin> PAYE Administrator Login</h3><hr/>
				<p>Kindly login with your ODIRS administrative credentials.</p><hr/>
			</div>
			<div class="right">
                <!--a href="#"><i class="fa fa-home fa-2x w3-text-green"  src="img/irs_logo.png"></i></a-->
                <img src="login_img/logo.png" style="height: 100px; width: 300px;" class="main-logo" 
                alt="odirs_logo" id="main_logo" hspace="20">
                <hr/>
				<form action="admin_user.php" method="POST"><h2>Admin Login</h2>
				<input type="text" class="field" name="email" placeholder="Admin Username">
				<input type="password" class="field" name="password" placeholder="Admin Password">
				<button class="btn" name="btn">ADMIN Login</button>
				
			</form><hr/>
			</div>
		</div>
	</div>
</body>
</html>