<?php 

class listAlunoController extends controller{

	public function index(){
		$dados = array();
		if(empty($_SESSION['cLogin'])) {
            header("Location: ".BASE_URL."login");
            exit;
      }
       	$a = new Alunos();
        $alunos = $a->listAluno();
        $dados['alunos'] = $alunos;
        $this->loadTemplate('listAluno',$dados);
	}

// ###############################################################################################################
  public function detalhes($matricula){
    $dados = array();
    $a = new Alunos();
    //segurança, caso seja acessado direto pela url sem login, sem sessão iniciada, redirecionar para tela de login
    if(empty($_SESSION['cLogin'])){
        header("Location: ".BASE_URL."login");
      exit;
    }
    $detalhes = $a->getAluno($matricula);
    $dados['detalhes'] = $detalhes;
    $this->loadTemplate('detalhes', $dados);
  }

// #########################################################################################################################
  public function editar($matricula){
    $dados = array(); 
	    if(empty($_SESSION['cLogin'])){
				header("Location: ".BASE_URL."login");
				exit;  
	    }
  	$a = new Alunos();
  	if(isset($_POST['telefone1']) && !empty($_POST['telefone1'])){
  		//$nome = addslashes($_POST['nome']);
			$email = addslashes($_POST['email']);
			//$cpf = addslashes($_POST['cpf']);
			$telefone1 = addslashes($_POST['telefone1']);
			$telefone2 = addslashes($_POST['telefone2']);
			//$datanasc = addslashes($_POST['datanasc']);
			$endereco = addslashes($_POST['endereco']);
		if(
			//!empty($nome) &&
			//!empty($cpf) &&
			!empty($telefone1) &&
			//!empty($datanasc) &&
			!empty($endereco)){
			if($a->editAluno($email, $telefone1, $telefone2,  $endereco, addslashes($matricula))){
				  $dados['msg'] = '<div class="alert alert-danger">
                   <strong>Ops</strong> </div>';
				header("Refresh: 3 ,".BASE_URL."home"); 
             } else {
                $dados['msg'] = '<div class="alert alert-success">
                    <strong>Parabéns</strong> Atualizado com sucesso!
                </div>';
            }
        } else {
            $dados['msg'] = '<div class="alert alert-warning">
                Preencha todos os campos
            </div>';
         }
		}	
				if(isset($matricula) && !empty($matricula)) {
            $infos = $a->getAluno(addslashes($matricula));
            $dados['infos'] = $infos;
        } else {
            header("Location :".BASE_URL."listAluno");
            exit;
        }

  	  	$this->loadTemplate('editAluno', $dados);
  	}
 
// ##########################################################################################################################
  public function excluir($matricula) {
        $dados = array();
        if(empty($_SESSION['cLogin'])) {
            header("Location: ".BASE_URL."login");
            exit;
        }
        $a = new Alunos();
        if(isset($matricula) && !empty($matricula)) {
            $matricula = addslashes(($matricula));
            $a->excluirAluno($matricula);
        }
        header("Location: ".BASE_URL."listAluno");
 }
// #####################################################################################################################
}


?>