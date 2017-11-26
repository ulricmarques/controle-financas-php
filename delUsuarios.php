<html>
 <head>
  <title>Remover usuário</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="styles.css">
 </head>
<body>
<center>
<img src ="coins.jpg" width="30%" height ="30%"/ >	
<?php
include "conectar.php";
$res = mysql_query("select * from usuarios where login<>'admin'"); 

echo "<table><tr><td>Login</td><td>Nome do Usuário</td></tr>";


while($escrever=mysql_fetch_array($res)){
echo "<tr><td>" . $escrever['login'] . "</td><td>" . $escrever['nome'] . "</td><td>" . "<a href=remover.php?login=" . $escrever['login'] . ">Remover </a>";

}

echo "</table>";
?>
<form><table><tr>
<input type="button" value="Voltar" name="voltar" onclick="javascript:history.back()">
</td>
</tr>
</table>
</center>
</form>
</body>
</html>