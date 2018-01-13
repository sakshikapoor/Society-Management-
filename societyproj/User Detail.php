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
</style>
<div class="style2">
	<img alt="logout" src="2015-09-24_00-57-36.png" width="24" height="29"><br>
	<a href="login.php"><span class="style3"><strong><span class="style4">Logout<br><br>
	</span></strong></span></a>
</div>	
</head>
<body style="background-image: url(houses-768725_1280.jpg)">

<center><b><font color="white" size="6" face="Times Roman">Flat Owner Details</font></b></center>
<br><br><br>
<form id="form1" name="form1" method="post" action="">


<div class="style1">


<?php
error_reporting(0);
	$un=$_GET['un'];
	
   $connection=new Mongo('localhost')
   or die("Cant connect to server!");
   
   $db=$connection->selectDB('society')
   or die("Cant connect to db!");
  
  
   $ecollection=$db->userinfo
   or die("Cant connect to collection user info!");
 
 	$id=$ecollection->findone(array('Name'=>$un));
		

   
   echo"<table align='center' width='700' border='1' bgcolor='#1C1A1B' style='color:white' cellpadding='5'>";
   echo "<tr align='center'>";
   echo"<td><b>";
   echo "User Name";
   echo "</b></td>";
   echo"<td>";
   echo $id['Name'];
   echo "</td>";
   echo "</tr>";
    echo "<tr align='center'>";
   echo"<td><b>";
   echo "Flat Number";
   echo "</b></td>";
   echo"<td>";
   echo $id['_id'];
   echo "</td>";
   echo "</tr>";
 echo "<tr align='center'>";
   echo"<td><b>";
   echo "BHK";
   echo "</b></td>";
   echo"<td>";
   echo $id['BHK'];
   echo "</td>";
   echo "</tr>";
 echo "<tr align='center'>";
   echo"<td><b>";
   echo "Maintenance";
   echo "</b></td>";
   echo"<td>";
   echo $id['Maintenance'];
   echo "</td>";
   echo "</tr>";
    echo "<tr align='center'>";
   echo"<td><b>";
   echo "Contact Number";
   echo "</b></td>";
   echo"<td>";
   echo $id['MobileNumber'];
   echo "</td>";
   echo "</tr>";


    echo"</table>";
 
?>
<br><br>

    <input name="Maintenance Details" type="button" value="Maintenance Details"style="border: 0; font-size:medium; font-family:'Times New Roman', Times, serif; width:180px; height:30px; font-weight:bolder; color: #FFFFFF; background-color: #1E1C1D;"style="border: 0; font-size:medium; font-family:'Times New Roman', Times, serif; width:120px; height:30px; font-weight:bolder; color: #FFFFFF; background-color: #1E1C1D;"  onclick="window.location.href='User-Maintenance.php?un=<?php echo $un; ?>'" style="width:170px; height:30px; font-weight:bolder" />
    <br><br>
 
 <input name="Register Complaint" type="button" style="border: 0; font-size:medium; font-family:'Times New Roman', Times, serif; width:180px; height:30px; font-weight:bolder; color: #FFFFFF; background-color: #1E1C1D;" onclick="window.location.href='User-complaint.php?un=<?php echo $un; ?>'" value="Register Complaint" />
  
 
</div>
  
 
</form>
</body>
</html>