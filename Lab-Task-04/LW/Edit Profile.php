<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Edit</title>
    <style>
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
<?php
//session_start();
//$name= $_SESSION['name'];
//$email= $_SESSION['email'];
//$gender=$_SESSION['gender'];
//$dob=$_SESSION['dob'];

?>

<?php

    session_start(); 
    $name = "";
    if(isset($_POST['name'])){
        $_SESSION['name'] = $_POST['name'];
    }
    $email = "";
    if(isset($_POST['email'])){
        $_SESSION['email'] = $_POST['email'];
    }
    $gender = "";
    if(isset($_POST['gender'])){
        $_SESSION['gender'] = $_POST['gender'];
    }
    $dob = "";
    if(isset($_POST['dob'])){
        $_SESSION['dob'] = $_POST['dob'];
    }
?>





<form method= "post" action="Edit Profile.php">
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
    <legend>  <b>EDIT PROFILE</b> </legend>
    <label> Name: <input type="text" name="name"id="name"></label><br><br>
    <label> Email: <input type="email" name="email"id="email"></label><br><br> 
    
        Gender:
        <input type="radio" name="gender" value="male" id="male">
        <label for="male">Male</label>
        <input type="radio" name="gender" value="female" id="female">
        <label for="female">Female</label>
        <input type="radio" name="gender" value="Other" id="Other">
        <label for="other">Other</label>
    <br><br>
    <label> Date of Bith: <input type="date" name="dob"></label><br><br>
    <input type="submit" value="Submit">
</fieldset>
</div>
</form>
   <?php include 'Foot_.php';?>
</body>
</html>