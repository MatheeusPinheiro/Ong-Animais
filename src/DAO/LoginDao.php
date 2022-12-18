<?php


class LoginDao
{

	private $conexao;

    public function __construct()
    {
        include_once "Conn/Conn.php";

        $conn = new Conn();
        $this->conexao = $conn->returnConnection();
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

	//Selecionando pelo Login
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
