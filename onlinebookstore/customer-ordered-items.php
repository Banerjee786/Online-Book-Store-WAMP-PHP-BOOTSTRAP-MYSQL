<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script language="javascript" type="text/javascript">
	</script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
	<link href="dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="starter-template.css" rel="stylesheet">
</head>
<body style="background-color:#eca1a6;">
	<a href="http://localhost:8888/bookstore/index.php"><img src="logo.jpg" width="70" style="position:absolute; top:0px;left:10px" /></a><br><br>
	<h2 style="position: absolute;top:10px;left: 530px;">My Orders</h2><br><br>
	<?php
		include 'connection.php';
		global $conn;

	    $dbh = new PDO("mysql:hos=localhost;dbname=onlinebookstore","root","26334649",array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
   		$dbh->beginTransaction();

   		$stmt=$dbh->prepare('Select order_id, order_status,quantity, payment_type, total_amount, delivery_type,staff_id from orders');
   		$stmt->execute();
	    echo "<center><table id='tbl' class='table table-striped'>
	    <thead>
		    <tr>
		      <th>order_id</th>
		      <th>order_status</th>
		      <th>quantity</th>
		      <th>payment_type</th>
		      <th>total_amount</th>
		      <th>delivery_type</th>
		      <th>staff_id</th>
		      
		    </tr>
	    </thead><tbody>";
	    while($row=$stmt->fetch()){
	    echo "<tr>
	    <td >".$row[0]."</td>
	    <td >".$row[1]."</td>
	    <td >".$row[2]."</td>
	    <td >".$row[3]."</td>
	    <td >".$row[4]."</td>
	    <td >".$row[5]."</td>
	    <td >".$row[6]."</td>
	    
	    </tr>";
	}echo"</tbody>";
		$dbh = null;
	?>
</body>
</html>