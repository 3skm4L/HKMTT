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
	<title>Add Medication</title>
</head>
<body>

	<style type="text/css">
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: lightblue;
		border: none;
	}

	#box{

		background-color: grey;
		margin: auto;
		width: 300px;
		padding: 20px;
	}

	</style>

	<div id="box">
		
		<form method="post">
			<h4>Medicine</h4>
			<input id="text" type="text" name="medicine_name"><br><br>
			<h4>When to take (YYY-MM-DD HH:MM:SS)</h4>
			<input id="text" type="text" name="take_date"><br><br>
			<h4>Amount</h4>
			<input id="text" type="text" name="amount"><br><br>
			<h4>Next refill (YYY-MM-DD)</h4>
			<input id="text" type="password" name="next_refill"><br><br>

			<input id="button" type="submit" value="Add Medicine"><br><br>

			<a href="medications.php">My Medications</a><br><br>
		</form>
	</div>
</body>
</html>