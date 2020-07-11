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
		<div class="fild">
			<form action ="ins.php" method="post">
			<div class="row">
			<br /><strong style="font-size: 30px;"> Give your information </strong><br />
			<div class="column">
				First Name  <br />
				<input type="text" name="first_name"  required="required" />
				<br /> <br/>
				 Last Name  <br />
				<input type="text" name="last_name" required="required" />
				<br /> <br/>
				Mobile <br />
				<input type="text"name="mobile" required="required"/>
				<br /><br />
				E-mail <br />
				<input type="text" name="email" />
				<br /> <br/>
				City <br />
				<select name ="city" required="required">
				    <option >Choose City</option>
					<option value="Sylhet">Sylhet</option>
					<option value="Dhaka">Dhaka</option>
					<option value="Ctg">Chitagong</option>
					<option value="Khulna">Khulna</option>
				</select>
				<br /> <br/>
				</div>
				<div class="column">
				Area <br />
				<input type="text" name="street" required="required" />
				<br /> <br/>
				Road Number<br />
				<input type="text" name="road" required="required" />
				<br /> <br/>
				House Number<br />
				<input type="text" name="house" required="required" />
				<br /> <br/>
				Country <br />
				<input type="text" name="country" required="required"/>
				<br /> <br/>
				Gender <br />
				<select name="gender" required="required" />
				 <option>Select Gender</option>
					<option value="Male">Male</option>
					<option value="Female">Female</option>
				</select>
				<br /> <br/>
				</div>
				<div class="column">
				Blood Type <br />
				<select name ="type_of_blood">
				    <option value="Choose blood type" >Choose blood type</option>
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
				 Date of Birth<br />
				<input type="date"name="date_of_birth" required="required"/>
				<br /><br />
				Height(ft)<br />
				<input type="text"name="height" required="required"/>
				<br /><br />
				Weight(kg)<br />
				<input type="text"name="weight" required="required"/>
				<br /><br />
				 Password<br />
				<input type="password"name ="password" required="required"/>
				<br /> <br/>
				</div>
				<button type="submit">Register Now!</button>
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