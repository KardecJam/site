<?php
	include "conexao.php";
?>
<html lang="pt-br">

<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="style\layoutdefault.css" />
	<title>Procedimentos</title>
</head>

<body>
<div class="ciodropbase">
<img src="imagens\headerproc.jpg" alt="Imagem de página não encontrada" width="1000	" height="202" />
<a href="bdec.php">HOME</a></p><br>

</div>


<p><h2>Procedimentos Conhecidos </h2></p><br>

<?php
	ini_set('default_charset','UTF-8');
	$buscar=$_POST['buscar'];
	$sql = mysql_query ("SELECT * FROM tb_bdec WHERE titulo LIKE '".$buscar."'");
	$row = mysql_num_rows ($sql);
	if ($row > 0) {
	while($linha = mysql_fetch_array($sql)) {
		$titulo = $linha['titulo'];
		$nome = $linha['nome'];
		$mensagem = $linha['mensagem'];
		$link = $linha['link'];
		echo "<strong>Resultado da Pesquisa</strong>";
		echo "<table border='1' cellspacing='3' cellpadding='3'>";
		echo "<tr>";
		echo "<td style='width:200px;'><strong>Data: </strong></td>";
		echo "<td style='width:500px;'>".@$titulo;	
		echo "</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td style='width:200px;'><strong>Aplicação/Erro: </strong></td>";
		echo "<td style='width:500px;'>".@$nome;
		echo "</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td style='width:200px;'><strong>Solução: </strong></td>";
		echo "<td style='width:500px;'>".@$mensagem;
		echo "</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td style='width:200px;'><strong>Link: </strong></td>";
		echo "<td style='width:500px;'><a href='".@$link."' target='_blank'><img src='images/acessar.png' width='100' height='22'></a>";
		echo "</td>";
		echo "</tr>";
		echo "</table>";
		echo "<br />";
	}
} else {
	echo "<strong>Nenhum erro conhecido encontrado.</strong>";
}

?>

</body>
</html>