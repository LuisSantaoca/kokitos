Runner.buttonEvents["crear_base_de_datos"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'crear_base_de_datos';
	
	if ( !pageObj.buttonEventBefore['crear_base_de_datos'] ) {
		pageObj.buttonEventBefore['crear_base_de_datos'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
params["txt"] = "Creando...";
ajax.setMessage("Base de datos. Conexión segura.");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['crear_base_de_datos'] ) {
		pageObj.buttonEventAfter['crear_base_de_datos'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;

//window.location.href = "https://admin.intelagro.com.mx/admin/scripts/crear_base_de_datos.php?dato="+row.getFieldValue("endpoint");

//var popup = Runner.displayPopup( {
  //url: "https://admin.intelagro.com.mx/admin/scripts/crear_base_de_datos.php?dato="+row.getFieldValue("base_de_datos"),
  //width: 500,
  //height: 300,
  //header: 'Add new product'
//});
 
//alert('La base de datos ' + row.getFieldValue("base_de_datos") + ' se a creado satisfactoriamente');
 
//popup.close();



var message = result["txt"] + " ";
ajax.setMessage(message);

		}
	}
	
	$('a[id="crear_base_de_datos"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "crear_base_de_datos" + "_" + Runner.genId();
		
		// create object
		var button_crear_base_de_datos = new Runner.form.Button({
			id: this.id ,
			btnName: "crear_base_de_datos"
		});
		
		// init
		button_crear_base_de_datos.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

