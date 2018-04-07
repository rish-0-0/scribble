<?php
session_start();
include('./includes/dbcon.php');
if (isset($_POST['login']))
{
	$username =$mysqli->real_escape_string($_POST['username']);
	$password = md5($_POST['pass1']);

	$result = $mysqli->query("SELECT * FROM users WHERE username = '$username' AND password = '$password' ");

	if($result->num_rows>0)
	{
		while($row=$result->fetch_object()) {

			$_SESSION['username'] = $username;//Session variable assignment
			$_SESSION['email'] = $row->email;
			$_SESSION['id'] =  $row->id;
			$_SESSION['success'] = "You are ready to make Notes.";
			header('Location:profile.php');
		}

	}else
	{
	   $_SESSION['errMsg'] = "Entered Username and Password do not match.";
	    header('Location:index.php');
	}

}
