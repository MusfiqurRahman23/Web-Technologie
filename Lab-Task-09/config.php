<?php
    $hName='localhost'; 
    $uName='root';   
    $password='';  
    $dbName = "demo"; 
    $conn= mysqli_connect($hName,$uName,$password,"$dbName");
      if(!$conn){
          die('Could not Connect MySql Server:' . mysqli_connect_error());
      }
?>