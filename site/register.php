<?php # Script 9.5 - register.php #2
// This script performs an INSERT query to add a record to the users table.

$page_title = 'Register';
include ('includes/header.html');

// Check for form submission:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			
			$errors = array();  // Initialize an error array.
			
			// Check for a first name: 
			if (empty($_POST['first_name']))
			
				{
					$errors[] = 'You forgot to enter a first name.';
					
				}	else	{
				
					$fn = trim($_POST['first_name']);
				}	
			
			
			// Check for a last name: 
			if (empty ($_POST['last_name']))	
			
				{
					$errors[] = 'You forgot to enter a last name.';
					
				}	else	{			
				
					$ln = trim($_POST['last_name']);
				}	
				
			// Check for an email address: 
			if (empty($_POST['email']))
			
				{
					$errors[] = 'You forgot to enter an email address.';
					
				}	else	{
				
					$e = trim($_POST['email']);
					
				}
				
	// Check for a password and match against the confirmed password:
	if (!empty($_POST['pass1'])) {
		if ($_POST['pass1'] != $_POST['pass2']) {
			$errors[] = 'Your password did not match the confirmed password.';
		} else {
			$p = trim($_POST['pass1']);
		}
	} else {
		$errors[] = 'You forgot to enter your password.';
	}		
				
if (empty($errors)) 
	{
		// Register the user in the database: 
		// Connect to the database: 
		require ('includes/mysqli_connect.php');	 
		
// Make the query:
$q = "INSERT INTO users (first_name, last_name, email, pass, registration_date) VALUES ('$fn', '$ln', '$e', SHA1('$p'), NOW() )";		
$r = @mysqli_query ($dbc, $q); // Run the query.
		
if ($r)
	{
		// If it ran OK...
		// Print a message: 
		echo '<H1>Thanks for registering.  In Ch 12 you will be able to log in!</H1>';
		
		}	else	{
		
		// If it failed: 
		// Public message: 
		echo '<H1>ERROR:  You are not registered. Try again.</H1>';
		
		// Debugging message: 
		echo '<p>' . mysqli_error($dbc) . '<br/><br />Query: '.  $q .'</p>';
		
	} // End of $r IF.	
		
// Close the database connection: 						
mysqli_close($dbc);					

//Include the footer and quit the script:

include ('includes/footer.html');	
exit();
	}	else	{
	
		// Report the errors: 
		echo '<h1>Error!</h1><p>The following errors occurred:<br />';
			foreach ($errors as $msg)
				{ 
					// Print each error. 
					echo " - $msg<br />\n";
				}
		echo '</p><p>Please try again.</p>';
	} // end of (empty($errors) IF. 
	
} // End of the main Submit conditional. 

// Quit PHP and create the HTML form for users to enter registration info. 
?>					
					
<H1>Register</H1>


<form action ="register.php" method ="post">


<p>First Name: <input type ="text" name="first_name" size="15" maxlength="20"
value="<?php if (isset($_POST['first_name'])) echo $_POST['first_name']; ?>" /></p>


<p>Last Name: <input type ="text" name="last_name" size="15" maxlength="20"
value="<?php if(isset($_POST['last_name'])) echo $_POST['last_name']; ?>" /></p>


<p>Email: <input type="text" name="email" size="20" maxlength="60"
value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>" /></p>


<p>Password: <input type ="password" name="pass1" size="10" maxlength = "20"
value="<?php if(isset($_POST['pass1'])) echo $_POST['pass1']; ?>" /></p>


<p>Confirm: <input type ="password" name="pass2" size="10" maxlength="20"
value="<?php if(isset($_POST['pass2'])) echo $_POST['pass2']; ?>" /></p>


<p><input type ="submit" name="submit" value ="Register" /></p>


</form>

<?php include ('includes/footer.html'); ?>

		
							
				
										

?>

</body>
</html>