<?
require '../../model/db.inc.php';
function edit() {
	$placa = $_POST['placa'];
	$idmodulo = $_POST['idmodulo'];
	$gsm = $_POST['gsm'];
	$firmware = $_POST['firmware'];
	$version = $_POST['version'];
	$clase = 'Vehiculos';
	$clase::edit_st($placa, $cliente_id, $placa, $modelo, $marca, $color, $purchase_year, $idmodulo);
	}
return edit();
include "../../index.php";
	?>


