<?php
	$Username=$_POST['Username'];
    $Password=$_POST['Password'];
   	$connection=new Mongo("localhost");
	$db=$connection->selectDB('society');
	$ecollection=$db->userinfo;
	$id=$ecollection->findone(array('Name'=>$Username,'Password'=>$Password));
		if ($id)
   {
    echo "<script type='text/javascript'>location.href='User Detail.php?un=$Username'</script>";
   }
   else
   {
    echo "<script type='text/javascript'>alert ('Wrong Username and Password'); </script>";
    echo "<script type='text/javascript'>location.href = 'login.php'; </script>";
   }
 $connection->close();
 ?>
 