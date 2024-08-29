//create.php serve para criar um novo pedido no sistema. Este arquivo geralmente é usado quando um cliente realiza uma nova compra, registrando o pedido com uma lista de itens.

<?php

include '../db.php';

$data_pedido = isset($_POST['data_pedido']) ? $_POST['data_pedido'] : '';
$nome_cliente = isset($_POST['nome_cliente']) ? $_POST['nome_cliente'] : '';
$status = isset($_POST['status']) ? $_POST['status'] : '';
$total = isset($_POST['total']) ? $_POST['total'] : '';

if(!empty($data_pedido) && !empty($nome_cliente) && !empty($status) && !empty($total)){
	$sql = "INSERT INTO pedidos (data_pedido, nome_cliente, status, total) VALUES ('$data_pedido', '$nome_cliente', '$status', '$total')";

	if ($conn -> query($sql) === TRUE){
		echo "Pedido criado com sucesso!";
	}else{
		echo "Erro" . $sql . "<br>" . $conn -> error;
	}
}else{
	echo "Erro! Você deve peencher todos os campos obrigatórios!";
}

$conn -> close();

?>