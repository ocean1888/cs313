<!DOCTYPE HTML>
<?php
	$key="shortterm";
	if(isset($_COOKIE[$key]))
	{
	header( 'Location: Results.php' ) ;
	}
	else
	{
	setcookie($key,"tempUser",time()+6);
	}
	
?>
<html>
	<head>
		<title>Practice Forms</title>
	</head>
	<body>
	<h1>Brief Food Survey</h1>

	<form action="Results.php" method="post">

	<h2>Question #1</h2>
	<h3>What are your favorite pizza toppings?</h3>
	<input type="checkbox" name="toppings[]" value="0"> Pepperoni
	<input type="checkbox" name="toppings[]" value="1"> Cheese <br />
	<input type="checkbox" name="toppings[]" value="2"> Sausage
	<input type="checkbox" name="toppings[]" value="3"> Bacon <br />
	<input type="checkbox" name="toppings[]" value="4"> Bell Peppers
	<input type="checkbox" name="toppings[]" value="5"> Mushrooms <br />
	<input type="checkbox" name="toppings[]" value="6"> Banana Peppers
	<input type="checkbox" name="toppings[]" value="7"> Olives <br />
	
	<h2>Question #2</h2>
	<h3>How do you obtain your pizza, typically?</h3>
	<input type="radio" name="method" value="0"> Call in, Carry out<br />
	<input type="radio" name="method" value="1"> Order Online, Delivery style<br />
	<input type="radio" name="method" value="2"> Walk in and wait<br />
	<input type="radio" name="method" value="3"> I make my own pizza<br />

	<h2>Question #3</h2>
	<h3>What do you do with leftover pizza?</h3>
	<input type="radio" name="leftovers" value="0"> Eat them cold the next day<br />
	<input type="radio" name="leftovers" value="1"> Reheat and eat<br />
	<input type="radio" name="leftovers" value="2"> Give it all to my roomates<br />
	<input type="radio" name="leftovers" value="3"> What do you mean, Leftovers?<br />

	<h2>Question #4</h2>
	<h3>What sauces do you add to your pizza?</h3>
	<input type="checkbox" name="sauce[]" value="0"> No Sauce
	<input type="checkbox" name="sauce[]" value="1"> Ranch Dressing<br />
	<input type="checkbox" name="sauce[]" value="2"> Buffalo Suace
	<input type="checkbox" name="sauce[]" value="3"> Hot Sauce<br />
	<input type="checkbox" name="sauce[]" value="4"> Other <br />
	<hr />
	<input type="submit" name="Submit">
	</form>
	</body>
</html>