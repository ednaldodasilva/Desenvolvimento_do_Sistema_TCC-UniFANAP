//create.php registra uma nova movimentação financeira.

<?php

include '../db.php';

$data_movimentacoes = isset($_POST['data_movimentacoes']) ? $_POST['data_movimentacoes'] : '';
$tipo = isset($_POST['tipo']) ? $_POST['tipo'] : '';
$valor = isset($_POST['valor']) ? $_POST['valor'] : '';
$descricao = isset($_POST['descricao']) ? $_POST['descricao'] : '';

$sql = "INSERT INTO movimentacoes_financeiras (data_movimentacoes, tipo, valor, descricao) VALUES ('$data_movimentacoes', '$tipo', '$valor', '$descricao')";

if ($conn -> query($sql) === TRUE){
	echo "Nova movimentação financeira adicionada com sucesso!";
}else{
	echo "Erro" . $sql . "<br>" . $conn -> error;
}

$conn -> close();

?>