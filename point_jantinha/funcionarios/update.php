//update.php serve para atualizar as informações de um funcionário específico.

<?php

include '../db.php';

$id = isset($_POST['id']) ? $_POST['id'] : '';
$nome = isset($_POST['nome']) ? $_POST['nome'] : '';
$cargo = isset($_POST['cargo']) ? $_POST['cargo'] : '';
$salario = isset($_POST['salario']) ? $_POST['salario'] : '';
$data_contratacao = isset ($_POST['data_contratacao']) ? $_POST['data_contratacao'] : '';
$registro_ponto = isset($_POST['registro_ponto']) ? $_POST['registro_ponto'] : '';

if (!empty($id) && !empty($nome) && !empty($cargo) && !empty($salario) && !empty($data_contratacao) && !empty($registro_ponto)){
	
	$sql = "UPDATE funcinarios SET nome = '$nome', cargo = '$cargo', salario = '$salario', data_contratacao = '$data_contratacao', registro_ponto = '$registro_ponto' WHERE id = '$id'";

	if ($conn -> query($sql) === TRUE){
		echo "Cliente atualizado com sucesso!";
	}else{
		echo "Erro!" . $sql . "<br>" . $conn -> error;
	}

} else{
	echo "Erro! Você deve preencher todos os campos obrigatoriamente!";
} 

$conn -> close();

?>