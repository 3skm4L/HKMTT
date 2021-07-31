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
	<title>HealthKeeper Medicine Tracker</title>
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
					<a href="medications.php">Medications</a>
				</li>
				<li> | </li>
				<li>
					<a href="help.php">Need help?</a>
				</li>
				<li> | </li>
				<li>
					<a href="logout.php">Logout</a>
				</li>
			</ul>
		</div>
	</div>
	<div id="contents">
		<div class="clearfix">
			<img src="images/meds.png" alt="Img" height="342" width="400">
			<div>
				<h1>Missed a dose?</h1>
				<h2>Never again with HealthKeeper.</h2>
				<p>
					Healthkeeper helps track your medications so that you never miss a dose again. We will notify you when you need a refill, when it's time to take your meds, and tracks usage <span><br><br><a href="medications.php" class="btn">Start Tracking!</a><br><b>Don’t worry it’s for free</b></span>
				</p>
			</div>
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