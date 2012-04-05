<html>
<h1>Editar cliente</h1>
<form action='/itrack/controller/clientes/edit.php' method=POST>
	<table>
		<tr>
			<td>Nombre</td>
			<td><input type=text name=nombre id=nombre /></td>
		</tr>
		<tr>
			<td>CI o RIF</td>
			<td><input type=text name=ci_rif id=ci_rif /></td>
		</tr>
		<tr>
			<td>Tlf 1</td>
			<td><input type=text name=tlf1 id=tlf1 /></td>
		</tr>
		<tr>
			<td>Tlf 2</td>
			<td><input type=text name=tlf2 id=tlf2 /></td>
		</tr>
		<tr>
			<td>Correo Electrónico</td>
			<td><input type=text name=email id=email /></td>
		</tr>
		<tr>
			<td>Palabra Clave</td>
			<td><input type=text name=password id=password /></td>
		</tr>
		<tr>
			<td><input type=submit name=cargar id=cargar /></td>
		</tr>
	</table>	
</form>
</html>