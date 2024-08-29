<?php

$servername = "localhost";//Servidor local.
$username = "root";      //O usuario padrão do MySQL em ambientes locais.
$password = "";          //A senha geralmente é vazia.
$dbname = "jantinha_db"; //O nome do banco de dados criado.

$conn = new mysqli($servername, $username, $password, $dbname); #Banco de conexão

if ($conn ->connect_error){ //Se a conexão de errado.
	die("Connection failed: " . $conn->connect_error); //Então exibirá a a mensagem de que canexão falhou.
}

//Aqui irá buscar os funcionários.

function getFuncionarios($conn){
	$sql = "SELECT * FROM funcionarios";
	$result = $conn -> query($sql);
	return $result -> oci_fetch_all(MYSQLI_ASSOC);
}

//Aqui irá buscar as comandas.

function getComandas($conn){
	$sql = "SELECT * FROM comandas";
	$result = $conn -> query($sql);
	return $result -> fecth_all(MYSQLI_ASSOC);
}

//Aqui irá buscar itens das comandas.

function getItensComandas($conn){
	$sql = "SELECT * FROM itens_comandas";
	$result = $conn -> query($sql);
	return $result -> fecth_all(MYSQLI_ASSOC);
}

?>