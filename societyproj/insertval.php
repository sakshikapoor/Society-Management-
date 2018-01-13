<?php
   
	
    $_id=$_POST['FlatNumber'];
    $Name=$_POST['Name'];   
    $MobileNumber=$_POST['MobileNumber'];
    $ten=$_POST['ten'];
	$BHK=$_POST['BHK'];   
$Maintenance=$_POST['Maintenance'];   
$Password=$_POST['Password'];   

   $connection=new Mongo('localhost')
   or die("Cant connect to server!");
   
   $db=$connection->selectDB('society')
   or die("Cant connect to db!");
  
  
   $ecollection=$db->userinfo
   or die("Cant connect to collection user info!");
   $ecollection->insert(array('_id'=>$_id,'Name'=>$Name,'MobileNumber'=>$MobileNumber,'BHK'=>$BHK,'Maintenance'=>$Maintenance,'Password'=>$Password,'tenant'=>$ten));
   
   
  echo "<script type='text/javascript'>location.href = 'admin-access.php';</script>"; 


?>