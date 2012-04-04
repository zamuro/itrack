<?
require "../../model/db.inc.php";
$placa = $_POST['placa'];
$clase = 'Vehiculos';
$clase::search_placa($placa);

?>
