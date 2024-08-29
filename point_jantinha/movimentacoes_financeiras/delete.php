//delete.php serve para remover uma movimentação financeira do sistema.

<?php

include '../db.php';

$id = isset($_POST['id']) ? $_POST['id'] : '';

$sql = "DELETE FROM movimentacoes_financeiras WHERE id = '$id'";

if($conn -> query($sql) === TRUE){
	echo "Movimentação financeira deletada com sucesso!";
}else{
	echo "Erro" . $sql . "<br>" . $conn -> error;
}

$conn -> close();

?>