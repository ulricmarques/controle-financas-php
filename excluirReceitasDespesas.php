<?php
	include "valida_sessao.php";
	include "conectar.php";
	// Obtem o usuario que efetuou o login
	$nome_usuario = $_SESSION["nome_usuario"];
?>
<html>
<head>
	<title>Excluir</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<h1 align="center">Excluir</h1>
	<div align="center">
		<h5>Receitas</h5>
		<?php
			$resultado = mysql_query("SELECT * FROM receitas where tipo=1") or die(mysql_error());
			
			while($array = mysql_fetch_array($resultado)){
				$sql= "delete from receitas where nome=".$array['nome']."";
				echo $array['nome'].' - <a href="excluirReceitas.php?nome='.$array['nome'].'">Excluir</a>'.'<br>';	

			}
		?>			
		<hr>
		<h5> Despesas </h5>
		<?php
			$resultado = mysql_query("SELECT * FROM receitas where tipo=2") or die(mysql_error());
			while($array = mysql_fetch_array($resultado)){
				echo $array['nome'].' - <a href="excluirDespesas.php?nome='.$array['nome'].'">Excluir</a>'.'<br>';
			}
		?>
					
		<br><br>
		<a href="principal.php">Voltar</a>
	</div>
</body>
</html>
