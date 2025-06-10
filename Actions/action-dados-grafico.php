<?php
header('Content-Type: application/json');
require_once __DIR__ . '/../Database/database.php';

try {
    $db = new Database();

    $sql = "SELECT recurso, SUM(quantidade * valor_unitario) AS custo_total
            FROM recursos_projeto
            GROUP BY recurso
            ORDER BY custo_total DESC";

    $stmt = $db->prepare($sql);
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($result);

} catch (Exception $e) {
    echo json_encode(['error' => $e->getMessage()]);
}
?>
