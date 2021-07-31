<?php
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);
	
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$id=$_POST['id'];
		$user_name = $user_data['user_name'];
		echo $id;
		echo $user_name;
		
		if(!empty($id))
		{

			$query = "DELETE FROM medications WHERE id=CAST($id AS UNSIGNED) && user_name='$user_name'";

			mysqli_query($con, $query);

			header("Location: medications.php");
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
	<title>My Medications</title>
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
			<h1>Current Medications</h1>
			<p>
				As of <script> document.write(new Date().toLocaleDateString()); </script>, your current medications are:
			</p>
			<div>
				<table>
					<tr>
						<th>ID</th>
						<th><?php echo "Medicine"; ?></th>
						<th>Next Dose</th>
						<th>Amount (mg)</th>
						<th>Next Refill</th>
						<th><a href="add_medicine.php">Add</a></th>
					</tr>
					<?php

					$records = mysqli_query($con,"select * from medications"); // fetch data from database
					
					while($data = mysqli_fetch_array($records))
					{

						if($user_data['user_name'] === $data['user_name'])
						{
					?>

					  <tr>
					    <td><?php echo $data['id']; ?></td>
					    <td><?php echo $data['medicine_name']; ?></td>
					    <td><?php echo $data['take_date']; ?></td>
					    <td><?php echo $data['amount']; ?></td>
					    <td><?php echo $data['next_refill']; ?></td>
					  </tr>	
					<?php
						}
					}
					?>
					</table>

				<form method="post">
					<input id="text" type="text" name="id">
					<input type="submit" value="Delete">
				</form>
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