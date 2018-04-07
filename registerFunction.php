<?php
session_start();
include('./includes/dbcon.php');
if (isset($_POST['register']))
{	
	$username =$mysqli->real_escape_string($_POST['username']);
	$email = $mysqli->real_escape_string($_POST['email']);
	$pass1 = md5($_POST['pass1']);
	$pass2 = md5($_POST['pass2']);
	
	$result = $mysqli->query("SELECT * FROM users WHERE username = '$username'");
	
	if($result->num_rows>0)
	{
		$_SESSION['errMsg'] = "user already exists ";
		 header('Location:register.php');
		$error = true;
	}
	
	// if($pass1 !== $pass2)
	// {
	// 	$_SESSION['message'] = "passwords must be same ";
	// 	//header('Location: error.php');		
	// 	$error = true;
	// }

	if(!isset($error))
	{
		$query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$pass1')";
		if ($mysqli->query($query) === TRUE) 
		{
			
			
			$_SESSION['success'] = "You are now registered, login to continue  ";
			header('Location: index.php');
				
			
			
		} else 
		{
	    	echo "Error: " . $sql . "<br>" . $mysqli->error;
		}

	}

	
}

?>
