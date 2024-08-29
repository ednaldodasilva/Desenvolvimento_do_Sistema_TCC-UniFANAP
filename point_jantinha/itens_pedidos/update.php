//update.php serve para atualizar as informações de um item dentro de um pedido. Por exemplo, se o cliente alterar a quantidade de um item ou substituir um item por outro.

<?php

include '../db.php';

$id = isset($_POST['id']) ? $_POST['id'] : '';
$pedido_id = isset($_POST['pedido_id']) ? $_POST['pedido_id'] : '';
$produto_id = isset($_POST['produto_id']) ? $_POST['produto_id'] : '';
$quantidade = isset($_POST['quantidade']) ? $_POST['quantidade'] : '';
$preco = isset($_POST['preco']) ? $_POST['preco'] : '';

$sql = "UPDATE itens_pedidos SET pedido_id = '$pedido_id', produto_id = '$produto_id', quantidade = '$quantidade', preco = '$preco' WHERE id = '$id'";

if ($conn -> query($sql) === TRUE){
	echo "Item do pedido atualizado com sucesso!";
}else{
	echo "Erro!" . $sql . "<br>" . $conn -> error;
}

$conn -> close();

?>