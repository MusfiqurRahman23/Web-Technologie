<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$currPass = "";
$newPass = $ReTypePass = "";
$currErr = $newPassErr = $ReTypePassErr = "";
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

<form method= "post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  
    <legend>  
    <fieldset>  
       <legend><b>CHANGE PASSWORD</b> </legend>  
       
<b>Current Password: </b>  <input type="password"id="Cpassword"name="Cpass"><br> 
<span style="color:red";><?php echo "$currErr";?></span><br><br>
<b>New Password: </b>   <input type="password" id="Npassword"name="newpass"><br> 
<span style="color:red";>*<?php echo "$newPassErr";?></span><br><br>
<b>Retype New Password:</b><input type="password"id="Rpassword"name="Repass"><br><br>

<span>______________________________________________</span><br><br>
<input type="submit" value="Submit" name="submit" />  
              
        </fieldset>  
        </legend>  
</form>  
<?php
echo $currPass ;
echo "<br>";
echo $newPass;
?>

</body>
</html>