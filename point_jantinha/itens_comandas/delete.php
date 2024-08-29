//delete.php serve para remover um item de uma comanda.

<?php

include '../db.php';

$id = isset($_POST['id']) ? $_POST['id'] : '';

if(!empty($id)){
	$sql = "DELETE FROM itens_comandas WHERE id = $id";

	if($conn -> query($sql) === TRUE){
		echo "Item da comanda deletado com sucesso!";
	}else{
		echo "Erro!" . $sql . "<br>" .$conn -> error;
	}
	
}else{
	echo "Erro! Você deve preencher todos os campos obrigatoriamente!";
}

$conn -> close();

?>