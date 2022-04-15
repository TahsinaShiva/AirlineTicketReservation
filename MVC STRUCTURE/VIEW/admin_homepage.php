<?php
	session_start();
?>
<html>
	<head>
		<title>Administrator</title>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
	</head>
	<body>
<img class="logo" src="https://thumbs.dreamstime.com/t/plane-logo-vector-plane-logo-vector-template-120466030.jpg"/> 
		<h1 id="title">Zombie Airlines</h1>
		<div>
			<ul>
				<li><a href="home_page.php"><i class="fa fa-home" aria-hidden="true"></i><span style="padding-left:10px;">Home</span></a></li>
				<li><a href="admin_homepage.php"><i class="fa fa-desktop" aria-hidden="true"></i><span style="padding-left:10px;">Dashboard</span></a></li>
				<li><a href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i><span style="padding-left:10px;">Logout</span></a></li>
			</ul>
		</div>
		<h2>Welcome Administrator!</h2><br>
		<table cellpadding="5" cellspacing="15">
			
			<tr>
				<td class="admin_func"><a href="admin_view_booked_tickets.php"><i class="fa fa-plane" aria-hidden="true"></i><span style="padding-left:10px;">View List of Booked Tickets for a Flight</span></a>
				</td>
			</tr>

			<tr>
				<td class="admin_func"><a href="add_flight_details.php"><i class="fa fa-plane" aria-hidden="true"></i><span style="padding-left:10px;">Add Flight Schedule Details</span></a>
				</td>
			</tr>
			
			<tr>
				<td class="admin_func"><a href="delete_flight_details.php"><i class="fa fa-plane" aria-hidden="true"></i><span style="padding-left:10px;">Delete Flight Schedule Details</span></a>
				</td>
			</tr>
			<tr>
				<td class="admin_func"><a href="add_jet_details.php"><i class="fa fa-plane" aria-hidden="true"></i><span style="padding-left:10px;">Add Aircrafts Details</span></a>
				</td>
			</tr>
			<tr>
				<td class="admin_func"><a href="activate_jet_details.php"><i class="fa fa-plane" aria-hidden="true"></i><span style="padding-left:10px;">Activate Aircraft</span></a>
				</td>
			</tr>
			<tr>
				<td class="admin_func"><a href="deactivate_jet_details.php"><i class="fa fa-plane" aria-hidden="true"></i><span style="padding-left:10px;">Deactivate Aircraft</span></a>
				</td>
			</tr>
			<tr>
				<td class="admin_func"><a href="admin_cancel_booked_tickets.php"><i class="fa fa-plane" aria-hidden="true"></i><span style="padding-left:10px;">Cancel Passenger Ticket</span></a>
				</td>
			</tr>
		</table>
	</body>
</html>