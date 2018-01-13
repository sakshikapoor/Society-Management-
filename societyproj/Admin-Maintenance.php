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
	<img src="2015-09-24_00-57-03.png" width="30" height="42"><br>
	<a href="admin-access.php"><span class="style3"><strong><span class="style4">Profile<br></span>
	</strong></span></a><br>
</div>
<center><b><font color="white" size="6" face="Times Roman">Flat Maintenance Details</font></b></center>
<script type="text/javascript">
  function check()
            {
                if (!f1.flatno.value)
                {
                    alert ("Please enter Flat Number");
                    return (false);
				}
	
     else if (!f1.paid.value)
                {
                    alert ("Please amount paid");
                    return (false);
                }
	
 
	               
	else if (!f1.lpaid.value)
                {
                    alert ("Please enter the last paid date");
                    return (false);
                }
  
     return true;
        }

</script>

<title>Admin Maintenance</title>
</head>

<body style="background-image: url(houses-768725_1280.jpg)">
<br>
<br>
<form id="f1" name="f1" method="post" action="maintenanceupdate.php">
    <div class="style1">
    <table  align="center" width="700" border="1" bgcolor="#1C1A1B" style="font-family:'Adobe Heiti Std R';color:white" cellpadding="5" >
    <tr align="center">
    <td><b>Flat Number</b>
    </td>
    <td><input name="flatno" id="flatno" type="text" />
    </td>
    </tr align="center">
   
	<tr align="center">
    <td><b>Amount Paid</b>
    </td>
    <td><input name="paid" id="paid" type="text" />
    </td>
    </tr>
	
	<tr align="center">
    <td><b>Last Paid</b>
    </td>
    <td><input name="lpaid" id="lpaid" type="text" />
    </td>
    </tr>
    </table>
    <input name="Submit1" type="submit" value="Submit" style="border: 0; font-size:medium; font-family:'Times New Roman', Times, serif; width:120px; height:30px; font-weight:bolder; color: #FFFFFF; background-color: #1E1C1D;" onclick="return check();"/>
	</div>
</form>
<a href="updatemaintenance2.php"><p class="style5"><strong>Update Maintenance Details</strong></p></a>
</body>
</html>