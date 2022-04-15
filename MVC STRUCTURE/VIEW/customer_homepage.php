<?php
	session_start();
?>
<html>
	<head>
		<title>Welcome Customer</title>

		<style>
			input {
    			border: 1.5px solid #000;
    			border-radius: 4px;
    			padding: 7px 30px;
			}
			input[type=submit] {
				background-color: #000;
				color: white;
    			border-radius: 4px;
    			padding: 7px 45px;
    			margin: 0px 127px
			}
			input[type=date] {
				border: 1.5px solid #000;
    			border-radius: 4px;
    			padding: 5.5px 44.5px;
			}
			select {
    			border: 1.5px solid #000;
    			border-radius: 4px;
    			padding: 6.5px 75.5px;
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
				<li><a href="customer_homepage.php"><i class="fa fa-home" aria-hidden="true"></i><span style="padding-left:10px;">Home</span></a></li>
				<li><a href="customer_homepage.php"><i class="fa fa-desktop" aria-hidden="true"></i><span style="padding-left:10px;">Dashboard</span></a></li>
				<li><a href="home_page.php"><i class="fa fa-plane" aria-hidden="true"></i><span style="padding-left:10px;">About Us</span></a></li>
				<li><a href="home_page.php"><i class="fa fa-phone" aria-hidden="true"></i><span style="padding-left:10px;">Contact Us</span></a></li>
				<li><a href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i><span style="padding-left:10px;">Logout</span></a></li>
			</ul>
		</div>
		<br>

		<?php
			echo "<h2>Welcome ".$_SESSION['login_user']."</h2>";
			
		?>
		<table cellpadding="5" cellspacing="15">
			<tr>
				<td class="admin_func"><a href="book_tickets.php"><i class="fa fa-plane" aria-hidden="true"></i><span style="padding-left:10px;">Book Flight Tickets</span></a>
				</td>
			</tr>
			<tr>
				<td class="admin_func"><a href="view_booked_tickets.php"><i class="fa fa-plane" aria-hidden="true"></i><span style="padding-left:10px;">View Booked Flight Tickets</span></a>
				</td>
			</tr>
			<tr>
				<td class="admin_func"><a href="cancel_booked_tickets.php"><i class="fa fa-plane" aria-hidden="true"></i><span style="padding-left:10px;">Cancel Booked Flight Tickets</span></a>
				</td>
			</tr>
		</table>
	</body>
</html>