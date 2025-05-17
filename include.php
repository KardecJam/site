<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Status do Envio.</title>
<style type="text/css">
<!--
.h2 {	border-style:dotted;
	color:#CCC;
	position:absolute;
	top:250px;
	left:287px;
	width: 225px;
	height: 54px;
}
-->
</style>
</head>

<body>
<p align="center"><img src="images/banner21.jpg" width="1200" height="160" alt="cervello" /></p>
<p align=><a href="bdec.php"><img src="images/voltarr.png" width="119" height="48"/></a></p><br>
<table width="780" class="h2">
  <tr>
    <td align="right"><b>Status:</b></td>
    <td>
	<?php
session_start();
$name = $_POST['name'];
$title = $_POST['title'];
$message = $_POST['message'];
$link = $_POST['link'];
// Uma condição que não deixará que o pessoal envie recados em branco.
if ($name&&$title&&$message){
	// Faz a conexão com o MySQL.
	$con = mysql_connect("localhost","root","");
	// Seleciona o banco de dados a ser usado.
	$db = mysql_select_db("bdec",$con);
	// Declaração SQL que insere na tabela os dados Nome, Título e Mensagem
	$sql = "INSERT INTO tb_bdec(nome,titulo,mensagem,link) VALUES('$name','$title','$message','$link')";
	// Executa a declaração SQL
	$query = mysql_query($sql);
	
		// Verifica se a declaração SQL foi executada corretamente.				
		if($query){
		
			echo "Enviado com sucesso.";
		} else {echo "Falha no envio.";}
	
	} else {echo "Campo vazio, preencha-o.";}

?>
</td>
  </tr>
</table>
</body>
</html>