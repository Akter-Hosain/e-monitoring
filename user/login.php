<?php


include '../classes/userlogin.php';
?>
<?php
	$al = new userlogin();
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$user_email = $_POST['user_email'];
		$password = $_POST['password'];
		

		$loginChk = $al->userlogin($user_email,$password);
	}
?>
<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/stylelogin.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/home.css">
</head>
<header>
  
  <div class="navbar">
  <a href="../home.php">Ministry Login</a>
</div>
</header>
<body>
<div class="container">
	<section id="content">
		<form action="login.php" method="post">
			<h1>User Login</h1>
			<span style="color:red;font-size: 18px">
				<?php
				if (isset($loginChk)) {
					echo $loginChk;
				}
				?>
			</span>
			<div>
				<input type="email" placeholder="Enter email" name="user_email"/>
			</div>
			<div>
				<input type="password" placeholder="Password" name="password"/>
			</div>
			<div>
              <a href="user_registration.php" class="txt3">
                Dont have an account? Sign up.
              </a>
            </div>
			<div>
				<input type="submit" value="Log in" />
			</div>
		</form><!-- form -->
		<div class="button">
			<a href="#"></a>
		</div><!-- button -->
	</section><!-- content -->
</div><!-- container -->
</body>
</html>
