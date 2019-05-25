<?php
		session_start();
		if(isset($_SESSION['username']))
		{
			unset($_SESSION['username']);
			header('location: login_form.php');
		}
		else
		{
			header('location: login_form.php ');
		}
?>