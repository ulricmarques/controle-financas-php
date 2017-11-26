<?php
if(IsSet($_COOKIE["nome_usuario"]))
	$nome_usuario = $_COOKIE["nome_usuario"];
if(IsSet($_COOKIE["senha_usuario"]))
	$senha_usuario = $_COOKIE["senha_usuario"];

if(!( empty($nome_usuario) OR empty($senha_usuario ))){
	include "conecta_mysql.inc";
	$resultado = mysql_query("SELECT * FROM usuarios WHERE username=’$nome_usuario ’");
	if(mysql_num_rows($resultado )==1){
		if($senha_usuario != mysql_result($resultado ,0,"senha")){
			setcookie("nome_usuario");
			setcookie("senha_usuario");
			echo "Voce nao efetuou o LOGIN!";
			exit;
		}
	}
else{
	setcookie("nome_usuario");
	setcookie("senha_usuario");
	echo "Voce nao efetuou o LOGIN!";
	exit;
	}
}
else{
	echo "Voce nao efetuou o LOGIN!";
	exit;
}
mysql_close($con );
?>