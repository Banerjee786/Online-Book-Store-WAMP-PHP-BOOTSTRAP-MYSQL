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
	<body style="background-color:#eca1a6; color: black">
		<a href="http://localhost:8888/bookstore/index.php"><img src="logo.jpg" width="70" style="position:absolute; top:0px;left:10px" /></a>
		<h2 style="position: absolute;top:0px;left: 490px;">Welcome to Bookstore</h2><br><br><br><br><br>
		<?php
		include 'connection.php';
		global $conn;

	    $dbh = new PDO("mysql:hos=localhost;dbname=onlinebookstore","root","26334649",array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
   		$dbh->beginTransaction();

   		$stmt=$dbh->prepare('Select count(*) from items');
   		$stmt->execute();
   		$count=0;
   		 while($row=$stmt->fetch()){
   		 	$count=$row[0];
   		 }
   		$stmt=$dbh->prepare('Select item_id, item_name,description, version, published_date, price, order_id from items');
   		$stmt->execute();
	    echo "
	    <center><table id='tbl' class='table table-hover'><thead>
	    <tr >
	      <th class='tr'>item_id</th>
	      <th class='tr'>item_name</th>
	      <th class='tr'>description</th>
	      <th class='tr'>version</th>
	      <th class='tr'>published_date</th>
	      <th class='tr'>price</th>
	      <th class='tr'>order_id</th>
	      <th class='tr'>quantity</th>
	      <th class ='tr'>Add to Cart</th>
	    </tr></thead>";
	    while($row=$stmt->fetch()){
	    echo "<tbody><tr>
	    <td class='td'>".$row["item_id"]."</td>
	    <td class='td' id='item".$row["item_id"]."'>".$row["item_name"]."</td>
	    <td class='td'>".$row["description"]."</td>
	    <td class='td'>".$row["version"]."</td>
	    <td class='td'>".$row["published_date"]."</td>
	    <td class='td' id='cost".$row["item_id"]."'>".$row["price"]."</td>
	    <td class='td' id='category".$row["item_id"]."'>".$row["order_id"]."</td>
	    <td class='td'><input name='quantity' id='quantity".$row["item_id"]."' type='number' value='0' style='width:60px' min='0';></td>
	    <td class='td'><input type='radio' id='".$row["item_id"]."' name='".$row["item_id"]."' onclick='deletecus(".$row["item_id"].")' ></td>
	    </tr></tbody>";
	}
		echo "</table><button id='out' class='btn btn-success' onclick='checkout(".$count.")' style='display:none;''>Check Out</button></center>";
		$dbh = null;
	?>
	<script>
		//<td class='td'><input id='quantity".$row["item_id"]."' type='number' value='0' style='width:60px' min='0';></td>  <td class='td' id='cost".$row["item_id"]."'>".$row["price"]."</td>
		function deletecus(i){
			if(document.getElementById("quantity"+i).value==='0'){
				alert("Please enter required quantity");
				document.getElementById(i).checked = false;
			}
			else
			{	
				document.getElementById("out").style.display='block';
				var quantity=document.getElementById("quantity"+i).value;
		    	var cost=document.getElementById("cost"+i).innerHTML;
		    	var category=document.getElementById("category"+i).innerHTML;
				var item=document.getElementById("item"+i).innerHTML;

				var xhttp = new XMLHttpRequest();
			    xhttp.onreadystatechange = function() {
			    	//console.log(":success");
		    	};
		    	
			    xhttp.open("GET", "model.php?add-customer-item=yes&quantity=" +quantity+"&item="+i+"&cost="+cost+"&category="+category+"&item="+item, true);
		    	xhttp.send();
		    	//location.href='http://localhost:8888/bookstore/model.php?add-customer-item=yes&quantity='+quantity+'&item='+i+'&cost='+cost+"&category="+category;
			}	
		}

		function checkout(j){
			location.href='http://localhost/bookstore/customer-ordered-items.php';
		}
	</script>
</body>
</html>