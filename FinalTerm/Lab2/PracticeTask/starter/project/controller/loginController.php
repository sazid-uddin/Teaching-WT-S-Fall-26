<?php
require_once("../model/UserModel.php");
// echo "Login controller called <br>";
// php superglobal variable $_GET
// var_dump($_GET);
// echo "<br>";
// echo $_GET['email'];
// echo "<br>";
// echo $_GET['password'];
// var_dump($_POST);
// echo "<br>";
// echo $_POST['email'];
// echo "<br>";
// echo $_POST['password'];

// login check in mock DB
$email = $_POST['email'];
$password = $_POST['pass'];

$userModelObj = new UserModel();
$loginSuccess = $userModelObj->loginCheck($email, $password);
if($loginSuccess) {
	header("Location: ../view/dashboard.php");
} else {
	header("Location: ../view/login.php"); // with error message (next class)
}