<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile View</title>
    <style>
        .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
        .fieldset {
            display: flex;
  justify-content: center;
  align-items: center;
  font-size:26px;
  font-display:1 ;
  
  line-height:1.8;
  color:#181418; background-color:#dbe0e0;
  font-family:arial, verdana, sans-serif; font-size:13pt;
}
        </style>
</head>
<body>
    
<?php include 'Head_.php';?>

<form action="Edit Profile.php" method="post">
<h2>Account</h2>
<span>______________________________________________</span>
<ul>
  <li><a href="http://localhost:81/Lab%20Task/Lab-Task-04/LW/Login%20Dashboard.php"><b>Dashboard</b></a></li>
  <li><a href="http://localhost:81/Lab%20Task/Lab-Task-04/LW/View%20Profile.php"><b>View profile</b></a></li>
  <li><a href="http://localhost:81/Lab%20Task/Lab-Task-04/LW/Edit%20Profile.php"><b>Edit profile</b></a></li>
  <li><a href="http://localhost:81/Lab%20Task/Lab-Task-04/LW/Change%20Password.php"><b>Change Password</b></a>
  <li><a href="http://localhost:81/Lab%20Task/Lab-Task-04/LW/Change%20Profile%20Picture.php"><b>Change Profile Picture</b></a></li>
  <li><a href="url"><b>Logout</b></a></li>
</ul>  
<div class="fieldset">
    <fieldset>
    <legend>  <b>Profile</b> </legend>
    <img src="images.png"  class="center" width="80" height="80"><br>
    <a href =""><b>Change</b></a><br><br>
  
        <?php
        session_start();
        $name= $_SESSION['name'];
        $email= $_SESSION['email'];
        $gender=$_SESSION['gender'];
        $dob=$_SESSION['dob'];
        echo "Name: " . $name; echo "<br>";
        echo "Email: " . $email;echo "<br>";
        echo "Gender: " . $gender;echo "<br>";
        echo "Date Of Birth: " . $dob;echo "<br>";
         ?>
        <?php
  
   /* // this page outputs the textarea1 from the session IF it exists
    $name =  $email = "";  // set var to avoid errors
   if(isset($_SESSION['name'])){
    $name = $_SESSION['name'];
    }
    if(isset($_SESSION['email'])){
       $email = $_SESSION['email'];
}*/
?>
      
   
        <a href="http://localhost:81/Lab%20Task/Lab-Task-04/LW/Edit%20Profile.php"><b>Edit Profile</b>
    </fieldset>
</div>
    <br>
   <?php include 'Foot_.php';?>
</body>
</html>