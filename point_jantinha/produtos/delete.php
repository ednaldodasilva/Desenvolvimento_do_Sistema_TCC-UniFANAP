//delete.php serve para remover um produto do banco de dados.

<?php

include '../db.php';

// Verificando se o 'id' foi enviado corretamente
$id = isset($_POST['id']) ? $_POST['id'] : '';

if (!empty($id)){
	$sql = "DELETE FROM produtos WHERE id = $id";

	if($conn -> query($sql) === TRUE){
		echo "Produto deletado com sucesso!";
	}else{
		echo "Erro!" . $sql . "<br>" . $conn -> error;
	}
}else{
	echo "Erro! Você deve preencher todos os campos obrigatório!";
}

$conn -> close();

?>