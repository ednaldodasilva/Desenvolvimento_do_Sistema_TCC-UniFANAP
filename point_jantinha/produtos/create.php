/*create.php

	Esse script é responsável por adicionar novos produtos ao banco de dados.

*/

<?php

include '../db.php'; //Incluindo o banco de dados no script para manipular e pegar dados SQL. O nome do nosso arquivo dentro do projeto é "db.php".

//Verificando se os campos foram enviados corretamente, via POST! O operador ternário ? : é usado para definir o valor das variáveis. Se o dado estiver presente, ele será atribuído; se não, a variável recebe um valor vazio ('').

$nome = isset($_POST['nome']) ? $_POST['nome'] : '';
$descricao = isset($_POST['descricao']) ? $_POST['descricao'] : '';
$preco = isset($_POST['preco']) ? $_POST['preco'] : '';
$quantidade_estoque = isset($_POST['quantidade_estoque']) ? $_POST['quantidade_estoque'] : '';

// Verificando se todos os campos obrigatórios foi preenchido.
if(!empty($nome) && !empty($preco) && !empty($quantidade_estoque)){

//	
	$sql = "INSERT INTO produtos (nome, descricao, preco, quantidade_estoque) VALUES ('$nome', '$descricao', '$preco', '$quantidade_estoque')";

	if($conn -> query($sql) === TRUE){
	echo "Novo produto adcionado com sucesso!";
	}else{
	echo "Erro: " . $sql . "<br>" . $conn-> error;
	}
}else{
	echo "Erro! Você deve preencher todos os campos obrigatório!";
}

$conn -> close();

?>