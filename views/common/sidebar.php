<h2>Menú</h2>
<?
$usuario = $_SESSION['usuario'];
require_once "lib/check.php";
$clase = 'Check';
$clase::flag($usuario);
?>
<table>
	<tr>
		<td><a href="views/vehiculos/search_cirif.php" class=class>Buscar por CI/RIF</a></td>
	</tr>
	<tr>
		<td><a href="views/vehiculos/search_placa.php" class=class>Buscar por placa</a></td>
	</tr>
</table>
