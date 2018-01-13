
<head>
<style type="text/css">
.style1 {
	text-align: center;
}
.style2 {
	text-align: center;
	color: #FFFFFF;
	font-family: "Times New Roman", Times, serif;
	font-size: x-large;
}
.style3 {
	text-align: right;
}
.style4 {
	color: #FFFFFF;
	font-size: medium;
}
.style5 {
	font-size: large;
	color: #FFFFFF;
}
</style>
<script type="text/javascript">

            function check()
            {
                if (!f1.comp.value)
                {
                    alert ("Please enter complaint Number ");
                    return (false);
				}
				return true;
			}
</script>


</head>

<body style="background-image: url('houses-768725_1280.jpg')">
<div class="style1">
<div class="style3">
<?php
   
   $connection=new Mongo('localhost')
   or die("Cant connect to server!");
   
   $db=$connection->selectDB('society')
   or die("Cant connect to db!");
  
  
   $ecollection=$db->complaints
   or die("Cant connect to collection user info!");
   $cursor=$ecollection->find();
   $cursor->sort(array('_id' => -1));
   $num_docs=$cursor->count();
   ?>

<p class="style3"><img src="2015-09-24_00-57-03.png" width="30" height="42"><br>
<a href="admin-access.php"><span class="style4"><strong>Profile</strong></span></a></p>
	
<p class="style2"><strong><br>
Complaints section</strong></p>
<div class="style1">
<div class="style1">
<table align="center" width="700" border="1" bgcolor="#1C1A1B" style="font-family:'Adobe Heiti Std R';color:white" cellpadding="5">
<tr align="center">

<td><b>Flat No</b><br>&nbsp;</td>
<td><b>Complaints</b><br>&nbsp;</td>
<td><b>Complaint No</b><br>&nbsp;</td>
<td><b>Current status</b><br>&nbsp;</td>
</tr>
<?php 
	if($num_docs>0)
   {
   foreach($cursor as $obj)
   {
 
   echo "<tr align='center'>";
 
    echo "<td>";
   echo $obj['flatno'];
   echo "</td>";
   echo "<td>";
   echo $obj['description'];
   echo "</td>";
    echo "<td>";
   echo $obj['comp'];
   echo "</td>";

   echo "<td>";
	echo $obj['status'];
	echo "</td>";
	
	echo "</tr>";
}
}

?>

</table><br>
<br></div>
<br>
<form method="post" action="Admincomp.php">
<div class="style1">
<span class="style4"><strong>Enter complaint no. </strong></span>
<input name="comp" type="text" style="width: 106px"><br>
<br>
<span class="style4"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Update Status&nbsp;&nbsp;&nbsp; </strong></span><input name="upd" type="text" style="width: 129px; height: 23px">&nbsp;&nbsp;&nbsp;
<strong><span class="style5">or&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input name="del" type="submit" value="Delete" onclick="return check();"><br>
</span></strong><br>
<input name="Submit" type="submit" value="submit" onclick="return check();"><br>
</div>
</form>
</div>


</div>
</div>
</body>