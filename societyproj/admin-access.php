<html>
<head>
<style type="text/css">
.style1 {
	text-align: center;
}
.style2 {
	text-align: right;
}
.style3 {
	color: #FFFFFF;
}
.style4 {
	font-size: medium;
}
.style5 {
	text-align: right;
	color: #FFFFFF;
	font-size: medium;
}
</style>
<div class="style2">
	<img src="2015-09-24_00-57-36.png" width="24" height="29"><br>
	<a href="login.php"><span class="style3"><strong><span class="style4">Logout<br></span></strong>
	</span></a><br>

</div>

<center><b><font color="white" size="5" face="Times Roman">Pearl Residency</font></b></center>

<title>Untitled Document</title>
</head>


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
    echo "<td><b>Tenant</b><br>&nbsp;";
   echo "</td>";

   echo "</tr>";
  
   echo "</tr>";
   if($num_docs>0)
   {
   foreach($cursor as $obj)
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
	echo "<td>";
	if ($obj['tenant']==NULL)
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
	$connection->close();  
   
   ?>
 
  
</table>
<table style="width: 1430px"><tr><td class="style1">
<form id="form1" name="form1" method="post" action="admin-insert.php">
  
  
    <input type="submit" name="Insert" id="Insert" value="Insert" style="border: 0; width:90px; height:30px; font-weight:bolder;  color: #FFFFFF; background-color: #1E1C1D;"/>
  </form>
  </td>
  <td class="style1">
<form action="admin-update.php">
   <input type="submit" name="Update" id="Update" value="Update" style="border: 0; width:90px; height:30px; font-weight:bolder;  color: #FFFFFF; background-color: #1E1C1D;" /></form></td>
  <td class="style1"> <form action="delete.php">
 <input type="submit" name="Delete" id="Delete" value="Delete" style="border: 0; width:90px; height:30px; font-weight:bolder;  color: #FFFFFF; background-color: #1E1C1D;" />
 
</form></td></tr></table>
<a href="tenants.php"><p class="style5"><strong>View the tenants</strong></p></a>
<a href="pending.php"><p class="style5"><strong>View Pending Maintenance</strong></p></a>
</body>
</html>