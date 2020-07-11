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
	<article>
		<h2>Welcome to Online Blood Bank</h2>
		<p>
			Everyday, hundreds of children and adults require blood to save their life.<br>
			People like you donate blood to save these precious lives.<br><br>

			If you want to become a donor, you have to become a member. When another member is in need
			<br> of blood of your group, he/she will be able to search the database, find your name, 
			<br>address, phone number and email address and will contact you and request you to donate blood.<br>
		</p>
	</article>
	<br><br>
	<footer>
		<br>
		<h3 style="color: white; text-align: center;">Developed By Shahanaz<h3>
		<br>
	</footer>
</body>
</html>