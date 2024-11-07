<?php 
function registrar_log($pdo, $usuario, $acao) {
    $query = "INSERT INTO logs (usuario, acao) VALUES (:usuario, :acao)";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':usuario', $usuario);
    $stmt->bindParam(':acao', $acao);
    $stmt->execute();
}