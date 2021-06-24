<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php

$consultasql="SELECT count(nombre)  FROM votante";    

$mysql=mysql_connect("localhost","root","") or die("No pudo conectarse a $servidor!!!!" . mysql_error());
mysql_select_db("votacion") or die("No pudo seleccionarse la BD $bd.");
$resultado=mysql_query($consultasql);
?>
 

<html>
<head>
	<title>Gráfica de votantes</title>
	<h1>Gráfica de votantes</h1>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<link rel="stylesheet" type="text/css" href="/dhtmlxSuite/codebase/dhtmlx.css"/>
    <script src="/dhtmlxSuite/codebase/dhtmlx.js"></script> 

	
	<script>

    window.onload = function(){
        var barChart =  new dhtmlXChart({
            view:"bar",
            container:"chartDiv",
            value:"#sales#",
            gradient:"falling",
            color:"#b9a8f9",
            radius:0,
            alpha:0.5,
            border:true,
            width:70,
            xAxis:{
                template:"#year#"
            },
            yAxis:{
                start:0,
                end:50,
                step:10,
                template:function(obj){
                    return (obj%50?"":obj)
                }
            }
        })

       barChart.load("xml1.php");
	}
	</script>
	
</head>

<body>
	<div id="chartDiv" style="width:600px;height:250px;margin:20px;border:1px solid #A4BED4"></div>
	<br>
	
	<a href="grid.php">Regresar</a>
	
</body>
</html>