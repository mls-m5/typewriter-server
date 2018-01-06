<?php


session_start();

include ("user.php");

$error = "";

$active_session = false;


if (isset($_POST['submit'])) {
	if (empty($_POST['username']) || empty($_POST['password'])) {
		$error = "Username or Password is invalid";
	}
	else
	{
		// Define $username and $password
		$username=$_POST['username'];
		$password=$_POST['password'];
		
		
		// Establishing Connection with Server by passing server_name, user_id and password as a parameter
		// To protect MySQL injection for Security purpose
		$username = stripslashes($username);
		$password = stripslashes($password);
		
		if ($user_name == $username && $user_password == $password) {
			
			$_SESSION["login_user"] = $username;
			//header("location: index.php"); //Redirect to page
			$active_session = true;
		}
		else {
			echo "Wrong username or password";
		}
	}
}
else {
	$error = "Username or password is invalid";
}


function destroy_session() {
	if(isset($_SESSION["login_user"]))
	unset($_SESSION["login_user"]);  //Is Used To Destroy Specified Session
	echo "logging out";
}


?>
