<!DOCTYPE html>
<?php
	session_start();
?>
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
    <div class="fild" style="">
    	
  		<form action ="donor2.php" method="post">
		<div class="row">
			<br /><strong style="font-size: 30px;"> Search Here </strong><br /><br>
		Blood Type <br />
			<select name ="type_of_blood" required="required">
			    <option >Choose blood type</option>
				<option value="A+">A+</option>
				<option value="B+">B+</option>
				<option value="AB+">AB+</option>
				<option value="O+">O+</option>
				<option value="A-">A-</option>
				<option value="B-">B-</option>
				<option value="AB-">AB-</option>
				<option value="O-">O-</option>
			</select>
			<br /><br />
			City <br />
			<select name ="city" required="required">
			    <option >Choose City</option>
				<option value="Sylhet">Sylhet</option>
				<option value="Dhaka">Dhaka</option>
				<option value="Ctg">Chitagong</option>
				<option value="Khulna">Khulna</option>
			</select>
			<br /> <br/>
			<button type="submit">Search Now</button><br><br>
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