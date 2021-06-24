<?php


header("Content-type: text/xml");
print '<?xml version="1.0" encoding="ISO-8859-1"?>';

//$id=$_REQUEST['ID'];
print("<rows>");

$link=mysql_connect("localhost","root","") or die("No pudo conectarse a $servidor!!!!" . mysql_error());
mysql_select_db("votacion") or die("No pudo seleccionarse la BD $bd.");
$resultado=mysql_query("select * from votante order by id");
while($row = mysql_fetch_array($resultado))
{
print("<row>");
//print("<row id='".$row[0]."'>");   
print("<cell>".$row[1]."</cell>");
print("<cell>".$row[2]."</cell>");
print("<cell>".$row[3]."</cell>");
print("<cell>".$row[4]."</cell>");
print("<cell>".$row[5]."</cell>");
print("<cell>".$row[6]."</cell>");
print("<cell>".$row[7]."</cell>");
print("<cell>".$row[8]."</cell>");
print("<cell>".$row[9]."</cell>");  
 print("  <cell><![CDATA[".$imagen."]]></cell>");      
print("</row>");  
      
}   
mysql_free_result($resultado);
mysql_close($link);
print("</rows>");
?>
