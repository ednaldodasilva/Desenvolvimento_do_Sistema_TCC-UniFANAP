//update.php serve para atualizar as informações de um pedido. Por exemplo, se o staus do pedido mudar de "pendente" para "concluido" ou se o cliente adicionar/remover itens ao pedido.

<?php

include '../db.php';

$id = isset($_POST['id']) ? $_POST['id'] : '';
$data_pedido = isset($_POST['data_pedido']) ? $_POST['data_pedido'] : '';
$nome_cliente = isset($_POST['nome_cliente']) ? $_POST['nome_cliente'] : '';
$status = isset($_POST['status']) ? $_POST['status'] : '';
$total = isset($_POST['total']) ? $_POST['total'] : '';

if(!empty($id) && !empty($data_pedido) && !empty($nome_cliente) && !empty($status) && !empty($total)){
	$sql = "UPDATE pedidos SET data_pedido = '$data_pedido', nome_cliente = '$nome_cliente', status = '$status', total = '$total' WHERE id = '$id'";

	if ($conn -> query($sql) === TRUE){
		echo "Pedido atualizado!";
	}else{
		echo "Erro" . $sql . $conn -> error;
}
}else{	
	echo "Erro! Você deve peencher todos os campos obrigatórios!";
}

$conn -> close();

?>