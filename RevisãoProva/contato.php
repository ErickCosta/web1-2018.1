<html>

    <head>
    	<title>Atividade de Fixação</title>
    
    	<style type="text/css">
    	
    	   body{
		      background-color: #D3D3D3;
		      margin: 0px;
		      font-family: sans-serif; 
		   }
		   
		   #topo{
		      background-color: #ADD8E6;
		      width: 100%;
		      height: 50px;
		      padding-left: 30%;
		      padding-top: 15px;
		  }
		  
		  #topo h1{
		      float: left;
		      margin: 0px;
		      margin-right: 40px;
		  }
		  
		  #topo a{
		      text-decoration: none;
		  }
		  
		  #content{
		      margin: 0px;
		      margin-left: 20px
		  }    
    	
    	   #form{
    	       float: left;
    	   }
    	   
    	   #form h5{
    	       margin: 0px;
    	       margin-bottom: 15px;
    	   }
    	   
    	   #input{
    	       float: left;
    	       margin-top: 65px;
    	      
    	   }
    	   
    	   #input input{
    	       margin: 0px;
    	       margin-bottom: 8px;
    	       border: 1px none;
    	       border-radius: 4px 4px;
    	       width: 300px;
    	   }
    	   
    	   #input textarea{
    	       border: 1px none;
    	       border-radius: 4px 4px;
    	       height: 60px;
    	       width: 300px;
    	   }
    	   
    	   button {
	           height: 25px;
	           width: 70px;
	           background-color: #1E90FF;
	           border: 1px none;
	           color: white;
	           margin-top: 150px;
	           margin-left: 25px;
           }
    	   
    	</style>
    </head>

	<body>
	
    	<div id="topo">
    			<h1><a href="index.php">Home</a></h1>
    			<h1>|</h1>
    			<h1>Sobre</h1>
    			<h1>|</h1>
    			<h1><a href="contato.php">Contato</a></h1>
    	</div>
    	
    	<div id="content">
    	<div id="form">
    		<h2>Contato:</h2>
    		<h5>Nome:</h5>
    		<h5>E-mail:</h5>
    		<h5>Assunto:</h5>
    	</div>
    	
    	<div id="input">
    		<input type="text"><br>
    		<input type="text"><br>
    		<textarea type="text"></textarea>
    	</div>
    	
    	<form action="sucesso.php">
    		<button>Enviar</button>
    	</form>
    	
    	</div>
	
	</body>

</html>
