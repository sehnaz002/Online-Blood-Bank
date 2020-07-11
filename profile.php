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
    	<br><br>
    	<div class="row">
    		<div class="column" style="width: 50%">
    			Name : <?php echo $row["first_name"]." ".$row["last_name"]; ?>
    			<br><br>
    			Mobile : <?php echo $row["mobile"]; ?>
    			<br><br>
    			E-malil : <?php echo $row["email"]; ?>
    			<br><br>
    			Address :<?php echo $row["house_no"].",".$row["street"].",".$row["city"].",".$row["country"]; ?>
    			<br><br>
    		</div>
    		<div class="column" style="width: 50%">
    			Gender : <?php echo $row["gender"]; ?>
    			<br><br>
    			Blood Group : <?php echo $row["blood_type"]; ?>
    			<br><br>
    			Date Of Birth : <?php echo $row["date_of_birth"]; ?>
    			<br><br>
    			Height & Weight : <?php echo $row["height"]." Fit & ".$row["weight"]." Kg"; ?>
    			<br><br>
    		</div>
    		<a href="update.php"><button>Update Profile </button></a>
    		<br> <br>
    	</div>
	</div>
<br>
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
		header('refresh:0;url=login.php');
	}
}
?>