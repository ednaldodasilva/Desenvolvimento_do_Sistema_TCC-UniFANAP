//delete.php serve para remover um item de um pedido. Se ocliente decidir cancelar um item de sua ordem, esse arquivo será usado para excluir esse item específico.

<?php

include '../db.php';

$id = isset($_POST['id']) ? $_POST['id'] : '';

$sql = "DELETE FROM itens_pedidos WHERE id = '$id'";

if($conn -> query($sql) === TRUE){
	echo "Item do pedido deletado com sucesso!";
}else{
	echo "Erro!" . $sql. "<br>" . $conn -> error;
}

$conn -> close();

?>