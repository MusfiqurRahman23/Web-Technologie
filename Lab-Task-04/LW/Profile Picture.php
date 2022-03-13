<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Picture</title>
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
<form action="Pic Up.php" method="post" enctype="multipart/form-data"> 
<div class="fieldset">
    <fieldset>
    <legend>  <b>PROFILE PICTURE</b> </legend>
    <img src="images.png"  class="center" width="80" height="80"><br><br>
 <input type="file" name="fileToUpload" id="fileToUpload"><br><br>
  <input type="submit" value="Submit" name="submit">
  </form>
</fieldset>
</div>

<?php include 'Foot_.php';?>
</body>
</html>