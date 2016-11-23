<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>


<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script> -->
        <script type="text/javascript">
            $(document).ready(function(){
                  
                function search(){
                var title=$("#search").val();
                // console.log(title);
                    $.ajax({
                        type:"post",
                        url:"demoSearchKonek.php",
                        data:"title="+title,
                        success:function(data){
                            $("#result").html(data);
                            $("#search").val(title);
                        }
                    });  
                }

 				
                $("#button").click(function(){
	                search();
                });
 				
                // $("#search").keyup(function() {
                // 	if (event.keycode==13){
                //     	search();
                // 	}
                // });
            });
        </script>
<script src="../bootstrap/bootstrap-3.3.7/js/jquery-3.1.1.min.js" crossorigin="anonymous"></script>

<div id="container">
     <input type="text" id="search" placeholder="..."/>
     <input type="button" id="button" value="Search" />
     <ul id="result"></ul>
</div>
</body>
</html>