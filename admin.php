<! DOCTYPE HTML>
<html>
<head>
   <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
   <?php include "mySQLconn.php"; ?>
   <title>Fotobase Admin</title>
</head>
<body style="background-color:grey;">
<div class="container" style="margin-left:10%;margin-right:10%;">
<div class="container" style="text-align:right;">
      <a class="btn btn-default btn-med" href="fotobase.php">
      <span class="glyphicon glyphicon-home"></span> Home
      </a>
      <a class="btn btn-default btn-med" href="logout.php">
      <span class="glyphicon glyphicon-user"></span> Logout
      </a>
</div>

<h1>Administrator Control Panel</h1>
<div class="container" style="float:left;width:50%;background-color:lightgrey;padding:5px;
             border-radius:5px;border-style:solid; border-width:2px;">
<?php
//insert new user with passcode
 echo "<form action=\"procName.php\" method=\"post\">";
 echo "<h2>Add New User</h2>";
 echo "<input type=\"text\" name=\"user\" placeholder=\"New User Name\"><br />";
 echo "<input type=\"text\" name=\"passcode\" placeholder=\"New Passcode\"><br />";
 echo "<button class=\"btn btn-success\" type=\"submit\">
         <span class=\"glyphicon glyphicon-ok\"></span> Add User</button>";
 echo "</form>";
?>
</div>

<div class="container" style="float:left;width:50%;background-color:lightgrey;padding:5px;
             border-radius:5px;border-style:solid;border-width:2px;">
<?php
//delete a user and passcode
   $query = "SELECT * FROM user";
   $result = mysqli_query($conn, $query);
   echo "<form action=\"delName.php\" method=\"post\">";
   echo "<h2>Delete Existing User</h2>";
   while($users = mysqli_fetch_array($result))
   {
      echo "<input type=\"radio\" name=\"user\" value='".$users['username']."'>". 
            $users['username'] . "<br />";
   }
   echo "<button class=\"btn btn-danger\" type=\"submit\">
         <span class=\"glyphicon glyphicon-trash\"></span> Delete</button>";
   echo "</form>";
?>
</div>

<br />
<div class="container" style="float:left;width:50%;background-color:lightgrey;padding:5px;
             border-radius:5px;border-style:solid;border-width:2px;">
<?php
//create new album
  $query = "SELECT * FROM user";
  $result = mysqli_query($conn, $query);
  echo "<form action=\"procAlbum.php\" method=\"post\">";
  echo "<h2>Add New Album</h2>";
  echo "<h3>Which User is this for?</h3>";
  while($users = mysqli_fetch_array($result))
   {
      echo "<input type=\"radio\" name=\"user\" value='".$users['username']."'>". 
            $users['username'] . "<br />";
   }
   echo "<input type=\"text\" name=\"albumName\" placeholder=\"New Album Name\"><br />";
   echo "<button class=\"btn btn-success\" type=\"submit\">
         <span class=\"glyphicon glyphicon-ok\"></span> Add Album</button>";
   echo "</form>";
?>
</div>

<div class="container" style="float:left;width:50%;background-color:lightgrey;padding:5px;
             border-radius:5px;border-style:solid;border-width:2px;">
<?php
//delete existing album
   $query = "SELECT * FROM album";
   $result = mysqli_query($conn, $query);
   echo "<form action=\"delAlbum.php\" method=\"post\">";
   echo "<h2>Delete Existing Album</h2>";
   while($album = mysqli_fetch_array($result))
   {
      echo "<input type=\"radio\" name=\"album\" value='".$album['name']."'>". 
            $album['name'] . "<br />";
   }
   echo "<button class=\"btn btn-danger\" type=\"submit\">
         <span class=\"glyphicon glyphicon-trash\"></span> Delete</button>";
   echo "</form>";
?>
</div>

<br />
<div class="container" style="float:left;width:50%;background-color:lightgrey;padding:5px;
             border-radius:5px;border-style:solid;border-width:2px;">
<?php
   $query = "SELECT * FROM album";
   $result = mysqli_query($conn, $query);
   echo "<form action=\"procPic.php\" method=\"post\">";
   echo "<h2>Add New Image</h2>";
   echo "<h3>Which Album?</h3>";
   while($album = mysqli_fetch_array($result))
   {
      echo "<input type=\"radio\" name=\"album\" value='".$album['id']."'>". 
            $album['name'] . "<br />";
   }
   $query2 = "SELECT * FROM user";
   $result2 = mysqli_query($conn, $query2);
   echo "<h3>Which User?</h3>";
   while($users = mysqli_fetch_array($result2))
   {
      echo "<input type=\"radio\" name=\"user\" value='".$users['id']."'>" 
      . $users['username'] . "<br />";
   }
   echo "<input type=\"text\" name=\"FilePath\" placeholder=\"File Path\"><br />";
   echo "<button class=\"btn btn-success\" type=\"submit\">
         <span class=\"glyphicon glyphicon-ok\"></span> Add Photo</button>";
   echo "</form>";
?>
</div>

<div class="container" style="float:left;width:50%;background-color:lightgrey;padding:5px;
             border-radius:5px;border-style:solid;border-width:2px;">
<?php
//delete existing album
   $query = "SELECT * FROM photo";
   $result = mysqli_query($conn, $query);
   echo "<form action=\"delPhoto.php\" method=\"post\">";
   echo "<h2>Delete Existing Photo</h2>";
   while($photo = mysqli_fetch_array($result))
   {
      echo "<input type=\"radio\" name=\"photo\" value='".$photo['location']."'>". 
            $photo['location'] . "<br />";
   }
   echo "<button class=\"btn btn-danger\" type=\"submit\">
         <span class=\"glyphicon glyphicon-trash\"></span> Delete</button>";
   echo "</form>";
?>
</div>


</div>
</body>
</html>