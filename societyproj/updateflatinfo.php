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
<center><b><font color="white" size="5" face="Times Roman">Update Flat Details</font></b></center>

<title>Admin Insert</title>


 <script type="text/javascript">

            function check()
            {
                if (!f1.FlatNumber.value)
                {
                    alert ("Please Enter the Flat Number");
                    return (false);
				}
			return true;
			}
			</script>


</head>
<body style="background-image: url(houses-768725_1280.jpg)">
<br>
<br>
<form id="f1" name="f1" method="post" action="updateinfo1.php">
<div class="style1">
<table align="center" style=" font-family:'Adobe Heiti Std R'">
<tr><td>
     <font color="white" size="3"><b>Flat Number</b></font></td>
    <td>
	<input type="text" name="FlatNumber" id="FlatNumber" style="width: 160px; height: 30px" /> <br><br></td>
 </tr> <tr>
    <td> <font color="white" size="3"><b>Owner Name</b></font></td>
   <td> 
	<input type="text" name="Name" id="Name" style="width: 160px; height: 30px" /><br><br></td>
  </tr><tr><td>
     <font color="white" size="3"><b>Mobile Number</b></font></td>
    <td>
	<input type="text" name="MobileNumber" id="MobileNumber" style="width: 160px; height: 30px" /><br><br></td>
  </tr>
   
  <tr><td>
   <font color="white" size="3"><b>BHK</b></font></td>
   <td> 
	<input type="text" name="BHK" id="BHK" style="width: 160px; height: 30px" /><br><br></td>
  </tr><tr>
     <td><font color="white" size="3"><b>Maintenance</b></font></td>
    <td>
	<input type="text" name="Maintenance" id="Maintenance" style="width: 160px; height: 30px" /><br><br></td>
    </tr>
      <tr><td><font color="white" size="3"><b>Password</b></font></td>
    <td>
	<input type="text" name="Password" id="Password" style="width: 160px; height: 30px" /></td>
    
    </tr>
    </table>
  <br> <br>
      <input type="submit" name="Updated" id="Updated" value="Update" style="border: 0; font-size:medium; font-family:'Times New Roman', Times, serif; width:120px; height:30px; font-weight:bolder; color: #FFFFFF; background-color: #1E1C1D;" onclick="return check();" />
  

</div>
  

</form>
</body>
</html>
