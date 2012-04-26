<h2>Menú</h2>
<?
$usuario = $_SESSION['usuario'];
require_once "lib/check.php";
$clase = 'Check';
$clase::flag($usuario);
?>

