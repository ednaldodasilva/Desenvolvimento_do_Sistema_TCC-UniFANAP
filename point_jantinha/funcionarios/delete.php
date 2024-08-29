//delete.php serve para remover um funcionário do banco de dados.

<?php

include '../db.php';

$id = isset($_POST['id']) ? $_POST['id'] : '';

if (!empty($id)){
	$sql = "DELETE FROM funcionarios WHERE id = $id";

	if($conn -> query($sql) === TRUE){
		echo "Funcionario deletado com sucesso!";
	}else{
		echo "Erro!" . $sql . "<br>" . $conn -> error;
	}
}else{
	echo "Erro! Você deve preencher todos os campos obrigatoriamente!";
}

$conn -> close();

?>