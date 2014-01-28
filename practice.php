<!DOCTYPE HTML>
<html>
	<head></head>
	<body>

		<?php
              $color = 11;
		$color2 = 00;
		$color3 = 10;
		for($i=0;$i<10;$i++)
		{
			print "<div id=\"div$i\" style=\"background-color:#{$color}{$color2}{$color3};\"> banana </div>";
			$color = $color + 10;
			$color2 = $color2 + 5;
			$color3 = $color3 + 7;
			if( $color >= 91)
				$color = 00;
		}
		?>

	</body>
</html>