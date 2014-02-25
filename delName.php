<?php
   include "mySQLconn.php";
   $username = $_POST['user'];
   $query = "DELETE FROM user where username = '$username'";
   $result = mysqli_query($conn, $query);
   $message = "User Removed!";
   echo "<script type='text/javascript'>alert('$message');</script>";
   header("Location: admin.php");

?>