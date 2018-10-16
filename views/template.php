<!DOCTYPE html>
<html>
<head>
	<title>CRUD com MVC</title>
	<!-- importando os arquivos css -->
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/estilo.css">
	
<body>
	<div class="container">
	
	<?php if(isset($_SESSION['cLogin']) && !empty($_SESSION['cLogin'])):?>
		<div class="row">
			
			<!-- se estiver logado, mostrareste MENU, ocultar se não estiver logado -->
			<div class="col-md-10">
				<ul class="nav justify-content-start" style="margin-top: 2em">
					<li class="nav-item"> <a class="nav-link" href="<?php echo BASE_URL; ?>home">Início</a> </li>
					<li class="nav-item"> <a class="nav-link" href="<?php echo BASE_URL; ?>addAluno">Cadastrar Aluno</a> </li>
					<li class="nav-item"> <a class="nav-link" href="<?php echo BASE_URL; ?>listAluno">Listar Alunos</a> </li>
				</ul>
			</div>

			<div class="col-md-2">
				<ul class="nav justify-content-end" style="margin-top: 2em">
					<li class="nav-item"> <a class="nav-link btn btn-dark btn-sm" href="<?php echo BASE_URL; ?>login/sair">Sair</a>	</li>
				</ul>
			</div>
		
		</div>
		<hr>
	<?php endif; ?>
	<!-- carregamento da template -->
	<?php $this->loadViewInTemplate($viewName, $viewData); ?>
	</div>
	
	<!-- importando os arquivos javascript -->
	<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery-ui.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.mask.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
</head>
</body>
</html>