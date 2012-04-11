<?
require '../../model/db.inc.php';
function edit($cliente_id, $placa_nueva, $modelo, $marca, $color, $purchase_year, $idmodulo, $placa) {
	$placa = $_POST['placa'];
	$cliente_id = $_POST['cliente_id'];
	$placa_nueva = $_POST['placa_nueva'];
	$marca = $_POST['marca'];
	$modelo = $_POST['modelo'];
	$color = $_POST['color'];
	$purchase_year = $_POST['purchase_year'];
	$idmodulo = $_POST['idmodulo'];
	$clase = 'Vehiculos';
	$clase::edit($cliente_id, $placa_nueva, $modelo, $marca, $color, $purchase_year, $idmodulo, $placa);
	}

header ('location: ../../index.php');
	?>


