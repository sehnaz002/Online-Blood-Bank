<?php
	
	// session_start();
	// $_SESSION["mail"]=$_POST['email'];
	// $_SESSION["pass"]=$_POST['password'];
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "blood_bank";
	$conn = new mysqli($servername,$username,$password,$dbname);
	if($conn->connect_error){
		die("connection failed : ".$conn->connect_error);
	}
	else{
	
		$sql="INSERT INTO donor (first_name,last_name,mobile,email,city,street,road_no,house_no,country,gender,date_of_birth,password,blood_type,height,weight)
		VALUES('$_POST[first_name]','$_POST[last_name]','$_POST[mobile]','$_POST[email]','$_POST[city]','$_POST[street]','$_POST[road]','$_POST[house]','$_POST[country]','$_POST[gender]','$_POST[date_of_birth]','$_POST[password]','$_POST[type_of_blood]','$_POST[height]','$_POST[weight]')";

		if($conn->query($sql)===true){
			//echo "Hello";

		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Online Blood Bank</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<br>
	<header>
		<br>
		<center>
	    <h1>Online Blood Bank</h1>  
		<a href="index.php"><button>Home</button></a>
		<a href="donor.php"><button>Donors</button></a>
		<a href="reg.php"><button>Registration</button></a>
		<a href="login.php"><button>Login</button></a>
		</center>
		<br><br>
	</header>
	<br><br>
<center>
    <div class="fild" style="">
    	
  		<form action ="login2.php" method="post">
		<div class="row">
			<br><strong style="font-size: 30px;"> Registration Complete </strong><br>
			<br /><strong style="font-size: 30px;"> Log in </strong><br /><br>
			E-mail <br />
			<input type="text" name="email" />
			<br /><br />
			Password<br />
			<input type="password"name ="password" required="required"/>
			<br /> <br/>
			<button type="submit">Login</button><br><br>
			</div>
			</form>
	</div>
<br /> <br/>
</center>
	<br><br>
	<footer>
		<br>
		<h3 style="color: white; text-align: center;">Developed By Shahanaz<h3>
		<br>
	</footer>
</body>
</html>