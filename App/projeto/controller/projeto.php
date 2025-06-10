<?php
require_once __DIR__ . '/../../../Database/database.php';

class Projeto
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function cadastrar($dados)
    {
        $sql = "INSERT INTO projeto (nome, data_inicio, duracao, responsavel, descricao)
                VALUES (:nome, :data_inicio, :duracao, :responsavel, :descricao)";
        
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':nome', $dados['nome']);
        $stmt->bindParam(':data_inicio', $dados['data_inicio']);
        $stmt->bindParam(':duracao', $dados['duracao']);
        $stmt->bindParam(':responsavel', $dados['responsavel']);
        $stmt->bindParam(':descricao', $dados['descricao']);

        return $stmt->execute();
    }

    public function listar()
    {
        $sql = "SELECT * FROM projeto";
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

