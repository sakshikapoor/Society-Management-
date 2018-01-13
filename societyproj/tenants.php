<body style="background-image: url(houses-768725_1280.jpg)">
<br><br><br>

<table align="center" width="700" border="1" bgcolor="#1C1A1B" style="font-family:'Times New Roman', Times, serif;color:white" cellpadding="5">

   <?php
   
   $connection=new Mongo('localhost')
   or die("Cant connect to server!");
   
   $db=$connection->selectDB('society')
   or die("Cant connect to db!");
  
  
   $ecollection=$db->userinfo
   or die("Cant connect to collection user info!");
   $cursor=$ecollection->find();
   $cursor->sort(array('_id' => 1));
   $num_docs=$cursor->count();
  
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
  
   echo "</tr>";
  
   echo "</tr>";
   if($num_docs>0)
   {
   foreach($cursor as $obj)
   {
   if ($obj['tenant'])
{
   echo "<tr>";
   echo "<td>";
   echo $obj['_id'];
   echo "</td>";
   echo "<td>";
   echo $obj['Name'];
   echo "</td>";
   echo "<td>";
	echo $obj['MobileNumber'];
	echo "</td>";
	
	echo "<td>";
	echo $obj['BHK'];
	echo "</td>";
	echo "<td>";
	echo $obj['Maintenance'];
	echo "</td>";
	
	echo "</tr>";
	}
}
	}
	$connection->close();  
   
   ?>
 
  
</table>
