<?php 

class Alunos extends model{

	public function addAluno($nome, $email, $cpf, $telefone1, $telefone2, $datanasc, $endereco){

		//verificando a integridade, verificando se já existe alguem cadastrado com aquele cpf
		$sql = $this->db->prepare("SELECT matricula FROM alunos WHERE cpf = :cpf"); 
		$sql->bindValue(":cpf", $cpf); 
		$sql->execute();
		//se na integridade, a pesquisa for igual a 0, ou seja, cpf não econtrado, então o cadastro pode ser realizado
		if($sql->rowCount() == 0){
			//adicionando os dados cadastrais
			$sql = $this->db->prepare("INSERT INTO alunos
				SET
				nome = :nome,
				email = :email,
				cpf = :cpf,
				telefone1 = :telefone1,
				telefone2 = :telefone2,
				datanasc = :datanasc,
				endereco = :endereco");
			//validando os dados
			$sql->bindValue(":nome", $nome);
			$sql->bindValue(":email", $email);
			$sql->bindValue(":cpf", $cpf);
			$sql->bindValue(":telefone1", $telefone1);
			$sql->bindValue(":telefone2", $telefone2);
			$sql->bindValue(":datanasc", $datanasc);
			$sql->bindValue(":endereco", $endereco);
			$sql->execute();
			return true;
		} else {
			return false;
		}
	}

// ###############################################################################################################################
	// LISTAGEM GERAL DE ALUNOS
	public function listAluno(){
		$array = array();
		$sql = $this->db->prepare("SELECT * FROM alunos"); 
		$sql->execute(); 

		if($sql->rowCount() > 0){
			$array = $sql->fetchAll();
		}
		return $array;
	}
//##############################################################################################################################
	// LISTAGEM ESPECÍFICA, PEGANDO DADOS DE UM ÚNICO CADASTRO
	public function getAluno($matricula){
		$array = array(); 

		$sql = $this->db->prepare("SELECT * FROM alunos WHERE matricula = :matricula"); 
		$sql->bindValue(":matricula", $matricula); 
		$sql->execute();

		if($sql->rowCount() > 0){
			$array = $sql->fetch();
		}
		return $array;
	}
//#############################################################################################################################
	public function editAluno($email,  $telefone1, $telefone2,  $endereco, $matricula){

		$sql= $this->db->prepare("UPDATE alunos SET 
			
			email = :email,
			 
			telefone1 = :telefone1, 
			telefone2 = :telefone2, 
			
			endereco = :endereco WHERE matricula = :matricula");

		//$sql->bindValue(":nome", $nome);
		$sql->bindValue(":email", $email);
		//$sql->bindValue(":cpf", $cpf);
		$sql->bindValue(":telefone1", $telefone1);
		$sql->bindValue(":telefone2", $telefone2);
		//$sql->bindValue(":datanasc", $datanasc);
		$sql->bindValue(":endereco", $endereco);
		$sql->bindValue(":matricula", $matricula);
		$sql->execute(); 
	}

//#############################################################################################################################
	public function excluirAluno($matricula){
		$sql = $this->db->prepare("DELETE FROM alunos WHERE matricula = :matricula");
		$sql->bindValue(":matricula", $matricula);
		$sql->execute();
	}	





}	


?>