//create.php serve para inserir um novo funcionário no banco de dados.

<?php

//Incluindo o banco de dados no script.

include '../db.php';

//Envio de dados via POST.

$nome = isset($_POST['nome']) ? $_POST['nome'] : '';
$cargo = isset($_POST['cargo']) ? $_POST['cargo'] : '';
$salario = isset($_POST['salario']) ? $_POST['salario'] : '';
$data_contratacao = isset($_POST['data_contratacao']) ? $_POST['data_contratacao'] : '';
$registro_ponto = isset($_POST['registro_ponto']) ? $_POST['registro_ponto'] : '';

//Com o método !empty, ele irá verificar se todos os campos foram preenchidos.

if (!empty($nome) && !empty($cargo) && !empty($salario) && !empty($data_contratacao) && !empty($registro_ponto)){

	$sql = "INSERT INTO funcionarios (nome, cargo, salario, data_contratacao, registro_ponto) VALUES ('$nome', '$cargo', '$salario', '$data_contratacao', '$registro_ponto')";

	if ($conn -> query($sql) === TRUE) {
		// code...
		echo "Um novo funcionário foi adicionado com sucesso!";
	}else{
		echo "Erro: " . $sql . "<br>" . $conn -> error;
	}

}else{
	echo "Erro! Todos os campos devem ser preenchidos obrigatoriamente!";
}

$conn -> close();

?>