<?php
include '../../includes/header.php';
include '../../config/config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = 'DELETE FROM niveis WHERE id = :id';
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id);

    if ($stmt->execute()) {
        header('Location: listar-niveis.php');
        exit;
    } else {
        echo 'Erro ao deletar nivel';
    }
}
