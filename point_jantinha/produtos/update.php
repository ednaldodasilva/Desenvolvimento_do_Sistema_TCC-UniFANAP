//update.php serve para atualizar as informções de um produto específico.

<?php 

include '../db.php';

$id = isset($_POST['id']) ? $_POST['id'] : '';
$nome = isset($_POST['nome']) ? $_POST['nome'] : '';
$descricao = isset($_POST['descricao']) ? $_POST['descricao'] : '';
$preco = isset($_POST['preco']) ? $_POST['preco'] : '';
$quantidade_estoque = isset($_POST['quantidade_estoque']) ? $_POST['quantidade_estoque'] : '';

if (!empty($id) && !empty($nome) && !empty($preco) && !empty($quantidade_estoque)){
$sql = "UPDATE produtos SET nome = '$nome', descricao = '$descricao', preco = '$preco', quantidade_estoque = '$quantidade_estoque' WHERE id = '$id'";

if ($conn -> query($sql) === TRUE) {
	echo "Produto atualizado com sucesso!";
}else{
	echo "Eroo: " . sql . "<br>" . $conn ->error;
}
}else{
	echo "Erro! Você deve preencher todos os campos obrigatório!";
}

$conn -> close();

?>