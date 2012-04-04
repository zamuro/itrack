<html>
<h1>Agregar usuarios</h1>
<form action='http://localhost/itrack/controller/usuarios/add.php' method=POST >
	<table>
		<tr>
			<td>Nombre de usuario</td>
			<td><input type=text name=usuario id=usuario /></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type=text name=password id=password /></td>
		</tr>
		<tr>
			<td>Activo</td>
			<td><input type=text name=activo id=activo /></td>
		</tr>
		<tr>
			<td>Flag</td>
			<td><input type=text name=flag_id id=flag_id /></td>
		</tr>
		<tr>
			<td><input type=submit name=cargar id=cargar /></td>
		</tr>
	</table>	
</form>
</html>
