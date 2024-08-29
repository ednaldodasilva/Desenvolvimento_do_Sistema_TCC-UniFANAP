//create.php serve apra adicionar um novo item a um pedido específico. Por exemplo, se um cliente pedir uma bebida e um prato, cada um desses será um item associado ao pedido.

<?php

include '../db.php';

$pedido_id = isset($_POST['pedido_id']) ? $_POST['pedido_id'] : '';
$produto_id = isset($_POST['produto_id']) ? $_POST['produto_id'] : '';
$quantidade = isset($_POST['quantidade']) ? $_POST['quantidade'] : '';
$preco = isset($_POST['preco']) ? $_POST['preco'] : '';

if(!empty($pedido_id) && !empty($produto_id) && !empty($quantidade) && !empty($preco)){
	$sql = "INSERT INTO itens_pedidos (pedido_id, produto_id, quantidade, preco) VALUES ('$pedido_id', '$produto_id', '$quantidade', '$preco')";

	if ($conn -> query($sql) === TRUE){
		echo "Novo item adicionado com sucesso!";
}else{
	echo "Erro: " . $sql . "<br>" . $conn -> error;
}	
}else{
	echo "Erro!Você deve preencher todos os campos obrigatórios!";
}

$conn -> close();

?>