//create.php serve para adiconar um item a uma comanda.

<?php

//Incluindo o banco de dados no script.

include '../db.php';

//Inserindo e capturando dados via POST.

$comanda_id = isset($_POST['comanda_id']) ? $_POST['comanda_id'] : '';
$produto_id = isset($_POST['produto_id']) ? $_POST['produto_id'] : '';
$quantidade = isset($_POST['quantidade']) ? $_POST['quantidade'] : '';
$valor_unitario = isset($_POST['valor_unitario']) ? $_POST['valor_unitario'] : '';

//Verificando se todos os dados foram preenchidos.

if (!empty($comanda_id) && !empty($produto_id) && !empty($quantidade) && !empty($valor_unitario)){

	$sql = "INSERT INTO itens_comandas (comanda_id, produto_id, quantidade, valor_unitario) VALUES ('$comanda_id', '$produto_id', '$quantidade', '$valor_unitario')";

	if($conn -> query($sql) === TRUE){
		echo "item adicionado com sucesso!";
	}else{
		echo "Erro!" . $sql . "<br>" . $conn -> error;
	}
}else{
	echo "Erro! Todos os itens devem ser preenchidos obrigatoriamente!";
}

$conn -> close();

?>