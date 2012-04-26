<html>
<h1>Editar cliente</h1>
<form action='views/vehiculos/edit_st.php' method=POST>
	<table>
		<tr>
			<td>Placa:</td>
			<td><input type=text name=placa id=placa /></td>
			<td><input type=submit value=buscar /></td>
		</tr>
	</table>
</form>
<?
include "../../model/db.inc.php";
$placa = $_POST['placa'];
$clase = 'Vehiculos';
$clase::search_st($placa);
?>
<form action='/controller/vehiculos/edit_st.php' method=POST>
<input type=hidden name=placa id=placa value="<? echo $placa; ?>">
	<table>
		<tr>
			<td>ID Módulo: </td>
			<td><input type=text name=idmodulo id=idmodulo /></td>
		</tr>
		<tr>
			<td>Número GSM: </td>
			<td><input type=text name=gsm id=gsm /></td>
		</tr>
		<tr>
			<td>Versión módulo:</td>
			<td><input type=text name=version id=version /></td>
		</tr>
		<tr>
			<td>Firmware: </td>
			<td><input type=text name=firmware id=firmware /></td>
		</tr>
		<tr>
			<td><input type=submit name=cargar id=cargar /></td>
		</tr>
	</table>	
</form>
</html>
