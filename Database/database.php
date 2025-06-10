<?php
class Database extends PDO
{
    public function __construct()
    {
        $host = 'localhost';
        $dbname = 'ecoPlan360';
        $username = 'root';
        $password = '';

        $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";

        try {
            parent::__construct($dsn, $username, $password);
            $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die(json_encode(['success' => false, 'message' => 'Erro de conexão: ' . $e->getMessage()]));
        }
    }
}
