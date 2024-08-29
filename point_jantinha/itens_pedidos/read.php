//read.php serve para lê e exibir todos os itens associados a um pedidos específico, permitindo visualizar o que foi incluído em determinados pedido.

<?php

include '../db.php';

$sql = "SELECT * FROM itens_pedidos";
$result = $conn -> query($sql);

if ($result -> num_rows > 0){
	echo "ID" . $row["id"] . " - Pedido ID: " . $row["pedido_id"] . " - Produto ID: " . $row["produto_id"] . " - Quantidade: " . $row["quantidade"] . " - Preço: " . $row["preco"] . "<br>";
}else{
	echo "Nenhum item encontrado!";
}

$conn -> close();

?>