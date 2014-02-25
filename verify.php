<?php 
	include "mySQLconn.php";
	$username = $_POST['username'];
	$password = $_POST['password'];
       $query = "SELECT * FROM `user` where username = '$username'";
	$result = mysqli_query($conn,$query);
	$user = mysqli_fetch_array($result);
	if ($user['password'] != $password || $username != "kyle") {
		header("Location: assign2.php?error=1");
              exit;
	}
	else {
		session_start();
		$_SESSION['username'] = $username;
		header("Location: admin.php");
	}
?>