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
        font-size: 26px;
        font-display: 1;

        line-height: 1.8;
        color: #181418;
        background-color: #dbe0e0;
        font-family: arial, verdana, sans-serif;
        font-size: 13pt;
    }



    .button-73 {

        appearance: none;
        background-color: #FFFFFF;
        border-radius: 40em;
        border-style: none;
        box-shadow: #ADCFFF 0 -12px 6px inset;
        box-sizing: border-box;
        color: #000000;
        cursor: pointer;
        display: inline-block;
        font-family: -apple-system, sans-serif;
        font-size: 1.2rem;
        font-weight: 500;
        letter-spacing: -.24px;
        margin: 0;
        outline: none;
        padding: 1rem 1.3rem;
        quotes: auto;
        text-align: center;
        text-decoration: none;
        transition: all .15s;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
    }

    .button-73:hover {
        background-color: #FFC229;
        box-shadow: #FF6314 0 -6px 8px inset;
        transform: scale(1.125);
    }

    .button-73:active {
        transform: scale(1.025);
    }

    @media (min-width: 768px) {
        .button-73 {
            font-size: 1.5rem;
            padding: .75rem 2rem;
        }
    }
    </style>
</head>

<body>
 
    <?php
    session_start();
$json = file_get_contents('store_data.json'); 
$json_data = json_decode($json,true);
// print_r($json_data[]);

$user =  $password = "";
$userErr  = $passErr= "";
$password_length = 8;

$existingUser = array_search($user, array_column($json_data, 'name'));
$validPassword = array_search($password, array_column($json_data, 'pass'));

if($existingUser != $user) {
    $userErr ="Please Sign In First"   ;    
}

if($validPassword != $password) {
   echo  $passErr="Please enter correct password";
  // POST password here
}


if( strlen($password ) < 8 ) {

}
        $un="Emon";
        $pass="emon@123";
if(isset($_POST['user'])){
    if($_POST['user']==$un && $_POST['password']==$pass){
        $_SESSION['user']=$un;
        header("locatioin:Login Dashboard.php");
    }else{
        $msg="Invalid username password";
    }
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
          
                // elseif (!preg_match("^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$^", $password)){
                    
                //     $passErr = "Invalid password.";
                //     }
        else{
                $password=$_POST["password"];
            }
    }
    ?>
    <?php include 'Head_.php';?>

    <div Class="fieldset">

        <form method="post" action="">


            <legend>
                <fieldset>
                    <legend><b>LOGIN</b> </legend> <b><br>
                    
                        Username: <input type="text" name="user">
                        <span style="color:red" ;><?php echo "$userErr";?></span><br>
                        Password: <input type="password" name="password"><br>
                        <spans style="color:red" ;><?php echo "$passErr";?> </spans>
                        <span style="color:blue" ;><br><small>*Minimum eight characters, at least one letter, one number and one
                            special character.</span></small><br><br>
                        <span>_________________________________________</span><br><br>
                        <input type="checkbox" name="r">Remember Me<br><br>
                        <?php

                        if(isset($msg)){
                        echo "$msg";
                         }
                            ?>
                          <br><br>
                        <button class="button-73" role="button">Submit</button>
                        <?php 
                          echo $validPassword ? "login successfull" : "Login failed"
                        ?>
                        <a href="http://localhost:81/Lab%20Task/Lab-Task-04/LW/Forgot%20Password.php">
                            <p style="color:Red;"> <b>Forgot Password?</b>
                        </a></p>

                </fieldset>
            </legend>
        </form>
    </div>


    <?php include 'Foot_.php';?>
    
</body>

</html>