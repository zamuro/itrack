<?
class General {
	public static function connect() {
		$connect = pg_connect("host=localhost dbname=itrack user=itrack password=itrack") or die ("haha");
		return $connect; 
	}
}

class Clientes {
	public static function add($nombre, $ci_rif, $tlf1, $tlf2, $email, $password, $usuario_id) {
		$clase = 'General';
		$clase::connect();
		$string = "insert into clientes(nombre, ci_rif, tlf1, tlf2, email, password, usuario_id) values ('$nombre', '$ci_rif', '$tlf1', '$tlf2', '$email', '$password', '$usuario_id')";
		$query = pg_query($string);
		return $query;
	}
	
	public static function search_cirif($cirif, $usuario_id) {
		$clase = 'General';
		$clase::connect();
		$string = "select * from clientes where ci_rif='$cirif' and usuario_id='$usuario_id'";
		$query = pg_query($string);
		while ($row = pg_fetch_array($query)) {
?>
			<table>
				<tr>
					<td>Nombre: </td><td><? echo $row['nombre']; ?>
				</tr>
				<tr>
					<td>CI/RIF: </td><td><? echo $row['ci_rif']; ?>
				</tr>
				<tr>
					<td>TLF 1: </td><td><? echo $row['tlf1']; ?>
				</tr>
				<tr>
					<td>TLF 2: </td><td><? echo $row['tlf2']; ?>
				</tr>
				<tr>
					<td>email: </td><td><? echo $row['email']; ?>
				</tr>
				<tr>
					<td>Palabra Clave: </td><td><? echo $row['password']; ?>
				</tr>
				<tr>
			</table>
<?
		}
	}

	public static function listar() {
		$clase = 'General';
		$clase::connect(); 
		$string = "select id from clientes";
		$query = pg_query($string);
		$lista = pg_num_rows($query);
		echo $lista;
	}
	
	public static function edit($cliente, $nombre, $cirif, $tlf1, $tlf2, $email, $encrypted_password) {
		$clase = 'General';
		$clase::connect(); 
		$string = "update clientes set nombre='$nombre', tlf1='$tlf1', tlf2='$tlf2', email='$email', password='$password' where ci_rif='$cirif'";
		$query = pg_query($string);
		return $query;
	}
	
	function show() {
		$clase = 'General';
		$clase::connect();
		$id = $_GET['id'];
		$string = "select * from clientes where id='$id'";
		$query = pg_query($string);
		while ($row = pg_fetch_array($query)) {
		$nombre = $row['nombre'];  
		$ci_rif = $row['ci_rif'];  
		$tlf1 = $row['tlf1'];  
		$tlf2 = $row['tlf2'];  
		$email = $row['email'];  
		}
	}
}

class Usuarios {
	public static function add($usuario, $flag, $activo, $encrypted_password) {
		$clase = 'General';
		$clase::connect();
		$string = "insert into usuarios(usuario, flag_id, activo, password) values ('$usuario','$flag','$activo','$encrypted_password')";
		$query = pg_query($string);
		return $query;
	}
}

class Vehiculos {
	public static function add($cliente_id, $placa, $modelo, $marca, $color, $idmodulo, $purchase_year, $usuario_id ) {
		$clase = 'General';
		$clase::connect();
		$string = "insert into vehiculos(cliente_id, placa, modelo, marca, color, idmodulo, purchase_year, usuario_id) values ('$cliente_id', '$placa', '$modelo', '$marca', '$color', '$idmodulo', '$purchase_year', '$usuario_id')";
		$query = pg_query($string);
		return $query;
	}
	
	static function search_cirif($ci_rif, $usuario_id) {
		$clase = 'General';
		$clase::Connect();
		$string = "select * from vehiculos where cliente_id='$ci_rif' and usuario_id='$usuario_id'";
		$query = pg_query($string);
		while ($row = pg_fetch_array($query)) {
			?>
			<table>
				<tr>
					<td>CI/RIF: </td><td><? echo $row['cliente_id']; ?>
				</tr>
				<tr>
					<td>Placa: </td><td><? echo $row['placa']; ?>
				</tr>
				<tr>
					<td>Marca: </td><td><? echo $row['marca']; ?>
				</tr>
				<tr>
					<td>Modelo: </td><td><? echo $row['modelo']; ?>
				</tr>
				<tr>
					<td>Color: </td><td><? echo $row['color']; ?>
				</tr>
				<tr>
					<td>Año: </td><td><? echo $row['purchase_year']; ?>
				</tr>
				<tr>
			</table>
		<? }
	}
	
	static function search_placa($placa) {
		$clase = 'General';
		$clase::Connect();
		$string = "select * from vehiculos where placa='$placa'";
		$query = pg_query($string);
		while (		$row = pg_fetch_array($query)) {
			?>
			<table>
				<tr>
					<td>CI/RIF: </td><td><? echo $row['cliente_id']; ?>
				</tr>
				<tr>
					<td>Placa: </td><td><? echo $row['placa']; ?>
				</tr>
				<tr>
					<td>Marca: </td><td><? echo $row['marca']; ?>
				</tr>
				<tr>
					<td>Modelo: </td><td><? echo $row['modelo']; ?>
				</tr>
				<tr>
					<td>Color: </td><td><? echo $row['color']; ?>
				</tr>
				<tr>
					<td>Año: </td><td><? echo $row['purchase_year']; ?>
				</tr>
				<tr>
					<td>ID del módulo: </td><td><? echo $row['idmodulo']; ?>
				</tr>
				<tr>
			</table>
		<? }
	}
	
	static function search_st($placa) {
		$clase = 'General';
		$clase::Connect();
		$string = "select * from vehiculos where placa='$placa'";
		$query = pg_query($string);
		while ($row = pg_fetch_array($query)) {
			?>
			<table>
				<tr>
					<td>CI/RIF: </td><td><? echo $row['cliente_id']; ?>
				</tr>
				<tr>
					<td>Placa: </td><td><? echo $row['placa']; ?>
				</tr>
				<tr>
					<td>Marca: </td><td><? echo $row['marca']; ?>
				</tr>
				<tr>
					<td>Modelo: </td><td><? echo $row['modelo']; ?>
				</tr>
				<tr>
					<td>Color: </td><td><? echo $row['color']; ?>
				</tr>
				<tr>
					<td>Año: </td><td><? echo $row['purchase_year']; ?>
				</tr>
				<tr>
					<td>ID Módulo: </td><td><? echo $row['idmodulo']; ?>
				</tr>
				<tr>
					<td>Número GSM: </td><td><? echo $row['gsm']; ?>
				</tr>
			</table>
		<? }
	}

	public static function edit($cliente_id, $placa, $marca, $modelo, $color, $purchase_year, $idmodulo) {
		$clase = 'General';
		$clase::connect();
		$string = "update vehiculos set cliente_id='$cliente_id', marca='$marca', modelo='$modelo', color='$color', purchase_year='$purchase_year', idmodulo='$idmodulo' where placa='$placa'";
		$query = pg_query($string);
		return $query;
	}

	public static function edit_st($placa, $idmodulo, $gsm, $firmware, $version) {
		$clase = 'General';
		$clase::connect();
		$string = "update vehiculos set idmodulo='$idmodulo', version='$version', firmware='$firmware', gsm='$gsm' where placa='$placa'";
		$query = pg_query($string);
		return $query;
	}

	public static function listar() {
		$clase = 'General';
		$clase::connect(); 
		$string = "select id from vehiculos";
		$query = pg_query($string);
		$lista = pg_num_rows($query);
		echo $lista;
	}
}

class Flags {
	public static function select() {
		$clase = 'General';
		$clase::connect();
		$string = "select * from flags";
		$query = pg_query($string);
		return $query;
	}
}
?>
