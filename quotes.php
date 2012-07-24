<?php
$page_title = "";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title><?php print($page_title) ?></title>
</head>
<body>
<p> This is standard HTML.</p>
<?php // Script number 1.5 , predefined.php

// error handling
ini_set('display errors',1);  // Let me learn from my mistakes!
error_reporting(E_ALL|E_STRICT); // Show all possible problems! 
$page_title = "Numbers";

// Set the variables: 

$quantity = 30; // Buying 30 widgets. 
$price = 119.95;
$taxrate = .05 ;// 5% sales tax. 

// Calculate the total:  

$total = $quantity * $price; 

// Calculate and add the tax: 

$total = $total + ($total * $taxrate); 

// Format the total: 

$total = number_format($total, 2);

// Print the results: 

echo "<p>You are purchasing $quantity widgets at a cost of $price each.  
With tax, the total comes to $total.</p>";

echo "<h3>Using double quotation marks:</h3>";
echo "<p>You are purchasing <b>$quantity</b> widgets at a cost of <b> \$$price</b> each. 
With tax, the total comes to <b>\$$total</b>.</p>\n";


?>


</pre>
</body>
</html>