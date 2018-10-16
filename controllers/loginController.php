<?php 

class loginController extends controller{
	
	public function index(){

		//criando armazenamento de dados no array
		$dados = array(); 

		//sistema de login
		$u = new Usuarios();

		//verificando se os dados do login foram preenchidos corretamente
		if(isset($_POST['username']) && !empty($_POST['username'])) {

			//enviandi os dados
			$username = addslashes($_POST['username']); 
			$senha = $_POST['senha']; 

			//verificando, caso estejam corretos, direcionar à página inicial
			if($u->login($username, $senha)){
				header("Location: ".BASE_URL);

				//caso estejam errados, mostrar a mensagem de erro e permanecer na página de login
			} else {
				$dados['msg'] = '<div class="alert alert-danger">
                Usuário e/ou Senha incorretos!
            </div>';
			}
		}

		$this->loadTemplate('login', $dados);
	}


	//fazendo o logout. encerrando a sessão e direcionando à página de login
	 public function sair() {

        unset($_SESSION['cLogin']);
        header("Location: ".BASE_URL);

    }
}


?>