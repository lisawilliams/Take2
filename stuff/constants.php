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
<?php // Script number 1.9 constants.php

// error handling
ini_set('display errors',1);  // Let me learn from my mistakes!
error_reporting(E_ALL|E_STRICT); // Show all possible problems! 
$page_title = "Constants";

// Set today's date as a constant:  

define ('TODAY', 'July 21, 2012'); 

echo '<p>Today is ' . TODAY . '.<br />
This server is running version <b>' . PHP_VERSION . '</B> of PHP on the 
<b>' . PHP_OS . '</b> operating system.</p>';



?>


</pre>
</body>
</html>