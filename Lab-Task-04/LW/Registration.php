<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regitration</title>
    <style>
        .container{
           
  position: absoulate;
  display: block;
  margin-left: auto;
  margin-right: auto;
        
        }
        
        </style>
</head>
<body>   
    
<div class="container" >
<form action="stock.php" method="post" enctype="multipart/form-data">                 
<?php include 'Head_.php';?>
<div class="container" style="position-bottom-top"  width:400px > 
  
<fieldset>
    <legend> <b><h3> REGISTRATION </h3></b>
	</legend>  
    <label for="name"> Name &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : </label>  
    <input type="text" name="name" class="form-control"> <br>  
	<span class="underline"> _____________________________________________ </span> <br><br>	
	<label for="email"> E-mail &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : </label>
	<input type="text" name="email" class="form-control"> <br>
	<span class="underline"> _____________________________________________ </span> <br><br>	
	<label for="un"> User Name &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : </label>
	<input type="text" name="un" class="form-control"> <br>
	<span class="underline"> _____________________________________________ </span> <br><br>	
	<label for="pass"> Password &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : </label>
	<input type="password" name="pass" class="form-control"> <br>
	<span class="underline"> _____________________________________________ </span> <br><br>	
	<label for="Cpass"> Confirm Password &nbsp : </label>
	<input type="password" name="Cpass" class="form-control"> <br>
	<span class="underline"> _____________________________________________ </span> <br><br>	
	<fieldset>
	<legend> Gender </legend>
	   <input type="radio" name="gender" value="male"> Male                 
	   <input type="radio" name="gender" value="female"> Female
	   <input type="radio" name="gender" value="other"> Other
	</fieldset>
    <span class="underline"> _____________________________________________ </span> <br><br>	
	<fieldset>
	<legend> Date of Birth </legend>
	   <input type="date" name="dob"><br>
    </fieldset> 
	<span class="underline"> _____________________________________________ </span> <br><br>	
	<input type="submit" name="submit" value="Submit">
    <input type="reset" name="reset" value="Reset">	
	<br> <br> 
</fieldset>	
    </div>

<?php include 'Foot_.php';?>
</form>   
</div>
<?php   
  if(isset($error))  
  {  
    echo $error;  
  }  
?>  
<?php 
  if(isset($message))  
  {  
    echo $message;  
  }  
?>  

 
</body>  
</html>