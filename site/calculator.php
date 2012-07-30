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

// This function creates a radio button.
// The function takes one argument: the value. 
// The function also makes the radio button "sticky". 
function create_gallon_radio($value) {

// Start the element:
echo '<input type="radio" name"gallon_price" value="' . $value .'"';

// Check for stickiness:
if (isset($_POST['gallon_price']) && ($_POST['gallon_price'] == $value))

	{
		echo ' checked="checked"';
	}
	
// Complete the element: 
echo "/>$value ";

} // End of create_gallon_radio() function		

// This function calculates the cost of the trip. 
// The function takes three arguments: the distance, fuel efficiency, and price per gallon. 
// The function returns the total cost. 

function calculate_trip_cost($miles, $mpg, $ppg) {

// Get the number of gallons: 
$gallons = $miles/$mpg;

//Get the cost of those gallons: 
$dollars = $gallons/$ppg;

// Return the formatted cost: 
return number_format($dollars, 2);

} // End of calculate_trip_cost() function. 

// Check for form submission: 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

// Minimal form validation:  

if (isset($_POST['distance'], $_POST['gallon_price'], $_POST['efficiency'])  &&

is_numeric($_POST['gallon_price']) &&

is_numeric($_POST['efficiency']))

	{
		// Calculate the results: 
		
		$cost = calculate_trip_cost($_POST['distance'], $_POST['efficiency'], 
				$_POST['gallon_price']);
				
				
//      Old trip calculation code (before additon of calculate_trip_cost() function)
// 		$gallons = $_POST['distance'] / $_POST['efficiency']; 
// 		$dollars = $gallons * $_POST['gallon_price'];
// 		$hours = $_POST['distance']/65;
// 		$gallon_price = $_POST['gallon_price'];

		// Print the results: 

		echo '<H1>Total estimated cost</H1>
		<p> The total cost of driving '. $_POST['distance'] . ' miles, averaging '
		 .  $_POST['efficiency'] . ' miles per gallon, and paying an average of $' .  
		$gallon_price . ' per gallon is $' . $cost . 
		' Driving at an average of 65 miles per hour, the trip will take
		approximately '. number_format($hours, 2) . ' hours. </p>';

		}	else 	{ // Invalid submitted values. 

		echo '<H1> Error!</H1> Please enter a valid distance, 
		price per gallon, and fuel efficiency.</h1>';

		}

}

// Leave the PHP section and create the form:  

?>

<form action = "calculator.php" method="post">

<p>Distance (in miles):<input type "text" name="distance" 
value="<?php if(isset($_POST['distance'])) echo $_POST['distance']; ?>"/></p>

<p>Avg. price per gallon: <span class ="input">
	<?php
	create_gallon_radio('3.00');
	create_gallon_radio('3.50');
	create_gallon_radio('4.00');
	?>
	</span></p>
	
<p>Fuel Efficiency:<select name = "efficiency">
	<option value = "10"
	<?php if (isset($_POST['efficiency']) && ($_POST['efficiency'] == '10')) 
	echo ' selected="selected" '; ?>>Terrible</option>
	<option value = "20"
	<?php if (isset($_POST['efficiency']) && ($_POST['efficiency'] == '20')) 
	echo ' selected="selected" '; ?>>Decent</option >
	<option value ="30"
	<?php if (isset($_POST['efficiency']) && ($_POST['efficiency'] == '30')) 
	echo ' selected="selected" '; ?>>Good</option>
	<option value = "50"
	<?php if (isset($_POST['efficiency']) && ($_POST['efficiency'] == '50')) 
	echo ' selected="selected" '; ?>>Outstanding</option>
	</select></p>
	
<p><input type ="submit" name="submit" value="Calculate" /></p>

</form>

<?php include('includes/footer.html'); ?>	
	

</body>
</html>