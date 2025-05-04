<?php
include '../../includes/header.php';
include '../../config/config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = 'SELECT * FROM niveis WHERE id = :id';
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
}

if (isset($_POST['nome'], $_POST['id'])) {
    $nome = trim($_POST['nome']);
    $id = $_POST['id'];

    $sqlInserir = 'UPDATE niveis SET nome = :nome WHERE id = :id';
    $stmtInserir = $pdo->prepare($sqlInserir);
    $stmtInserir->bindParam(':nome', $nome);
    $stmtInserir->bindParam(':id', $id);

    if ($stmtInserir->execute()) {
        header('Location: listar-niveis.php');
        exit;
    } else {
        echo 'Erro ao editar nivel';
    };
}

?>

<div class="card bg-dark text-light shadow-sm mx-auto mt-5" style="max-width: 500px;">
    <div class="card-body">
        <h2 class="card-title mb-4 text-center">Editar Nível</h2>

        <form method="POST">
            <input type="hidden" name="id" value="<?= $result['id']; ?>">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome do Nível</label>
                <input type="text" class="form-control" name="nome" id="nome" required value="<?= $result['nome']; ?>">
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-roxo">Salvar alterações</button>
            </div>
        </form>
    </div>
</div>