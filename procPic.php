<?php
   include "mySQLconn.php";
   $userID = $_POST['user'];
   $albumID = $_POST['album'];
   $FilePath = $_POST['FilePath'];
   $query = "INSERT INTO photo (location, userID, albumID) values ( '$FilePath', '$userID', '$albumID')";
   $result = mysqli_query($conn, $query);
   $message = "New Photo Added!";
   echo "<script type='text/javascript'>alert('$message');</script>";
   header("Location: admin.php");
?>
