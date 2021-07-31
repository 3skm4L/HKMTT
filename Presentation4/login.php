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

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Login</title>
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
				<h2>Login</h2>
				
				<h4>Username</h4>
				<input id="text" type="text" name="user_name">
				<h4>Password</h4>
				<input id="text" type="password" name="password"><br><br>

				<input type="submit" value="Login"/>
				
				<li>
				<a href="signup.php">Click to Signup</a>
				</li>
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