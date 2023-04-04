<!DOCTYPE html>
<!-- ICS20-Programming-Unit3-04-PHP-FahrenheitCelsius -->
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Fahrenheit to Celsius, Using PHP">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Shyla Oommen">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon[1].png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32[1].png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16[1].png">
    <link rel="manifest" href="./favicon/site[1].webmanifest">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>Fahrenheit to Celsius, Using PHP</title>
  </head>
  <body>
		<!-- php echo to print the html to the page -->
    <?php 
			echo "<h1>Converting Fahrenheit to Celsius, Using PHP</h1>";
			echo "<h3>This program will calculate the temperature in degrees Celsius, given the degrees Fahrenheit.</h3>";
		?>
    <center>
    <img src="./images/fah_to_cel.jpg" alt="Fahrenheit to Celsius Formula" width="35%" height="35%">
    </center>
		<!-- form to get degrees Fahrenheit from the user -->
    <form action="./answers.php" method="post" target="results">
      <label for="lblFahrenheit">Fahrenheit (°F):</label>
      <input type="text" id="fahrenheit" placeholder="Eg. 80" name="fahrenheit"><br><br>
      <input type="submit" value="Calculate">
		</form>
    
    <!-- iframe for the results to show on the web page. -->
    <center>
      <iframe id="results" name="results">	
        A temperature of. "$fahrenheit" . °F is. "$celsiusRounded" . °C.
	    </iframe>
    </center>
  </body>
</html>