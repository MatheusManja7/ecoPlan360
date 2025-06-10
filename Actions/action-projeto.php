<?php
require_once '../App/projeto/controller/projeto.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cadastrar'])) {
    $dados = [
        'nome' => $_POST['nome'] ?? '',
        'data_inicio' => $_POST['data_inicio'] ?? '',
        'duracao' => $_POST['duracao'] ?? '',
        'responsavel' => $_POST['responsavel'] ?? '',
        'descricao' => $_POST['descricao'] ?? ''
    ];

    $projeto = new Projeto();
    $resultado = $projeto->cadastrar($dados);

    echo json_encode([
        'success' => $resultado,
        'mensagem' => $resultado ? 'Cadastro realizado com sucesso' : 'Erro ao cadastrar'
    ]);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['listar'])) {
    $projeto = new Projeto();
    $dados = $projeto->listar();

    echo json_encode([
        'success' => (bool) $dados,
        'projetos' => $dados ?: [],
        'mensagem' => $dados ? '' : 'Nenhum projeto encontrado.'
    ]);
    exit;
}

echo json_encode(['success' => false, 'mensagem' => 'Requisição inválida']);
exit;
