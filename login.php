<!DOCTYPE html>
<?php 
	session_start();
	session_unset();
	session_destroy();
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