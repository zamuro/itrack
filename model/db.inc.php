<?
class General {
	public static function connect() {
		$connect = pg_connect("host=localhost dbname=itrack user=itrack password=itrack") or die ("haha");
		return $connect; 
	}
}

class Clientes {
	public static function add($nombre, $ci_rif, $tlf1, $tlf2, $email, $encrypted_password) {
		$clase = 'General';
		$clase::connect();
		$string = "insert into clientes(nombre, ci_rif, tlf1, tlf2, email, password) values ('$nombre', '$ci_rif', '$tlf1', '$tlf2', '$email', '$encrypted_password')";
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
		$string = "insert into usuarios(usuario, flag_id, activo, password) values ($usuario, $flag, 'TRUE', $encrypted_password)";
		$query = pg_query($string);
		return $query;
	}
}

class Vehiculos {
	public static function add($cliente_id, $placa, $modelo, $marca, $color, $idmodulo, $version, $gsm, $firmware, $purchase_year ) {
		$clase = 'General';
		$clase::connect();
		$string = "insert into vehiculos(cliente_id, placa, modelo, marca, color, idmodulo, version, gsm, firmware, purchase_year) values ('$cliente_id', '$placa', '$modelo', '$marca', '$color', '$idmodulo', '$version', '$gsm', '$firmware', '$purchase_year')";
		$query = pg_query($string);
		return $query;
	}
	
	static function search_cirif($ci_rif) {
		$clase = 'General';
		$clase::Connect();
		$string = "select * from vehiculos where cliente_id='$ci_rif'";
		$query = pg_query($string);
			while ($row = pg_fetch_array($query)) {
			echo $row['cliente_id'] ;
			echo $row['placa'];
			echo $row['marca'];
			echo $row['modelo'];
			echo $row['color'];
			echo $row['purchase_year'];
		}
	}
	
	static function search_placa($placa) {
		$clase = 'General';
		$clase::Connect();
		$string = "select * from vehiculos where placa='$placa'";
		$query = pg_query($string);
		while ($row = pg_fetch_array($query)) {
			echo $row['cliente_id'];
			echo $row['placa'];
			echo $row['marca'];
			echo $row['modelo'];
			echo $row['color'];
			echo $row['purchase_year'];
		}
	}
	
}
?>