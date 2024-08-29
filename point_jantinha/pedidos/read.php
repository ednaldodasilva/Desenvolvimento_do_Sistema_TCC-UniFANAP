//read.php serve para lê e exibir os detalhes de todos os pedidos cadastrados. Isso pode incluir informações como data do pedido, status (pendente, concluido, cancelado), e o total do pedido.

<?php

include '../db.php';

$sql = 'SELECT * FROM pedidos';
$result = $conn -> query($sql);

if($result -> num_rows > 0){
	$pedidos = array();
	while($row = $result -> fetch_assoc()){
		$pedidos[] = $row;
	}
	echo json_encode($pedidos);
}else{
	echo "0 Resultados";
}

$conn -> close();

?>