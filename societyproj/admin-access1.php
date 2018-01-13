<?php
   
    $pass=$_POST['Password'];   
   
   if($pass!='bbb')
   {
   echo "<script type='text/javascript'> alert('wrong password'); </script>";
   echo "<script type='text/javascript'>location.href = 'admin-login.php';</script>";  
   }
   else
   {
    echo "<script type='text/javascript'>location.href = 'admin-access.php';</script>";  

   }
   ?>
   
