//update.php serve para atualizar as informções de um item dentro de uma comanda.

<?php

include '../db.php';

$id = isset($_POST['id']) ? $_POST['id'] : '';
$comanda_id = isset($_POST['comanda_id']) ? $_POST['comanda_id'] : '';
$produto_id = isset($_POST['produto_id']) ? $_POST['produto_id'] : '';
$quantidade = isset($_POST['quantidade']) ? $_POST['quantidade'] : '';
$valor_unitario = isset($_POST['valor_unitario']) ? $_POST['valor_unitario'] : '';

if (!empty($id) && !empty($comanda_id) && !empty($produto_id) && !empty($quantidade) && !empty($valor_unitario)){

	$sql = "UPDATE itens_comandas SET comanda_id = '$comanda_id', produto_id = '$produto_id', quantidade = '$quantidade', valor_unitario = '$valor_unitario' WHERE id = '$id'";

	if ($conn -> query($sql) === TRUE){
		echo "Item de comanda atualizado com sucesso!";
	}else{
		echo "Erro!" . $sql . "<br>" . $conn -> error;
	}
}else{
	echo "Erro! Todos os itens devem ser preenchidos obrigatoriamente!";
}

$conn -> close();

?>