<html>

	<head>
	
		<title>Formulários PHP</title>
		
		<style type="text/css">
		
		
		</style>
	
	</head>
	
	<body>
			
		<h1>Login realizado com sucesso!</h1>
		<?php 
		  
		  $a = $_POST['email'];
		  $b = $_POST['password'];
		
		  echo $a, "</br>", $b;
		?>
	</body>

</html>
