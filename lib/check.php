<?
class Check {
	public static function login ($usuario, $password) { 
		include "../model/db.inc.php";
		$clase='General';
		$clase::connect();
		$password = md5($password);
		$string = "select * from usuarios where usuario='$usuario' and password='$password'";
		$query = pg_query($string);
		$count=pg_num_rows($query);
		if($count==1){
			while ($row = pg_fetch_array($query)) {
				$usid = $row['usuario'];
				session_start('$usid');
				$_SESSION['usuario']= $usid;
			}
		}
		else {
		echo "No existe usuario con ese id";
		}
	}
}
?>
