<?php 
class homeController extends controller{
	public function index(){
	
		$dados = array();

		//caso a sessão esteja vazia, sem usuario logado, direcionar à página de login
		if(empty($_SESSION['cLogin'])){
			header("Location:login");
		}
		
		$this->loadTemplate('home', $dados);
	}
}
?>