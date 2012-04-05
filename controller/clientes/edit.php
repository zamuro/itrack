<?
require '../../model/db.inc.php';
function edit() {
	$nombre = $_POST['nombre'];
	$ci_rif = $_POST['ci_rif'];
	$tlf1 = $_POST['tlf1'];
	$tlf2 = $_POST['tlf2'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$encrypted_password = md5($password);
	$clase = 'Clientes';
	$clase::edit($nombre, $ci_rif, $tlf1, $tlf2, $email, $encrypted_password);
	}
return edit();
include "../../index.php";
	?>
