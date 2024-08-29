//delete.php serve para deletar uma comanda existente.

<?php

include '../db.php';

$id = isset($_POST['id']) ? $_POST['id'] : '';

if(!empty($id)){

	$sql = "DELETE FROM comandas WHERE id = $id";

	if($conn -> query($sql) === TRUE){
		echo "Comanda deletada com sucesso!";
	}else{
		echo "Erro!" . $sql . "<br>" . $conn -> error;
	}
}else{
	echo "Erro! Você deve preencher todos os dados obrigatoriamente!";
}

$conn -> close();

?>