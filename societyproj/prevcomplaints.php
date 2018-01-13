<?php
	$un=$_GET['un'];
	echo $un;
	?>

<html>
<head>
<style type="text/css">
.style1 {
	text-align: right;
	color:white;
	font-weight:bold;
	font-size:large;
}
</style>
<div class="style1">
<img src="2015-09-24_00-57-03.png" width="30" height="42" style="float: right"><br><br><a href="User-complaint.php?un=<?php echo $un; ?>"><strong>Profile</strong>
<br><br><br>
</div>
</a>
</head>
<?php


 $connection=new Mongo('localhost')
   or die("Cant connect to server!");
   
   $db=$connection->selectDB('society')
   or die("Cant connect to db!");
  
  
   $ecollection=$db->userinfo
   or die("Cant connect to collection user info!");
   
   $id1=$ecollection->findone(array('Name'=>$un));
   
   $dcollection=$db->complaints
   or die("Cant connect to collection user info!");
   
   $id=$dcollection->find(array('flatno'=>$id1['_id']));
   $num_docs=$id->count();


   
   if ($id)
   {
   
     
   echo"<table align='center' width='700' border='1' bgcolor='#1C1A1B' style='color:white' cellpadding='5'>";
   echo "<tr align='center'>";
   echo"<td><b>";
   echo "Description";
   echo "</b></td>";
   echo"<td><b>";
   echo "Status";
   echo "</b></td>";
   if($num_docs>0)
   {
 foreach($id as $id)
   {

   echo "<tr align='center'>";
   echo"<td>";
   echo $id['description'];
   echo "</td>";
   echo"<td>";
   echo $id['status'];
   echo "</td>";
   echo "</tr>";
   
   }}
	echo"</table>";
 


   
   
   }
	else
	{
	echo 'NO PREVIOUS COMPLAINTS TO BE SHOWN';
	}


?><body style="background-image: url('houses-768725_1280.jpg')"></html>