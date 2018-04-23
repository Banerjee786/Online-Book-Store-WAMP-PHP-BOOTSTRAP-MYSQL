
<?php
require "configuration.php";
if(!$conn)
{
	echo 'Database not connected';
}
else{
if(isset($_POST['addcustomer']))
   {
   $Cust_Fname = $_POST["customer_firstname"];
   $Cust_Lname = $_POST["customer_lastname"];
   $Cust_Username = $_POST["customer_username"];
   $Cust_Password = $_POST["customer_password"];
   $Cust_Email = $_POST["customer_email"];
   $Cust_Bdate = $_POST["customer_bdate"];
   $Cust_Gender = $_POST["customer_gender"];
   $Cust_Category = $_POST["customer_category"];
   $Cust_Address = $_POST["customer_address"];

   $customer_insert_query = "INSERT INTO customer(first_name,last_name,username,password,email,birth_date,gender,category,address) VALUES('$Cust_Fname','$Cust_Lname','$Cust_Username','$Cust_Password','$Cust_Email','$Cust_Bdate','$Cust_Gender','$Cust_Category','$Cust_Address')";
   $result = mysqli_query($conn,$customer_insert_query);
   if($result)
			{ echo 'Your account has been created successfully'; }
		else
		{echo 'Couldnot create account';}
		}
	}
header("refresh:5; url=customer-login.php");

?>