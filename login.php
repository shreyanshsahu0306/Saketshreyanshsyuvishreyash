<!--
Author: Colorlib
Author URL: https://colorlib.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php

//index.php

//Include Configuration File



// if(!isset($_SESSION['access_token']))
// {

//  $login_button = '<a href="'.$google_client->createAuthUrl().'">Login With Google</a>';
// }

?>
<html>

<head>
	<title>Creative Colorlib SignUp Form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script
		type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- Custom Theme files -->
	<link href="css/login.css" rel="stylesheet" type="text/css" media="all" />
	<!-- //Custom Theme files -->
	<!-- web font -->
	<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
	<!-- //web font -->

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
		integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>

<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>Login</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="SERVER.php" method="post">

					<input class="text email" type="email" name="email" placeholder="Email" required="">
					<input class="text" type="password" name="password" placeholder="Password" required="">

					<div class="wthree-text">

						<div class="clear"> </div>
					</div>
					<br>
					<button class="btn btn-warning" name="login_user">Login</button>
				</form>
				<div class="or-seperator"><b>or</b></div>
				<div class="social-btn text-center">
					<a href="#" class="btn btn-primary btn-lg"><i class="fa fa-facebook"></i> Facebook</a>
					<a href="#" class="btn btn-info btn-lg"><i class="fa fa-twitter"></i> Twitter</a>
					<?php
					include('GoogleAPI.php');

					$login_button = '';


					if(isset($_GET["code"]))
					{

					$token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);


					if(!isset($token['error']))
					{
					
					$google_client->setAccessToken($token['access_token']);

					
					$_SESSION['access_token'] = $token['access_token'];


					$google_service = new Google_Service_Oauth2($google_client);

					
					$data = $google_service->userinfo->get();

					
					if(!empty($data['given_name']))
					{
					$_SESSION['user_first_name'] = $data['given_name'];
					}

					if(!empty($data['family_name']))
					{
					$_SESSION['user_last_name'] = $data['family_name'];
					}

					if(!empty($data['email']))
					{
					$_SESSION['user_email_address'] = $data['email'];
					}

					if(!empty($data['gender']))
					{
					$_SESSION['user_gender'] = $data['gender'];
					}

					if(!empty($data['picture']))
					{
					$_SESSION['user_image'] = $data['picture'];
					}
					}
					}
					if(!isset($_SESSION['access_token']))
					{
 				 	$login_button = '<a href="'.$google_client->createAuthUrl().'">Google</a>';
					
					// <a href="#" class="btn btn-info btn-lg"><i class="fa fa-twitter"></i> Twitter</a>
					echo '<span align = "center" class="btn btn-Danger btn-lg" <i class="fa fa-googlr"></i>'.$login_button.'</span>';
					}
					?>
				</div>
				<br>

				<p>Don't have an account?<a href="signup.php"> Sign-Up</a></p>
			</div>
		</div>

		<!-- //copyright -->
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	<!-- //main -->




	<!--------FOOOOOOOOTERRRRRR-->







	<script src="https://kit.fontawesome.com/bb81b3fcd8.js" crossorigin="anonymous"></script>
</body>



</html>