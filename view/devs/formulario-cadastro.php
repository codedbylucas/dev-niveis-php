<?php
include '../../includes/header.php';
include '../../config/config.php';

$sql = 'SELECT * FROM niveis';
$stmt = $pdo->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<div class="card text-light shadow-sm mx-auto mt-5" style="max-width: 500px;">
    <div class="card-body">
        <h2 class="card-title mb-4 text-center">Cadastrar Desenvolvedores</h2>

        <form action="inserir-devs.php" method="POST">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome do desenvolvedor</label>
                <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" required>
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Data Nascimento</label>
                <input type="date" class="form-control" name="data_nascimento" id="data_nascimento" required>
            </div>
            <div class="mb-3">
                <label for="idade" class="form-label">Idade</label>
                <input type="text" class="form-control" name="idade" id="idade" placeholder="Idade" required>
            </div>
            <div class="mb-3">
                <label for="hobby" class="form-label">Hobby</label>
                <input type="text" class="form-control" name="hobby" id="hobby" placeholder="Hobby" required>
            </div>
            <div class="mb-3">
                <label for="nivel" class="form-label">Nivel Desenvolvedor</label>
                <select name="nivel" id="nivel" class="form-control" required>
                    <option value="">Selecione</option>
                    <?php foreach ($result as $dados) : ?>
                        <option value="<?= $dados['id']; ?>"><?= $dados['nome']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-roxo">Cadastrar</button>
            </div>
        </form>
    </div>
</div>


<div class="text-center mt-4">
    <a href="listar-devs.php" class="btn btn-roxo mt-3">Ver Desenvolvedores cadastrados</a>
</div>