<html>
<h1>Agregar usuarios</h1>
<form action='controller/usuarios/add.php' method=POST >
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
			<td><select id=flag name=flag>
			<?
			include "model/db.inc.php";
			$clase = new Flags();
			$select = "select";
			$clase->$select();
			while ($row = pg_fetch_array($query)) {
				?><option value="<? echo $row['id']; ?>"><? echo $row['flag']; 
				} ?></option>
			</select>
			</td>
		</tr>
		<tr>
			<td><input type=submit name=cargar id=cargar /></td>
		</tr>
	</table>	
</form>
</html>
