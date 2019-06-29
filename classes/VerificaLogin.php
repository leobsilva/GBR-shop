<?php
	class VerificaLogin{

	include "classes/Admin.php";
	
	public function __construct(){
		$user = new Admin();
		$msg = $user->verifica($_POST['login'], $_POST['senha']);
	}

	public function verifica(){
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
}
?>