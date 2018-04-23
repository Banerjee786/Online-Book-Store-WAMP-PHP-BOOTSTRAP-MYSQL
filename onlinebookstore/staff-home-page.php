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
<h1 style="position: absolute;top:20px;left:590px; "> Staff Home Page </h1>
</header>
<body style="background-color:#0064B0;top:50px">
	<a href="http://localhost:8888/bookstore/index.php"><img src="logo.jpg" width="100" style="position:absolute; top:20px;left:10px" /></a>
	<div  style="position: absolute;top:100px;left:600px; ">
		<button type="submit" style="width:250px" class="btn btn-primary btn-lg" onclick="location.href = 'staff-item-create.php'";>Create New Item</button><br><br>
		<button type="submit" style="width:250px" class="btn btn-success btn-lg" onclick="location.href = 'staff-update-item.php'";>Update Item</button><br><br>
		<button type="submit" style="width:250px" class="btn btn-info btn-lg" onclick="location.href = 'staff-delete-account.php'";>Delete Customer Account</button><br><br>
		<button type="submit" style="width:250px" class="btn btn-warning btn-lg" onclick="location.href = 'staff-total-transcations-page.php'";>Total Transcations</button><br><br>
		<button type="submit" style="width:250px" class="btn btn-danger btn-lg" onclick="location.href = 'staff-order-page.php'";>Ordered Items</button><br><br>
	</div>
</body>
</html>