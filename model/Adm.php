<?php

class Adm{

	private $cod_adm;
	private $senha;
	private $login; 

	public function setCod_adm($cod_adm)
	{
		$this->cod_adm=$cod_adm;
	}

	public function getCod_adm()
	{
		return $this->cod_adm;
	}

	public function setSenha($senha)
	{
		$this->senha=md5($senha);
	}

	public function getSenha()
	{
		return $this->senha;
	}

	public function setLogin($login)
	{
		$this->login=$login;
	}

	public function getLogin()
	{
		return $this->login;
	}

	public function logar($login,$cod_adm)
	{
		setcookie("adm",$login);
		setcookie("cod_adm",$cod_adm);
	}

	public function logoff()
	{
		setcookie("adm","");
		setcookie("cod_adm","");
	}
}
?>