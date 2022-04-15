<?php
	session_start();
?>
<html>
	<head>
		<title>Cancel Booked Tickets</title>
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
    			margin: 0px 68px;
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
				<li><a href="customer_homepage.php"><i class="fa fa-desktop" aria-hidden="true"></i> <span style="padding-left:10px;">Dashboard</span></a></li>
				<li><a href="home_page.php"><i class="fa fa-plane" aria-hidden="true"></i> <span style="padding-left:10px;">About Us</span></a></li>
				<li><a href="home_page.php"><i class="fa fa-phone" aria-hidden="true"></i> <span style="padding-left:10px;">Contact Us</span></a></li>
				<li><a href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i><span style="padding-left:10px;"> Logout</span></a></li>
			</ul>
		</div>
		<form action="admin_cancel_booked_tickets_from_handler.php" method="post">
			<h2>CANCEL BOOKED TICKETS</h2>
			<?php
				if(isset($_GET['msg']) && $_GET['msg']=='failed')
				{

					echo "<strong style='color: red'><span style=\"padding-left:20px\">*Invalid PNR, please enter PNR again</span></strong>
						<br>
						<br>";
				}
			?>
			<table cellpadding="5" cellspacing="15" style="padding-left: 30px;">
				<tr>
					<td class="fix_table">Enter the PNR</td>
				</tr>
				<tr>
					<td class="fix_table"><input type="text" name="pnr" required></td>
				</tr>
			</table>
			<br>
			<input type="submit" value="Cancel Ticket" name="Cancel_Ticket">
		</form>
	</body>
</html>