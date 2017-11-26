<html>
<head>
<title> Remover usuário </title>
<meta charset="utf-8">
<link rel="stylesheet" href="styles.css">
</head>
<body>
<?php
include "conectar.php";

$login = $_GET['login'];

mysql_query("DELETE FROM usuarios WHERE login='".$login."'"); 

mysql_close($con); // Fechando a conexão com o banco de dados
?>
<center>
<img src ="coins.jpg" width="30%" height ="30%"/ ><br><br>	
<form>
<tr>
<td width="250px">Usuário removido com sucesso. </td><br>
</td>
</tr>
<tr>
<input type="button" value="Voltar" name="voltar" onclick="javascript:history.back()">
</td>
</tr>
</center>
</form>
</body>
</html>