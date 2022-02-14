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
    $user =  $password = "";
    $userErr  = $passErr= "";
    $password_length = 8;
    
    if( strlen($password ) < 8 ) {
    
    }
    
    if($_SERVER["REQUEST_METHOD"]=="POST") {
        if(empty($_POST["user"])){
            $userErr="Username cannot be empty";
        }
        elseif(strlen($_POST["user"])<2){
            $userErr="Username must two charecter Long";
        }
        
         elseif(preg_match( "/^[A-Za-z0-9_]{2,20}$/", $user ) ) {
            $userErr="Your username may not contain a special character.Please try again.";
        }

           
    
    else{
        $user=$_POST["user"];
    }
               
         
        
     if(empty($_POST["password"])){
            $passErr="Password cannot be empty";
        }
        
        elseif(strlen($_POST["password"])<8){
            $passErr="password must 8 charecter Long";
        }   
       
             elseif (!preg_match("^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$^", $password)){
                
                $passErr = "Invalid password.";
                }
    else{
            $password=$_POST["password"];
        }

       
    }
    ?>
   
   <div Class="fieldset">
       
       <form method= "post" action="<?php echo $_SERVER['PHP_SELF'];?>">
       
      
    <legend>  
    <fieldset>  
       <legend><b>LOGIN</b> </legend>   
Username: <input type="text" name="user"><br> 
<span style="color:red";>*<?php echo "$userErr";?></span><br><br>
Password: <input type="password" name="password"><br> 
<spans style="color:red";>*<?php echo "$passErr";?> </spans><br><br>
<span style="color:blue";>*Minimum eight characters, at least one letter, one number and one special character:</span><br><br>
<span>_________________________________________</span><br><br>
<input type="checkbox" name="r">Remember Me<br><br>

<input type="submit" value="Submit" name="submit" />  <p style="color:DodgerBlue;"><b>Forgot Password?</b></p>
              
        </fieldset>  
        </legend>  
</form> 
    </div> 
<?php
echo "$user" ;
echo "<br><br>";
echo "$password";
echo "<br>"
?>

</body>
</html>