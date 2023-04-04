<?php
	// get the temp in fahrenheit from the text field
	$fahrenheit = $_POST['fahrenheit'];

	// calculate the volume
	$celsius = (($fahrenheit - 32) * 5/9);
  $celsiusRounded = round($celsius, 1);
?>
<h3>Results:</h3>
A temperature of <?php echo "$fahrenheit" ?> °F is <?php echo "$celsiusRounded" ?>°C.