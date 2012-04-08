<?
session_start();
echo "chao, ". $_SESSION['usuario'];
?>
?><h1>Has salido</a>
<?
session_destroy();
header ('location:index.php');
?>
