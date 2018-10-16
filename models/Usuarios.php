<?php 
class Usuarios extends model{
	

	//criando a funcção para cadastrar usuário
	public function cadUsuario($username, $nome, $senha){

		//verificando se já existe o username, se existir, informar que já está em uso o username
		$sql = $this->db->prepare("SELECT id FROM usuarios WHERE username = :username");
		$sql->bindValue(":username", $username);  //verificando
		$sql->execute(); 

		if($sql->rowCount() == 0){ // se a verificação for 0, ou seja, nenhum username encontrado, username disponíveç

			//inserindo os dados na tabela usuários
			$sql = $this->db->prepare("INSERT INTO usuarios SET
				username = :username, 
				nome = :nome, 
				senha = :senha");

			$sql->bindValue(":username", $username);
			$sql->bindValue(":nome", $nome);
			$sql->bindValue(":senha", md5($senha));
			$sql->execute();

			return true;
			
		} else {

			return false;
		}
	}



	public function login($username, $senha){
		
		//pegando os dados de acesso de login na tabela usuarios
		$sql = $this->db->prepare("SELECT id, username, nome FROM usuarios WHERE username = :username AND senha = :senha"); 

		$sql->bindValue(":username", $username); //pegando os dados digitados no campo usuario
		$sql->bindValue(":senha", md5($senha)); //pegando os dados digitados no campo senha
		$sql->execute();

		if($sql->rowCount() > 0){ // verificando

			//se houver os dados, criar a sessão com dados do usuario logado
			$dados = $sql->fetch(); 
			$_SESSION['cLogin'] = $dados['id']; //pegando o id do usuario logado
			$_SESSION['username'] = $dados['username']; // pegando o nome do usuario logado
			$_SESSION['nome'] = $dados['nome'];
			return true; 
		} else {
			return false; 
		}
	}




}


?>