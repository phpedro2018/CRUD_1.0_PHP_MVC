<?php 

class addAlunoController extends controller{
	

	public function index(){
		$dados = array();
		 if(empty($_SESSION['cLogin'])) {
            header("Location: ".BASE_URL."login");
            exit;
    	}

	$a = new Alunos(); 
	
	if(isset($_POST['cpf']) && !empty($_POST['cpf'])){
		$nome = addslashes($_POST['nome']);
		$email = addslashes($_POST['email']);
		$cpf = addslashes($_POST['cpf']);
		$telefone1 = addslashes($_POST['telefone1']);
		$telefone2 = addslashes($_POST['telefone2']);
		$datanasc = addslashes($_POST['datanasc']);
		$endereco = addslashes($_POST['endereco']);
		if(
			!empty($nome) &&
			!empty($cpf) &&
			!empty($telefone1) &&
			!empty($datanasc) &&
			!empty($endereco)){
				if($a->addAluno($nome, $email, $cpf, $telefone1, $telefone2, $datanasc, $endereco)){
				  $dados['msg'] = '<div class="alert alert-success"><strong>Parabéns!</strong> Cadastrado com Sucesso  </div>';
				  header("Refresh: 3 ,".BASE_URL."home"); 
    	} else {
      $dados['msg'] = '<div class="alert alert-danger"><strong>Ops!</strong> Já existe alguém usando este <i>*username</i></div>';
         			}
    } else {
            $dados['msg'] = '<div class="alert alert-warning">Preencha todos os campos	</div>';
         	}
	}
		$this->loadTemplate('addAluno', $dados);
	}

}


?>