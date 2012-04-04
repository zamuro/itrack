<html>
<head>
<link href="../../assets/stylesheets/styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Buscar vehículo por placa</h1>
<form action="views/vehiculos/search_placa.php" method=post>
	<input type=text id=placa name=placa />
	<input type=submit value=Buscar />
</form>
<?
include "../../controller/vehiculos/search_placa.php";
?>
<p><a href=/itrack class=body>Regresa al inicio</a></p>
</body>
</html>
