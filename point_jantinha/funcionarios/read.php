//read.php lê e exibe os dados dos funcionários cadastrados.

<?php

include '../db.php';

$sql = "SELECT * FROM funcionarios";
$result = $conn -> query($sql);

if ($result -> num_rows > 0){
	while ($row = $result -> fetch_assoc()) {
		// code...
		echo "ID: " . $row["id"] . " - Nome: " . $row["nome"] . " - Cargo: " . $row["cargo"] . " - Salário: " . $row["salario"] . " - Data de contratação: " . $row["data_contratacao"] . " - Registro de ponto: " . $row["registro_ponto"] . "<br>";
	}
}else{
	echo "Nenhum funcionário encontrado!";
}

$conn -> close();

?>