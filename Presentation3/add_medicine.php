<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = 'Isaac';
		$medicine_name = $_POST['medicine_name'];
		$take_date = $_POST['take_date'];
		$amount = $_POST['amount'];
		$next_refill = $_POST['next_refill'];

		if(!empty($medicine) && !empty($take_date) && !empty($amount) && !empty($next_refill))
		{

			//save to database
			$query = "INSERT INTO medications (user_name,medicine_name,take_date,amount,next_refill) VALUES ('$user_name','$medicine_name','$take_date','$amount','$next_refill')";

			mysqli_query($con, $query);

			header("Location: medications.php");
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
	<title>Add Medications</title>
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
		<div class="features">
		
			<form method="post" class="message">
				<h4>Medicine</h4>
				<input id="text" type="text" name="medicine_name"><br><br>
				<h4>When to take (YYYY-MM-DD HH:MM:SS)</h4>
				<input id="text" type="text" name="take_date"><br><br>
				<h4>Amount</h4>
				<input id="text" type="text" name="amount"><br><br>
<<<<<<< HEAD
				<h4>Next refill (YYY-MM-DD)</h4>
				<input id="text" type="text" name="next_refill"><br><br>
=======
				<h4>Next refill (YYYY-MM-DD)</h4>
				<input id="text" type="password" name="next_refill"><br><br>
>>>>>>> 01635c31bc94fde1df50f08ffaeb5b47f0ad905c

				<input type="submit" value="Add Medication"/>

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
