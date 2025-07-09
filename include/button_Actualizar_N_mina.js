Runner.buttonEvents["Actualizar_N_mina"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'Actualizar_N_mina';
	
	if ( !pageObj.buttonEventBefore['Actualizar_N_mina'] ) {
		pageObj.buttonEventBefore['Actualizar_N_mina'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
// Put your code here.
params["txt"] = "Espere";
ajax.setMessage("Actualizando información...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['Actualizar_N_mina'] ) {
		pageObj.buttonEventAfter['Actualizar_N_mina'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
// Put your code here.
location.reload();

var message = result["txt"] + " y finalizados!";
		}
	}
	
	$('a[id="Actualizar_N_mina"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "Actualizar_N_mina" + "_" + Runner.genId();
		
		// create object
		var button_Actualizar_N_mina = new Runner.form.Button({
			id: this.id ,
			btnName: "Actualizar_N_mina"
		});
		
		// init
		button_Actualizar_N_mina.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

