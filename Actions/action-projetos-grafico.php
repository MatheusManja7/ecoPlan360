<?php
header('Content-Type: application/json');

require_once __DIR__ . '/../Database/database.php';

try {
    $db = new Database();

    $sql = "SELECT SUM(valor_unitario * quantidade) AS custo_total_geral FROM recursos_projeto";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    echo json_encode($result);
} catch (Exception $e) {
    echo json_encode(['error' => $e->getMessage()]);
}
