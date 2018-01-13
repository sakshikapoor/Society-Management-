<?php
  
$un=$_GET['un'];


	
    $des=$_POST['Description'];
    $comp=$_POST['comp'];
   $connection=new Mongo('localhost')
   or die("Cant connect to server!");
   
   $db=$connection->selectDB('society')
   or die("Cant connect to db!");
  
  
   $ecollection=$db->userinfo
   or die("Cant connect to collection user info!");
   
   
   $id1=$ecollection->findone(array('Name'=>$un));
   
   $qcollection=$db->complaints
   or die("Cant connect to collection user info!");
     
 $comp1=array('comp'=>$comp);
   $document=$qcollection->findOne($comp1);
   if($document)
   {
   echo "<script type=text/javascript> alert('id not unique'); </script>";
	  $ecollection->save($document);

	$connection->close();
	echo "<script type='text/javascript'>location.href = 'User-complaint.php?un=$un';</script>";
}




else
{
   
   $qcollection->insert(array('flatno'=>$id1['_id'],'description'=>$des,'status'=>"registered",'comp'=>$comp));
   echo "<script type='text/javascript'>alert 'Your complaint has been Registered';</script>"; 

   
  echo "<script type='text/javascript'>location.href = 'User Detail.php?un=$un';</script>"; 
}
?>