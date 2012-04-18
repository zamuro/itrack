<?
require '../../model/db.inc.php';
function add() {
	$usuario = $_POST['usuario'];
	$flag = $_POST['flag_id'];
	$activo = $_POST['activo'];
	$password = $_POST['password'];
	$encrypted_password = md5($password);
	$clase = 'Usuarios';
	$clase::add($usuario, $flag, $activo, $encrypted_password);
	header ('location: ../../');
	}
return add();
	?>
<A href=../../index.php>Regresa al inicio</a>
