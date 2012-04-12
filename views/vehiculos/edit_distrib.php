<html>
<h1>Editar cliente</h1>
<form action='views/vehiculos/edit_distrib.php' method=POST>
	<table>
		<tr>
			<td>Placa:</td>
			<td><input type=text name=placa id=placa /></td>
			<td><input type=submit value=buscar /></td>
		</tr>
	</table>
</form>
<?
require_once "../../model/db.inc.php";
$placa = $_POST['placa'];
$clase = 'Vehiculos';
$clase::search_placa($placa);
?>
<form action='../../controller/vehiculos/edit.php' method=POST>
<input type=hidden name=placa id=placa value="<? echo $placa; ?>">
	<table>
		<tr>
			<td>CI/RIF del Cliente: </td>
			<td><input type=text name=cliente_id id=cliente_id /></td>
		</tr>
		<tr>
			<td>Placa: </td>
			<td>Campo índice. No puede ser reemplazado.</td>
		</tr>
		<tr>
			<td>Marca:</td>
			<td><input type=text name=marca id=marca /></td>
		</tr>
		<tr>
			<td>Modelo: </td>
			<td><input type=text name=modelo id=modelo /></td>
		</tr>
		<tr>
			<td>Color: </td>
			<td><input type=text name=color id=color /></td>
		</tr>
		<tr>
			<td>Año: </td>
			<td><input type=text name=purchase_year id=purchase_year /></td>
			
		</tr>
		<tr>
			<td>ID Módulo: </td>
			<td><input type=text name=idmodulo id=idmodulo /></td>
			
		</tr>
		<tr>
			<td><input type=submit name=cargar id=cargar /></td>
		</tr>
	</table>	
</form>
</html>
