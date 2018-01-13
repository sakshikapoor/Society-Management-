<?php
   
    $flatno=$_POST['flatno'];
       
    $paid=$_POST['paid'];
    
	
$lpaid=$_POST['lpaid'];   
   $connection=new Mongo('localhost')
   or die("Cant connect to server!");
   
   $db=$connection->selectDB('society')
   or die("Cant connect to db!");
  
   $ecollection=$db->userinfo
   or die("Cant connect to collection userinfo!");
   $flat_no=array('_id'=>$flatno);
   $document2=$ecollection->findOne($flat_no);

 if ($document2)
	{
   $ecollection=$db->maintenance
   or die("Cant connect to collection maintenance!");
   $flat_no=array('flatno'=>$flatno);
   $document=$ecollection->findOne($flat_no);
	
$document['annual']=$document2['Maintenance'];
$document['paid']=$paid;
$document['lpaid']=$lpaid;
$document['_id']=$document2['_id'];
	  $ecollection->save($document);
$rem=$document['annual']-$document['paid'];
$document['balance']=$rem;
$ecollection->save($document);

 
  echo "<script type='text/javascript'>location.href = 'admin-access.php'</script>"; 
}
else
{
	echo "<script type='text/javascript'>alert ('update only registered flats');</script>"; 

	  echo "<script type='text/javascript'>location.href = 'Admin-Maintenance.php';</script>"; 

	}
   


?>