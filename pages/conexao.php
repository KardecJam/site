<?php

	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "bdec";
	
	//Criar a conexao
	$conn = mysqli_connect ($servidor, $usuario, $senha, $dbname);

	if (!$conn){
		die("falha na conexao: " . mysqli_connect_erro());
	}else{
		echo "Conexao realizada com sucesso";
	}
?>