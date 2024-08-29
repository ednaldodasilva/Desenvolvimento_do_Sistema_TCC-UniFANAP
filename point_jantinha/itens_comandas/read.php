//read.php serve para exibir os itens incluídos em uma comanda específica.

<?php

include '../db.php';

$sql = "SELECT * FROM itens_comandas";
$result = $conn -> query($sql);

if ($result -> num_rows > 0){
	while ($row = $result -> fetch_assoc()){
		echo "ID" . $row["id"] . " - Comanda ID: " . "$row[comanda_id]" . " - Produto ID: " . $row[produto_id] . " - Quantidade: " . $row["quantidade"] . " - Valor unitário: " . $row["valor_unitario"] . "<br>";
	}
}else{
	echo "Nenhum item da comanda encontrado!";
}

$conn -> close();

?>