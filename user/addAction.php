<?php
	$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/../lib/Database.php');
$db = new Database();
	
		$user_name = $_POST['user_name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$img = $_POST['img'];

		$test=$db->select("select user_email from user_reg where user_email='$email'");


		if($test)
		{
			echo "<script> alert('Email is Already Exist. Try Anoter Email') </script>";
			
		}
		else
		{
			$result = $db->insert("INSERT into user_reg(user_name,user_email,password) VALUES('$user_name','$email','$password')");
		
			if($result)
			{
				echo '<script type="text/javascript">'; 
				echo 'alert("Successfully Registered");'; 
				echo 'window.location.href = "user_registration.php";';
				echo '</script>';
			}
			else
			{
				echo '<script type="text/javascript">'; 
				echo 'alert("Failed Try Again");'; 
				echo 'window.location.href = "user_registration.php";';
				echo '</script>';
			}
		}
	
	
?>