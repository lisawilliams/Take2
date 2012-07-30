
<?php // Script number 9.2, filename mysqli_connect.php

// This file contains the database access information. 
// This file also establishes a connection ot MySQL, 
// selects the database, and sets the encoding.  

// error handling
ini_set('display errors',1);  // Let me learn from my mistakes!
error_reporting(E_ALL|E_STRICT); // Show all possible problems! 

// Set the database access information as constants:
DEFINE ('DB_USER', 'database');
DEFINE ('DB_PASSWORD', 'lavalamp');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'take2');

// Make the connection:  
$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) 
	OR die
	('Could not connect to MySQL: '. mysqli_connect_error());
	
// Set the encoding: 

mysqli_set_charset($dbc, 'utf8');	

?>
