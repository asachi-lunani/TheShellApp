<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shellondemand";

$con = mysqli_connect($servername, $username, $password, $dbname);
if(!$con){
	die("connection failed: ".mysqli_connect_error());
}