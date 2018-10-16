<?php 

class cadUsuarioController extends controller{


	 public function index() {
        $dados = array();
        //add novo usuario
      	$u = new Usuarios();
       // verificando se o campo username está setado e não vazio
		if(isset($_POST['username']) && !empty($_POST['username'])) {

        //se tiver preenchido e setado, postando os dados
        $username = addslashes($_POST['username']); //username
        $nome = addslashes($_POST['nome']); //nome real do usuario
        $senha = $_POST['senha']; // senha
        

        //se todos os campos estiverem preenchidos, ou seja, não vazios
        if(!empty($username) && !empty($nome) && !empty($senha)) {
            
            //cadastrar
            if($u->cadUsuario($username, $nome, $senha)) {

                $dados['msg'] = '<div class="alert alert-success">
                   <strong>Parabéns!</strong> Cadastrado com Sucesso <a href="'.BASE_URL.'" class="alert-link">Faça o login agora</a>
                </div>';
				            header("Refresh: 2 ,".BASE_URL."login"); 
             } else {
                $dados['msg'] = '<div class="alert alert-danger">
                    <strong>Ops!</strong> Já existe alguém usando este <i>*username</i> | <a href="'.BASE_URL.'" class="alert-link">Faça o login agora</a>
                </div>';
            }

        } else {
            $dados['msg'] = '<div class="alert alert-warning">
                Preencha todos os campos
            </div>';
         }

    }

	
	$this->loadTemplate('cadUsuario', $dados);
	}

}

?>