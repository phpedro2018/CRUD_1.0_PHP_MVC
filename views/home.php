<center>
<?php if(isset($_SESSION['cLogin']) && !empty($_SESSION['cLogin'])):?>

		<!-- apenas mostrando o username e nome do usuário logado -->
		Seja bem vindo usuário: <b><?php echo "@".$_SESSION['username']; ?></b> <br>
		Nome: <b><?php echo $_SESSION['nome']; ?></b>

		<hr>
		<?php endif; ?>


		<div class="container">
			<div class="row justify-content-center">
				<div class="row">
					<div class="col-md-12">
						<img src="<?php echo BASE_URL; ?>assets/images/sca.png" alt="">
						<h4 style="font-style: italic">Sistema de Cadastro de Alunos</h4>
					</div>
				</div>
			</div>
		</div>
</center>