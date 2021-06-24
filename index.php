<?php 
	setcookie("cedula", "", time()+1);   
	setcookie("nombre", "", time()+1);
	setcookie("codigo", "", time()+1);
?>
<?php
  header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");             // Date in the past
  header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); // always modified
  header("Cache-Control: no-cache, must-revalidate");           // HTTP/1.1
  header("Pragma: no-cache");
?>
<html><head>

<style type="text/css">
body
{
font-family:verdana;
}
</style>
</head>
<body>
<!--
<center>
<h1>Oficina virtual de Agentes RealNetwork.co v1.1</h1>
</center>
-->

<table align=center border=0>
<tr>
<td>
	<center><h1>Sistema de Votación</h1></center><br>
</td>	
</tr>
<tr>
<td>
	<center>
	<?php
	

			print('<form method="post"  action="veracciones.php">');
			print('<table>');
			print('<tr><td>Email:</td><td><input type="text" value="" name="campo1" /></td></tr>');
			print('<tr><td>Password:</td><td><input type="password" value="" name="campo2" /></td></tr>');
			print('<tr><td><input class="art-button" type="submit" name="search" value="ingresar" /></td></tr>');
			print('</table>');
			print('</form>');
			
		
	?>
	
	</center>

	
</td>
</tr>	
</table>

<br>
<br>

<br>
<br>

<br>	

</center>


<br>

<form>
  <center><a href="lider.php">Nuevo lider</a></center><br>
  
 
	
	</form>

</body>