<?
require '../../model/db.inc.php';
	$nombre = $_POST['nombre'];
	$ci_rif = $_POST['ci_rif'];
	$tlf1 = $_POST['tlf1'];
	$tlf2 = $_POST['tlf2'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$usuario_id = $_POST['usuario_id'];
	$clase = 'Clientes';
	$clase::add($nombre, $ci_rif, $tlf1, $tlf2, $email, $password, $usuario_id);
header ('location: ../../');
	?>
