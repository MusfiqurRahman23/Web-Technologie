<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<script src="scripts.js"></script>
<title> Live Search</title>
<style>
    body{
        font-family: Arail, sans-serif;
    }
   
    .search-box{
        width: 300px;
        position: relative;
        display: inline-block;
        font-size: 14px;
    }
    .search-box input[type="text"]{
        height: 32px;
        padding: 5px 10px;
        border: 1px solid #CCCCCC;
        font-size: 14px;
    }
    .result{
        position: absolute;        
        z-index: 999;
        top: 100%;
        left: 0;
    }
    .search-box input[type="text"], .result{
        width: 100%;
        box-sizing: border-box;
    }
    
    .result p{
        margin: 0;
        padding: 7px 10px;
        border: 1px solid #CCCCCC;
        border-top: none;
        cursor: pointer;
    }
    .result p:hover{
        background: #f2f2f2;
    }
</style>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("search.php", {term: inputVal}).done(function(data){
               
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });

    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>
</head>
<body>
<form method="POST" name="myform"  onsubmit="return validateform()" >
<center>
    <div class="search-box">
        <h2> Live Search</h2>
        <input type="text" name ="name" autocomplete="off" placeholder="Username Search country..." />
        <div class="result"></div>
</center>
    </div>
</form>
</body>
</html>
<br><br><br><br><br>
<?php
include('config.php'); 
$limit = 4;
$sql = "SELECT COUNT(id) FROM user_data";  
$rs_result = mysqli_query($conn, $sql);  
$row = mysqli_fetch_row($rs_result);  
$total_records = $row[0];  
$total_pages = ceil($total_records / $limit); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PHP Pagination AJAX</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<head>
<body>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>Manage <b>Employees.</b>  Add New Employee</span></a>
											
					</div>
                </div>
            </div>
			<div id="target-content">loading...</div>
            
			<div class="clearfix">
               
					<ul class="pagination">
                    <?php 
					if(!empty($total_pages)){
						for($i=1; $i<=$total_pages; $i++){
								if($i == 1){
									?>
								<li class="pageitem active" id="<?php echo $i;?>"><a href="JavaScript:Void(0);" data-id="<?php echo $i;?>" class="page-link" ><?php echo $i;?></a></li>
															
								<?php 
								}
								else{
									?>
								<li class="pageitem" id="<?php echo $i;?>"><a href="JavaScript:Void(0);" class="page-link" data-id="<?php echo $i;?>"><?php echo $i;?></a></li>
								<?php
								}
						}
					}
								?>
					</ul>
               </ul>
            </div>
        </div>
    </div>
	<script>
	$(document).ready(function() {
		$("#target-content").load("pagination.php?page=1");
		$(".page-link").click(function(){
			var id = $(this).attr("data-id");
			var select_id = $(this).parent().attr("id");
			$.ajax({
				url: "pagination.php",
				type: "GET",
				data: {
					page : id
				},
				cache: false,
				success: function(dataResult){
					$("#target-content").html(dataResult);
					$(".pageitem").removeClass("active");
					$("#"+select_id).addClass("active");
					
				}
			});
		});
    });
</script>
</body>
</html>

