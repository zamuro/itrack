<html>
<div class=header_left><a href=/itrack><img src=assets/images/logo.jpg /></a></div>
<div class=header_center>Sistema de registro de usuarios de itrack GPS</div>
<div class=header_right>
<?
session_start();
if (!isset ($_SESSION['usuario'])) {
	?>
	<a href=login.php>Iniciar Sesión</a>
	<?
} 
else {
	?>
	<a href= logout.php>Salir</a>
	<?
}
?>
</div>
</html>
