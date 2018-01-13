<?php  




 $connection=new Mongo('localhost')
   or die("Cant connect to server!");
   
   $db=$connection->selectDB('society')
   or die("Cant connect to db!");
  
  
   $ecollection=$db->userinfo
   or die("Cant connect to collection user info!");
   
   $cursor=$ecollection->find({_id});

   ?>
