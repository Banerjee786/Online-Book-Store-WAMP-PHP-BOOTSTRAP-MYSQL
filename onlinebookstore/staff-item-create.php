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
	<div style="border-color: black; position:absolute; left:590px;">
		<b style="width:130px; position:absolute; font-size: 20px; left:50px;">Item Details</b><br><br>

		<form class="form-inline" name="additem" style="width:130px; position:left; left:80px;" method="POST" action="ItemCreate.php">
		Item Type
		<select id="slct" name="slct" style="width:130px; position:absolute; left:80px;">
			  <option value="Book Paperback">Book Paperback</option>
			  <option value="Book Hardcover">Book Hardcover</option>
			  <option value="eBook">eBook</option>
			  <option value="Movie">Movie</option>
			  <option value="Journal">Journal</option>
		</select>
		<br>
		
				
		  <div class="form-group">
		    <label for="text">Item Name:</label>
		    <input type="text" style="width:250px;vertical-align: middle; display: block" class="form-control" name="name" id="text" required>
		  </div><br>

		  <div class="form-group">
		    <label for="text">Version:</label>
		    <input type="text" style="width:250px;vertical-align: middle; display: block" class="form-control" name="version" id="text" required>
		  </div><br>

		  <div class="form-group">
		    <label for="text">Price:</label>
		    <input type="text" min="0" style="width:250px;vertical-align: middle;display: block" class="form-control" name="price" id="text" required>
		  </div><br>
		  
		  <div class="form-group">
		    <label for="text">Published Date:</label>
		    <input type="text" id="date" style="width:250px;vertical-align: middle;display: block" class="form-control" name="date" required>
		  </div><br>

		  <div class="form-group">
		    <label for="text">Author:</label>
		    <input type="text" style="width:250px;vertical-align: middle;display: block" class="form-control" name="author" id="text" required>
		  </div><br>
		  
		  <div class="form-group">
		    <label for="text">Order Id:</label>
		    <input type="text" style="width:250px;vertical-align: middle;display: block" class="form-control" name="order_id" id="text" required>
		  </div><br>

		  <div class="form-group">
		    <label for="text">Description:</label>
		    <textarea rows="2" cols="50" style="width:250px;vertical-align: middle;display: block" class="form-control" name="desc" id="text" required></textarea>
		  </div><br><br>

		  <button type="submit" name="additem" value="additem" style="width:130px; position:absolute; left:60px;" class="btn btn-success">Create</button>
		
		</form>
	</div>
	
	
</body>
</html>