<?
require '../../model/db.inc.php';
	$placa = $_POST['placa'];
	$cliente_id = $_POST['cliente_id'];
	$marca = $_POST['marca'];
	$modelo = $_POST['modelo'];
	$color = $_POST['color'];
	$purchase_year = $_POST['purchase_year'];
	$idmodulo = $_POST['idmodulo'];
	$clase = 'Vehiculos';
	$clase::edit($cliente_id, $modelo, $marca, $color, $purchase_year, $idmodulo, $placa);
header ('location: ../../index.php');
	?>


