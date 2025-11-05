<?php
require_once __DIR__ . '/../controller/CarroController.php';

$controller = new CarroController();

$modoEdicao = false;
$carroEditando = null;

// Ações do Form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Criar novo
    if ($_POST['acao'] === 'criar') {
        $controller->criar($_POST['nome'], $_POST['categoria'], $_POST['motor'], $_POST['valor'], $_POST['qtde']);
    }

    // Excluir
    elseif ($_POST['acao'] === 'deletar') {
        $controller->deletar($_POST['nome']);
    }

    // Atualizar
    elseif ($_POST['acao'] === 'atualizar') {
        $controller->atualizar($_POST['nome'], $_POST['valor'], $_POST['qtde']);
    }

    header("Location: index.php"); // evita re-envio do form
    exit;
}

// Entrar em modo edição
if (isset($_GET['editar'])) {
    $modoEdicao = true;
    $carros = $controller->ler();
    $carroEditando = $carros[$_GET['editar']];
}

$lista = $controller->ler();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Gerenciamento de Carros</title>

<style>
body {
    font-family: Arial, sans-serif;
    margin: 20px;
}

form {
    margin-bottom: 20px;
    display: grid;
    gap: 8px;
    max-width: 400px;
}

input, select, button {
    padding: 10px;
    font-size: 15px;
}

button {
    cursor: pointer;
}

table {
    border-collapse: collapse;
    width: 90%;
    margin-top: 20px;
}

th, td {
    border: 1px solid #888;
    padding: 8px;
    text-align: center;
}

th {
    background: #222;
    color: white;
}

tr:nth-child(even) {
    background: #f4f4f4;
}

.actions {
    display: flex;
    gap: 6px;
    justify-content: center;
}
</style>

</head>
<body>

<h2><?= $modoEdicao ? "Editar Carro" : "Cadastrar Carro" ?></h2>
<hr><br>

<form method="POST">
    <input type="hidden" name="acao" value="<?= $modoEdicao ? 'atualizar' : 'criar' ?>">

    <input type="text" name="nome" placeholder="Modelo"
        value="<?= $modoEdicao ? $carroEditando->getNome() : '' ?>"
        required <?= $modoEdicao ? 'readonly' : '' ?>>

    <?php if(!$modoEdicao): ?>
    <select name="categoria" required>
        <option value="">Categoria</option>
        <option value="Sedan">Sedan</option>
        <option value="SUV">SUV</option>
        <option value="Hatch">Hatch</option>
        <option value="Picape">Picape</option>
        <option value="Elétrico">Elétrico</option>
        <option value="Esportivo">Esportivo</option>
    </select>

    <input type="text" name="motor" placeholder="Motor (ex 2.0 Turbo)" required>
    <?php endif; ?>

    <input type="number" name="valor" step="0.01" placeholder="Valor R$"
        value="<?= $modoEdicao ? $carroEditando->getValor() : '' ?>" required>

    <input type="number" name="qtde" placeholder="Quantidade"
        value="<?= $modoEdicao ? $carroEditando->getQtde() : '' ?>" required>

    <button type="submit"><?= $modoEdicao ? "Salvar Alterações" : "Cadastrar" ?></button>

    <?php if($modoEdicao): ?>
        <a href="index.php">Cancelar</a>
    <?php endif; ?>
</form>

<h2>Lista de Carros</h2>

<table>
<tr>
    <th>Modelo</th>
    <th>Categoria</th>
    <th>Motor</th>
    <th>Valor</th>
    <th>Qtd</th>
    <th>Ações</th>
</tr>

<?php if (!empty($lista)): ?>
    <?php foreach ($lista as $carro): ?>
        <tr>
            <td><?= $carro->getNome() ?></td>
            <td><?= $carro->getCategoria() ?></td>
            <td><?= $carro->getMotor() ?></td>
            <td>R$ <?= number_format($carro->getValor(), 2, ',', '.') ?></td>
            <td><?= $carro->getQtde() ?></td>
            <td class="actions">
                
                <!-- Editar -->
                <a href="?editar=<?= $carro->getNome() ?>">
                    <button type="button">Editar</button>
                </a>

                <!-- Excluir -->
                <form method="POST">
                    <input type="hidden" name="acao" value="deletar">
                    <input type="hidden" name="nome" value="<?= $carro->getNome() ?>">
                    <button type="submit">Excluir</button>
                </form>

            </td>
        </tr>
    <?php endforeach; ?>
<?php else: ?>
    <tr><td colspan="6">Nenhum carro cadastrado</td></tr>
<?php endif; ?>

</table>

</body>
</html>
