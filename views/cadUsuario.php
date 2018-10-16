<br>

<div class="jumbotron jumbotron-fluid">
	<div class="container">
		<h2 class="display-4">Cadastre-se</h2>
		<p class="lead">Preencha todos os campos</p>
	</div>
</div>

 <?php if(!empty($msg)) {
        echo $msg;
    }

?>


<div class="container">
	<form  method="POST">
		<div class="form-group">
			<label for="username">Username</label>
			<input type="text" name="username" class="form-control" required>
		</div>
		<div class="form-group">
			<label for="nome">Nome Completo</label>
			<input type="text" name="nome" class="form-control" required>
		</div>
		<div class="form-group">
			<label for="senha">Senha</label>
			<input type="password" name="senha" class="form-control" required>
		</div>

		<button type="submit" class="btn btn-primary" value="Cadastrar">Cadastrar</button>

		<a href="<?php echo BASE_URL; ?>" class="btn btn-success">Página de Login</a>
	</form>
</div>