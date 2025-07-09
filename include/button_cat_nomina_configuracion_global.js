Runner.buttonEvents["cat_nomina_configuracion_global"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'cat_nomina_configuracion_global';
	
	if ( !pageObj.buttonEventBefore['cat_nomina_configuracion_global'] ) {
		pageObj.buttonEventBefore['cat_nomina_configuracion_global'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
// Put your code here.
params["txt"] = "Actualización";
ajax.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['cat_nomina_configuracion_global'] ) {
		pageObj.buttonEventAfter['cat_nomina_configuracion_global'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
// Put your code here.
pageObj.reload({a:'reload'});
var message = result["txt"] + " !!!";
ajax.setMessage(message);

		}
	}
	
	$('a[id="cat_nomina_configuracion_global"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "cat_nomina_configuracion_global" + "_" + Runner.genId();
		
		// create object
		var button_cat_nomina_configuracion_global = new Runner.form.Button({
			id: this.id ,
			btnName: "cat_nomina_configuracion_global"
		});
		
		// init
		button_cat_nomina_configuracion_global.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

