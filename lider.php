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
	

		<form enctype="multipart/form-data" method="POST" action="guarda_lider.php " enctype="multipart/form-data">
			<table width="100%">

   				<tr>
					<td><b>cedula</b></td>
					<td><input type="text"  size="100"  name="cedula" required="required"></td>
				</tr>
					

				<tr>
					<td><b>nombre</b></td>
					<td><input type="text"  size="100"  name="nombre" required="required"></td>
				</tr>
				
					

				<tr>
					<td><b>email</b></td>
					<td><input type="text"  size="100"  name="email" required="required"></td>
				</tr>
				
				<tr>
					<td><b>telefono</b></td>
					<td><input type="text"  size="100" name="telcel"  required="required"></td>
				</tr>  	
			 
			    <tr>
					<!--<td><b>password</b></td>-->
					<td><input type="hidden"  size="100" name="password"  value="umOmYx8IWIvUo"></td>
				</tr>  	
				<tr>
					<!--<td><b>perfil</b></td>-->
					<td><input type="hidden"  size="100" name="perfil"  value="1"></td>
				</tr>  	
				
				<label for="imagen"><b>Imagen</b></label> 
  					<input id="imagen" name="imagen" size="30" type="file" />
    <!--fuente  https://www.baulphp.com/cargar-y-almacenar-imagen-en-mysql-php/--> 

				  
				   
				<br>
				<tr>
					<td colspan="2"><center><input type="submit" name="enviar" value="Ingresar Nuevo lider" /></center></td>
				</tr>
			</table> 
		</form>
	</body>
</html>	
