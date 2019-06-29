<?php
	class VerificaLogin{
	
	public function __construct($login, $senha){
		include "classes/Admin.php";
		$user = new Admin();
		$msg = $user->verifica($login, $senha);
	}

	public function checkAdmim(){
		if($msg == "ok"){
			session_start();
			$_SESSION['usuario'] = $_POST['login'];
			$_SESSION['inicio'] = date("d/m/Y H:i");
			//header("Location: admEventos.php");
		}
		else{
			//header("Location: login.php?erro=$msg");
		} 
	}
	public function verificaUser($login, $senha){
		include_once "conexaoPHP/conexao.php";
		$sql = "select email, senha from cliente where email = '$login' and senha = '$senha'";
		$resultado = mysqli_query($conexao, $sql);
		if(isset($resultado)){
			session_start();
			$_SESSION['usuario'] = $login;
			$_SESSION['inicio'] = date("d/m/Y H:i");
			//header("Location: admEventos.php");
		}
		else{
			echo "Você errou, tente novamente!";
		}
	}


}
?>