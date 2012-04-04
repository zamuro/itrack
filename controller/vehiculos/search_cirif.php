<?
require "../../model/db.inc.php";
$ci_rif = $_POST['ci_rif'];
$clase = 'Vehiculos';
$clase::search_cirif($ci_rif);

?>
