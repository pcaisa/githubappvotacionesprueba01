<?php 
	
	$cedula=$_POST['cedula'];
	$nombre=$_POST['nombre'];
	$email=$_POST['email'];
	$telcel=$_POST['telcel'];
	$password=$_POST['password'];
	$perfil=$_POST['perfil'];
	
	
	    if(isset($_POST["enviar"])){
    $revisar = getimagesize($_FILES["imagen"]["tmp_name"]);
    if($revisar !== false){
        $imagen = $_FILES['imagen']['tmp_name'];
        $imgContenido = addslashes(file_get_contents($imagen));  

	
	$consultasql="INSERT usuarios (cedula,nombre,email,telcel,password,perfil,imagen) 
	values ('".$cedula."','".$nombre."','".$email."','".$telcel."','".$password."','".$perfil."','".$imgContenido."')";            
	  
	   
	$link2=mysql_connect("localhost","root","") or die("No pudo conectarse a $servidor!!!!" . mysql_error());
	mysql_select_db("votacion") or die("No pudo seleccionarse la BD $bd.");
	$resultado2=mysql_query($consultasql);	
	mysql_close($link2);
}}
	       
?>
    
<html>
	<head>
		<title>Guardar Lider</title>
	</head>
	<body>
		<center>	
			
			<?php if($resultado2>0){ ?>
				<h1>Lider guardado</h1>
				<?php }else{ ?>
				<h1>Error al Guardar Lider</h1>		
			<?php	} ?>		
			
			<p></p>	
			
			<a href="index.php">Regresar</a>
			
		</center>
	</body>
	</html>	