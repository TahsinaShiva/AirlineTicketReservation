<?php
	session_start();
?>
<html>
	<head>
		<title>Add Flight Schedule Details</title>
		<style>
			input {
    			border: 1px solid #000;
    			border-radius: 5px;
    			padding: 7px 30px;
    			margin-top: 10px;
    			margin-left: 10px;
			}
			input[type=submit] {
				background-color: #000;
				color: white;
    			border-radius: 4px;
    			padding: 7px 45px;
    			margin: 25px 200px
			}
			table {
			margin-left:30px; 
			width: 50%;
  			border-collapse: collapse;
  		}
  		table, tr, td {
  			padding-right: 20px;
  			
  			} 
		</style>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
	</head>
	<body>
		<img class="logo" src="https://thumbs.dreamstime.com/t/plane-logo-vector-plane-logo-vector-template-120466030.jpg"/> 
		<h1 id="title">Zmobie Airlines</h1>
		<div>
			<ul>
				<li><a href="admin_homepage.php"><i class="fa fa-home" aria-hidden="true"></i><span style="padding-left:10px;">Home</span></a></li>
				<li><a href="admin_homepage.php"><i class="fa fa-desktop" aria-hidden="true"></i><span style="padding-left:10px;">Dashboard</span></a></li>
				<li><a href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i><span style="padding-left:10px;">Logout</span></a></li>
			</ul>
		</div>
		<form action="add_flight_details_form_handler.php" method="post">
			<h2><span style="padding-left:22%;">Enter the Flight Schedule Details</h2>
				<br>
			<?php
				if(isset($_GET['msg']) && $_GET['msg']=='success')
				{
					echo "<strong style='color: green'>The Flight Schedule has been Successfully Added</strong>
						<br>
						<br>";
				}
				else if(isset($_GET['msg']) && $_GET['msg']=='failed')
				{
					echo "<strong style='color: red'>*Invalid Flight Schedule Details,Please Enter again</strong>
						<br>
						<br>";
				}
			?>
			<table cellpadding="5" cellspacing="">
				<tr>
					<td class="fix_table"><span style="padding-left:10px;">Flight Number</span></td>
				</tr>
				<tr>
					<td class="fix_table"><input type="text" name="flight_no" required></td>
				</tr>
			</table>
			<br>
			<table cellpadding="5" cellspacing="15">
				<tr>
					<td class="fix_table"><span style="padding-left:10px;">Origin</span></td>
					<td class="fix_table"><span style="padding-left:10px;">Destination</span></td>
				</tr>
				<tr>
					<td class="fix_table"><input type="text" name="origin" required></td>
					<td class="fix_table"><input type="text" name="destination" required></td>
				</tr>
			</table>
			<br>
			
			<table cellpadding="5" cellspacing="15">
				<tr>
					<td class="fix_table"><span style="padding-left:10px;">Departure Date</span></td>
					<td class="fix_table"><span style="padding-left:10px;">Arrival Date</span></td>
				</tr>
				<tr>
					<td class="fix_table"><input type="date" name="dep_date" required></td>
					<td class="fix_table"><input type="date" name="arr_date" required></td>
				</tr>
			</table>
			<br>
			<table cellpadding="5" cellspacing="15">
				<tr>
					<td class="fix_table"><span style="padding-left:10px;">Departure Time</span></td>
					<td class="fix_table"><span style="padding-left:10px;">Arrival Time</span></td>
				</tr>
				<tr>
					<td class="fix_table"><input type="time" name="dep_time" required></td>
					<td class="fix_table"><input type="Time" name="arr_time" required></td>
				</tr>
			</table>
			<br>
			
			<table cellpadding="5" cellspacing="15">
				<tr>
					<td class="fix_table"><span style="padding-left:10px;">Number of Seats in Economy Class</span></td>
					<td class="fix_table"><span style="padding-left:10px;">Number of Seats in Business Class</span></td>
				</tr>
				<tr>
					<td class="fix_table"><input type="number" name="seats_eco" required></td>
					<td class="fix_table"><input type="number" name="seats_bus" required></td>
				</tr>
			</table>
			<br>
			
			<table cellpadding="5" cellspacing="15">
				<tr>
					<td class="fix_table"><span style="padding-left:10px;">Ticket Price(Economy Class)</span></td>
					<td class="fix_table"><span style="padding-left:10px;">Ticket Price(Business Class)</span></td>
				</tr>
			</table>
			<table cellpadding="5" cellspacing="15">
				<tr>
					<td class="fix_table">
						<input type="number" name="price_eco" required>
					</td>
					<td class="fix_table">
						<input type="number" name="price_bus" required>
					</td>
				</tr>
			</table>
			<br>
			
			<table cellpadding="5" cellspacing="15">
				<tr>
					<td class="fix_table"><span style="padding-left:10px;">Jet ID</span></td>
				</tr>
				<tr>
					<td class="fix_table">
						<input type="text" name="jet_id" required>
					</td>
				</tr>
			</table>
			<br>
			<input type="submit" value="Submit" name="Submit">
		</form>
	</body>
</html>