
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
	<img src="2015-09-24_00-57-03.png" width="30" height="42"><br>
	<a href="admin-access.php"><span class="style3"><strong><span class="style4">Profile<br></span>
	</strong></span></a><br>
</div>
<center><b><font color="white" size="5" face="Times Roman">Add New Owner</font></b></center>

<title>Admin Insert</title>

<script type="text/javascript">

            function check()
            {
                if (!f1.FlatNumber.value)
                {
                    alert ("Please enter Flat Number");
                    return (false);
				}
	else if (!f1.Name.value)
                {
                    alert ("Please enter Owner Name");
                    return (false);
                }
     else if (!f1.MobileNumber.value)
                {
                    alert ("Please enter Mobile Number");
                    return (false);
                }
	
	else if (!f1.BHK.value)
                {
                    alert ("Please enter BHK");
                    return (false);
                }
                
	else if (!f1.Maintenance.value)
                {
                    alert ("Please enter Maintenance");
                    return (false);
                }
                
	else if (!f1.Password.value)
                {
                    alert ("Please enter Password");
                    return (false);
                }
  
     return true;
        }
      </script>




</head>

<body style="background-image: url(houses-768725_1280.jpg)">
<br>
<br>
<form id="f1" name="f1" method="post" action="insertval.php">
<div class="style1">
<table align="center"><tr><td>
     <font color="white" size="3"><b>Flat Number</b></font></td>
    <td><input type="text" name="FlatNumber" id="FlatNumber" /> <br><br></td>
  </tr>
  <tr><td>
     <font color="white" size="3"><b>Owner Name</b></font></td>
   <td> <input type="text" name="Name" id="Name" /><br><br></td>
  </tr>
  <tr>
    <td><font color="white" size="3"><b>Mobile Number</b></font></td> 
    <td><input type="number" name="MobileNumber" id="MobileNumber" /><br><br></td>
  </tr>
   <tr><td>
   <font color="white" size="3"><b>BHK</b></font></td>
    <td><input type="number" name="BHK" id="BHK" /><br><br></td>
  </tr>
  <tr>
     <td><font color="white" size="3"><b>Maintenance</b></font></td>
   <td> <input type="text" name="Maintenance" id="Maintenance" /><br><br></td>
    </tr>
    <tr>
     <td><font color="white" size="3"><b>Tenant</b></font></td>
   <td> <input name="ten" type="checkbox" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    </tr>

    <tr>
     <td> <font color="white" size="3"><b>Password</b></font></td>
   <td> <input type="text" name="Password" id="Password" /></td>
    <br><br><br>
    </tr>
  </table><br>
    <input type="submit" name="Add" id="Add" value="Add" align="center" style="border: 0; width:90px; height:30px; font-weight:bolder; color: #FFFFFF; background-color: #1E1C1D;" onclick="return check();" />
  
  &nbsp;
  &nbsp;
  &nbsp;
  &nbsp;
</div>
</form>
</body>
</html>
