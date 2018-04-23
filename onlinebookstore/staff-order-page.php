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
<header>
<h2 style="position:absolute; top:20px;left:500px"> Enter the Order Id </h2>
</header>
<body>
	<a href="http://localhost:8888/bookstore/index.php"><img src="logo.jpg" width="100" style="position:absolute; top:0px;left:10px" />

	</a>
	<form class="form-inline" name="getorder"  method="POST" action="ordered_item_details.php">
		
		  <div class="form-group" style="position:absolute; left:500px;top:100px;"">
		    
		    <input type="text" name="order_id" style="width:170px;vertical-align: middle; display: block" class="form-control"  required>
		  </div><br><br><br><br><br>

		  <button type="submit" name="getorder" value="getorder" style="width:130px; position:absolute; left:500px;top:170px;" class="btn btn-success">Get Items</button>
	</form>
</body>
</html>