<html>
<style type="text/css">
.style1 {
	font-family: "Expressway Rg";
	font-weight: bold;
}
.style2 {
	font-family: "Expressway Rg";
}
.style4 {
	font-family: "Adobe Heiti Std R";
}
.style5 {
	font-family: "Times New Roman", Times, serif;
}
.style6 {
	font-family: "Times New Roman", Times, serif;
	font-weight: bold;
}
</style>
<br><br> 
<head>
<center class="style6"><font color="white" size="6">Society Management System</font></center>

        <script type="text/javascript">

            function check()
            {
                if (!f1.Username.value)
                {
                    alert ("Please Enter a User Name");
                    return (false);
				}
	else if (!f1.Password.value)
                {
                    alert ("Please Enter a Password");
                    return (false);
                }
                return true;
                }
               </script>
                



<title>User Login</title>
</head>

<body style="background-image: url(houses-768725_1280.jpg)">

<br>
<br>
<br>
<br>



<form id="f1" name="f1" method="post" action="login1.php">
  <p align="center" style="opacity:20"> <font color="white" size="5"> <span class="style1"> <br>
	<br>
	</span> <span class="style6"> Username</span></font> <span class="style2">
    <span class="style4">
    <span class="style5">
    <input type="text" name="Username" id="Username" style="width: 160px; height: 30px" /></span></span></span>
	<span class="style5">
    <br><br>
    
    
 	</span><span class="style6">
    
    
 <font color="white" size="5">Password</font></span> <span class="style2">
  <span class="style4">
  <span class="style5">
  <input type="password" name="Password" id="Password" style="width: 160px; height: 30px" /></span></span></span>
	<span class="style5">
  <br>
  <br>

  

  </span>

  

<input type="submit" name="Submit" id="Submit" value="Submit" style="border: 0; width:90px; height:30px; font-weight:bolder; font-family: 'Times New Roman', Times, serif; color: #FFFFFF; background-color: #1E1C1D;" onclick="return check();" />
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<span class="style2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>

	<span class="style5">
<a href="admin-login.php"><font size="5px" color="#FFFFFF">Admin Login</font></a> </span>

</p>
</form>
</body>
</html>