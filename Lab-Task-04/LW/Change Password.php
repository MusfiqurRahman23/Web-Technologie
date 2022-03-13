<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
<?php

$currPass = "";
$newPass = $ReTypePass = "";
$currErr = $newPassErr = $ReTypePassErr = "";
$json = file_get_contents('store_data.json'); 
$json_data = json_decode($json,true);
// print_r($json_data[]);

$user =  $password = "";
$userErr  = $passErr= "";
$password_length = 8;

$existingUser = array_search($user, array_column($json_data, 'name'));
$validPassword = array_search($password, array_column($json_data, 'password'));

if($existingUser != $user) {
    $userErr ="Please Log In First"   ;    
}

if($validPassword != $password) {
  // POST password here
}


if( strlen($password ) < 8 ) {

}
if (isset($_POST['submit']))
    {
            if ($currPass == $newPass) {              
               //$currErr="Current password and new password should not be same";
            }
            else {              
               $currErr="accepted";
             }
            }
             
              if ($newPass==$ReTypePass) {
                $newPassErr="accepted";
                }
            

                else{
                  $newPassErr="New password & re-type password should not same";
                }
               

?>
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
<div class="fieldset">
    <legend>  
    <fieldset>  
       <legend><b>CHANGE PASSWORD</b> </legend>  <br>
       <form method= "post" action="<?php echo $_SERVER['PHP_SELF'];?>"> 
<b>Current Password: </b>  <input type="password"id="Cpassword"name="Cpass"><br> 
<span style="color:red";><?php echo "$currErr";?></span><br>
<b>New Password: </b>      <input type="password" id="Npassword"name="newpass"><br> 
<span style="color:red";>*<?php echo "$newPassErr";?></span><br><br>
<b>Retype New Password:</b><input type="password"id="Rpassword"name="Repass"><br><br>

<span>______________________________________________</span><br><br>
<input type="submit" value="Submit" name="submit" />  
              
        </fieldset>  
        </legend>  
</form>  
            </div>
<?php
echo $currPass ;
echo "<br>";
echo $newPass;
?>
<?php include 'Foot_.php';?>
</body>
</html>