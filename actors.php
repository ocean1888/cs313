<<<<<<< HEAD
<! DOCTYPE HTML>



<html>
<head>
   <title> Some Page </title>
</head>
<body>

<?php
include "mySQLconn.php";
$results = mysqli_query($conn,"SELECT * FROM photo");
while ($row = mysqli_fetch_array($results))
{
echo "<img src=\" {$row['location']} \">" . "<br />";
}
?>

</body>
</html>
=======
<?php
<h1>
$conn new mysqli('localhost',username,password,database to use);
if($conn->connect_errno)
echo "Failed to COnnect";
else
echo "Success";


$results = $conn->query("select id,name from actor");
while ($row = $results->fetch_assoc())
echo $row("name") . "<br />"
</h1>
?>
>>>>>>> 2b81c2f844e843b6a5883ef15e1ff49d82ddd487
