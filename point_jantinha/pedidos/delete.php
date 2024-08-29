//delete.php serve para remover um pedido do sistema. Este arquivo é utilizado quando um pedido inteiro é cancelado ou removido do banco de dados.

<?php

include '../db.php';

$id = isset($_POST['id']) ? $_POST['id'] : '';

if (!empty($id)){
	$sql = "DELETE FROM pedidos WHERE id = $id";

	if ($conn -> query($sql) === TRUE){
		echo "Pedido deletado com sucesso!";
	}else{
		echo "Erro" . $sql . "<br>" . $conn -> error;
}		
}else{
	echo "Erro! Você deve peencher todos os campos obrigatórios!";
}

$conn -> close();

?>