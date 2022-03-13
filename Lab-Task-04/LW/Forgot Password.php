<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
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
     $email = "";
     $emailErr="";
    

     $json = file_get_contents('store_data.json'); 
     $json_data = json_decode($json,true);
     // print_r($json_data[]);

     
     if($_SERVER["REQUEST_METHOD"]=="POST") {

        if(empty($_POST["email"])){
            $userErr="E-mail cannot be empty";
        }
        if(isset ($_POST['Submit'])){
             $email = $_POST['email'];
        }
        $validemail = array_search($email, array_column($json_data, 'email'));
   // $validemail = array_search($email, array_column($json_data, 'email'));

     if($validemail != $email) {
         $emailErr ="Please Log In First"   ;    
     }

     

 
   if(empty($email)){
       $emailErr = "Please Enter Your Email";
   }
   else{
       if(!preg_match("/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/", $email)){
       $emailErr = "Invalid Email.";
       $email = "";
        }
   }
}
    ?>
    <?php include 'Head_.php';?>

    <form method="post" action="">

    <div Class="fieldset">
<legend>  
    <fieldset>  
       <legend><b>FORGOT PASSWORD</b> </legend> <b><br>  
Enter Email: <input type="text" name="user"> 
<span style="color:red";><?php echo "$emailErr";?></span><br>

<span>_________________________________________</span><br><br>


<button  class="button-73" role="button">Submit</button>


              
        </fieldset>  
        </legend></div>
        <?php include 'Foot_.php';?>  
</from>
</body>
</html>