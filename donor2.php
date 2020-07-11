<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Online Blood Bank</title>
	<link rel="stylesheet" href="style.css">
	<style type="text/css">
		.fild{
		    width: 65%;
		    border: 1px solid white;
			background-image:url(p1.jpg);
			background-size: cover;
			border-top-left-radius: 50px;
		  	border-top-right-radius: 50px;
		  	border-bottom-right-radius: 50px;
			border-bottom-left-radius: 50px;
			font-family: "Comic Sans MS", cursive, sans-serif;
			color:;
		}
	</style>
</head>
<body>
	<br>
	<header>
		<br>
		<center>
	    <h1>Online Blood Bank</h1>  
		<a href="index.php"><button>Home</button></a>
		<a href="donor.php"><button>Donors</button></a>
		<?php
		if (isset($_SESSION["mail"])){
			echo "<a href='profile.php'><button>Profile</button></a>
				  <a href='login.php'><button>Logout</button></a>";
		}
		else{
			echo "<a href='reg.php'><button>Registration</button></a>
				  <a href='login.php'><button>Login</button></a>";
		}
		?>
		</center>
		<br><br>
	</header>
	<br><br>
<center>
    <div class="fild">
    	<br><br>
		<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "blood_bank";
			$conn = new mysqli($servername,$username,$password,$dbname);
			if($conn->connect_error){
				die("connection failed : ".$conn->connect_error);
			}
			else{
				$bt = $_POST['type_of_blood'];
				$c = $_POST['city'];
				$d1 = date("Y-m-d");
				$sql="SELECT * FROM donor WHERE blood_type LIKE '$bt' AND city LIKE '$c'";
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()){
		?>
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
    			<?php
    				$d2 = $row["date_of_birth"];
    				$date1Timestamp = strtotime($d2);
					$date2Timestamp = strtotime($d1);
					$difference = (int)(($date2Timestamp - $date1Timestamp)/(24*60*60*365));
    			?>
    			Age : <?php echo $difference; ?>
    			<br><br>
    			Height & Weight : <?php echo $row["height"]." Fit & ".$row["weight"]." Kg"; ?>
    			<br><br>
    		</div>
    		------------------------------------------------------------------------------<br>
    		------------------------------------------------------------------------------
    		<br> <br>
    	</div>
    	<?php
    		}
    			}
    		}
    	?>
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