<?php 
include '../../includes/header.php';
include '../../config/config.php';

$mensagem = '';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['nome'])) {
        $nome = trim($_POST['nome']);

        if (!empty($nome)) {
            $sql = 'INSERT INTO niveis (nome) VALUES (:nome)';
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':nome', $nome);

            if ($stmt->execute()) {
                $mensagem = "<div class='alert alert-success text-center'>Nível cadastrado com sucesso!</div>";
            } else {
                $mensagem = "<div class='alert alert-danger text-center'>Erro ao cadastrar o nível.</div>";
            }
        } else {
            $mensagem = "<div class='alert alert-warning text-center'>Preencha o nome do nível.</div>";
        }
    }
}
?>

<div class="container mt-5">
    <?= $mensagem ?>
    <div class="text-center">
        <a href="formulario-cadastro.php" class="btn btn-roxo mt-3">Voltar</a>
    </div>
</div>
