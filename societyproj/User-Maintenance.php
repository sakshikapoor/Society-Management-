<?php
$un=$_GET['un'];
?>
<html>
<head>
<style type="text/css">
.style1 {
	text-align: right;
}
.style2 {
	color: #FFFFFF;
	font-size: medium;
}
.style3 {
	font-size: medium;
}
</style>
<div class="style1">
	<img src="2015-09-24_00-57-03.png" width="32" height="40"><br>
	<a href="User Detail.php?un=<?php echo $un; ?>"><span class="style2"><strong>Profile</strong></span><span class="style3"><br>
	</span></a><br><br>
</div>
<center><b><font color="white" size="6" face="Times Roman">Flat Maintenance Details</font></b></center>


<title>User-Maintenance</title>
</head>

<body style="background-image: url(houses-768725_1280.jpg)">
<br><br><br>
<form id="form1" name="form1" method="post" action="">
  
  <?php
	
    $connection=new Mongo("localhost");
	$db=$connection->selectDB('society');
	$ecollection=$db->userinfo;
	$id=$ecollection->findone(array('Name'=>$un));
	
	$dcollection=$db->maintenance;
	$id2=$dcollection->findone(array('_id'=>$id['_id']));

		if ($id2)
   {
   
   
 echo '<table align="center" width="700" border="1" bgcolor="#1C1A1B" style="color:white" cellpadding="5">';
 echo"<tr align='center'>";
 echo "<td><b>";
 echo "Flat Number";
  echo "</b></td>";
  echo "<td>";
  echo $id2['_id'];
  echo "</td>";
 echo"</tr>";
   echo"<tr align='center'>";
 echo "<td><b>";
 echo "Annual Maintenance";
  echo "</b></td>";
  echo "<td>";
  echo $id2['annual'];
  echo "</td>";
 echo"</tr>";
echo"<tr align='center'>";
 echo "<td><b>";
 echo "Paid Amount";
  echo "</b></td>";
  echo "<td>";
  echo $id2['paid'];
  echo "</td>";
 echo"</tr>";
echo"<tr align='center'>";
 echo "<td><b>";
 echo "Remaining Amount";
  echo "</b></td>";
  echo "<td>";
  echo $id2['balance'];
  echo "</td>";
 echo"</tr>";
echo"<tr align='center'>";
 echo "<td><b>";
 echo "Last Paid On";
  echo "</b></td>";
  echo "<td>";
  echo $id2['lpaid'];
  echo "</td>";
 echo"</tr>";

echo "</table>"; 
   }
   else
   {
    echo "<script type='text/javascript'>alert ('No maintenance details found'); </script>";
    echo "<script type='text/javascript'>location.href ='User Detail.php?un=$un'</script>";
   }
 $connection->close();
 ?>
  
  
</form>
</body>
</html>
