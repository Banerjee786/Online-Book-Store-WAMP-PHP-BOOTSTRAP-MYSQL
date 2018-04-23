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
include 'connection.php';
global $conn;

if (isset($_POST['additem']) && !empty($_POST['additem']))
{
      $dbh = new PDO("mysql:hos=localhost:3306;dbname=bookstore","root","26334649",array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
      $dbh->beginTransaction();

      $name=$_POST['name'];
      $type=$_POST['slct'];
      $version=$_POST['version'];
      $price=$_POST['price'];
      $publisheddate=$_POST['date'];
      $author=$_POST['author'];
      $desc=$_POST['desc'];
      
      $query = "insert into Items(item_name,Description,Version,published_date,price,category) values('".$name."','".$desc."','".$version."','".$publisheddate."','".$price."','".$type."');";
      echo $query;
      if ($conn->query($query) === TRUE) {
         echo "<script type='text/javascript'> location.href = 'http://localhost:8888/bookstore/staff-item-create.php';</script>";
      } 
      else{
         echo "<script type='text/javascript'> location.href = 'http://localhost:8888/bookstore/staff-item-create.php';</script>";
      }
      $dbh = null;
}

if (isset($_GET['updateitem']))
{
      $type=$_GET['slct'];
      $perc=$_GET['perc'];
      $num=$_GET['num'];
 
      if($perc!="")
      {
         if(strpos($perc,'-') !== false)
         {
            $query = "update Items set price=price*(1".$perc."/100) where category='".$type."';";
            if ($conn->query($query) === TRUE) {
               echo 'hey';
            } 
            else
               echo '<script type="text/javascript">location.href ="http://localhost:8888/bookstore/staff-home-page.php"  </script>';
         }
         else{
            $query = "update Items set price=price*(1+".$perc."/100) where category='".$type."';";
            //echo $query;
            if ($conn->query($query) === TRUE) {
               echo 'hey';
            } 
            else
               echo '<script type="text/javascript">location.href ="http://localhost:8888/bookstore/staff-home-page.php"  </script>';
         }
      }
      else
      {
         if(strpos($num,'-') !== false)
         {
            $query = "update Items set price=price".$num."  where category='".$type."';";
            //echo $query;
            if ($conn->query($query) === TRUE) {
               echo 'hey';
            } 
            else
               echo '<script type="text/javascript">location.href ="http://localhost:8888/bookstore/staff-home-page.php"  </script>';
         }
         else
         {
            $query = "update Items set price=price+".$num."  where category='".$type."';";
            //echo $query;
            if ($conn->query($query) === TRUE) {
               echo 'hey';
            } 
            else
               echo '<script type="text/javascript">location.href ="http://localhost:8888/bookstore/staff-home-page.php"  </script>';
         }
      }
}

if(isset($_GET['gettransction']))
{
      $dbh = new PDO("mysql:hos=localhost;dbname=onlinebookstore","root","26334649",array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
      $dbh->beginTransaction();
      $date=$_GET['date'];
      
      $query="Select count(customer_id),sum(total_amount)  from orders where order_date like '".$date."'";
      $stmt=$dbh->prepare($query);
      $stmt->execute();   
      echo "
      <a href='http://localhost:8888/bookstore/index.php'><img src='logo.jpg' width='70' style='position:absolute; top:0px;left:10px' /></a><br><br><br><br>
      <center><table class='table table-bordered'>
      <thead>
         <tr>
            <th>Customers</th>
            <th>Total Amount</th>
         </tr>
      </thead>
      <tbody>";
      while($row=$stmt->fetch()){
       echo "<tr>
       <td>".$row[0]."</td>
       <td>".$row[1]."</td>
       
       </tr>";
      }
      echo "</tbody></table></center><br><br>
      <button type='submit' id='myButton' name='gettransction' value='gettransction' style='width:230px; position:absolute; left:590px;' class='btn btn-success'>Get Transaction for another date</button>

      <script type='text/javascript'>
      document.getElementById('myButton').onclick = function () {
      location.href = 'http://localhost/onlinebookstore/staff-total-transcations-page.php';
    };
</script>";
            $dbh = null;

}

if(isset($_POST['getorder']))
{
      $dbh = new PDO("mysql:hos=localhost:3306;dbname=Bookstore","root","root",array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
      $dbh->beginTransaction();
      $id=$_POST['id'];
      
      $query="Select item,category,order_date,total_amount from orders where customer_id='".$id."'";
      $stmt=$dbh->prepare($query);
      $stmt->execute();   
      echo "
         <a href='http://localhost:8888/bookstore/index.php'><img src='logo.jpg' width='70' style='position:absolute; top:0px;left:10px' /></a><br><br>
         <h2 style='position: absolute;top:10px;left: 530px;''>Transactions for ".$id."</h2><br><br>
      <center><table class='table table-bordered'>
      <thead>
         <tr>
            <th>item</th>
            <th>Category</th>
            <th>order_date</th>
            <th>total_amount</th>
         </tr>
      </thead>
      <tbody>";
      while($row=$stmt->fetch()){
       echo "<tr>
       <td>".$row['item']."</td>
       <td>".$row['category']."</td>
       <td>".$row['order_date']."</td>
       <td>".$row['total_amount']."</td>
       </tr>";
      }
      echo "</tbody></table></center><br><br>
      <button type='submit' id='myButton' name='gettransction' value='gettransction' style='width:280px; position:absolute; left:590px;' class='btn btn-success'>Get Items ordered by another customer</button>
      <script type='text/javascript'>
      document.getElementById('myButton').onclick = function () {
      location.href = 'http://localhost:8888/bookstore/staff-order-page.php';
    };
</script>";
            $dbh = null;

}
if(isset($_GET['customer_delete']))
{
      $id=$_GET['delete'];     
      $query = "delete from customer where customer_id='".$id."';";
      //echo $query;
      if ($conn->query($query) === TRUE) {
         echo "<script type='text/javascript'> location.href = 'http://localhost/onlinebookstore/staff-delete-account.php';</script>";
      } 
      else
      {
         echo "<script type='text/javascript'> location.href = 'http://localhost/onlinebookstore/staff-delete-account.php';</script>";
      }
      $dbh = null;
}

if(isset($_POST['addcustomer']))
{
   $Cust_Fname = $_POST["customer_firstname"];
   $Cust_Lname = $_POST["customer_lastname"];
   $Cust_Username = $_POST["customer_username"];
   $Cust_Password = $_POST["customer_password"];
   $Cust_Email = $_POST["customer_email"];
   $Cust_Bdate = $_POST["customer_bdate"];
   $Cust_Gender = $_POST["customer_gender"];
   $Cust_Category = $_POST["customer_category"];
   $Cust_Address = $_POST["customer_address"];

   $query =  "INSERT INTO bookstore.customer(first_name,last_name,username,password,email,birth_date,gender,category,cust_created_date,address) VALUES('$Cust_Fname','$Cust_Lname','$Cust_Username','$Cust_Password','$Cust_Email','$Cust_Bdate','$Cust_Gender','$Cust_Category','".date('Y-m-d')."','$Cust_Address');";
   $result = mysqli_query($conn,$customer_insert_query);
   if ($conn->query($query) === TRUE) {
         //echo "<script type='text/javascript'> location.href = 'http://localhost:8888/bookstore/staff-item-create.php';</script>";
   } 
   else{
         echo "<script type='text/javascript'> location.href = 'http://localhost:8888/bookstore/customer-home-page.php';</script>";
   }
   $dbh = null;
}
static $cus_id;
if(isset($_POST['username']))
{  

      $dbh = new PDO("mysql:hos=localhost:3306;dbname=onlinebookstore","root","26334649",array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
      $dbh->beginTransaction();

      $username=$_POST['username'];
      $pwd=$_POST['pwd'];

      $query="select password,customer_id from customer where username='".$username."';";
      $stmt=$dbh->prepare($query);
      $stmt->execute();   
      
      while($row=$stmt->fetch()){
       $pwd_db=$row[0];
       $cus_id=$row[1];
      }
 
      if(!(strcmp($pwd_db,$pwd)))
      {
         echo "<script type='text/javascript'> location.href = 'http://localhost:8888/bookstore/customer-home-page.php';</script>";
      }   
      else{
         echo "<script type='text/javascript'> location.href = 'http://localhost:8888/bookstore/customer-login.php?pwd=wrong';</script>";
      }
      $dbh = null;

}
if(isset($_GET['add-customer-item']))
{
      $quantity=$_GET['quantity'];
      $item=$_GET['item'];
      $cost=$_GET['cost'];
      $category=$_GET['category'];
      $item=$_GET['item'];

      $total=(int)$quantity*(int)$cost;
      $query="INSERT INTO bookstore.orders(order_date,customer_id,order_status,quantity,total_amount,category,item) VALUES(".date('Y-m-d').",'1014','In Transit','".$quantity."',".$total.",'".$category."','".$item."');";
      
      $result = mysqli_query($conn,$query);
      if ($conn->query($query) === TRUE) {
            
      } 
      else{
         echo $query;
      }
      $dbh = null;
}
?>
</body>
</html>