<script type="text/javascript">

            function check()
            {
                if (!f1.flatno.value)
                {
                    alert ("Please enter Flat Number");
                    return (false);
				}
	else if (!f1.amount.value)
                {
                    alert ("Please enter amount paid");
                    return (false);
                }
     else if (!f1.last.value)
                {
                    alert ("Please enter last paid date");
                    return (false);
                }
	return true;
	}
</script>
<head>
<style type="text/css">
.style2 {
	text-align: center;
}
.style3 {
	color: #FFFFFF;
	text-align: center;
}
.style4 {
	text-align: right;
}
</style>
</head>

<body style="background-image: url('houses-768725_1280.jpg')">
<form name="f1" method="post" action="update2.php">

<div class="style4">

<div class="style4">
	<img src="2015-09-24_00-57-03.png" width="30" height="42"><br>
	<a href="admin-access.php"><span class="style2"><strong><span class="style3">Profile<br></span>
	</strong></span></a>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

</div>

<table  align="center" width="700" border="1" bgcolor="#1C1A1B" style="font-family:'Times New Roman', Times, serif;color:white" cellpadding="5">
<tr>
<td class="style3"><strong>Flat Number
</strong>
</td>

<td class="style3"><strong>Amount Paid
</strong>
</td>
<td class="style3"><strong>Last Paid
</strong>
</td>
<td class="style3"><strong>Add Interest
</strong>
</td>

</tr>

<tr>
<td class="style2">

	<input name="flatno" type="text">
</td>

<td class="style2">

	<input name="amount" type="text">
</td>
<td class="style2">

	<input name="last" type="text">
</td>
<td class="style2">

	&nbsp;<input name="pend" type="radio" ><strong>Yes</strong>
	<input name="pend" type="radio" checked><strong>No</strong></td>


</tr>

</table>
<input name="submit" type="submit" value="submit" style="border: 0; font-size:medium; font-family:'Times New Roman', Times, serif; width:120px; height:30px; font-weight:bolder; color: #FFFFFF; background-color: #1E1C1D;" onclick="return check();"/>
</div>
</form>