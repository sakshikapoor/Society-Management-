<?php
$un=$_GET['un'];
?>
<html>
<head>
<style type="text/css">
.style1 {
	text-align: center;
}
.style2 {
	color: #FFFFFF;
}
.style4 {
	font-size: large;
}
.style5 {
	text-align: right;
	color: #FFFFFF;
	font-size: large;
}
.style6 {
	text-align: right;
}
.style7 {
	color: #FFFFFF;
	font-size: medium;
}
.style8 {
	color: #FFFFFF;
	font-size: medium;
	text-decoration: underline;
}
</style>
<script type="text/javascript">
function check()
{

				if (!f1.Description.value)
                {
                    alert ("Please enter  the Desciption");
                    return (false);

				}
				else if (!f1.comp.value)
                {
                    alert ("Please enter the unique id");
                    return (false);

				}

				return true;
}
</script>
<div class="style6">
<img src="2015-09-24_00-57-03.png" width="32" height="40">
<br>
<a href="User Detail.php?un=<?php echo $un; ?>"><span class="style7"><strong>Profile</strong></span></a><span class="style8"><strong><br>
</strong></span><br><br>
</div>
<center><b><font color="white" size="6" face="Times Roman">Complaint Section</font></b></center>

<title>User Complaint</title>
</head>

<body style="background-image: url(houses-768725_1280.jpg)">
<br><br>
<form id="f1" name="f1" method="post" action="insertcomplaint.php?un=<?php echo $un; ?>">
  <p class="style1">
    <span class="style2"><span class="style4"><strong><br>Description:</strong></span></span><br>
  
  &nbsp;<input type="text" name="Description" id="Description" style="width: 738px; height: 137px"; />
  	<br>
	<span class="style2"><strong>Enter a 10 digit unique ID</strong></span><br>
	<input name="comp" type="text"><br>
	<font color="white" size="3"><b><br>
	<input name="Submit1" type="submit" value="Submit" style="border: 0; width:90px; height:30px; font-weight:bolder; font-family: 'Adobe Heiti Std R'; color: #FFFFFF; background-color: #1E1C1D;"  onclick="return check();"></b></font><br><br>
    
 
 	</p>
</form>
<p class="style1">&nbsp;</p>
<p class="style1">&nbsp;</p>
<p class="style1">&nbsp;</p>
<a href="prevcomplaints.php?un=<?php echo $un; ?>"><p class="style5">View Previously Submitted Complaints</p></a>
</body>
</html>