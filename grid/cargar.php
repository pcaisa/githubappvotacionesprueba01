<?php
if(isset($_POST["enviar"])){
    $revisar = getimagesize($_FILES["imagen"]["tmp_name"]);
    if($revisar !== false){
        $imagen = $_FILES['imagen']['tmp_name'];
        $imgContenido = addslashes(file_get_contents($imagen));
        
        //Credenciales Mysql    
        $Host = 'localhost';
        $Username = 'root';
        $Password = '';
        $dbName = 'votacion';
        
        //Crear conexion con la abse de datos
        $db = new mysqli($Host, $Username, $Password, $dbName);
        
        // Cerciorar la conexion
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
        
        
        //Insertar imagen en la base de datos
        $insertar = $db->query("INSERT into votante (imagen) VALUES ('$imgContenido')");
 // COndicional para verificar la subida del fichero
        if($insertar){    
            echo "Archivo Subido Correctamente.";  
        }else{
            echo "Ha fallado la subida, reintente nuevamente.";
        } 
 // Sie el usuario no selecciona ninguna imagen
    }else{
        echo "Por favor seleccione imagen a subir.";
    }
}
?>