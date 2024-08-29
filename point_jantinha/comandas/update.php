//update.php serve para atualizar os dados de uma comanda específica.

<?php

include '../db.php';

$id = isset($_POST['id']) ? $_POST['id'] : '';
$numero_comanda = isset($_POST['numero_comanda']) ? $_POST['numero_comanda'] : '';
$data_hora = isset($_POST['data_hora']) ? $_POST['data_hora'] : '';
$status = isset($_POST['status']) ? $_POST['status'] : '';
$valor_total = isset($_POST['valor_total']) ? $_POST['valor_total'] : '';

if (!empty($id) && !empty($numero_comanda) && !empty($data_hora) && !empty($status) && !empty($valor_total)){

	$sql = "UPDATE comandas SET numero_comanda = '$numero_comanda', data_hora = '$data_hora', status = '$status', valor_total = '$valor_total' WHERE id = '$id'";

	if ($conn -> query($sql) === TRUE){
		echo "Comanda atualizada com sucessso!";
	}else{
		echo "Erro" . $sql . "<br>" . $conn -> error;
	}
}else{
	echo "Erro! Você deve preencher todos os dados obrigatoriamente!";
}

$conn -> close();

?>