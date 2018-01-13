<?php



    $flatno=$_POST['flatno'];
       
    $amount=$_POST['amount'];
    
    $last=$_POST['last'];

	$pend=$_POST['pend'];
	
	$connection=new Mongo('localhost')
   or die("Cant connect to server!");
   
   $db=$connection->selectDB('society')
   or die("Cant connect to db!");
  
   $ecollection=$db->maintenance
   or die("Cant connect to collection maintenance!");
   $flat_no=array('_id'=>$flatno);
   $document=$ecollection->findOne($flat_no);

 if ($document)
 {
 $document['paid']+=$amount;
 $rem=$document['annual']-$document['paid'];
$document['balance']=$rem;
$document['lpaid']=$last;
if($pend)
{
$document['balance']=($document['balance']*0.10)+$document['balance'];
}

$ecollection->save($document);
echo "<script type='text/javascript'>alert ('Maintenance updated!');</script>"; 
	  echo "<script type='text/javascript'>location.href = 'admin-access.php';</script>"; 
 }
 else
 {
 echo "<script type='text/javascript'>alert ('update only registered flats');</script>"; 

	  echo "<script type='text/javascript'>location.href = 'updatemaintenance2.php';</script>"; 


 }


?>