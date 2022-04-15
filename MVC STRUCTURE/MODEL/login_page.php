<?php
	session_start();
?>
<html>
	<head>
		<title>Account Login</title>
		<style>
			input {
    			border: 0 solid #fff;
    			padding: 7px 30px;
    			margin-left: 5px;
			}

			input[type=submit] {
				background-color: #000;
				color: white;
    			border-radius: 4px;
    			padding: 7px 45px;
    			margin: 6px 70px
			}
		</style>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
	</head>
	<body >
		<img class="logo" src="https://thumbs.dreamstime.com/t/plane-logo-vector-plane-logo-vector-template-120466030.jpg"/> 
		<h1 id="title">Zombie Airlines</h1>
		<div>
			<ul>
				<li><a href="home_page.php"><i class="fa fa-home" aria-hidden="true"></i><span style="padding-left:10px;"> Home</span></a></li>
				<li><a href="login_page.php"><i class="fa fa-ticket" aria-hidden="true"></i><span style="padding-left:10px;">Book Tickets</span></a></li>
				<li><a href="#"><i class="fa fa-plane" aria-hidden="true"></i><span style="padding-left:10px;">About Us</span></a></li>
				<li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i><span style="padding-left:10px;">Contact Us</span></a></li>
				<li><a href="login_page.php"><i class="fa fa-sign-in" aria-hidden="true"></i><span style="padding-left:10px;">Login</span></a></li>
			</ul>
		</div>
		

		<br>
		<br>
		<br>
		<form class="float_form" style="padding-left:50pt" action="login_handler.php" method="POST">
			<fieldset>
				<strong><span style="padding-left: 10px;">Login Details:-</span></strong><br><br>
				<strong> <span style="padding-left:10px;">Username:</span></strong><br>
				<input type="text" name="username" placeholder="Enter your username" required><br><br>
				<strong><span style="padding-left:10px;">Password:</span></strong><br>
				<input type="password" name="password" placeholder="Enter your password" required><br><br>
				<strong><span style="padding-left:10px;">User Type:</span></strong><br>
				<span style="padding-left:10px;"></style>Customer <input type='radio' name='user_type' value='Customer' checked/> Administrator <input type='radio' name='user_type' value='Administrator'/> </span><br>
				<br>
				<?php
					if(isset($_GET['msg']) && $_GET['msg']=='failed')
					{
						echo "<br>
						<strong style='color:red'><span style='padding-left: 20px'>Invalid Username/Password</span></strong>
						<br><br>";
					}
				?>
				<input type="submit" name="Login" value="Login">
			</fieldset>
			<br>
			<a href="new_user.php"><i class="fa fa-user-plus" aria-hidden="true"></i><strong><span style="padding-left: 20px;"> Create New User Account?</span></strong></a>
		</form>
	</body>
</html>