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
			<td><input type=radio name=activo id=activo value='TRUE' />Sí</td>
			<td><input type=radio name=activo id=activo value='FALSE' />No</td>
		</tr>
		<tr>
			<td>Flag</td>
			<td><select id=flag_id name=flag_id>
			<?
			include '../../model/db.inc.php';
			$clase = 'Flags';
			$query = $clase::select();
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
