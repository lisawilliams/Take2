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
$page_title = "Strings";

// Create the variables. 

$first_name = 'Richard';
$last_name = 'Posner';
$book_title ='Sex and Reason';
$author = $first_name . ' ' . $last_name;

// Print the values: 

echo "<p>The book <em>$book_title</em> was written by $first_name $last_name.</p>";
echo "<p>$author is a federal judge.</p>";

$number = strlen($author);

echo "$author's name has $number characters...when you include the space.";

$lowercase = strtolower($author); 

echo "<p>Let's write $author's name in all lowercase: $lowercase.</p>";

$uppercase = strtoupper($author);

echo "<p>Now let's write $author's name in all uppercase: $uppercase.</p>";


?>


</pre>
</body>
</html>