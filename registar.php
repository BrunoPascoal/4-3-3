<?php
if(isset($_POST['submit'])) {
	include_once('DataAccess.php');
	$da = new DataAccess();
	
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
	
	$res = $da->registar($nome, $email, $password);
	
	if($res == 1)
	{
		$ok = '<div class="alert alert-success alert-dismissible fade show">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					
					<strong>Sucesso!</strong> A sua conta foi criada com sucesso.
				</div>
		';
	} else {
		$err = '<div class="alert alert-danger alert-dismissible fade show">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					
					<strong>Erro!</strong> O email com que se tentou registar já existe na nossa base de dados.
				</div>
			';
	}
	}
?>
<html>
	<head>
		<title>4-3-3</title>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<style>
		body, html {   
			width: 100%;
			height: 100%;
			margin: 0;
			padding: 0;
			display:table;
		}
		body {
			display:table-cell;
			vertical-align:middle;
		}
		form {
			display:table;/* shrinks to fit content */
			margin:auto;
		}
	</style>
	</head>
	<body>
		<form id="form_login" method="post" action="">
			<div class="card" style="width: 30rem;">
			  <div class="card-body">
				<h4 class="card-title">Registar</h4>
				<hr />
				<p class="card-text">
				<div class="form-group row">
					<label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
					<div class="col-sm-9">
					  <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email" required>
					</div>
				</div>
				<div class="form-group row">
					<label for="inputEmail3" class="col-sm-3 col-form-label">Nome</label>
					<div class="col-sm-9">
					  <input type="nome" class="form-control" name="nome" id="inputName3" placeholder="Nome" required>
					</div>
				</div>
			  <div class="form-group row">
				<label for="inputPassword3" class="col-sm-3 col-form-label">Password</label>
				<div class="col-sm-9">
				  <input type="password" class="form-control" name="password" id="inputPassword3" placeholder="Password" required>
				</div>
			  </div>

			  <div class="form-group row">
				<div class="col-md-12">
				  <button type="submit" name="submit" class="btn btn-primary btn-block">Criar Conta</button>
				</div>
			  </div>
				</p>
					<div class="float-right">
					  <a href="login.php" class="card-link">Já tenho conta</a>
					</div>
			  </div>
			</div>
		</form>
		<div class="row">
		  <div class="col-md-4 offset-md-4">
			<div id="erro"><br /><?php if(isset($ok)) echo $ok ?> <?php if(isset($err)) echo $err ?></div>
		  </div>
		</div>		
		
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	</body>
</html>