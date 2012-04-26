<?
$clase = 'Clientes';
?>
<h1>Sumario</h1>
<p>Clientes registrados: <? $clase::listar(); ?></P>
<?
$clase = 'Vehiculos';
?>
<p>Vehículos registrados: <? $clase::listar(); ?></P>
