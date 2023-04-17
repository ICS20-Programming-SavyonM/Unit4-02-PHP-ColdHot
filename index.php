<!DOCTYPE html>
<html>
<head>
  <!--metadata-->
    <meta charset="utf-8">
    <meta name="description" content="Fahrenheit to celsius, with JavaScript">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Ms Raffin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--For favicon on this page-->
     <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png" />
    <link rel="manifest" href="./fav_index/site.webmanifest" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-purple.min.css" />
    <link rel="stylesheet" href="./css/style.css" />
  <title>Temperature Checker</title>
  <h1>Is it hot or cold outside?</h1>
</head>
<body>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<label for="temperature">Enter the temperature outside:</label>
		<input type="number" name="temperature" id="temperature" required step="1">
    
    <!--button to enter temperature-->
		<button type="submit" name="submit">Check</button>
	</form>

	<?php
		// Check if form was submitted
		if(isset($_POST['submit'])) {
			// Get the temperature from the form input
			$temperature = $_POST['temperature'];

			// Check if the temperature is below 15
			if($temperature < 15) {
			 echo "<p>It is cold outside.</p>";
			}
			// Check if the temperature is equal to or above 15
			else {
				echo "<p>It is hot outside.</p>";
			}
		}
	?>
  <!--image for temperature-->
 <br>
	<img src="./images/HotCold.jpg" alt="sphere" width="400" height="249"/>
</body>
</html>