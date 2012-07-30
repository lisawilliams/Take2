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
<?php // Script number 1.1 , template.html

// error handling
ini_set('display errors',1);  // Let me learn from my mistakes!
error_reporting(E_ALL|E_STRICT); // Show all possible problems! 
$page_title = "Server Variables";

// Give PHP's built-in variables easier to use names:  

$file = $_SERVER['SCRIPT_FILENAME'];
$user = $_SERVER['HTTP_USER_AGENT'];
$server = $_SERVER['SERVER_SOFTWARE'];

// Print the name of this script: 

echo "<p>You are running the file:<b>$file</b>.</p>\n";

// Print the user's information: 

echo "<p>You are viewing this page using:<b>$user</b>.</p>\n";

// Print the server's information: 

echo "<p>This server is running: <b>$server</b></p>\n";

?>


</pre>
</body>
</html>