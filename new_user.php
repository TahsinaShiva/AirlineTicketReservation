<html>
	<head>
		<title>Create New User Account</title>
		<style>
			input {
    			border: 1px solid #000;
    			border-radius: 5px;
    			padding: 7px 40px;
			}
			input[type=submit] {
				background-color: #000;
				color: white;
    			border-radius: 4px;
    			padding: 7px 35px;
    			margin: 45px 135px;
			}
		</style>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
	</head>
	<body>
		<img class="logo" src="https://thumbs.dreamstime.com/t/plane-logo-vector-plane-logo-vector-template-120466030.jpg"/> 
		<h1 id="title">Zombie Airlines</h1>
		<div>
			<ul>
				<li><a href="home_page.php"><i class="fa fa-home" aria-hidden="true"></i><span style="padding-left:10px;">Home</span></a></li>
				<li><a href="login_page.php"><i class="fa fa-ticket" aria-hidden="true"></i><span style="padding-left:10px;">Book Tickets</span></a></li>
				<li><a href="#"><i class="fa fa-plane" aria-hidden="true"></i><span style="padding-left:10px;">About Us</span></a></li>
				<li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i><span style="padding-left:10px;">Contact Us</span></a></li>
				<li><a href="login_page.php"><i class="fa fa-sign-in" aria-hidden="true"></i><span style="padding-left:10px;">Login</span></a></li>
			</ul>
		</div>
		<br>
		<form class="center_form" action="new_user_form_handler.php" method="POST" id="new_user_from">
			<h4><i class="fa fa-user-plus" aria-hidden="true"></i><span style="padding-left:10px;"><strong>Create New User Account</span></strong></h4>
			<br>
			<table cellpadding='10' cellspacing="15">
				<strong><span style="padding-left:25px;">Enter Login Details</span></strong>
				<tr>
					<td><span style="padding-left:10px;">Enter a Valid Username</span></td>
					<td><input type="text" name="username" required><br><br></td>
				</tr>
				<tr>
					<td><span style="padding-left:10px;">Enter your Desired Password</span></td>
					<td><input type="password" name="password" required><br><br></td>
				</tr>
				<tr>
					<td><span style="padding-left:10px;">Enter your Email ID</span></td>
					<td><input type="text" name="email" required><br><br></td>
				</tr>
			</table>
			<br>
			<table cellpadding='10' cellspacing="15">
				<strong><span style="padding-left:25px;">Personal Details</span></strong>
				<tr>
					<td><span style="padding-left:10px;">Enter your name</span></td>
					<td><input type="text" name="name" required><br><br></td>
				</tr>
				<tr>
					<td><span style="padding-left:10px;">Enter your phone Number</span></td>
					<td><input type="text" name="phone_no" required><br><br></td>
				</tr>
				<tr>
					<td><span style="padding-left:10px;">Enter your Address</span></td>
					<td><input type="text" name="address" required><br><br></td>
				</tr>
			</table>
			<br>
			<input type="submit" value="Submit" name="Submit">
			<br>
		</form>
	</body>
</html>