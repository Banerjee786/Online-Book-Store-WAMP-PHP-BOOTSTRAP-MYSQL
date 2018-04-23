<?php

require "configuration.php";
if(!$conn)
	{ echo 'Database connection error';  }

if (isset($_GET['updateitem']))
{
      $type=$_GET['slct'];
      $perc=$_GET['perc'];
      $num=$_GET['num'];
	  if($perc != "")
      {
			 $query_perc = "UPDATE items SET price = price+(price*($perc/100)) WHERE description LIKE ('$type%')";
			 $result = mysqli_query($conn,$query_perc);
			 if(!$result)
			 { echo 'Records could not be updated'; }
			 else
			 { echo 'Records updated successfully'; }
	  }
	  else
		  if($num!="")
		  {
			 $query_num = "UPDATE items SET price=price+$num WHERE description LIKE ('$type%')";
			  $result = mysqli_query($conn,$query_num);
			 if(!$result)
			 { echo 'Records could not be updated'; }
			 else
			 { echo 'Records updated successfully'; }
		  }
	header("refresh:5; url=staff-update-item.php");
}

?>