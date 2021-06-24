<html>
  <body>	
  	<SCRIPT LANGUAGE="JavaScript">
function popUp(URL) {
      day = new Date();
      id = day.getTime();
      eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=0,location=1,statusbar=1,menubar=0,resizable=0,width=500,height=500,left = 710,top = 290');");
}
</script>
	<h1>Nuevo votante</h1>
	

		<form enctype="multipart/form-data" method="POST" action="guarda_nuevo.php " enctype="multipart/form-data">
			<table width="100%">

   

				<tr>
					<td><b>nombre</b></td>
					<td><input type="text"  size="100"  name="nombre" required="required"></td>
				</tr>
				
				<tr>
					<td><b>apellido</b></td>
					<td><input type="text"  size="100" name="apellido" required="required"></td>
				</tr>  	

				<tr>
					<td><b>direccion</b></td>
					<td><input type="text"  size="100"  name="direccion" required="required"></td>
				</tr>
				
				<tr>
					<td><b>telefono</b></td>
					<td><input type="text"  size="100" name="telefono" / required="required"></td>
				</tr>  	
				<tr>
					<td><b>cedula</b></td>
					<td><input type="text"  size="100"  name="cedula" required="required"></td>
				</tr>
					


				<tr>    
					<td width="25%"><b>Lider</b></td>
					<td>
					<?php
						$consultasql2="select * from usuarios";
						
						$link=mysql_connect("localhost","root","") or die("No pudo conectarse a $servidor!!!!" . mysql_error());
						mysql_select_db("votacion") or die("No pudo seleccionarse la BD $bd.");
						$resultado=mysql_query($consultasql2);
						print('<select name="lider_id">');
						while($fila= mysql_fetch_array($resultado))	   					
						{
							//$nombre_url[$,[0]]=$,[2];						
							//print("$,[0],&nbsp;");
							print('<option value="'.$fila[0].'">'.$fila[2].'</option>');

						}	
						print('</select>');
					?>
					</td>
				</tr>
								  
				
								
				
				<tr>
					<td><b>Barrio</b></td>
					<td>
						<?php
						$consultasql2="select * from barrios";
						
						$link=mysql_connect("localhost","root","") or die("No pudo conectarse a $servidor!!!!" . mysql_error());
						mysql_select_db("votacion") or die("No pudo seleccionarse la BD $bd.");
						$resultado=mysql_query($consultasql2);
						print('<select name="barrio_id">');
						while($fila= mysql_fetch_array($resultado))			  			
						{
							//$nombre_url[$,[0]]=$,[2];						
							//print("$,[0],&nbsp;");
							print('<option value="'.$fila[0].'">'.$fila[1].'</option>');
						}	
						print('</select>');
					?>
					</td>
				</tr> 

				<tr>
					<td><b>puesto de rotacion</b></td>
					<td>
						<?php
						$consultasql2="select * from puestovotacion";
						
						$link=mysql_connect("localhost","root","") or die("No pudo conectarse a $servidor!!!!" . mysql_error());
						mysql_select_db("votacion") or die("No pudo seleccionarse la BD $bd.");
						$resultado=mysql_query($consultasql2);
						print('<select name="puestorotacion_id">');
						while($fila= mysql_fetch_array($resultado))						
						{
							//$nombre_url[$,[0]]=$,[2];						
							//print("$,[0],&nbsp;");    
							print('<option value="'.$fila[0].'">'.$fila[1].'</option>');
						}	
						print('</select>');
					?>
					</td>
				</tr> 

				<tr>
					<td><b>mesa</b></td>
					<td><select name="mesa"  value="" />
							<option value="1">1</option>
							<option value="2">2</option>  
							<option value="3">3</option>  
							<option value="4">4</option>  
							<option value="5">5</option>    	
							<option value="6">6</option>  
							<option value="7">7</option>  
							<option value="8">8</option>  	
						</select>
				</tr> 
				
				<label for="imagen"><b>Imagen</b></label> 
  					<input id="imagen" name="imagen" size="30" type="file" />
    <!--fuente  https://www.baulphp.com/cargar-y-almacenar-imagen-en-mysql-php/-->      

				  <td><input type="hidden"  size="100" name="perfil"  value="2"></td>
				   
				<br>
				<tr>
					<td colspan="2"><center><input type="submit" name="enviar" value="Ingresar Nuevo votante" /></center></td>
				</tr>
			</table> 
		</form>
	</body>
</html>	
