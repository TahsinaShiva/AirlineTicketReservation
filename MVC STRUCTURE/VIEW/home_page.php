<?php
	session_start();
?>
<html>
	<head>
		<title>Zombie Airlines</title>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
	</head>
	<body>
		<img class="logo" src="https://thumbs.dreamstime.com/t/plane-logo-vector-plane-logo-vector-template-120466030.jpg"/>
		<h1 id="title">Zombie Airlines</h1>
			<ul>
				<li><a href="#"><i class="fa fa-home" aria-hidden="true"></i><span style="padding-left:10px;"></span>Home</a></li>
				<li>
					<?php
						if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Customer')
						{
							echo "<a href=\"book_tickets.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i><span style='padding-left:10px'>Book Tickets</span></a>";
						}
						else if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Administrator')
						{
							echo "<a href=\"admin_ticket_message.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i><span style='padding-left:10px'> Book Tickets</span></a>";
						}
						else
						{
							echo "<a href=\"login_page.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i><span style='padding-left:10px'>Book Tickets</span></a>";
						}
					?>
				</li>
				<li><a href="#"><i class="fa fa-plane" aria-hidden="true"></i><span style="padding-left:10px;">About Us</span></a></li>
				<li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i><span style="padding-left:10px;">Contact Us</span></a></li>
				<li>
					<?php
						if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Customer')
						{
							echo "<a href=\"customer_homepage.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i><span style='padding-left:10px'>Login</span></a>";
						}
						else if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Administrator')
						{
							echo "<a href=\"admin_homepage.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i><span style='padding-left:10px'>Login</span></a>";
						}
						else
						{
							echo "<a href=\"login_page.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i><span style='padding-left:10px'>Login</span></a>";
						}
					?>
				</li>
			</ul>
		<div class="container">
			<div class="welcome_text">Welcome to Zombie Airlines!</div>
			<img src="https://img.wallpapersafari.com/desktop/1920/1080/15/18/EsM7Or.jpg" width=100%>
		</div>
	</body>
</html>
