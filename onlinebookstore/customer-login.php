
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
  <?php
  if(isset($_GET['pwd']))
  {
    echo "<script type='text/javascript'> alert('wrong password');</script>";
  }
  ?>
  <br><br>
  <center>
    <div style='border-bottom-color: black; border-bottom:solid; width:350px; '>
      <form class="form-inline" method="POST" action="CustomerLogin.php">
      
        <div class="form-group">
          <label for="text">Username:</label>
          <input type="text" class="form-control" name="username" id="username" required>
        </div><br><br>
        <div class="form-group">
          <label for="pwd">Password:</label>
          <input type="password" class="form-control" name="pwd" id="pwd" required>
        </div><br><br>
        <button type="submit" class="btn btn-success" name="customer-login" value="customer-login" style="width:90px;" >Sign In</button>&nbsp;
      </form>
    </center>  
    <a style='background-color: white; position: absolute;top:235px;left:670px; text-decoration: none!important;' >   New to Bookstore? </a>
  </div>  
  <button style='position: absolute;top:265px;left:460px;width:353px;' type="submit" class="btn btn-info" onclick="location.href = 'customer_insert.php'";>Create an Account</button>
</body>
</html>
