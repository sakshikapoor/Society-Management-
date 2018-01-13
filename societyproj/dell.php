<?php
   
    $_id=$_POST['Del'];
   
   $connection=new Mongo('localhost')
   or die("Cant connect to server!");
   
   $db=$connection->selectDB('society')
   or die("Cant connect to db!");
  
  
   $ecollection=$db->userinfo
   or die("Cant connect to collection user info!");
	
		
	$ecollection->remove( array( '_id' => $_id ) );
	echo "<script type=text/javascript> alert('deleted data'); </script>";
	
	$connection->close();
	echo "<script type='text/javascript'>location.href = 'admin-access.php';</script>"; 

	?>