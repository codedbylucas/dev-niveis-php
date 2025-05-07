<?php
include '../../includes/header.php';
include '../../config/config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['nome'], $_POST['data_nascimento'], $_POST['idade'], $_POST['hobby'], $_POST['nivel'])) {
        $nome = $_POST['nome'];
        $data_nascimento = $_POST['data_nascimento'];
        $idade = $_POST['idade'];
        $hobby = $_POST['hobby'];
        $nivel = $_POST['nivel'];

        $sql = 'INSERT INTO desenvolvedores (nome, data_nascimento, idade, hobby, nivel_id) 
        VALUES (:nome, :data_nascimento, :idade, :hobby, :nivel)';
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':data_nascimento', $data_nascimento);
        $stmt->bindParam(':idade', $idade);
        $stmt->bindParam(':hobby', $hobby);
        $stmt->bindParam(':nivel', $nivel);

        if ($stmt->execute()) {
            $mensagem = "<div class='alert alert-success text-center'>Nível cadastrado com sucesso!</div>";
        } else {
            $mensagem = "<div class='alert alert-danger text-center'>Erro ao cadastrar o nível.</div>";
        }
    } else {
        echo 'Erro ao pegar os dados do formulario'; 
    }
}else {
    echo 'Metodo recebido não é POST'; 
}

?>

<div class="container mt-5">
    <?= $mensagem ?>
    <div class="text-center">
        <a href="formulario-cadastro.php" class="btn btn-roxo mt-3">Voltar</a>
    </div>
</div>