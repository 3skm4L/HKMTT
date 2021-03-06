<?php
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE HTML>

<html>
<head>
	<meta charset="UTF-8">
	<title>HealthKeeper Help</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="header">
		<div>
			<div class="logo">
				<a href="index.php">HealthKeeper</a>
			</div>
			<ul id="navigation">
				<li class="active">
					<a>   </a>
				</li>
				<li>
					<a href="medications.php">My Medications</a>
				</li>
				<li>
					<a href="help.php">Need help?</a>
				</li>
				<li>
					<a href="logout.php">Logout</a>
				</li>
			</ul>
		</div>
	</div>
	<div id="contents">
		<div class="section">
			<h1>Contact</h1>
			<p>
				Please submit a detailed response of your concerns and our support team will get back to you via email as soon as possible!
			</p>
			<form action="index.html" method="post" class="message">
				<input type="text" value="Name" onFocus="this.select();" onMouseOut="javascript:return false;"/>
				<input type="text" value="Email" onFocus="this.select();" onMouseOut="javascript:return false;"/>
				<input type="text" value="Subject" onFocus="this.select();" onMouseOut="javascript:return false;"/>
				<textarea></textarea>
				<input type="submit" value="Send"/>
			</form>
		</div>
		<div class="section contact">
			<p>
				For Inquiries Please Call: <span>636-922-8000</span>
			</p>
			<p>
				Or you can visit us at: <span>HealthKeeper Inc.<br> 4601 Mid Rivers Mall Dr, Cottleville MO, 63376</span>
			</p>
		</div>
	</div>
	<div id="footer">
		<div class="clearfix">
			<div id="connect">
				<a  target="_blank" class="facebook"></a><a target="_blank" class="googleplus"></a><a target="_blank" class="twitter"></a><a  target="_blank" class="tumbler"></a>
			</div>
			<p>
				© 2021 Two man group. All Rights Reserved
			</p>
		</div>
	</div>
</body>
</html>