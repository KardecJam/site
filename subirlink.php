<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Base de Erros Conhecidos</title>
<style type="text/css">

</style>
</head>

<body>

</br></br></br></br></br></br></br>
<h3 align="center"><a name="cadastro">Incluir Solução na Base de Dados</a></h3>

<form action="uploadlink.php" method="POST" enctype="multipart/form-data">
<center>
  <table width="243" class="h1" > 
  <tr>
    <td width="219"><div align="right">NOME:</div></td>
    <td width="347"><input type="text" name="name" id="textfield" size="54" style="color:#0000cc"/></td>
  </tr>
  <tr>
    <td><div align="right">ERROR </div></td>
    <td><input type="text" name="title" id="textfield2" size="54" style="color:#0000cc" /></td>
  </tr>
  <tr>
    <td><div align="right">Solução:</div></td>
    <td><textarea name="text" id="textarea" cols="56" rows="15" style="color:#0000cc"></textarea></td>
  </tr>
  <tr>
   <td><div align="right">Procedimento</div></td>
    <td>Arquivo PDF:<br>
           <input type="file" name="file"></td> 
  </tr>
  <tr>
    <td></td>
    <td><input type="submit" name="button" id="button" value="Enviar" />
      <input type="reset" name="button2" id="button2" value="Apagar" /></td>
  </tr></form>

</table>
</center>




</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
<p align="center">BDEC - Banco de Dados de Erros Conhecidos</p>

</form>
</body>
</html>