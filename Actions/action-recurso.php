<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// restante do código...


require_once '../App/recursos/controller/Recursos.php';
require_once '../App/projeto/controller/projeto.php';

header('Content-Type: application/json');

// Cadastro de recurso
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cadastrar'])) {
    $dados = [
        'projeto_id' => $_POST['projeto_id'] ?? '',
        'recurso' => $_POST['recurso'] ?? '',
        'quantidade' => $_POST['quantidade'] ?? '',
        'valor_unitario' => $_POST['valor_unitario'] ?? ''
    ];

    $recurso = new Recurso();
    $resultado = $recurso->cadastrarNoProjeto($dados);

    echo json_encode([
        'success' => $resultado,
        'mensagem' => $resultado ? 'Cadastro realizado com sucesso' : 'Erro ao cadastrar recurso no projeto'
    ]);
    exit;
}

// Listar projetos para popular o <select>
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['listar_projetos'])) {
    $projeto = new Projeto();
    $dados = $projeto->listar();

    echo json_encode([
        'success' => $dados ? true : false,
        'projetos' => $dados,
        'mensagem' => $dados ? '' : 'Nenhum projeto encontrado.'
    ]);
    exit;
}

// Listar recursos (opcional)
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['listar'])) {
    $recurso = new Recurso();
    $dados = $recurso->listar();

    echo json_encode([
        'success' => $dados ? true : false,
        'recursos' => $dados,
        'mensagem' => $dados ? '' : 'Nenhum recurso encontrado.'
    ]);
    exit;
}

echo json_encode(['success' => false, 'mensagem' => 'Requisição inválida']);
exit;
