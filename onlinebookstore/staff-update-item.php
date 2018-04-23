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
	<center>
	<form class="form-inline" name="updateitem" method="GET" action="UpdateItem.php">
	<b style="width:230px; ">Select the Category of the Item to be update</b><br><br>
	<select id="slct" name="slct" style="width:130px; position:absolute; left:600px;">
			  <option value="book">Book</option>
			  <option value="ebook">eBook</option>
			  <option value="movie">Movie</option>
			  <option value="journal">Journal</option>
	</select><br><br>
	
	<div class="form-group">
		    <label for="text">Update the price in terms of percentage:</label><br>
		    <input type="number" name="perc" id="perc" onchange="Clear1();" onkeyup="Clear1();" step="10" min="-100" style="width:200px;vertical-align: middle; " class="form-control" name="version" id="text" >%</input>
	</div><br><br>

	<div class="form-group">
		    <label for="text">Update the price in terms of amount:</label><br>
		    <input type="number" name="num" id="num" onchange="Clear2();" onkeyup="Clear2();" style="width:200px;vertical-align: middle; " class="form-control" name="version" id="text" >$</input>
	</div><br><br>

	<button type="submit" name="updateitem" value="updateitem" style="width:130px; position:absolute; left:600px;" class="btn btn-success">Update</button>
</form>
</center>
<script type="text/javascript">
function Clear1(){
		document.getElementById("num").value="";
}
function Clear2(){
		document.getElementById("perc").value="";
}
</script>
</body>
</html>