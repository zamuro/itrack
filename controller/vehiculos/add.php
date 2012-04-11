<?
require '../../model/db.inc.php';
function add() {
	$cliente_id = $_POST['cliente_id'];
	$placa = $_POST['placa'];
	$modelo = $_POST['modelo'];
	$marca = $_POST['marca'];
	$color = $_POST['color'];
	$idmodulo = $_POST['idmodulo'];
	$purchase_year = $_POST['purchase_year'];
	$clase = 'Vehiculos';
	$clase::add($cliente_id, $placa, $modelo, $marca, $color, $idmodulo, $purchase_year);
	}
return add();
echo "<a href="../../">Regresa al inicio</a>";
	?>

