<?php
   include "mySQLconn.php";
   $username = $_POST['user'];
   $albumName = $_POST['albumName'];
   $query = "SELECT id FROM user where username = '$username'";
   $result = mysqli_query($conn, $query);
   $user = mysqli_fetch_array($result);
   $id = $user['id'];
   $query2 = "INSERT INTO album (name, userID) VALUES ('$albumName', '$id')";
   $result2 = mysqli_query($conn, $query2);
   $message = "New Album Added!";
   echo "<script type='text/javascript'>alert('$message');</script>";
   header("Location: admin.php");
?>