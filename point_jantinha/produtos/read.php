//read.php serve para ler e exibir os dados dos produtos cadastrados.

<?php

include '../db.php';

$sql = "SELECT * FROM produtos";
$result = $conn -> query($sql);

if ($result -> num_rows > 0){
	$produtos = array();
	while($row = $result -> fetch_assoc()){
		$produtos[] = $row;
	}
	echo json_encode($produtos);
}else{
	echo "0 resultados";
}

$conn -> close();
?>