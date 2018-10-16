<br>

<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-1">
			<img src="<?php echo BASE_URL; ?>assets/images/ficha.png" alt="" class="img-fluid">
		</div>
	</div>
</div>
<p>*Campos obrigatórios <br>
**Dados fixos</p>
<hr>
 <?php if(!empty($msg)) {
        echo $msg;
    }

?>
<div class="container">
	<form  method="POST">
		
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label for="nome">*Nome Completo**</label>
						<input type="text" name="nome" class="form-control" value="<?=$infos['nome']?>" readonly required>
					</div>
				</div>
			</div>
		
		<div class="row">
			<div class="col-md-8">
				<div class="form-group">
					<label for="email">Email</label>
					<input type="text" name="email" class="form-control" value="<?=$infos['email']?>">
				</div>
			</div>
			
			<div class="col-md-4">
				<div class="form-group">
					<label for="cpf">*CPF**</label>
					<input type="text" name="cpf" class="form-control" id="CPF" value="<?=$infos['cpf']?>" readonly required>
				</div>
			</div>
		</div>
			
		<div class="row">
			<div class="col-md-4">
				<div class="form-group">
					<label for="telefone1">*Telefone #1</label>
					<input type="text" name="telefone1" class="form-control" id="celular1" value="<?=$infos['telefone1']?>" required>
				</div>
			</div>
			
			<div class="col-md-4">
				<div class="form-group">
					<label for="telefone2">Telefone #2</label>
					<input type="text" name="telefone2" class="form-control" id="celular2" value="<?=$infos['telefone2']?>" >
				</div>
			</div>

			<div class="col-md-4">
				<div class="form-group">
					<label for="datanasc">*Data de Nascimento**</label>
					<input type="text" name="datanasc" class="form-control" id="data" value="<?=date("d/m/Y", strtotime($infos['datanasc'])) ?>" readonly required>
				</div>
			</div>

		</div>

			<div class="form-group">
				<label for="endereco">*Endereço</label>
				<input type="text" name="endereco" class="form-control" value="<?=$infos['endereco']?>" required>
			</div>
			
		<button type="submit" class="btn btn-success btn-sm" value="Salvar">Salvar</button>
		
	</form>
</div>