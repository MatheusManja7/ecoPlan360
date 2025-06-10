<?php
require_once __DIR__ . '/../../../Database/Database.php';

class Recurso
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function cadastrarNoProjeto($dados)
    {
        if (
            empty($dados['projeto_id']) ||
            empty($dados['recurso']) ||
            empty($dados['quantidade']) ||
            empty($dados['valor_unitario'])
        ) {
            return false;
        }

        $sql = "INSERT INTO recursos_projeto 
                (projeto_id, recurso, quantidade, valor_unitario)
                VALUES (:projeto_id, :recurso, :quantidade, :valor_unitario)";

        $stmt = $this->db->prepare($sql);

        $custo_total = $dados['quantidade'] * $dados['valor_unitario'];

        $stmt->bindParam(':projeto_id', $dados['projeto_id'], PDO::PARAM_INT);
        $stmt->bindParam(':recurso', $dados['recurso']);
        $stmt->bindParam(':quantidade', $dados['quantidade'], PDO::PARAM_INT);
        $stmt->bindParam(':valor_unitario', $dados['valor_unitario']);

        return $stmt->execute();
    }

    public function listar()
    {
        $sql = "SELECT * FROM recursos_projeto";
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
