<?php

$students = [
    ['turma' => 'web-1', 'nome' => 'zevini', 'nick' => 'multilacao', 'idade' => 12],
    ['turma' => 'web-1', 'nome' => 'yasmini', 'nick' => 'mini', 'idade' => 13],
    ['turma' => 'web-1', 'nome' => 'marinaldo', 'nick' => 'atacadao', 'idade' => 27]
];

$data = $_GET['data'];
$arr = json_decode($data, true);

$id = $arr['numero'];
$nome = $arr['nome'];

if (isset($students[$id])) {
    echo json_encode($students[$id]);
} else {
    // echo json_encode(["erro" => true]); // {"erro": true}
    echo json_encode(["nome" => $nome, "nick" => $nome, "idade" => "sei lá"]);
}

?>