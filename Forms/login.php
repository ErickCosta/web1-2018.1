<html>

	<head>
	
		<title>Formulários PHP</title>
		
		<style type="text/css">
		
		  body {
	           background-image: url("image/fundo.png");
	           background-size: cover;
	           margin: 0px;
	           display: flex;
          }
          
          #form{
               margin: auto;
               width: 200px;
               height: 250px;
               background-color: white; 
          }
          
          #content {
                margin-top: 20px;
                margin-left: 14.5px;
          }
          
          #content h3{
                margin: 0px;
                font-family: sans-serif;
          }
          
          #content h6{
                margin: 0px;
                margin-top: 5px;
                color: #1a73e8;
                font-family: sans-serif;
          }
          
          #content input {
	            margin-bottom: 10px;
          }
          
          #content button {
                width: 172px;
          }
		  
		  #logo {
		      margin-left: 75px;
		      margin-top: 20px;
		  }   
		</style>
	
	</head>
	
	<body>
		
		<div id="form">
    		<div id="logo">
    			<img src="image/ifpb.png" height="50px">
    		</div>
			<div id="content">
				<form action="home.php" method="post">
        			<h3>Login</h3>
        			<input type="email" placeholder="exemplo@gmail.com" name="email">
        			<h3>Senha</h3>
        			<input type="password" placeholder="********" name="password">
        			<button>Entrar</button>
    			</form>
    			<h6>Esqueceu sua senha?</h6>
			</div>
		</div>
	
	</body>

</html>
