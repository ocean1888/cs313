<! DOCTYPE HTML>
<html>
<head>
   <title> Your Pictures </title>
   <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
   <style>
   img{
        width: auto;
        max-width:400px;
        height: auto;
        max-height: 400px;
        background-repeat: no-repeat;
        background-size: contain;
        background-position:center;
        padding:4px;
      }
   </style>
</head>
<body style="background-color:lightgrey;">
<div class="container">
<?PHP
session_start();
include "mySQLconn.php";
$username = $_SESSION['username'];
echo "<div class=\"container\" style=\"text-align:right;\">
      <a class=\"btn btn-default btn-med\" href=\"fotobase.php\">
      <span class=\"glyphicon glyphicon-home\"></span> Home
      </a>
      <a class=\"btn btn-default btn-med\" href=\"logout.php\">
      <span class=\"glyphicon glyphicon-user\"></span> Logout
      </a>
      </div>";

echo "<h1 style=\"margin-left:10%;\">Welcome, " . $username . "</h1>";
$results = mysqli_query($conn, "SELECT location FROM photo as p 
                                JOIN `user` as u ON p.userID = u.id
                                where u.username = '$username'");
$counter = 1;
while ($row = mysqli_fetch_array($results))
{
  if( $counter % 3 == 0)
{
     echo "<img src=\" {$row['location']} \">" . "<br />";
}
  else
{
     echo "<img src=\" {$row['location']} \">";
}
$counter++;
}
?>
</div>
</body>
</html>