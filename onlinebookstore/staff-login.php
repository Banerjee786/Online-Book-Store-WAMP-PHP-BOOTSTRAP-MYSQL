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
<h2 style="position: absolute;top:20px;left:620px; "> Staff Login </h2>
</header>
<body>
<br><br>
  <form class="form-inline" style="position: absolute;top:100px;left:590px; "  action="StaffLogin.php" method="post">
    <center>
    <div class="form-group">
      <label for="email">Username:</label>
	  <input type="text" name="Staff_Username">
    </div>
	<br><br>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" name="Staff_Password">
    </div>
	<br><br>
    <button type="submit" name="staff_login_btn" class="btn btn-success"";>Login</button>
  </center>
  </form>
</body>
</html>