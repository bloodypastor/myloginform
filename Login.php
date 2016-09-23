<?php require 'Conections/connect.php';?>
<?php 
	
	if (isset($_POST['LogIn'])) {

		$EM = $_POST['email'];
		$PW = $_POST['password'];

		$result = $con->query("select * from user where Email='$EM' AND Password='$PW'");

		$row = $result->fetch_array(MYSQLI_BOTH);

		session_start();

		$_SESSION["UserID"] = $row['UserID'];

		header('Location: Account.php');

	}



 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="latin-1">
	<link rel="stylesheet" href="css/master.css">
	<link rel="stylesheet" href="css/menu.css">
	<title>LogIn</title>
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
			<form action="" method="post" name="LoginForm" id="LoginForm">
				<div class="FormElement">
					<input name="email" type="email" required="required" class="TField" id="email" placeholder="Email">
				</div>
				<div class="FormElement">
					<input name="password" type="password" required="required" class="TField" id="password" placeholder="Password">
				</div>
				<div class="FormElement">
					<input name="LogIn" type="submit" class="button" id="LogIn" value="LogIn">
				</div>
			</form>
			
		</div>
		<div class="footer">
			
		</div>
	</div>

</body>
</html>