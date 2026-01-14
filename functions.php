<?php
// functions.php - funções genéricas para cadastro de clientes

function load_clientes() {
    // Carrega clientes de exemplo (JSON genérico)
    $data_file = __DIR__ . '/data/clientes_exemplo.json';
    if (!file_exists($data_file)) {
        return [];
    }
    $json = file_get_contents($data_file);
    return json_decode($json, true);
}

// Função genérica para atualizar cliente
function update_cliente($id, $dados) {
    $clientes = load_clientes();
    foreach ($clientes as &$c) {
        if ($c['id'] == $id) {
            $c = array_merge($c, $dados);
        }
    }
    file_put_contents(__DIR__ . '/data/clientes_exemplo.json', json_encode($clientes, JSON_PRETTY_PRINT));
    return true;
}
