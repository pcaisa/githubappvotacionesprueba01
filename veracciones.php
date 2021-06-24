<?php     



	function veracciones()
	{ 
		$c=$_POST["campo1"];
		$p=$_POST["campo2"];
		$pencript=crypt($p,"um"); 
   
		function noencontrado()
		{
			printf("<html>");
			printf("    <head>");
            printf("       <link REL='stylesheet' TYPE='text/css' href=''>");
            printf("    </head>");
            printf("<body><br><br><br>");
            printf("   <center>El usuario no existe o esta mal escrito</center>");
            printf("   <center>Intente de nuevo</center>");
            printf("   <center><a href='index.php' target=\"_top\">VOLVER</a></center>");
            printf("</body>");
            printf("</html>");
		}
    


		$nombretabla="usuarios";

		//$puerto="3306";
   
		$consultasql="select * from $nombretabla where email='$c' and password='$pencript' and perfil=1";
		$link=mysql_connect("localhost","root","") or die("No pudo conectarse a $servidor!!!!" . mysql_error());
		//print(" $consultasql ");
		mysql_select_db("votacion") or die("No pudo seleccionarse la BD $bd.");
		$resultado=mysql_query($consultasql);
		$encontrado=0;
   
		while($row = mysql_fetch_array($resultado))
		{
			$encontrado=1;
			$nombre=$row[2];
			$cedul=$row[1];
			$perf=$row[6];
   
		}
		mysql_free_result($resultado);
		mysql_close ($link);
   
   
		if ($encontrado==1)
		{ 
	
			$ya=time();
			
			
			
			$fech=date("Y-m-d",$ya);
			$hora=date('H:i:s',$ya);   
			
			

			//print($consultasql."<br>");
			
		
		$link=mysql_connect("localhost","root","") or die("No pudo conectarse!!!!" . mysql_error());
        mysql_select_db("votacion") or die("No pudo seleccionarse la BD.");
        $resultado=mysql_query($consultasql);
		$b=mysql_insert_id();
        mysql_close ($link);
		
		
			setcookie("email", $c , time()+3600);
			setcookie("ingreso", $b , time()+3600);
			header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");             // Date in the past
			header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); // always modified
			header("Cache-Control: no-cache, must-revalidate");           // HTTP/1.1
			header("Pragma: no-cache");		
				
			
			
		
		
		header("Location: saludoinicial1.php");
    }
    else
    {
       	noencontrado();
    }
   
   }  //fin de veracciones
   
   
   

	veracciones();
?>