

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
	<a href="http://localhost:8888/bookstore/index.php"><img src="logo.jpg" width="100" style="position:absolute; top:0px;left:10px" /></a>
	<center><br><br>
		<form class="form-inline" style="text-align: center;" name="addcustomer" method="POST" action="InsertCustomer.php">
			<div class="form-group">
			    <label for="text">First Name : </label>
			    <input type="text" style="width:250px;vertical-align: middle; display: inline;" class="form-control" name="customer_firstname" id="text" required>
			</div><br><br>
			<div class="form-group">
			    <label for="text">Last Name : </label>
			    <input type="text" style="width:250px;vertical-align: middle; display: inline" class="form-control" name="customer_lastname" id="text" required>
			</div><br><br>
			<div class="form-group">
			    <label for="text">Username : </label>
			    <input type="text" style="width:250px;vertical-align: middle; display: inline" class="form-control" name="customer_username" id="text" required>
			</div><br><br>
			<div class="form-group">
			    <label for="text">Password : </label>
			    <input type="Password" style="width:250px;vertical-align: middle; display: inline" class="form-control" name="customer_password" id="text" required>
			</div><br><br>
			<div class="form-group">
			    <label for="text">Email Id : </label>
			    <input type="Email" style="width:250px;vertical-align: middle; display: inline" class="form-control" name="customer_email" id="text" required>
			</div><br><br>
			<div class="form-group">
			    <label for="text">Date of Birth : </label>
			    <input type="text" style="width:250px;vertical-align: middle; display: inline" class="form-control" name="customer_bdate" id="text" required>
			</div><br><br>
			<div class="form-group">
			    <label for="text">Gender : </label>
			    <input type="text" style="width:250px;vertical-align: middle; display: inline" class="form-control" name="customer_gender" id="text" required>
			</div><br><br>
			<div class="form-group">
			    <label for="text">Category : </label>
			    <input type="text" style="width:250px;vertical-align: middle; display: inline" class="form-control" name="customer_category" id="text" required>
			</div><br><br>
			<div class="form-group">
			    <label for="text">Address : </label>
			    <input type="text" style="width:250px;vertical-align: middle; display: inline" class="form-control" name="customer_address" id="text" required>
			</div><br><br>
	  		<button type="submit" name="addcustomer" value="addcustomer"  style="width:190px; position:absolute; left:550px;" class="btn btn-success">Create Account</button>	
    	</form>
    </center>	
    
</body>
</html>
