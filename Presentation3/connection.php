<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "healthkeeperdb";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
