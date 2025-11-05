<?php
// ===============================================
// Importa o controller responsável pela lógica
// ===============================================
require_once __DIR__ . '/../controller/CarroController.php';

// Instancia o controller para manipular os dados
$controller = new CarroController();

// ===============================================
// TRATAMENTO DAS AÇÕES ENVIADAS PELO FORMULÁRIO
// - Se método for POST, verifica a ação enviada
// - "criar" → adiciona novo carro
// - "deletar" → remove carro selecionado
// ===============================================
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['acao'] === 'criar') {
        $controller->criar($_POST['nome'], $_POST['categoria'], $_POST['motor'], $_POST['valor'], $_POST['qtde']);
    } elseif ($_POST['acao'] === 'deletar') {
        $controller->deletar($_POST['nome']);
    }
}

// Carrega os carros já cadastrados para exibição
$lista = $controller->ler();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento de Carros</title>
</head>
<body>

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

<!-- TÍTULO DA PÁGINA -->
<h1>Gerenciamento de Carros</h1>
<hr><br>

<!-- =============================================== -->
<!-- FORMULÁRIO PARA CADASTRO DE NOVOS CARROS -->
<!-- `acao = criar` → indica ao controller que é um cadastro -->
<!-- =============================================== -->
<form method="POST">
    <input type="hidden" name="acao" value="criar">

    <input type="text" name="nome" placeholder="Modelo do Carro (ex: Civic)" required>

    <select name="categoria" required>
        <option value="">Selecione a Categoria</option>
        <option value="Sedan">Sedan</option>
        <option value="SUV">SUV</option>
        <option value="Hatch">Hatch</option>
        <option value="Picape">Picape</option>
        <option value="Elétrico">Elétrico</option>
        <option value="Esportivo">Esportivo</option>
    </select>

    <input type="text" name="motor" placeholder="Motor (ex: 1.0 Turbo / V6)" required>
    <input type="number" name="valor" step="0.01" placeholder="Valor (R$)" required>
    <input type="number" name="qtde" placeholder="Quantidade em estoque" required>

    <button type="submit">Cadastrar</button>
</form>

<br><hr><br>

<!-- LISTAGEM DOS CARROS CADASTRADOS -->
<h2>Carros cadastrados</h2>

<table border="1" cellpadding="8">
    <tr>
        <th>Modelo</th>
        <th>Categoria</th>
        <th>Motor</th>
        <th>Valor (R$)</th>
        <th>Qtde</th>
        <th>Ações</th>
    </tr>

    <?php if (!empty($lista)): ?>
        <?php foreach ($lista as $carro): ?>
            <tr>
                <td><?= $carro->getNome() ?></td>
                <td><?= $carro->getCategoria() ?></td>
                <td><?= $carro->getMotor() ?></td>
                <td><?= number_format($carro->getValor(), 2, ',', '.') ?></td>
                <td><?= $carro->getQtde() ?></td>

                <td>
                    <!-- =============================================== -->
                    <!-- FORM PARA EXCLUSÃO DE CARRO -->
                    <!-- Envia "acao = deletar" e o nome do carro -->
                    <!-- =============================================== -->
                    <form method="POST" style="display:inline;">
                        <input type="hidden" name="acao" value="deletar">
                        <input type="hidden" name="nome" value="<?= $carro->getNome() ?>">
                        <button type="submit">Excluir</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <!-- Mensagem caso não existam registros -->
        <tr><td colspan="6">Nenhum carro cadastrado</td></tr>
    <?php endif; ?>
</table>

</body>
</html>
