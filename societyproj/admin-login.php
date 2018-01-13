
<html>
<head>
<style type="text/css">
.style3 {
	color: #FFFFFF;
}
.style4 {
	font-family: "Adobe Heiti Std R";
	font-weight: bold;
	font-size: x-large;
}
</style>
<br><br><br>
<center class="style4"><font color="white">Admin Login</font></center>

 <script type="text/javascript">

            function check()
            {
                if (!f1.Password.value)
                {
                    alert ("Please Enter the Password");
                    return (false);
				}
			return true;
			}
			</script>

<title>Admin</title>
</head>

<body style="background-image: url(houses-768725_1280.jpg)">
<form id="f1" name="f1" method="post" action="admin-access1.php">
  <br />
  <br />
  <br />
      
     <p align="center"><font color="white"><span class="style4">Password</span></font> 
      
      <input type="password" name="Password" id="Password" style="width: 160px; height: 30px" />
      <br />
      <br />
      <br />
      <br />
      <span class="style3">
      <input type="submit" name="signin" id="signin" value="signin" style="border: 0; width:90px; height:30px; font-weight:bolder; font-family: 'Adobe Heiti Std R'; color: #FFFFFF; background-color: #1D1B1C;" onclick="return check();"/></span>
      <br />
      <br />
      <br />
    </p>
  </form>
</body>
</html>