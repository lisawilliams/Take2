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
<?php // Script number 2.2 , filename variables.php

// error handling
ini_set('display errors',1);  // Let me learn from my mistakes!
error_reporting(E_ALL|E_STRICT); // Show all possible problems! 

// Define my variables...
$year = 2012; // The current year. 
$june_avg = 88; // the average temp for the month of June
$page_title = 'Weather Reports'; // A title for the PAGE_LAYOUT_ONE_COLUMN

// and so forth.  

?>
<pre>
<?php

print_r($year);
print_r($june_avg);
print_r($page_title);
?>

</pre>
</body>
</html>