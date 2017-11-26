<?php
	include "valida_sessao.php";
	include "conectar.php";
	// Obtem o usuario que efetuou o login
	$nome_usuario = $_SESSION["nome_usuario"];
	$nome = $_GET['nome'];
	mysql_query("DELETE from receitas where receitas.nome='$nome'");
	header('Location: /excluirReceitasDespesas.php');
?>