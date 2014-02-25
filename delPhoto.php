<?php
   include "mySQLconn.php";
   $photo = $_POST['photo'];
   $query = "DELETE FROM photo where location = '$photo'";
   $result = mysqli_query($conn, $query);
   $message = "Photo Deleted!";
   echo "<script type='text/javascript'>alert('$message');</script>";
   header("Location: admin.php");
?>