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
	<form class="form-inline" name="gettransction" method="GET" action="model.php">
		
		  <div class="form-group" style="position:absolute; left:590px;"">
		    <label for="text">Enter Date of Transaction:</label>
		    <input type="date" name="date" style="width:170px;vertical-align: middle; display: block" class="form-control" id="text" required>
		  </div><br><br><br><br>

		  <button type="submit" name="gettransction" value="gettransction" style="width:130px; position:absolute; left:590px;" class="btn btn-success">Get Transaction</button>
	</form>
</body>
</html>