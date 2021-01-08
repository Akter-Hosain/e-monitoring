<?php
$user_emailErr=$passwordErr="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$user_email=trim($_POST["user_email"]);
	$password=trim($_POST["password"]);
	if(empty($user_email))
	{
		$user_emailErr="Email is required";
	}
	else
	{
		if(!preg_match("/^[a-zA-Z0-9]*$/",$user_email))
		{
			$user_emailErr="Invalid Email";
		}
	}
	if((empty($password)))
	{
		$passwordErr="Password is required";
	}
	else
	{
		if((!preg_match("/^[a-zA-Z0-9]*$/",$password)))
		{
			$passwordErr="Password should be Alpha numeric";
		}
		else
		{
			if((strlen($password)<6)||(strlen($password)>12))
			{
				$passwordErr="Password should be 6-12 digits ";
			}
			else
			{
			include('conn.php');
			$query="SELECT * FROM user_reg WHERE user_email='$user_email' and password='$password'";
			$result=mysqli_query($conn,$query);
			 if (mysqli_num_rows($result) == 1)
			 {
			$row=mysqli_fetch_array($result);
			$_SESSION['dbrecharge']='true';
			$_SESSION['id']=$row[0];
			$name=$row[1];
			$uname=$row[2];
			$_SESSION['usrrol']=$row[4];
			$active=$row[6];
			$urol=$row[4];
			  session_start();
      
      $_SESSION['userlogin'] = $uname;
	   $_SESSION['name'] = $name;
			if($active=='0')
			{
			echo "<script type='text/javascript'>alert('Your account is not activated Yet');</script>";
			header('Refresh:2,URL=./login.php');
			}
			else if($urol=='S')
			{
			header('Location:./user/index.php');
			}
			else
			{
			print "<script type='text/javascript'>alert('Invalid Username/Password');</script>";
			}
			
			}
			
		
		}
	}
}
}
?>
