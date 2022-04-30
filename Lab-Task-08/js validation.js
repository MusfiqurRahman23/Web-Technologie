<script>  
function validateform(){  
var username=document.myform.name.value;  
var password=document.myform.password.value; 
if (password==null || password==""){  
    alert("Password can't be blank");  
    return false;  }
 else if(password.length<6){  
    alert("Password must be at least 6 characters long.");  
    return false;  
    }  
  }  
  </script>  