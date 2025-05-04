<?php
include '../../includes/header.php';
include '../../config/config.php';

$sql = 'SELECT * FROM niveis ORDER BY nome ASC';
$stmt = $pdo->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="container mt-5">
    <div class="card bg-dark text-light shadow">
        <div class="card-body">
            <h2 class="card-title text-center mb-4">Níveis Cadastrados</h2>

            <table class="table table-dark table-striped table-hover text-center">
                <thead class="table-light text-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nome do Nível</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($result as $dados): ?>
                        <tr>
                            <td><?= $dados['id'] ?></td>
                            <td><?= $dados['nome'] ?></td>
                            <td>
                                <a href="editar-niveis.php?id=<?=$dados['id'];?>" class="btn btn-primary" style="padding: 5px 10px; font-size: 1.0rem;">Editar</a>
                                <a href="excluir-niveis.php?id=<?=$dados['id'];?>" class="btn btn-danger" style="padding: 5px 10px; font-size: 1.0rem;">Excluir</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="text-center mt-3">
        <a href="formulario-cadastro.php" class="btn btn-roxo">Cadastrar Novo Nível</a>
    </div>
</div>