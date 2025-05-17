<?php 

$target = "projects/"; 
//Convertido o bdec em texto
$target = $target . "bdec".$_FILES['file']['name']; 

    $titulo = $_POST['name'];
    $nome = $_POST['title'];
    $mensagem = $_POST['text'];
    $procedimento = $_FILES['file']['name'];	

	//Incluido a conexão com banco de dados, essa conexão utiliza o mysqli
    include "conexao.php";

	//Convertido a inserção para mysqli, também inserido o nome das colunas do banco de dados que irão receber os valores
    $sql = ($connection, "INSERT INTO tb_bdec (titulo, nome, mensagem, procedimento) VALUES ('$titulo', '$nome', '$mensagem', '$procedimento')"); 
	$query = mysql_query($sql);
	//Alterado o nome da posição do array que possui o arquivo temporario, para tmp_name, caso de o var_dump conforme a linha comentada abaixo poderá observar que a posição do arquivo temporario é tmp_name
	//var_dump($_FILES['file']);
	
    if (move_uploaded_file($_FILES['file']['tmp_name'], $target)){ 
		echo "The file "."bdec". $_FILES['file']['name'] . " has been uploaded, and your information has been added to the directory";
    }else { 
		echo "Sorry, there was a problem uploading your file."; 
	} 