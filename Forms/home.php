<html>

	<head>
	
		<title>Formulários PHP</title>
		
		<style type="text/css">
		
		  body{
		      margin: 0px;
		     
		  }
		
		  #topo{
		      margin: 0px;
		      background-image: url("image/fundo.png");
		      height: 80px;
		  }
		  
		  #topo h3{
		      margin: 0px;
		      padding-top: 25px;
		      padding-left: 20px;
		      color: white;
		  }
		  
		  #erro {
		      background-image: url("image/fundo.png");
		      height: 100%;
		      width: 100% 
		  }
		  
		  #erro h1{
		      color: white;
		      text-align: center;
		      padding-top: 20%;
		  }
		  
		  #erro h5{
		      color: white;
		      text-align: center;
		  }
		  
		  a {
		      text-decoration: none;
		      color: white;
		  }   
		
		</style>
	
	</head>
	
	<body>
			
		<?php 
		  
		  $email = $_POST['email'];
		  $password = $_POST['password'];
		
		  $emails = array("joao@gmail.com", "maria@gmail.com", "cesar@gmail.com");
		  $passwords = array("123","321","456");
		  
		  for($i = 0; $i < count($emails); $i++){
		      if($emails[$i] == $email && $passwords[$i] == $password){
		          
		          echo "
                        <div id = 'topo'>

                             <h3>Seja bem vindo(a), $email!</h3>                        

                        </div>

                        ";
		          break;
		      }
		      
		      if($i == count($emails)-1){
		          echo "
                         <div id = 'erro'>

                             <h1>Login ou senha inválidas!</h1> 

                             <h5><a href='login.php'>Voltar!</a></h5>                       

                         </div>
                        ";
		      }
		  }
		?>
	</body>

</html>
