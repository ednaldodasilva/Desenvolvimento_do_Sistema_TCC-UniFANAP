//read.php serve para lê e exibir as informações das comandas cadastradas.

<?php

include '../db.php';

$sql = "SELECT * FROM comandas";
$result = $conn -> query($sql);

if ($result -> num_rows > 0){
	while ($row = $result -> fetch_assoc()) {
		// code...
		echo "ID: " . $row["id"] . " - Número de comanda: " . $row["numero_comanda"] . " - Data e hora: " . $row[data_hora] . " - Status: " . $row[status] . " - Valor total: " . $row["valor_total"] . "<br>";
	}
}else{
	echo "Nenhuma comanda encontrada!";
}

$conn -> close();

?>