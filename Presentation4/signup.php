<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "INSERT INTO users (user_id,user_name,password) VALUES ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Sign-Up</title>
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
		<div class="features">
		
			<form method="post" class="message">
				<h3>Signup</h3>
				
				<h4>Username</h4>
				<input id="text" type="text" name="user_name"/>
				
				<h4>Password</h4>
				<input id="text" type="password" name="password"/><br><br>
				<input type="submit" value="Signup!">
			</form>
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
</body>
</html>