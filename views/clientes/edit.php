<html>
<h1>Editar cliente</h1>
<form action='edit.php' method=POST>
	<table>
		<tr>
			<td>Cédula o RIF:</td>
			<td><input type=text name=cirif id=cirif /></td>
			<td><input type=submit value=buscar /></td>
		</tr>
	</table>	
</form>
<?
include "../../model/db.inc.php";
$cirif = $_POST['cirif'];
$clase = new Clientes();
$variable = "search_cirif";
$clase->$variable;
while ($row = pg_fetch_array($query)) {
?>
<form action='/itrack/controller/clientes/edit.php' method=POST>
	<table>
		<tr>
			<td>Nombre</td>
			<td><input type=text name=nombre id=nombre value="<? echo $row['nombre']; ?>"/></td>
		</tr>
		<tr>
			<td>CI o RIF</td>
			<td><input type=text name=ci_rif id=ci_rif value="<? echo $row['nombre']; ?>"/></td>
		</tr>
		<tr>
			<td>Tlf 1</td>
			<td><input type=text name=tlf1 id=tlf1 value="<? echo $row['nombre']; ?>"/></td>
		</tr>
		<tr>
			<td>Tlf 2</td>
			<td><input type=text name=tlf2 id=tlf2 value="<? echo $row['nombre']; ?>"/></td>
		</tr>
		<tr>
			<td>Correo Electrónico</td>
			<td><input type=text name=email id=email value="<? echo $row['nombre']; ?>"/></td>
		</tr>
		<tr>
			<td>Palabra Clave</td>
			<td><input type=text name=password id=password value="<? echo $row['nombre']; ?>"/></td>
<?
}
?>
			
		</tr>
		<tr>
			<td><input type=submit name=cargar id=cargar /></td>
		</tr>
	</table>	
</form>
</html>
