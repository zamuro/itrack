<?
class Check {
	public static function login ($usuario, $password) { 
		include "model/db.inc.php";
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

	public static function flag($usuario) {
		include "model/db.inc.php";
		$clase='General';
		$clase::connect();
		echo $usuario;
		$string = "select flag_id from usuarios where usuario='$usuario'";
		$query = pg_query($string);
		while ($row = pg_fetch_array($query)) {
			switch ($row['flag_id']) {
				case "1":
					include "views/common/sidebars/sidebar_admin.php";
					break;
				case "2":
					include "views/common/sidebars/sidebar_st.php";
					break;
				case "3":
					include "views/common/sidebars/sidebar_dist.php";
					break;
				case "4":
					include "views/common/sidebars/sidebar_op.php";
					break;
			}
		}
	}
}
?>
