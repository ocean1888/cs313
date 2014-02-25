<?php 
	include "mySQLconn.php";
	
	$password = $_POST['password1'];
	
	$result = mysqli_query($conn, "SELECT * FROM user where password = '".$password."';");
	$user = mysqli_fetch_array($result);
       $num_result = mysqli_num_rows($result);
       if($num_result > 0)
       {
	session_start();
	$_SESSION['username'] = $user['username'];
	header("Location: photos.php");
       }
       else
       {
       header("Location: assign2.php?error=2");
       exit;
       }
 ?>