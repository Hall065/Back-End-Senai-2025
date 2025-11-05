<?php
require_once __DIR__ . '/../controller/BebidaController.php';

$controller = new BebidaController();

// Ações do formulário
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['acao'] === 'criar') {
        $controller->criar($_POST['nome'], $_POST['categoria'], $_POST['volume'], $_POST['valor'], $_POST['qtde']);
    } elseif ($_POST['acao'] === 'deletar') {
        $controller->deletar($_POST['nome']);
    }
}

$lista = $controller->ler();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento de Bebidas</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f9f9f9; margin: 20px; }
        h1 { color: #333; }
        form { margin-bottom: 30px; background: #fff; padding: 15px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        input, select, button { margin: 5px 0; padding: 8px; border-radius: 5px; border: 1px solid #ccc; }
        button { cursor: pointer; background-color: #4CAF50; color: white; border: none; }
        button:hover { background-color: #45a049; }
        table { border-collapse: collapse; width: 100%; background: #fff; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background-color: #f2f2f2; }
        tr:nth-child(even){ background-color: #f9f9f9; }
        .delete-btn { background-color: #f44336; }
        .delete-btn:hover { background-color: #d32f2f; }
    </style>
</head>
<body>

<h1>Gerenciamento de Bebidas</h1>

<!-- Formulário para criar bebida -->
<form method="POST">
    <input type="hidden" name="acao" value="criar">
    <input type="text" name="nome" placeholder="Nome da bebida:" required>
    <select name="categoria" required>
        <option value="">Selecione a categoria</option>
        <option value="Refrigerante">Refrigerante</option>
        <option value="Cerveja">Cerveja</option>
        <option value="Vinho">Vinho</option>
        <option value="Destilado">Destilado</option>
        <option value="Água">Água</option>
        <option value="Suco">Suco</option>
        <option value="Energético">Energético</option>
    </select>
    <input type="text" name="volume" placeholder="Volume (ex: 300ml):" required>
    <input type="number" name="valor" step="0.01" placeholder="Valor em R$:" required>
    <input type="number" name="qtde" placeholder="Quantidade em estoque:" required>
    <button type="submit">Cadastrar</button>
</form>

<!-- Tabela de bebidas -->
<table>
    <tr>
        <th>Nome</th>
        <th>Categoria</th>
        <th>Volume</th>
        <th>Valor (R$)</th>
        <th>Quantidade</th>
        <th>Ações</th>
    </tr>
    <?php foreach ($lista as $bebida): ?>
    <tr>
        <td><?= htmlspecialchars($bebida->getNome()) ?></td>
        <td><?= htmlspecialchars($bebida->getCategoria()) ?></td>
        <td><?= htmlspecialchars($bebida->getVolume()) ?></td>
        <td><?= number_format($bebida->getValor(), 2, ',', '.') ?></td>
        <td><?= htmlspecialchars($bebida->getQtde()) ?></td>
        <td>
            <form method="POST" style="display:inline;">
                <input type="hidden" name="acao" value="deletar">
                <input type="hidden" name="nome" value="<?= htmlspecialchars($bebida->getNome()) ?>">
                <button type="submit" class="delete-btn">Excluir</button>
            </form>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
