<?php


class LoginModel
{
    //validar login do doador
    public function validarLoginDoador(string $email, string $senha, string $tipo_usuario)
    {
        include 'DAO/LoginDao.php';
        $dao = new LoginDao();

        $obj = $dao->validarUsuarioDoador($email, $senha, $tipo_usuario);
        if ($obj) {
            return $obj;
        } else {
            return false;
        }
    }
    //validar login da ong
    public function validarLoginOng(string $email, string $senha, string $tipo_usuario)
    {
        include 'DAO/LoginDao.php';
        $dao = new LoginDao();

        $obj = $dao->validarUsuarioOng($email, $senha, $tipo_usuario);
        if ($obj) {
            return $obj;
        } else {
            return false;
        }
    }

    public function getByLogin(string $login)
    {
        include 'DAO/LoginDao.php';
        $dao = new LoginDao();

        $obj = $dao->selectByLogin($login);
        if ($obj) {
            return $obj;
        }
    }
}
