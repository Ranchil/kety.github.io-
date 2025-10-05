
<?php

require_once'Banco.php';

class AdmPA{

	private $con;

	public function __construct()
	{
		$this->con=new Banco();
	}

	public function logar($adm)
	{
		$sql="select cod_adm,login,senha from administrador where login='".$adm->getLogin()."'and senha='".$adm->getSenha()."'";
		$consulta=$this->con->consultar($sql);
		$this->con->desconectar();
		return $consulta;
		
	}

	public function alterar($senha,$cod_adm)
	{
		$sql="update administrador set
		senha='".$senha."' where cod_adm=".$cod_adm;  
		$resposta=$this->con->executar($sql);
		return $resposta;
	}

}




?>
