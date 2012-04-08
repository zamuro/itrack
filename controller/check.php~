<?
require_once "../model/db.inc.php";
$usuario = $_POST['usuario'];
$password = $_POST['password'];
$clase='General';
$clase::connect();
$password = md5($password);
$string = "select * from usuarios where usuario='$usuario' and password='$password'";
$query = pg_query($string);
$count=pg_num_rows($query);
if($count==1){
while ($row = pg_fetch_array($query)) {
$usid = $row['usuario'];
session_start();
$_SESSION['usuario']= $usid;
header ('location: ../index.php');
}
}
else {
echo "No existe usuario con ese id";
}
#$clase = 'Check';
#$clase::login($usuario, $password);
?>
