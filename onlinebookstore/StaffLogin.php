
<?php

require "configuration.php";
if(!$conn)
		{
			echo 'Database not connected';
		}
	if(isset($_POST['staff_login_btn']))
	{
		$UserName = $_POST['Staff_Username'];
		$PassWord = $_POST['Staff_Password'];
		$Auth_Query = "SELECT * FROM staff WHERE staff_username='$UserName' AND staff_password='$PassWord'";
		$record = mysqli_query($conn,$Auth_Query);
		if(!$record)
		{
			echo 'Unable to fetch data from database';
		}
		if(mysqli_num_rows($record) > 0)
		{
			header("refresh:1; url=staff-home-page.php");
		}
		else
		{
			echo 'Incorrect Username or Password. Try Again';
			header("refresh:3; url=staff-login.php");
		}
	}

?>