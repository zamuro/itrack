<?
require '../../model/db.inc.php';
	$placa = $_POST['placa'];
	$idmodulo = $_POST['idmodulo'];
	$gsm = $_POST['gsm'];
	$firmware = $_POST['firmware'];
	$version = $_POST['version'];
	$clase = 'Vehiculos';
	$clase::edit_st($placa, $idmodulo, $gsm, $firmware, $version);
header ('location: ../../');
	?>


