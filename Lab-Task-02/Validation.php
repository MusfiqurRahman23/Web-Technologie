
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php validation</title>
  <link rel="stylesheet" href="styles.css">
   <style type="styles/css">
    .red{
        color: red;
    }
</style>
</head>
<body>
 
<?php

$nameErr = $emailErr = $dobErr =  $genderErr =  $degreeErr= $bgErr= "";
$name = $email = $dob = $gender = $degree[]  = $bg = "";
//$d = array("SSC","HSC","BSC","MSC");
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(empty($_POST["name"])){
            $nameErr="Cannot be empty";
        }
        elseif(strlen($_POST["name"])<2){
            $nameErr="Name must two words Long";
        }
        elseif(strpos($_POST["name"],"")){
            $nameErr="Username should not contain white space";
        }
        else{
            $name=$_POST["name"];
        }
    
                  
      if (empty($_POST["email"])) {
         $emailErr = "Email is required";
         }
     elseif(!strpos($_POST["email"],"@")){
        $emailErr="Email must contain @";
            }			 
     else{
         $email =$_POST["email"];
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
	if(empty($_POST["dob"])){
		$dobErr = "Please choose your birth date ";
	}
	
	else{
        $dob = $_POST["dob"];
    }
   
    if(empty($_POST["gender"])){
        $genderErr="Chose Your Gender";
    }
    else{
        $gender=$_POST["gender"];
    }

    if(!empty($_POST['degree'])){
        foreach($_POST['degree'] as $checked){
          echo $checked."</br>";
        }
      }
    else{
        $degree=$_POST["degree"];
    }
       
 	if(empty($_POST["bg"])){
		$bgErr = "Please select one option";
	    }
    else{
        $bg=$_POST["bg"];
        }

}
?>


<div Class="fieldset">
       
<form method= "post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <fieldset>
        <legend>  <b>NAME</b> </legend>
        
        <input type="text" name="name">
        <span><?php echo "$nameErr";?></span>
        <span class="red"></span>
		<br><br>
        <span class="underline">______________________</span>
    </fieldset>
    <br>
    <br>
    <fieldset>
        <legend>   <b>EMAIL</b> </legend>
        <input type="text" name="email" id="email" name="email" value="<?php echo "$email";?>" >
        <span class="red"></span><br><br>
     <span class="red" id="emailErr"><?php echo "$emailErr";?></span>
     <span>______________________</span>
    </fieldset>
    <br>
    <br>
    <fieldset>
        <legend>   <b>DATE OF BIRTH</b></legend>
       
  
  <select id="dob" name="dob">
  <option disabled selected>Day</option>
     <?php
        for($i=1;$i<=31;$i++){
            echo "<option>$i</option>";
             }
     ?>
      </select>
												
     <select id="dob" name="dob">
     <option disabled selected>Month</option>
   <?php
   $month= array("January","February","March","April","May","June","July","August","September","October","November","December");  
    for($j=0;$j<count($month);$j++) {
         echo "<option>$month[$j]</option>";
      }
     ?>
  </select>						
						
   <select id="dob" name="dob">  
 <option disabled selected>Year</option>
 <?php
  for($k=1953;$k<=1998;$k++){
          echo "<option>$k</option>";
            }
       ?>
						
     </select>
     <span id="$dobErr"><?php echo $dobErr;?></span>
  
  <span class="underline">______________________</span>
    </fieldset>
    <br>
    <br>
    <fieldset>
        <legend>   <b>GENDER</b> </legend><br>
        <input type="radio" name="gender" value = "Male" >Male
        <input type="radio" name="gender" value="Female">Female
        <input type="radio" name="gender" value="Other">Other
        <span><?php echo $genderErr; ?> </span>
   
        <span class="underline">______________________</span>
    </fieldset>
    <br>
    <br>
    <fieldset>
        <legend>   <b>DEGREE</b> </legend>
        <input type="checkbox" name="degree[]" value="SSC">SSC<br>
        <input type="checkbox" name="degree[]"  value="HSC">HSC<br>
        <input type="checkbox" name="degree[]" value="BSC">BSC<br>
        <input type="checkbox" name="degree[]" value="MSC">MSC<br>
        <span><br> <?php echo $degreeErr;?></span>        
        <span class="underline">______________________</span>
        <br>
       
    </fieldset>
    <br>
    <br>
    <fieldset>
        <legend>   <b>BLOOD GROUP</b> </legend>
        <label for="bg"></label>
  <select name="bg" id="bg">
    <option value=""></option>
    <option value="O+">O+</option>
    <option value="O-">O-</option>
    <option value="a+">A+</option>
    <option value="a-">A-</option>
    <option value="ab+">AB+</option>
    <option value="ab-">AB-</option>
    <option value="b+">B+</option>
    <option value="b-">B-</option>
  </select>
  <span><br><?php  echo $bgErr;?></span>
  <br>
  
        <input type="submit" name ="send"> <br>
       
    </fieldset>
    <br>
    
</div>
</form>
<?php

echo "$name" ;
echo "<br>";
echo "$email";
echo "<br>";
echo "$dob"; 
echo "<br>";
echo "$gender"; 
echo "<br>";
echo "$degree";
echo "<br>";
echo "$bg"; 
?>
</body>
</html>
