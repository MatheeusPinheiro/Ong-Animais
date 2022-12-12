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


	public function validarUsuario($email, $senha)
	{
		include_once 'Models/LoginModel.php';

		$sql = "SELECT email, senha From ong
		Where email = ?
		AND senha = ?";

		$stmt = $this->conexao->prepare($sql);
		$stmt->bindValue(1, $email);
		$stmt->bindValue(2, $senha);
		$stmt->execute();

		return $stmt->fetchObject("LoginModel");
	}
}
