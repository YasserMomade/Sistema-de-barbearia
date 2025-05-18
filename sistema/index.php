<?php

require_once 'conexao.php';

$senha = "123";
$senha_crip = md5($senha);

$query = $pdo -> query("SELECT * FROM utilizador WHERE perfil = 'administrador'");

$resposta = $query->fetchAll(PDO::FETCH_ASSOC);

if(count($resposta) == 0){
	
	$pdo -> query("INSERT INTO utilizador SET nome = 'Leonel',email = '$email_sistema', senha = '$senha', senha_crip = '$senha_crip', perfil = 'administrador',ativo = 'sim' ");

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://mymaplist.com/js/vendor/TweenLite.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
 
<link rel="stylesheet" href="CSS/estiloLogin.css">
</head>
<body>


<div class="container">
    <div class="row vertical-offset-100">
    	<div class="col-md-4 col-md-offset-4">
    		<div class="panel panel-secundary form-mobile" style="opacity: 0.9; border-radius: 20px;">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Faca o login</h3>
			 	</div>
			  	<div class="panel-body">
			    	<form accept-charset="UTF-8" role="form" action="autenticar.php" method="post">
                    <fieldset>
			    	  	<div class="form-group">
			    		    <input class="form-control" placeholder="E-mail" name="email" type="text">
			    		</div>
			    		<div class="form-group">
			    			<input class="form-control" placeholder="Password" name="senha" type="password" value="">
			    		</div>
			    		
			    		<input class="btn btn-lg btn-secondary btn-block" name=login type="submit" value="Login">
			    	</fieldset>
					<p class="recuperar"><a href="" data-toggle="modal" data-target="#exampleModal">Recuperar senha</a></p>
			      	</form>
			    </div>
			</div>
		</div>
	</div>
</div>
</body>
</html>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" >
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Recuperar senha</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -20px;">
          <span aria-hidden="true" >&times;</span>
        </button>
      </div>
	  <form method="post">
      <div class="modal-body">
		<div id="msg-recuperar">
			
		</div>
        <form action="">
			<input placeholder="Digite o seu Email" class="form-control" type="email" name="email" required>
			

		
      </div>
      <div class="modal-footer">
        
        <button type="submit" class="btn btn-primary">Recuperar</button>
      </div>
	  </form>
    </div>
  </div>
</div>

<style>
	
.recuperar{
    margin-top: 25px;
	font-size: 12px;
	
}
</style>