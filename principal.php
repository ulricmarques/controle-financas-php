<?php
	include "valida_sessao.php";
	include "conectar.php";
	$nome_usuario = $_SESSION["nome_usuario"];
	$perfil_usuario = $_SESSION["perfil_usuario"];
	$resultado = mysql_query("SELECT * FROM usuarios WHERE login='".$nome_usuario."'");
	$sexo = mysql_result($resultado ,0,"sexo");
	$nome = mysql_result($resultado ,0,"nome");
	mysql_close($con);

	switch ($sexo) {
		case 1:
			$saud = "Olá, Sra. " . $nome;
			break;
		case 2:
			$saud = "Olá, Sr. " . $nome;
			break;
	}
	switch ($perfil_usuario) {
		case 1:
			$perfil = "Padrão";
			break;
		case 2:
			$perfil = "Administrador";
			break;
	}
?>
<html>
	<head>
		<title >Controle de Finanças</title >
		<meta charset="UTF-8">
		<link rel="stylesheet" href="styles.css">
	</head>
	<body>
		<form method="POST" action="login.php">
			<center >
				<img src="coins.jpg" width="15%"/ >
				<h1>Sistema de Controle de Finanças Empresariais </h1>
				<hr width="700px" /><br />
				<?php echo $saud . " " . "[Perfil: ".$perfil."]";?> <a href="logout.php">Sair </a>
				<hr width="700px" / >
				<p>Favor, escolha a opção desejada: </p>
				<b>Incluir: </b> <br />
				<a href="receitas_despesas.php?t=1">Receitas </a> <br />
				<a href="receitas_despesas.php?t=2">Despesas </a> <br /> <br />
				<b>Visualizar: </b> <br />
				Saldos Mensais: <a href="saldosMensaisPlan.php">[Planilha]</a>
								<a href="chart.php"> [Gráfico]</a>

				<br />
				<b>Excluir: </b> <br />
				<a href="excluirReceitasDespesas.php">Receitas e Despesas</a> <br /> <br />
				<?php
				if ($perfil_usuario==2){ ?>
					<b>Administração: </b> <br />
					<a href="cadastro.html">Adicionar usuário </a> <br />
					<a href="delUsuarios.php">Excluir usuários</a> <br /> <br />
				<?php } ?>
			</center >
		</form>
	</body>
</html>