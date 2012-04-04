<?
require '../../model/db.inc.php';
function add() {
	$cliente_id = $_POST['cliente_id'];
	$placa = $_POST['placa'];
	$modelo = $_POST['modelo'];
	$marca = $_POST['marca'];
	$color = $_POST['color'];
	$idmodulo = $_POST['idmodulo'];
	$version = $_POST['version'];
	$purchase_year = $_POST['purchase_year'];
	$gsm = $_POST['gsm'];
	$firmware = $_POST['firmware'];
	$clase = 'Vehiculos';
	$clase::add($cliente_id, $placa, $modelo, $marca, $color, $idmodulo, $version, $gsm, $firmware, $purchase_year);
	}
return add();
	?>
