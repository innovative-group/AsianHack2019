<?php

	session_start();
	
	if(!isset($_SESSION['username']))
	{
		header('location: total login mechanism.php');
		
	}

?>

<!DOCTYPE html>
<html> 
		</head> 
				<title> </title> 
				<link rel= "stylesheet" type= "text/css" href= "bootstrap.min.css">
		</head> 
		<body> 
		
				<div class= "container"> 
				
						<h2 class= "text-center text-success"> Welcome <?php echo $_SESSION['username']; ?> </h2> 
				<a href= "log_out.php"> <strong> Logout </strong>  </a>
				</div> 
		</body>
</html> 