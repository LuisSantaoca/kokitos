Runner.buttonEvents["tr_compras_facturas_sat_02_llaves"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'tr_compras_facturas_sat_02_llaves';
	
	if ( !pageObj.buttonEventBefore['tr_compras_facturas_sat_02_llaves'] ) {
		pageObj.buttonEventBefore['tr_compras_facturas_sat_02_llaves'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
// Put your code here.
params["txt"] = "Hello";
ajax.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['tr_compras_facturas_sat_02_llaves'] ) {
		pageObj.buttonEventAfter['tr_compras_facturas_sat_02_llaves'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
// Put your code here.
pageObj.reload({a:'reload'});
var message = result["txt"] + " !!!";
ajax.setMessage(message);

		}
	}
	
	$('a[id="tr_compras_facturas_sat_02_llaves"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "tr_compras_facturas_sat_02_llaves" + "_" + Runner.genId();
		
		// create object
		var button_tr_compras_facturas_sat_02_llaves = new Runner.form.Button({
			id: this.id ,
			btnName: "tr_compras_facturas_sat_02_llaves"
		});
		
		// init
		button_tr_compras_facturas_sat_02_llaves.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

