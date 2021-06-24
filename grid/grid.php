
<html>
<head>
	<title>Votacion</title>
	<!--<link rel="STYLESHEET" type="text/css" href="/dhtmlxSuite/dhtmlxGrid/codebase/dhtmlxgrid.css">
	<script  src="/dhtmlxSuite/dhtmlxGrid/codebase/dhtmlxcommon.js"></script>
	<script  src="/dhtmlxSuite/dhtmlxGrid/codebase/dhtmlxgrid.js"></script>        
	<script  src="/dhtmlxSuite/dhtmlxGrid/codebase/dhtmlxgridcell.js"></script>  

	<link rel="stylesheet" type="text/css" href="/dhtmlxSuite/dhtmlxWindows/codebase/dhtmlxwindows.css">
    <link rel="stylesheet" type="text/css" href="/dhtmlxSuite/dhtmlxWindows/codebase/skins/dhtmlxwindows_dhx_skyblue.css">
    <script src="/dhtmlxSuite/dhtmlxWindows/codebase/dhtmlxcommon.js"></script>
    <script src="/dhtmlxSuite/dhtmlxWindows/codebase/dhtmlxwindows.js"></script>
	<script src="/dhtmlxSuite/dhtmlxWindows/codebase/dhtmlxcontainer.js"></script>
	

	<link rel="stylesheet" type="text/css" href="/dhtmlxSuite/dhtmlxMenu/codebase/skins/dhtmlxmenu_dhx_skyblue.css">
	<script src="/dhtmlxSuite/dhtmlxMenu/dhtmlxcommon.js"></script>
	<script src="/dhtmlxSuite/dhtmlxMenu/codebase/dhtmlxmenu.js"></script> 
	<script  src="/dhtmlxSuite/dhtmlxDataProcessor/codebase/dhtmlxdataprocessor.js"></script>-->	

 	<link rel="stylesheet" type="text/css" href="/dhtmlxSuite/codebase/dhtmlx.css"/>
	<script src="/dhtmlxSuite/codebase/dhtmlx.js"></script>	
	

</head>

<body>
<h1>Votantes</h1>

	<div style="height: 30px;"><div id="menuObj"></div>
	
	
 <form>
  <a href="nuevo.php">Nuevo registro</a><br>
  <a href="grafica.php">Grafica de votantes</a><br>
  <!--<input type=button name="botonel" value="Eliminar " disabled onclick="borrar()">	-->
 
	
	</form>
	 
	 
	 
	 
	 <div id="mygrid_container" style="width:900px;height:500px;"></div>
	
  
<script>
	var mygrid,myDataProcessor;
	mygrid = new dhtmlXGridObject('mygrid_container');
	mygrid.setImagePath("/dhtmlxSuite/codebase/imgs/");
	mygrid.setHeader("Nombre,Apellido,Dirección,Teléfono,Cedula,Lider,Barrio,puesto rotacion,mesa");
	mygrid.attachHeader("#text_filter,#text_filter, , , ,,,,");
   	mygrid.setInitWidths("100,100,100,100,100,100,100,100,100");
   	mygrid.setColAlign("center,center,center,center,center,center,center,center,center");
    //mygrid.setSkin("light");
	mygrid.enableTooltips("false,false,false,false,false,false,false,false,false");
	mygrid.setColSorting("int,str,int,str,str,str,str,str,str");  
	mygrid.setColTypes("ro,ro,ro,ro,ro,ro,ro,ro,ro");		

	   

	
    mygrid.init();
	mygrid.loadXML("xml.php");
	mygrid.enableSmartRendering(true);


	//------------------------------------
	myDataProcessor = new dataProcessor("update.php");
	//lock feed url;
	myDataProcessor.init(mygrid);
	//link dataprocessor to the grid;
		
	myDataProcessor.defineAction("error",function(response){
		var message = response.getAttribute("message");
		alert(message);
		//alert("hola2");
		return true;
	})
	/*
	myDataProcessor.attachEvent("onAfterUpdateFinish",function(){
		alert("single row updated")
	});
	myDataProcessor.attachEvent("onFullSync",function(){
		alert("all rows updated")
	});
	*/
	//------------------------------------------------------------;
	
	
	mygrid.attachEvent("onRowSelect",doOnRowSelected);		
	//mygrid.attachEvent("onBeforeSelect",cambiarcolor);		
	//mygrid.attachEvent("onEditCell", cambiar);

		
	function doOnRowSelected(rowID,celInd){
       //alert("id "+rowID+"\nindice "+celInd);
	   		//alert("id "+rowID+"\nindice "+celInd);
			//mygrid.setCellExcellType(rowID,celInd,"ro");
			
			
			//mygrid.setRowColor(rowID,"blue");
			document.forms[0].botonel.disabled=false;
			document.forms[0].botonel.value="Eliminar: "+rowID;
		
	}  
	
	
	function createWindow() 
	{
		
		dhxWins = new dhtmlXWindows();
		dhxWins.enableAutoViewport(true);		
		dhxWins.setImagePath("/dhtmlxSuite/codebase/imgs/");	

		var win = dhxWins.createWindow("ven1",110,125,500,400);    

			
        dhxWins.window("ven1").setText("Ingrese nueva sugerencia");
		
		dhxWins.window("ven1").denyResize(); 	

		dhxWins.window("ven1").attachURL("nuevo.php");
		

	}

	
	/*function borrar()  //si tiene permiso de eliminar
	{
		
		var selectedItem = mygrid.getSelectedRowId();// gets an id of the selected row
		mygrid.deleteRow(selectedItem);// deletes a row with the specified id
		document.forms[0].elements[1].value="eliminar";
		document.forms[0].elements[1].disabled=true;
					
	}*/

</script>
	
</body>
</html>