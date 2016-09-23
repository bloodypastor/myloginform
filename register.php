<?php require 'Conections/connect.php';?>
<?php 
	
	if (isset($_POST['Register'])) {

		session_start();
		$FName = $_POST['First_Name'];
		$LName = $_POST['Last_Name'];
		$Email = $_POST['Email'];
		$PW = $_POST['Password'];


		$sql = $con->query("INSERT INTO user (Fname, Lname, Email, Password) VALUES ('{$FName}', '{$LName}', '{$Email}', '{$PW}')");

		header('Location: Login.php');
	}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="latin-1">
	<link rel="stylesheet" href="css/master.css">
	<link rel="stylesheet" href="css/menu.css">
	<title>Register</title>
</head>
<body>
	<div class="container">
		<div class="header">
		
		</div>
		<div class="menu">
			<div id="Menu">
			 <nav>
				<ul class="cssmenu">
					
			  	    <li><a href="register.php">Register</a></li>	
			  	    		
			  	    <li><a href="Login.php">LogIn</a></li>	
			  	    
				</ul>
			 </nav>
		</div>
		<div class="leftbody">
			
		</div>
		<div class="rightbody">
			<form action="" method="post" name="RegisterForm" id="RegisterForm">
				<div class="FormElement">
					<input name="First_Name" type="text" required="required" class="TField" id="First_Name" placeholder="First Name">
				</div>
				<div class="FormElement">
					<input name="Last_Name" type="text" required="required" class="TField" id="Last_Name" placeholder="Last Name">
				</div>
				<div class="FormElement">
					<input name="Email" type="text" required="required" class="TField" id="Email" placeholder="Email">
				</div>
				<div class="FormElement">
					<input name="Password" type="password" required="required" class="TField" id="Password" placeholder="Password">
				</div>
				<div class="FormElement">
					<input name="Register" type="submit" class="button" id="Register" value="Register">
				</div>
			</form>
			<hr>
			
		</div>
		<div class="footer">
			
		</div>
	</div>





</body>
</html>