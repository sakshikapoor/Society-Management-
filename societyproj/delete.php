
<head>
<style type="text/css">
.style1 {
	text-align: center;
}
.style3 {
	color: #FFFFFF;
}
.style4 {
	font-family: "Times New Roman", Times, serif;
}
.style5 {
	font-size: x-large;
}
.style6 {
	text-align: right;
}
.style7 {
	color: #FFFFFF;
	font-size: medium;
}
</style>
<script type="text/javascript">

            function check()
            {
                if (!f1.Del.value)
                {
                    alert ("Please enter Flat Number to be deleted");
                    return (false);
				}
				return true;
			}
</script>
</head>

<body style="background-image: url('houses-768725_1280.jpg')">

<p class="style6"><img src="2015-09-24_00-57-03.png" width="30" height="42"><br>
<a href="admin-access.php"><span class="style7"><strong>Profile</strong></span></a></p>
<p class="style6">&nbsp;</p>
<p class="style1"><span class="style3"><span class="style4"><strong>
<span class="style5">Enter the Flat Number<br>
</span></strong></span></span></p>
<form name="f1" method="post" action="dell.php">
	<div class="style1">
		<input name="Del" id="Del" type="text">
		<input name="Submit1" type="submit" value="Delete"style="border: 0; font-size:medium; font-family:'Times New Roman', Times, serif; width:120px; height:30px; font-weight:bolder; color: #FFFFFF; background-color: #1E1C1D;" onclick="return check();"></div>
</form>
</body>
