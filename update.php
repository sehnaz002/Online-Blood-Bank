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
		$sql="SELECT * FROM `donor` WHERE `email` LIKE '$e' AND `password` LIKE '$p'";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()){
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
		<a href="profile.php"><button>Profile</button></a>
		<a href="login.php"><button>Logout</button></a>
		</center>
		<br><br>
	</header>
	<br><br>
	<center>
		<div class="fild">
			<form action ="updateNow.php" method="post">
			<div class="row">
			<br /><strong style="font-size: 30px;"> Update your information </strong><br />
			<div class="column">
				First Name  <br />
				<input type="text" name="first_name"  value="<?php echo $row['first_name']; ?>" />
				<br /> <br/>
				 Last Name  <br />
				<input type="text" name="last_name" value="<?php echo $row['last_name']; ?>" />
				<br /> <br/>
				Mobile <br />
				<input type="text"name="mobile" value="<?php echo $row['mobile']; ?>"/>
				<br /><br />
				E-mail <br />
				<input type="text" name="email" value="<?php echo $row['email']; ?>" />
				<br /> <br/>
				</div>
				<div class="column">
				Area <br />
				<input type="text" name="street" value="<?php echo $row['street']; ?>" />
				<br /> <br/>
				Road Number<br />
				<input type="text" name="road" value="<?php echo $row['road_no']; ?>" />
				<br /> <br/>
				House Number<br />
				<input type="text" name="house" value="<?php echo $row['house_no']; ?>" />
				<br /> <br/>
				Country <br />
				<input type="text" name="country" value="<?php echo $row['country']; ?>"/>
				<br /> <br/>
				</div>
				<div class="column">
				City <br />
				<input type="text" name="city" value="<?php echo $row['city']; ?>"/>
				<br /> <br/>
				Height(ft)<br />
				<input type="text"name="height" value="<?php echo $row['height']; ?>"/>
				<br /><br />
				Weight(kg)<br />
				<input type="text"name="weight" value="<?php echo $row['weight']; ?>"/>
				<br /><br />
				 Password<br />
				<input type="password"name ="password" required="required"/>
				<br /> <br/>
				</div>
				<button type="submit">Update Now!</button>
				</div>
				<br />
			</form>
		</div>
	</center>
	<br><br>
	<footer>
		<br>
		<h3 style="color: white; text-align: center;">Developed By Shahanaz<h3>
		<br>
	</footer>
</body>
</html>
<?php
	}
	}
	else{
		//header('refresh:0;url=login.php');
	}
}
?>