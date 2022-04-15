<?php
	session_start();
?>
<html>
	<head>
		<title>View Booked Tickets</title>
		<style>
			input {
    			border: 1px solid #000;
    			border-radius: 5px;
    			padding: 10px 40px;
    			margin-left: 50px;
    			margin-top: 15px;
			}
			input[type=submit] {
				background-color: #000;
				color: white;
    			border-radius: 4px;
    			padding: 7px 35px;
    			margin: 50px 250px;
			}
			input[type=date] {
				border: 1px solid #000;
    			border-radius: 5px;
				padding: 10px 40px;
    			margin-left: 50px;
    			margin-top: 15px;;
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
				<li><a href="admin_homepage.php"><i class="fa fa-home" aria-hidden="true"></i><span style="padding-left:10px;">Home</span></a></li>
				<li><a href="admin_homepage.php"><i class="fa fa-desktop" aria-hidden="true"></i><span style="padding-left:10px;">Dashboard</span></a></li>
				<li><a href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i><span style="padding-left:10px;">Logout</span></a></li>
			</ul>
		</div>
		<form action="admin_view_booked_tickets_form_handler.php" method="post">
			<h2>View List of Booked Tickets for a Flight</h2>
			<br><br>
			<div>
			<table cellpadding="5">
				<tr>
					<td class="fix_table"><span style="padding-left:55px;"><strong>Enter the Flight No.</span></strong></td>
					<td class="fix_table"><span style="padding-left:55px;"><strong>Enter the Departure Date</span></strong></td>
				</tr>
				<tr>
					<td class="fix_table"><input type="text" name="flight_no" required></td>
					<td class="fix_table"><input type="date" name="departure_date" required></td>
				</tr>
			</table>
			<br>
			<br>
			<input type="submit" value="Submit" name="Submit">
			</div>
		</form>
	</body>
</html>