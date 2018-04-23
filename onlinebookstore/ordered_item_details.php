<?php

$conn = mysqli_connect('localhost','root','26334649');
$config = mysqli_select_db($conn,'onlinebookstore');

if(isset($_POST['getorder']))
	{
		$Order_Id = $_POST['order_id'];
		$fetch_itemdetails_query = "SELECT i.item_id,i.item_name,i.description,o.order_id,o.customer_id,o.order_date,o.order_status,o.quantity,o.payment_type,i.price,o.total_amount,o.delivery_type
from orders o, items i WHERE o.order_id = i.order_id AND o.order_id IN ('$Order_Id')";
		//$result = mysqli_query($conn,$fetch_itemdetails_query);
		$records = mysqli_query($conn,$fetch_itemdetails_query);
		if(!$records)
		{
			echo 'Unable to fetch data from database';
			//mysql_close($conn);
		}
		if(mysqli_num_rows($records) == 0)
		{
			echo 'Sorry. No order for this Order ID.';
			header("refresh:5; url=staff-order-page.php");
			die('');
		}
		
	}
?>

<html>
<head>
<title> Ordered Item(s) Details </title>
	</head>
	<body>
	<header>
	<h1>Ordered Item Details</h1>
	</header>
	<br/><br/>
		<table width="600" border="1" cellpadding="1" cellspacing="1">
			<tr>
				<th>Item Id</th>
				<th>Item Name</th>
				<th>Description</th>
				<th>Order Id</th>
				<th>Customer Id</th>
				<th>Order Date</th>
				<th>Order Status</th>
				<th>Quantity</th>
				<th>Payment Type</th>
				<th>Price</th>
				<th>Total Amount</th>
				<th>Delivery Type</th>
			<tr>
				<?php
					while($item=mysqli_fetch_assoc($records))
					{
						echo "<tr>";
						echo "<td>".$item['item_id']."</td>";
						echo "<td>".$item['item_name']."</td>";
						echo "<td>".$item['description']."</td>";
						echo "<td>".$item['order_id']."</td>";
						echo "<td>".$item['customer_id']."</td>";
						echo "<td>".$item['order_date']."</td>";
						echo "<td>".$item['order_status']."</td>";
						echo "<td>".$item['quantity']."</td>";
						echo "<td>".$item['payment_type']."</td>";
						echo "<td>".$item['price']."</td>";
						echo "<td>".$item['total_amount']."</td>";
						echo "<td>".$item['delivery_type']."</td>";
						echo "</tr>";
						
					}
				header("refresh:5; url=staff-order-page.php");
				?>
		</table>
	</body>
	</html>