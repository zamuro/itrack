<?
session_start();
require '../../model/db.inc.php';
function add() {
	$usuario_id = $_SESSION['usuario'];
	$cliente_id = $_POST['cliente_id'];
	$placa = $_POST['placa'];
	$modelo = $_POST['modelo'];
	$marca = $_POST['marca'];
	$color = $_POST['color'];
	$idmodulo = $_POST['idmodulo'];
	$purchase_year = $_POST['purchase_year'];
	$clase = 'Vehiculos';
	$clase::add($cliente_id, $placa, $modelo, $marca, $color, $idmodulo, $purchase_year, $usuario_id);
	header ('location: /');
}
return add();
	?>

