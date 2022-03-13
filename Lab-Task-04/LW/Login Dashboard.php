<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In Home Page</title>
</head>
<body>
<?php include 'Head_.php';?>
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

<?php
session_start();
echo "<h1> Welcome home " . $_SESSION['user'] . "<h1>";
?>
<?php include 'Foot_.php';?>
</body>
</html>