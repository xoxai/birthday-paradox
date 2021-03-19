<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script> 
		function show()  
	        {  
	            $.ajax({  
	                url: "content.php",  
	                cache: false,  
	                success: function(html){  
	                    $("#content").html(html);  
	                }  
	            });  
	        }  
	      
        $(document).ready(function(){  
            show();  
            setInterval('show()',1000);  
        });  
	</script>
	<style>
		#container {
			width: 70%;
			margin: 0 auto;
			margin-top: 100px;
			border: 5px solid orange;
			padding: 35px;
			font-size: 150%;
			font-family: 'Helvetica';
			border-radius: 25px;
		}

		#content {
			text-align: center;
		}

		#content span#birthday {
			background: orange;
			font-size: 300%;
			display: inline-block;
			margin-right: 15px;
			margin-top: 15px;
			padding: 15px;
			border-radius: 15px;
		}

		#content span#total_counter {
			margin-top: 30px;
			display: inline-block;
			font-size: 150%;
		}
	</style>
</head>
<body>
	<div id="container">
		<h1>Парадокс дней рождения. Результаты.</h1>
		<div id="content"></div>
	</div>
</body>