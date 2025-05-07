<?php include '../../includes/header.php';?>

    <div class="card bg text-light shadow-sm mx-auto mt-5" style="max-width: 500px;">
        <div class="card-body">
            <h2 class="card-title mb-4 text-center">Cadastrar Nível</h2>

            <form action="inserir-niveis.php" method="POST">
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome do Nível</label>
                    <input type="text" class="form-control" name="nome" id="nome" placeholder="Ex: Júnior, Pleno, Sênior" required>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-roxo">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>


<div class="text-center mt-4">
    <a href="../niveis/listar-niveis.php" class="btn btn-roxo mt-3">Ver níveis cadastrados</a>
</div>