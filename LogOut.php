<?php require 'Conections/connect.php';?>
<?php 
	session_start();
	unset($_SESSION['UserID']);
	session_destroy();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="latin-1">
	<link rel="stylesheet" href="css/master.css">
	<link rel="stylesheet" href="css/menu.css">
	<title>LogOut</title>
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
		<div class="rightbody">You have logged Out
		
		</div>
		<div class="footer">
			
		</div>
	</div>





</body>
</html>