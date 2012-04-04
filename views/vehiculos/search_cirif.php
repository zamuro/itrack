<html>
<head>
<link href="../../assets/stylesheets/styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Buscar vehículos por cédula o RIF</h1>
<form action=views/vehiculos/search_cirif.php method=post>
	<input type=text id=ci_rif name=ci_rif />
	<input type=submit value=Buscar />
</form>

<?
include "../../controller/vehiculos/search_cirif.php";
?>
<p><a href=/itrack class=body>Regresa al inicio</a></p>
</body>
</html>
