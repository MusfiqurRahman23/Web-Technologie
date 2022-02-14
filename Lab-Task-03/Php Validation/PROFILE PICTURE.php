<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<form action="upload.php" method="post" enctype="multipart/form-data"> 
    <fieldset>  
       <legend><b>PROFILE PICTURE</b> </legend>  
       
       <img src="images.png"  width="90" height="100"><br><br>
  <input type="file" name="fileToUpload" id="fileToUpload"><br><br>
  <input type="submit" value="Upload Image" name="submit">
</form>
</filedset>
</body>
</html>