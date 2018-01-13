<?php 
$comp=$_POST['comp'];
if (isset($_POST['Submit']))
{
$upd=$_POST['upd'];
$connection=new Mongo('localhost')
   or die("Cant connect to server!");
   
   $db=$connection->selectDB('society')
   or die("Cant connect to db!");
  
 $ecollection=$db->complaints
   or die("Cant connect to collection complaints!");

 $comp1=array('comp'=>$comp);
   $document=$ecollection->findOne($comp1);
   if($document)
   {
   if($upd!="")
   {
   $document['status']=$upd;
   }
echo "<script type=text/javascript> alert('status updated'); </script>";
	  $ecollection->save($document);

	$connection->close();
	echo "<script type='text/javascript'>location.href = 'Admin-complaint.php';</script>";
}

}
if(isset ($_POST['del']))
{
$connection=new Mongo('localhost')
   or die("Cant connect to server!");
   
   $db=$connection->selectDB('society')
   or die("Cant connect to db!");
  
 $ecollection=$db->complaints
   or die("Cant connect to collection complaints!");
   
   $ecollection->remove( array( 'comp' => $comp ) );
	echo "<script type=text/javascript> alert('deleted complaint'); </script>";
	
	$connection->close();
	echo "<script type='text/javascript'>location.href = 'Admin-complaint.php';</script>"; 
}
   
