
<head>
<style type="text/css">
.style1 {
	text-align: right;
}
.style3 {
	text-align: right;
}
.style4 {
	color: #FFFFFF;
	font-size: medium;
}
</style>
</head>

<div class="style1">

<p class="style3"><img src="2015-09-24_00-57-03.png" width="30" height="42"><br>
<a href="admin-access.php"><span class="style4"><strong>Profile</strong></span></p></a>
	
	<br /><br /><br /><br />
   </div>

   <?php
   echo '<table align="center" width="700" border="1" bgcolor="#1C1A1B" style="color:white" cellpadding="5">';
     echo "<tr>";
   echo "<td><b>Flat Number</b><br>&nbsp;";
   echo "</td>";
   echo "<td><b>Owner Name</b><br>&nbsp;";
   echo "</td>";
	echo "<td><b>Mobile Number</b><br>&nbsp;";
   
   echo "<td><b>BHK</b><br>&nbsp;";
   echo "</td>";
   echo "<td><b>Maintenance</b><br>&nbsp;";
   echo "</td>";
    echo "<td><b>Tenant</b><br>&nbsp;";
   echo "</td>";

   echo "</tr>";
  
   
   
   $connection=new Mongo('localhost')
   or die("Cant connect to server!");
   
   $db=$connection->selectDB('society')
   or die("Cant connect to db!");
   $fcollection=$db->maintenance
   or die("Cant connect to collection maintenance!");
	 $cursor1=$fcollection->find();
   $cursor1->sort(array('_id' => 1));
   $num_docs1=$cursor1->count();
if($num_docs1>0)
   {
   foreach($cursor1 as $obj1)
   {

$_id=$obj1['_id'];

  if ($obj1['balance']>0)
  {
   $ecollection=$db->userinfo
   or die("Cant connect to collection user info!");
   $flat_no=array('_id'=>$_id);
   $document=$ecollection->findOne($flat_no);
   if($document)
   
   echo "<tr>";
   echo "<td>";
   echo $document['_id'];
   echo "</td>";
   echo "<td>";
   echo $document['Name'];
   echo "</td>";
   echo "<td>";
	echo $document['MobileNumber'];
	echo "</td>";
	
	echo "<td>";
	echo $document['BHK'];
	echo "</td>";
	echo "<td>";
	echo $document['Maintenance'];
	echo "</td>";
	echo "<td>";
	if ($document['tenant']==NULL)
	{
	echo 'No';
	}
	else
	{
	echo 'Yes';
	}
	echo "</td>";
	echo "</tr>";
	}
}
	}
	 echo "</table>";

	
   
   ?><body style="background-image: url('houses-768725_1280.jpg')">