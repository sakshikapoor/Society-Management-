<?php
   
    $_id=$_POST['FlatNumber'];
    $Name=$_POST['Name'];
    $MobileNumber=$_POST['MobileNumber'];
    
    $BHK=$_POST['BHK'];
    $Maintenance=$_POST['Maintenance'];
    $Password=$_POST['Password'];   
   
   $connection=new Mongo('localhost')
   or die("Cant connect to server!");
   
   $db=$connection->selectDB('society')
   or die("Cant connect to db!");
  
  
   $ecollection=$db->userinfo
   or die("Cant connect to collection user info!");
   $flat_no=array('_id'=>$_id);
   $document=$ecollection->findOne($flat_no);
   if($document)
   {
   if($Name!="")
   {
   $document['Name']=$Name;
   }
   
   if($MobileNumber!="")
   {
   $document['MobileNumber']=$MobileNumber;
   }
	
	if($BHK!="")
   {
   $document['BHK']=$BHK;
   }
	if($Maintenance!="")
   {
   $document['Maintenance']=$Maintenance;
   }
	if($Password!="")
   {
   $document['Password']=$Password;
   }
	}
	else
	{
	  echo "<script type='text/javascript'>alert ('update only registered flats');</script>"; 

	  echo "<script type='text/javascript'>location.href = 'admin-update.php';</script>"; 

	}
   
   
   $ecollection->save($document);
   $connection->close();
   
  echo "<script type='text/javascript'>location.href = 'admin-access.php';</script>"; 


   
   ?>
   
