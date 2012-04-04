<html>
<h1>Asignar Vehículos</h1>
<form action='http://localhost/itrack/controller/vehiculos/add.php' method=POST >
	<table>
		<tr>
			<td>CI/RIF del Cliente</td>
			<td><input type=text name=cliente_id id=cliente_id /></td>
		</tr>
		<tr>
			<td>Placa</td>
			<td><input type=text name=placa id=placa /></td>
		</tr>
		<tr>
			<td>Marca</td>
			<td><input type=text name=marca id=marca /></td>
		</tr>
		<tr>
			<td>Modelo</td>
			<td><input type=text name=modelo id=modelo /></td>
		</tr>
		<tr>
			<td>Color</td>
			<td><input type=text name=color id=color /></td>
		</tr>
		<tr>
			<td>Año</td>
			<td><input type=text name=purchase_year id=purchase_year /></td>
		</tr>
		<tr>
			<td>ID del módulo</td>
			<td><input type=text name=idmodulo id=idmodulo /></td>
		</tr>
		<tr>
			<td>Versión</td>
			<td><input type=text name=version id=version /></td>
		</tr>
		<tr>
			<td>Número GSM</td>
			<td><input type=text name=gsm id=gsm /></td>
		</tr>
		<tr>
			<td>Versión del Firmware</td>
			<td><input type=text name=firmware id=firmware /></td>
		</tr>

		<tr>
			<td><input type=submit value=Generar /></td>
		</tr>
	</table>	
</form>
</html>
