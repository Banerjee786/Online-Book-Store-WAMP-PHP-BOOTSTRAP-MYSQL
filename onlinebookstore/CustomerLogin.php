<?php

require "configuration.php";
if(!$conn)
		{
			echo 'Database not connected';
		}
	if(isset($_POST['customer-login']))
	{
		$UserName = $_POST['username'];
		$PassWord = $_POST['pwd'];
		$Auth_Query = "SELECT * FROM customer WHERE username='$UserName' AND password='$PassWord'";
		$record = mysqli_query($conn,$Auth_Query);
		if(!$record)
		{
			echo 'Unable to fetch data from database';
		}
		if(mysqli_num_rows($record) > 0)
		{
			header("refresh:1; url=customer-home-page.php");
		}
		else
		{
			echo 'Incorrect Username or Password. Try Again';
			header("refresh:3; url=customer-login.php");
		}
	}

?>