<?php
header("Content-type: text/xml");
print '<?xml version="1.0" encoding="ISO-8859-1"?>';




print("<data>"); 

$consultasql="SELECT nombre,  COUNT( * ) FROM votante";  

print("$consultasql");



$mysql=mysql_connect("localhost","root","") or die("No pudo conectarse a $servidor!!!!" . mysql_error());
mysql_select_db("votacion") or die("No pudo seleccionarse la BD $bd.");
$resultado=mysql_query($consultasql);

while($row = mysql_fetch_array($resultado))
{

print("<item><sales>$row[1]</sales><year>numero de votantes: $row[1]</year></item>");
}

mysql_free_result($resultado);
mysql_close ($mysql);
print("</data>");   
?>