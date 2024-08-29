//read.php serve para exibir as movimentações financeiras registrada.

<?php

include '../db.php';

$sql = "SELECT * FROM movimentacoes_financeiras";
$result = $conn -> query($sql);

if ($result -> num_rows > 0){
	while ($row = $result -> fetch_assoc()) {
		echo "ID: " . $row["id"] . " - Data: " . $row["data_movimentacoes"] . " - Tipo: " . $row["tipo"] . " - Valor: " . $row["valor"] . "- Descrição: " . $row["descricao"] . "<br>";
	}
}else{
	echo "Nenhuma movimentação financeira encontrada!";
}

$conn->close();

?>