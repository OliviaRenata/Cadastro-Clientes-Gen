<?php
// index.php - Página de cadastro de clientes (versão genérica)

require_once 'functions.php';

// Dados de exemplo
$clientes = load_clientes();

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Clientes - Genérico</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-3">

<h1>Cadastro de Clientes (Genérico)</h1>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Nome</th>
            <th>CPF</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($clientes as $c): ?>
            <tr>
                <td><?= htmlspecialchars($c['nome']) ?></td>
                <td><?= htmlspecialchars($c['cpf']) ?></td>
                <td><?= htmlspecialchars($c['email']) ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>
