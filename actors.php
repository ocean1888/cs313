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