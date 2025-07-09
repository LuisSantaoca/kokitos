Runner.buttonEvents["tr_trabajadores_nomina_03_costo_por_actividad_dia_actualizar"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'tr_trabajadores_nomina_03_costo_por_actividad_dia_actualizar';
	
	if ( !pageObj.buttonEventBefore['tr_trabajadores_nomina_03_costo_por_actividad_dia_actualizar'] ) {
		pageObj.buttonEventBefore['tr_trabajadores_nomina_03_costo_por_actividad_dia_actualizar'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
// Put your code here.
params["txt"] = "Hello";
ajax.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['tr_trabajadores_nomina_03_costo_por_actividad_dia_actualizar'] ) {
		pageObj.buttonEventAfter['tr_trabajadores_nomina_03_costo_por_actividad_dia_actualizar'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
// Put your code here.
var message = result["txt"] + " !!!";
ajax.setMessage(message);

		}
	}
	
	$('a[id="tr_trabajadores_nomina_03_costo_por_actividad_dia_actualizar"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "tr_trabajadores_nomina_03_costo_por_actividad_dia_actualizar" + "_" + Runner.genId();
		
		// create object
		var button_tr_trabajadores_nomina_03_costo_por_actividad_dia_actualizar = new Runner.form.Button({
			id: this.id ,
			btnName: "tr_trabajadores_nomina_03_costo_por_actividad_dia_actualizar"
		});
		
		// init
		button_tr_trabajadores_nomina_03_costo_por_actividad_dia_actualizar.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

