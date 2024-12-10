<?php
	require_once("./log.php");
?>

<html lang="en">
	
<head>
	<title>Login </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="lcss.css">
    <link rel="stylesheet" type="text/css" href="inner-page-style.css">
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<div id="page" class="site">
		<header class="site-header">
			<div class="top-header">
				<div class="container">
					<div class="top-header-left">
						<div class="top-header-block">
							<a href="mailto:info@educationpro.com"><i class="fas fa-envelope"></i>  LET'STRAVEL@gmail.com</a>
						</div>
						<div class="top-header-block">
							<a href="tel:+9779813639131"><i class="fas fa-phone"></i> +977 9813639131</a>
						</div>
					</div>
					<div class="top-header-right">
						<div class="social-block">
							<ul class="social-list">
								<li><a href=""><i class="fab fa-viber"></i></a></li>
								<li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
								<li><a href=""><i class="fab fa-facebook-square"></i></a></li>
								<li><a href=""><i class="fab fa-facebook-messenger"></i></a></li>
								<li><a href=""><i class="fab fa-twitter"></i></a></li>
								<li><a href=""><i class="fab fa-skype"></i></a></li>
							</ul>
						</div>
						<div class="login-block">
							<a href="home.php">Home</a>
							
						</div>
					</div>
				</div>
			</div>
            <div class="main-header">
				<div class="container">
					<div class="logo-wrap">
						<img src="C:\Users\IMAD\Desktop\final  agency\_dc828ef2-b734-4736-ad2f-274d8c1748a6.jpeg" height="150" width="150" alt="Logo Image">
					</div>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
				<form class="login100-form validate-form flex-sb flex-w" method="POST">
					<span class="login100-form-title p-b-53">
						Sign in 
					</span>

					
					<form action="log.php" method="POST">
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Username
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Username is required">
						<input class="input100" type="text" name="username" >
						<span class="focus-input100"></span>
					</div>
					
					<div class="p-t-13 p-b-9">
						<span class="txt1">
							Password
						</span>

						<a href="#" class="txt2 bo1 m-l-5">
							Forgot?
						</a>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" >
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn m-t-17">
						<input type="submit" class="login100-form-btn" name="submit">
						<!-- <button >
							Sign In
						</button> -->
					</div>

					<div class="w-full text-center p-t-55">
						<span class="txt2">
							Not a member?
						</span>

						<a href="register.php" class="txt2 bo1">
							Sign up now
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>