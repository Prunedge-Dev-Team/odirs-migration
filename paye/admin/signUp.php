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
				<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum, facilis pariatur enim 
                    vitae qui sit tempore odio fuga soluta adipisci alias cum dolor debitis nam, esse ducimus amet,
                     deleniti accusamus mollitia animi doloremque? Ut quas doloribus distinctio dicta sequi minima
                      excepturi ratione illo hic quos, sunt quod dolor corporis a.</p><hr/>
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
				<a href="index.php" class="w3-text-red loginstyle">Already have an accout? Login</a>
            </form>
            <?php include "signUpAjax.php"; ?>
			</div>
		</div>
	</div>
</body>
</html>