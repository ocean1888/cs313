<?php
   include "mySQLconn.php";
   $username = $_POST['user'];
   $passcode = $_POST['passcode'];
   $query = "INSERT INTO user (username, password) Values ( '$username', '$passcode')";
   $result = mysqli_query($conn, $query);
   $message = "New User Added!";
   echo "<script type='text/javascript'>alert('$message');</script>";
   header("Location: admin.php");
?>
