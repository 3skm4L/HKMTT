<?php
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $user_data['user_name'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];

		if(!empty($name) && !empty($email) && !empty($subject) && !empty($message))
		{

			//save to database
			$query = "INSERT INTO help (user_name,name,email,subject,message) VALUES ('$user_name','$name','$email','$subject','$message')";

			mysqli_query($con, $query);

			header("Location: index.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}

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
		<div class="section">
			<h1>Contact</h1>
			<p>
				Please submit a detailed response of your concerns and our support team will get back to you via email as soon as possible!
			</p>
			<form method="post" class="message">
				<input type="text" name="name" value="Name" onFocus="this.select();" onMouseOut="javascript:return false;"/>
				<input type="text" name="email" value="Email" onFocus="this.select();" onMouseOut="javascript:return false;"/>
				<input type="text" name="subject" value="Subject" onFocus="this.select();" onMouseOut="javascript:return false;"/>
				<textarea type="text" name="message" /></textarea>
				<input type="submit" value="Send" />
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