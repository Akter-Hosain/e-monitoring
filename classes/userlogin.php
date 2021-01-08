<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/../lib/Session.php');
Session::checkLogin();
include_once ($filepath.'/../lib/Database.php');
include_once ($filepath.'/../helper/Format.php');
?>

<?php

class userlogin
{
	private $db;
	private $fm;

	public function __construct()
	{
		$this->db = new Database();
		$this->fm = new Format();
	}
	public function userLogin($user_email, $password){
		$user_email = $this->fm->validation($user_email);
		$password = $this->fm->validation($password);

		$user_email = mysqli_real_escape_string($this->db->link, $user_email);
		$password = mysqli_real_escape_string($this->db->link, $password);

		if (empty($user_email) || empty($password)) {
		$loginmsg = "Username or Password Must Not be Empty";
		return $loginmsg;
	} else{

		$query = "SELECT * FROM user_reg WHERE user_email = '$user_email' AND password = '$password'";
		$result = $this->db->select($query);
		if ($result != false) {

			$query1 = "SELECT * FROM user_reg WHERE user_email = '$user_email' AND password = '$password'";
			$result1 = $this->db->select($query1);
				if($result1 != false)
					{
					$value = $result->fetch_assoc();
					Session::set("login", true);
					Session::set("id", $value['id']);
					Session::set("user_name", $value['user_name']);
					Session::set("user_email", $value['user_email']);
					Session::set("password", $value['password']);
					header("Location:login.php");
					}
				else
					{
						$loginmsg = "Account is Not active yet. Wait for Approval";
						return $loginmsg;
					}	

			
		}
		else{
			$loginmsg = "Username or Password Did Not Match";
		return $loginmsg;
		}
	}
	}
}
?>