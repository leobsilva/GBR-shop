<?php
	class Admin{
		private $login;
		private $senha;

		public function __construct(){
			$this->login = "admin";
			$this->senha = "ahsgat6327";
		} 

		public function verifica($l, $s){
			if($l <> $this->login){
				return "login incorreto";
			}
			elseif($s <> $this->senha){
				return "senha incorreta";
			}
			else{
				return "ok";
			}
		}
	}
?>