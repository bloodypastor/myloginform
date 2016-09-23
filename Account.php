<?php require 'Conections/connect.php';?>
<?php 
	session_start();
	if (isset($_SESSION['UserID'])) {
	}else {
		header('Location: Login.php');
	}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="latin-1">
	<link rel="stylesheet" href="css/master.css">
	<link rel="stylesheet" href="css/menu.css">
	<title>Account</title>
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
		<div class="rightbody">Your Account <br>
		<br><?php echo $_SESSION["UserID"]; ?>
		</div>
		<div class="footer">
			
		</div>
	</div>





</body>
</html>