<?
require "../../model/db.inc.php";
function search_cirif() {
	$usuario_id = $_SESSION['usuario'];
$ci_rif = $_POST['ci_rif'];
$clase = 'Vehiculos';
$clase::search_cirif($ci_rif, $usuario_id);
}
return search_cirif();
?>
