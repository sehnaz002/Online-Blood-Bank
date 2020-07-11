<?php
	session_start();
	$e = $_SESSION["mail"];
	$p = $_SESSION["pass"];

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "blood_bank";
	$conn = new mysqli($servername,$username,$password,$dbname);
	if($conn->connect_error){
		die("connection failed : ".$conn->connect_error);
	}
	else{
		$sql="UPDATE `donor` SET `first_name`='$_POST[first_name]',`last_name`='$_POST[last_name]',`mobile`='$_POST[mobile]',`email`='$_POST[email]',`city`='$_POST[city]',`street`='$_POST[street]',`road_no`='$_POST[road]',`house_no`='$_POST[house]',`country`='$_POST[country]',`height`='$_POST[height]',`weight`='$_POST[weight]',`password`='$_POST[password]' WHERE `email` LIKE '$e' AND password LIKE '$p'";
			$conn->query($sql);
			header('refresh:0;url=profile.php');
		}
?>