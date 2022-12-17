<?php


class LoginDao
{

	private $conexao;

	//construtor da classe
	public function __construct()
	{
		try {
			$dns = "mysql:host=localhost:3306;dbname=sos";
			$option = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
			$this->conexao = new PDO($dns, 'root', '1234', $option);
		} catch (\Throwable $th) {
			//throw $th;
		}
	}

	//Validando login do doador
	public function validarUsuarioDoador($email, $senha, $tipo_usuario)
	{
		include_once 'Models/LoginModel.php';

		$sql = "SELECT email, senha From doador
		Where email = ?
		AND senha = ?
		AND tipo_usuario = ?
		";

		$stmt = $this->conexao->prepare($sql);
		$stmt->bindValue(1, $email);
		$stmt->bindValue(2, $senha);
		$stmt->bindValue(3, $tipo_usuario);
		$stmt->execute();

		return $stmt->fetchObject("LoginModel");
	}

	//validando login da Ong
	public function validarUsuarioOng($email, $senha, $tipo_usuario)
	{
		include_once 'Models/LoginModel.php';

		$sql = "SELECT email, senha From ong
		Where email = ?
		AND senha = ?
		AND tipo_usuario = ?
		";

		$stmt = $this->conexao->prepare($sql);
		$stmt->bindValue(1, $email);
		$stmt->bindValue(2, $senha);
		$stmt->bindValue(3, $tipo_usuario);
		$stmt->execute();

		return $stmt->fetchObject("LoginModel");
	}


	public function selectByLogin(string $login)
	{
		include_once 'Models/LoginModel.php';

		$sql = "SELECT id, nome, email, tipo_usuario from doador WHERE email = ?";

		$stmt = $this->conexao->prepare($sql);
		$stmt->bindValue(1, $login);
		$stmt->execute();

		return $stmt->fetchObject("LoginModel");
	}
}
