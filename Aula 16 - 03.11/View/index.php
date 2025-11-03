<?php
require_once "./../Controller/BebidaController.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $acao = $_POST['action'] ?? '';
    if ($acao == 'criar') {
        $controller->salvar(
        $nome = $_POST['nome'],
        $preco = $_POST['value'],
        $volume = $_POST['volume'],
        $qntd = $_POST['qntd'],
        $categoria = $_POST['categoria'],
        );
    } elseif ($acao == 'deletar') {
        $controller->deletarBebida($_POST['nome']);
    }
}
?>

<!-- Formulário HTML -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de bebidas</title>
</head>
<body>
    <h1>Gerenciamento de bebidas:</h1>
    <br>
    <hr>
    
    <form method="POST">
        <input type="hidden" name="action" value="criar">
        <input type="text" name="nome" placeholder="Nome da bebida:" required>
        <select name="categoria">
            <option value="">Selecione a categoria:</option>
            <option value="Refrigerante">Refrigerante</option>
            <option value="Cerveja">Cerveja</option>
            <option value="Vinho">Vinho</option>
            <option value="Destilado">Destilado</option>
            <option value="Água">Água</option>
            <option value="Suco">Suco</option>
            <option value="Energético">Energético</option>
        </select>
        <input type="text" name="volume" placeholder="Volume (ex: 300ml, 1L):" required>
        <input type="number" name="value" step="0.01" placeholder="Valor em Reais (R$):" required>
        <input type="number" name="qntd" placeholder="Quantidade em estoque:" required>
        <button type="submit">Adicionar Bebida</button>
    </form>
</body>
</html>