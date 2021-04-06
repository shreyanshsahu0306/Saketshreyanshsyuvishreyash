

<!--
Author: Colorlib
Author URL: https://colorlib.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Weddingz-Signup</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/signup.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->

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
		<h1>Sign-Up</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="SERVER.php" method="post">
					<input class="text email" type="text" name="fullname" placeholder="Full-Name" required = "">
                
					<input class="text email" type="tel" name="phonenumber" placeholder="Phone-number" required = "" >
					<input class="text email" type="email" name="email" placeholder="Email" required = "">
					<input class="text email" type="password" name="password" placeholder="Password" required = "">
               
                    <input class="text email" type="password" name="confirmpassword" placeholder="Confirm-Password" required = "" >
					
					<div class="wthree-text">
                        <label class="anim">
							<input type="checkbox" class="checkbox" >
							<span>I Agree To The Terms & Conditions</span>
						</label>
						<div class="clear"> </div>
					</div>
					<button  class="btn btn-warning" name="reg_user">Sign-Up</button>
                <br>
				<p>
					Already a member ? <a href="login.php">Sign In</a>
                </p>
					
				</form>
                
				
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
</body>
</html>