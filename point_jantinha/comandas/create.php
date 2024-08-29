//create.php serve para criar uma nova comanda no sistema.

<?php

//Adicionando o banco de dados MySQL.

include '../db.php';

//Enviando os dados via POST.

$numero_comanda = isset($_POST['numero_comanda']) ? $_POST['numero_comanda'] : '';
$data_hora = isset($_POST['data_hora']) ? $_POST['data_hora'] : '';
$status = isset($_POST['status']) ? $_POST['status'] : '';
$valor_total = isset($_POST['valor_total']) ? $_POST['valor_total'] : '';

//Verificando se todos os campos obrigatorios foram preenchidos.

if (!empty(numero_comanda) && !empty(data_hora) && !empty(status) && !empty(valor_total)){

	$sql = "INSERT INTO comandas (numero_comanda, data_hora, status, valor_total) VALUES ('$numero_comanda', '$data_hora', $status, '$valor_total')";

	if($conn -> query($sql) === TRUE){
		// code...
		echo "Um novo item foi adicionado com sucesso!";
	}else{
		echo "Erro" . $sql . "<br>" . $conn -> error;
	}

}else{
	echo "Erro! Todos os campos devem ser preenchidos.";
}

$conn -> close();

?>