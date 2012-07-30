<?php
$page_title = "Trip Cost Calculator";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title><?php print($page_title) ?></title>
</head>
<body>

<?php // Script number3.5 , filename calculator.php

// error handling
ini_set('display errors',1);  // Let me learn from my mistakes!
error_reporting(E_ALL|E_STRICT); // Show all possible problems! 

//  Make shorthand variables: 

$distance = ($_POST['distance']);
$gallon_price = ($_POST['gallon_price']);
$efficiency = ($_POST['efficiency']);

// Check for form submission: 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

// Minimal form validation:  

// if (isset($distance, $gallon_price, $efficiency)  &&  is_numeric($gallon_price) && is_numeric($efficiency)

	{
		// Calculate the results: 
		
		$gallons = $distance / $efficiency; 
		$dollars = $gallons * $gallon_price;
		$hours = $distance/65;
		
		// Print the results: 
		
		echo '<H1>Total estimated cost</H1>
		<p> The total cost of driving '. $distance . ' miles, averaging ' .  $efficiency . ' miles per gallon, and paying an average of $' . $gallon_price . ' per gallon is ' . number_format($hours, 1) . ' hours.
		</p>';
		
		// }	else 	{ // Invalid submitted values. 
// 		
// 		echo '<H1> Error!</H1> Please enter a valid distance, 
// 		price per gallon, and fuel efficiency.</h1>';
		
		}
		
}

// Leave the PHP section and create the form:  

?>

<form action = "calculator.php" method="post">

<p>Distance (in miles):<input type "text" name="distance" /></p>

<p>Avg. price per gallon: <span class ="input">
	<input type="radio" name="gallon_price" value ="3.00" />3.00
	<input type="radio" name="gallon_price" value ="3.50" />3.50
	<input type="radio" name="gallon_price" value ="4.00" />4.00
	</span></p>
	
<p>Fuel Efficiency:<select name = "efficiency">
	<option value = "10">Terrible</option>
	<option value = "20">Decent</option >
	<option value ="30">Good</option>
	<option value = "50">Outstanding</option>
	</select></p>
	
<p><input type ="submit" name="submit" value="Calculate" /></p>

</form>

<?php include('includes/footer.html'); ?>	
	

</body>
</html>