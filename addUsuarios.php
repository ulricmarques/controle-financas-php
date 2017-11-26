<?php
include "conectar.php";

$login = $_POST["login"];
$senha = $_POST['senha'];
$nome = $_POST['nome'];
$sexo = $_POST['sexo'];
$identidade = $_POST['identidade'];
$cpf = $_POST['cpf'];
$nascimento = $_POST['nascimento'];
$estadocivil = $_POST['estadocivil'];
$funcaoempresa = $_POST['funcaoempresa'];
$email = $_POST['email'];
$telefone = $_POST['fone'];
$perfil = $_POST['perfil'];
$cadusuario = $_POST['cadusuario'];
$cadhora = $_POST['cadhora'];

$comandoSQL = "INSERT INTO usuarios (login, senha, nome, sexo, identidade, cpf, nascimento, estado_civil, funcao_empresa, email, telefone, perfil, cad_usuario, cad_datahora)
VALUES ('$login', '$senha', '$nome', '$sexo', '$identidade', '$cpf', '$nascimento', '$estadocivil', '$funcaoempresa', '$email', '$telefone', '$perfil', '$cadusuario', '$cadhora')";		
$resultado = mysql_query($comandoSQL) or die(mysql_error());
mysql_close($con);









?>
<html>
<head>
<title> Cadastro de Usuário </title>
<meta charset="utf-8">
<link rel="stylesheet" href="styles.css">
</head>
<body>
<center>
<img src ="coins.jpg" width="30%" height ="30%"/ >	
<form>
<tr>
<td width="250px">Usuário cadastrado com sucesso. </td><br>
</tr>
<tr>
<input type="button" value="Voltar" name="voltar" onclick="javascript:history.back()">
</td>
</tr>
</center>
</form>
</body>
</html>