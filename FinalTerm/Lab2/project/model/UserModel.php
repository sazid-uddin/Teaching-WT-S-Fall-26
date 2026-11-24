<?php
class UserModel
{
	function loginCheck($email, $password)
	{
		$usersList = [
			["email" => "abc@aiub.edu", "password" => "123", "role" => "student"],
			["email" => "xyz@aiub.edu", "password" => "1234", "role" => "employee"]
		];

		for ($i = 0; $i < count($usersList); $i++) {
			if ($usersList[$i]['email'] === $email) {
				// account found -> password check
				// echo "email found";
				if ($usersList[$i]['password'] === $password) {
					// echo "Password matched";
					// login successful
					// header("Location: ../view/dashboard.php");
					return true;
					// exit();
				} else {
					// echo "password incorrect";
					// password incorrect -> 
					// load login view ( with error message: "Incorrect password" )
					// header("Location: ../view/login.php");
					return false;
				}
			}
		}
		// echo "email incorrect";
		// email incorrect -> 
		// load login view ( with error message: "Incorrect email" )
		// header("Location: ../view/login.php");
		return false;
	}
}
