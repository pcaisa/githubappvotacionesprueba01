<?php 
	
	
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$direccion=$_POST['direccion'];
	$telefono=$_POST['telefono'];
	$cedula=$_POST['cedula'];
	$lider_id=$_POST['lider_id'];
	$barrio_id=$_POST['barrio_id'];
	$puestorotacion_id=$_POST['puestorotacion_id'];
	$mesa=$_POST['mesa'];    
	$perfil=$_POST['perfil'];
	
	    if(isset($_POST["enviar"])){
    $revisar = getimagesize($_FILES["imagen"]["tmp_name"]);
    if($revisar !== false){
        $imagen = $_FILES['imagen']['tmp_name'];
        $imgContenido = addslashes(file_get_contents($imagen));  

	
	$consultasql="INSERT votante (nombre,apellido,direccion,telefono,cedula,lider_id,barrio_id,puestorotacion_id,mesa,imagen,perfil) 
	values ('".$nombre."','".$apellido."','".$direccion."','".$telefono."','".$cedula."','".$lider_id."','".$barrio_id."','".$puestorotacion_id."','".$mesa."','".$imgContenido."','".$perfil."')";            
	  
	
	$link2=mysql_connect("localhost","root","") or die("No pudo conectarse a $servidor!!!!" . mysql_error());
	mysql_select_db("votacion") or die("No pudo seleccionarse la BD $bd.");
	$resultado2=mysql_query($consultasql);	
	mysql_close($link2);
}}
	       
?>

<html>
	<head>
		<title>Guardar Votante</title>
	</head>
	<body>
		<center>	
			
			<?php if($resultado2>0){ ?>
				<h1>Votante guardado</h1>
				<?php }else{ ?>
				<h1>Error al Guardar Votante</h1>		
			<?php	} ?>		
			
			<p></p>	
			
			<a href="grid.php">Regresar</a>
			
		</center>
	</body>
	</html>	
<!--cargar.php-->   

