<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<style>
    .nav {
	list-style-type: none;
	margin: 0;
	top:0;
	padding: 0;
	position: fixed;
	background-color: blanchedalmond;
	width: 100%;
    }
	h2 {
	font-family: "Lucida Handwriting", "Courier New", monospace;
	color: #008000;
	padding: 5px;
	letter-spacing: 2px;
	}
	li {
	float: left;
	}
	li a , button {
	display: block;
	color: #808080;
	text-align: center;
	padding: 18px 29px;
	text-decoration: none;
	overflow: hidden;
	}
	li a:hover, button:hover {
	background: blanchedalmond;
    color: #008000;
	border-bottom: 2.5px solid #008000;
    }
	.dropdown-content a:hover{
	background: blanchedalmond;
    color: #008000;
    }
	button {
	background-color: #F2FFF2;
	margin: 0;
	border: 0;
	padding-top: 2px;
	}
	.dropdown {
	padding: 14px 24px;
	background-color: #F2FFF2;
	text-decoration: none;
	overflow: hidden;
    }
	.dropdown-content { 
	display: none;
	position: absolute;
	width: 120px;
	background-color: #F2FFF2;
	}
	.dropdown-content a {
	float: none;
	padding: 14px 20px;
	text-decoration: none;
	display: block;
	}
	.dropdown:hover .dropdown-content {
	display: block;
	}
  </style>
</head>

<body>
<header>

<div class="nav">
   
	
	<li style="float:right"><button>Contact Us </button> </li>
	<li style="float:right"><a href="SignUp.php"> Register </a></li>
	<li style="float:right"><a href="login.php"> Login </a></li>
	<li style="float:right">
	<div class="dropdown"> <button> Services </button>
	<div class="dropdown-content" name="Services ">
	  <br>
      <a href="#">Meditation Course</a>
	  <a href="#">Personal Consultation</a>
    </div> </div> </li>	
	<li style="float:right">
	<div class="dropdown"> <button>About Us  </button>
	<div  name="About US">
	  
	<li style="float:right"><a href="Public Home.php"><b><strong>Home</strong> </b></a></li>
</div>
</header>

</body>
</html>
