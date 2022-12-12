<?php


class LoginModel {

    public function validarLogin(string $email, string $senha)
    {
        include 'DAO/LoginDao.php';
        $dao = new LoginDao();

        $obj = $dao->validarUsuario($email, $senha);
        if($obj){
            return $obj;
        }else{
            return false;
        }
    }
}