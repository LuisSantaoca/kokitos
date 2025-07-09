Runner.buttonEvents["reedireccion_nomina"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'reedireccion_nomina';
	
	if ( !pageObj.buttonEventBefore['reedireccion_nomina'] ) {
		pageObj.buttonEventBefore['reedireccion_nomina'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
window.location.href = 'nomina_index.php';

// Put your code here.
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['reedireccion_nomina'] ) {
		pageObj.buttonEventAfter['reedireccion_nomina'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;

		}
	}
	
	$('a[id="reedireccion_nomina"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "reedireccion_nomina" + "_" + Runner.genId();
		
		// create object
		var button_reedireccion_nomina = new Runner.form.Button({
			id: this.id ,
			btnName: "reedireccion_nomina"
		});
		
		// init
		button_reedireccion_nomina.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

