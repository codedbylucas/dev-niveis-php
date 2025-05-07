<?php 
include '../../includes/header.php';
include '../../config/config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = 'DELETE FROM desenvolvedores WHERE id = :id';
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id);
    if ($stmt->execute()) {
        header('Location: listar-devs.php');
    }else {
        echo 'Error';
    }

}



?>