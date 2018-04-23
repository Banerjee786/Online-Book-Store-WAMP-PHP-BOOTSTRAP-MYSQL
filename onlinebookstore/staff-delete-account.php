<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script language="javascript" type="text/javascript">
	</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
	<link href="dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="starter-template.css" rel="stylesheet">
	<style>
	.tr, .td{
		text-align: center;
	}
	#tbl{
		border-color: black;
	}
	</style>
</head>
<body><a href="http://localhost:8888/bookstore/index.php"><img src="logo.jpg" width="70" style="position:absolute; top:0px;left:10px" /></a><br><br><br><br>
	<?php
		include 'connection.php';
		global $conn;
		require "configuration.php";

	    $dbh = new PDO("mysql:hos=localhost;dbname=onlinebookstore","root","26334649",array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
   		$dbh->beginTransaction();
   		$stmt=$dbh->prepare('select customer_id,first_name,last_name,address,email from customer');
   		$stmt->execute();

	    echo "<center><table id='tbl' class='table table-hover'><thead>
	    <tr >
		  <th class='tr'>Customer Id</th>
	      <th class='tr'>First Name</th>
	      <th class='tr'>Last Name</th>
	      <th class='tr'>Address</th>
	      <th class='tr'>Email</th>
	      <th class='tr'></th>
	    </tr></thead>";
	    while($row=$stmt->fetch()){

	    echo "<tbody><tr>
		<td class='td'>".$row["customer_id"]."</td>
	    <td class='td'>".$row["first_name"]."</td>
	    <td class='td'>".$row["last_name"]."</td>
	    <td class='td'>".$row["address"]."</td>
	    <td class='td'>".$row["email"]."</td>
	    <td class='td'><button id='".$row["customer_id"]."' onclick='deletecus(".$row["customer_id"].")' class='btn btn-success'>Delete</button></td>
	    </tr></tbody>";
	}
		echo "</table></center>";
		$dbh = null;
	?>
	<script>
		function deletecus(i){
			window.location.href ='http://localhost/onlinebookstore/model.php?delete='+i+'&customer_delete=delete';
			
			
		}
		</script>
	</body>
</html>