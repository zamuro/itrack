<?
require '../../model/db.inc.php';
function edit() {
	$cliente_id = $_POST['cliente_id'];
	$placa = $_POST['placa'];
	$marca = $_POST['marca'];
	$modelo = $_POST['modelo'];
	$color = $_POST['color'];
	$purchase_year = $_POST['purchase_year'];
	$idmodulo = $_POST['idmodulo'];
	$clase = 'Vehiculos';
	$clase::edit($cliente_id, $placa, $modelo, $marca, $color, $purchase_year, $idmodulo);
	}
return edit();
include "../../index.php";
	?>

