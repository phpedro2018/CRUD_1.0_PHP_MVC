<?php 

require	'environment.php';

$config = array(); //criando array com os valores do banco de dados

if(ENVIRONMENT == 'development'){
	//caso o projeto seja local
	define("BASE_URL", "http://localhost/www/curso_php_mvc/crud_MVC/"); // url padrão
	$config['dbname'] = 'projeto_sge1'; //nome do banco 
	$config['host'] = 'localhost'; // nome da hospedagem
	$config['dbuser'] = 'root'; // nome de usuario de acesso a hospedagem
	$config['dbpass'] = 'root'; // senha de usuario de acesso as config de hospedagem
} else {
	//caso o projeto esteja online
	define("BASE_URL", "http://localhost/www/curso_php_mvc/crud_MVC/");
	$config['dbname'] = 'projeto_sge1';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = 'root';
}

global $db; // tornando a variável de conexao uma variável global
try {
	//conexão ao banco de dados
	$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);	
} catch (PDOException $e) {
	echo "ERRO:".$e->getMessage();
}



?>