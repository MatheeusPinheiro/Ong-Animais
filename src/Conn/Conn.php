<?php
class Conn
{
    private $_con;

    public function __construct()
    {
        try {
			$dns = "mysql:host=localhost:3306;dbname=sos";
			$option = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
			$this->conexao = new PDO($dns, 'root', '1234', $option);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function returnConnection()
    {
        return $this->_con;
    }
}
