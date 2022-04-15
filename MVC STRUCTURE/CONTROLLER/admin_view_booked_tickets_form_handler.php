<?php
	session_start();
?>
<html>
	<head>
		<title>View Booked Tickets</title>
		<style>
			input {
    			border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 7px 30px;
			}
			input[type=submit] {
				background-color: #030337;
				color: white;
    			border-radius: 4px;
    			padding: 7px 45px;
    			margin: 0px 390px
			}
			table {
			margin-left:30px; 
			width: 95%;
			border: 1px solid black;
  			border-collapse: collapse;
  		}
  		table, tr, td {
  			padding-right: 20px;
  			border: 1px solid black;
  			} 
  			table th{
  				height: 25px;
  				border: 1px solid black;
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
		<h2><span style="padding-left:18%;">List of Booked Tickets for the Flight</span></h2>
		<br>
		<?php
			if(isset($_POST['Submit']))
			{
				$data_missing=array();
				if(empty($_POST['flight_no']))
				{
					$data_missing[]='Flight No.';
				}
				else
				{
					$flight_no=trim($_POST['flight_no']);
				}
				if(empty($_POST['departure_date']))
				{
					$data_missing[]='Departure Date';
				}
				else
				{
					$departure_date=$_POST['departure_date'];
				}

				if(empty($data_missing))
				{
					require_once('Database Connection file/mysqli_connect.php');
					$query="SELECT pnr,date_of_reservation,class,no_of_passengers,payment_id,customer_id FROM Ticket_Details where flight_no=? and journey_date=? and booking_status='CONFIRMED' ORDER BY class";
					$stmt=mysqli_prepare($dbc,$query);
					mysqli_stmt_bind_param($stmt,"ss",$flight_no,$departure_date);
					mysqli_stmt_execute($stmt);
					mysqli_stmt_bind_result($stmt,$pnr,$date_of_reservation,$class,$no_of_passengers,$payment_id,$customer_id);
					mysqli_stmt_store_result($stmt);
					if(mysqli_stmt_num_rows($stmt)==0)
					{
						echo "<h3>No Booked Tickets Information is Available!</h3>";
					}
					else
					{
						echo "<table  cellpadding=\"10\"";
						echo "<tr><th><span style='padding-left: 5px'>PNR</span></th>
						<th>Date of Reservation</th>
						<th><span style='padding-left: 8%'>Class</th>
						<th>No. of Passengers</th>
						<th>Payment ID</th>
						<th>Customer ID</th>
						</tr>";
						while(mysqli_stmt_fetch($stmt)) {
        					echo "<tr>
							<td><span style='padding-left: 35%'>".$pnr."</span></td>
							<td><span style='padding-left: 35%'>".$date_of_reservation."</span></td>
							<td><span style='padding-left: 35%'>".$class."</span></td>
							<td><span style='padding-left: 50%'>".$no_of_passengers."</span></td>
							<td><span style='padding-left: 35%'>".$payment_id."</span></td>
							<td><span style='padding-left: 35%'>".$customer_id."</span></td>
        					</tr>";
    					}
    					echo "</table> <br>";
    				}
					mysqli_stmt_close($stmt);
					mysqli_close($dbc);
					// else
					// {
					// 	echo "Submit Error";
					// 	echo mysqli_error();
					// }
				}
				else
				{
					echo "The following Data Fields were Empty! <br>";
					foreach($data_missing as $missing)
					{
						echo $missing ."<br>";
					}
				}
			}
			else
			{
				echo "Submit Request not Received";
			}
		?>
	</body>
</html>