//update.php serve para atualizar os detalhes de uma movimentação financeira.

<?php

include '../db.php';

$id = isset($_POST['id']) ? $_POST['id'] : '';
$data_movimentacoes = isset($_POST['data_movimentacoes']) ? $_POST['data_movimentacoes'] : '';
$tipo = isset($_POST['tipo']) ? $_POST['tipo'] : '';
$valor = isset($_POST['valor']) ? $_POST['valor'] : '';
$descricao = isset($_POST['descricao']) ? $_POST['descricao'] : '';

$sql = "UPDATE movimentacoes_financeiras SET data_movimentacoes = '$data_movimentacoes', tipo = '$tipo', valor = '$valor', descricao = '$descricao' WHERE id = '$id'";

if ($conn -> query($sql) === TRUE){
	echo "Movimentação financeira atualizada com sucesso!";
}else{
	echo "Erro" . $sql . "<br>" . $conn -> error;
}

$conn -> close();

?>