<?php
include "conectar.php";

$resultado = mysql_query("Select distinct usuario from receitas where tipo=1");
$data = array('cols'=>array(
	array('id'=>'Receitas' ,'label'=>'Receitas','type'=>'string'),
	array('id'=>'Numero de receitas' ,'label'=>'Número de receitas','type'=>'number'),
	array('id'=>'Numero de despesas' ,'label'=>'Número de despesas','type'=>'number')
	),
	'rows'=>array()
);
while ($row = mysql_fetch_array($resultado)) {
	$result2 = mysql_query('Select count(receitas.id),usuarios.nome from receitas, usuarios where usuario = '.$row['usuario'].' and usuarios.id = '.$row['usuario'].'');

	$row2 = mysql_fetch_array($result2);
	$data['rows'][]=array('c'=>array(
			array('v'=>$row2['nome']), array('v'=> $row2['count(receitas.id)']), array('v'=> '0')
			));
}

#header('Content-Type: application/json; charset=UTF-8');
echo json_encode($data);
?>