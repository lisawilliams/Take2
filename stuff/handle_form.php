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
<?php // Script number 2.2, handle_form.php

// error handling
ini_set('display errors',1);  // Let me learn from my mistakes!
error_reporting(E_ALL|E_STRICT); // Show all possible problems! 

$page_title = "Form Handler";

// Take the form data and create shorthand variables for them: 

// $name = $_REQUEST['name'];
// $email = $_REQUEST['email'];
// $comments = $_REQUEST['comments'];
// $gender = $_REQUEST['gender'];

// Validate the name: 

if (!empty($_REQUEST['name']))

	{
		$name = $_REQUEST['name'];
		
	}	else	{	
	
		$name = NULL;
		
		echo 'You forgot to enter your name!';
	}	
	
// Validate the email: 

if (!empty($_REQUEST['email'])) 

	{
		$email = $_REQUEST['email'];
	
	}	else	{
	
		$email = NULL;
		
		echo 'You forgot to enter your email address!';
	}
	
// Validate the comments: 

if (!empty($_REQUEST['comments']))

	{
	
		$comments = $_REQUEST['comments'];
		
	}	else	{
	
		$comments = NULL;
		
		echo 'Don\'t you have anything to tell us?';
		
	}
	

// Validate the gender:

if(isset($_REQUEST['gender']))
	{
		$gender = $_REQUEST['gender'];
	}	else	{
		$gender = NULL;	
	}



// Print the submitted information:  

if ($name && $email && $gender && $comments)

	{

			echo "<p>Thank you, <b>$name</b>, for the following comments:<br /><tt>$comments</tt><p>

			<p>We will reply to you at $email</p>\n";
			
	}	else	{
	
			echo 'Please go back and fill out the form again.';
	}		
	


// Print a message based on the gender value: 

if(gender == "M")
	{
		echo '<p>Hey, handsome!  Hope you have a great day!"</p>';
		
		}	elseif ($gender == "F") 
		
		{	
			echo '<p>Hey there, gorgeous!  Have a great day!</p>';
			
		}	else {  // No gender selected.
		
			echo '<p>Hey there, mysterious stranger.  Come here often?</p>';
		}
		


?>


</body>
</html>