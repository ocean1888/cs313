<!DOCTYPE HTML>
<?php

$toppings= array("Pepperoni","Cheese","Sausage","Bacon",
	"Bell Peppers", "Mushrooms", "Banana Peppers", "Olives");
$method = array("Call in, Carry out" , "Order Online, Delivery Style",
	"Walk in and Wait" ,"I make my own pizza");
$leftovers= array("Eat them cold the next day",
		"Reheat and Eat",
		"Give it all to my Roomates", 
		"What do you mean, Leftovers?");
$sauce= array("No Sauce","Ranch Dressing","Buffalo Sauce","Hot Sauce","Other");



$file = fopen("file.txt","r");
if ($file)
{
	$i=1;
	while(!feof($file))
	{
  	 ${'item' . $i} = rtrim(fgets($file),"\r\n");
	 $i++;
	}
}
$tops = $_POST['toppings'];
for($i=0;$i < count($tops);$i++)
{
	$index = (int)$tops[$i]+1;
	${'item' . $index } = ${'item' . $index} +1; 
}
$option= (int)$_POST['method'] + 9;
$option2= (int)$_POST['leftovers'] + 13;

${'item' . $option} = (int)${'item' . $option} +1;
${'item' . $option2} = (int)${'item' . $option2} +1;


$scs = $_POST['sauce'];
for($i=0;$i < count($scs);$i++)
{
	$num = (int)$tops[$i]+17;
	${'item' . $num} = ${'item' . $num} +1;
}


fclose($file);
$fileout = fopen("file.txt","w");

for($x=1 ; $x<22 ; $x++)
{
   fputs($fileout, ${'item' . $x} . PHP_EOL);
}
fclose($fileout);
?>
<html>
<head>
</head>
<body>
<h1> Results </h1>
<h2> Favorite Toppings </h2>

	<?php
		for($i=0;$i<8;$i++)
		{
		echo $toppings[$i] . " " . ${'item' . (string)($i+1)} . "<br />";			
		}	
	 ?>
<h2> Method for Obtaining Pizza </h2>
	<?php
		for($i=0;$i<4;$i++)
		{
		echo $method[$i] . " " . ${'item' . (string)($i+9)} . "<br />";
		}
	?>
<h2> Leftovers? </h2>
	<?php
		for($i=0;$i<4;$i++)
		{
		echo $leftovers[$i] . " " . ${'item' . (string)($i+13)} . "<br />";
		}
	?>
<h2> Any Sauces </h2>
	<?php
		for($i=0;$i<6;$i++)
		{
		echo $sauce[$i] . " " . ${'item' . (string)($i+17)} . "<br />";
		}
	?>

</body>
</html>