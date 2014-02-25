<?php
   include "mySQLconn.php";
   $albumName = $_POST['album'];
   $query = "DELETE FROM album where name = '$albumName'";
   $result = mysqli_query($conn, $query);
   $message = "Album Deleted!";
   echo "<script type='text/javascript'>alert('$message');</script>";
   header("Location: admin.php");
?>