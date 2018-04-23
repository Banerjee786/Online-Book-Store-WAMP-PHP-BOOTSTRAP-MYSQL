<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script language="javascript" type="text/javascript">
	</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
	<link href="dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="starter-template.css" rel="stylesheet">
</head>
<body>
<?php
require 'configuration.php';

if(!$conn)
{
echo 'Database connection error';
}
   if(isset($_POST['additem'])){
	$Item_Name = $_POST['name'];
	$Item_Description = $_POST['slct'];
	$Item_Version = $_POST['version'];
	$Published_Date = $_POST['date'];
	$Item_Price = $_POST['price'];
	$Order_ID = $_POST['order_id'];
	if($Order_ID != ''){
	$items_insert_query = "INSERT INTO items(item_name,description,version,published_date,price,order_id)
	VALUES('$Item_Name','$Item_Description','$Item_Version','$Published_Date','$Item_Price','$Order_ID')";
	}
	else
	{
	$items_insert_query = "INSERT INTO items(item_name,description,version,published_date,price)
	VALUES('$Item_Name','$Item_Description','$Item_Version','$Published_Date','$Item_Price')";
	}
	$result = mysqli_query($conn,$items_insert_query);
	if(!$result)
		{ 
	echo 'Data could not be inserted'; 
		}
	else
		{ 
	echo 'Data inserted into Database successfully'; 
		}	
	header("refresh:5; url=staff-item-create.php");
    }
	



?>