Runner.buttonEvents["tr_pre_nomina"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'tr_pre_nomina';
	
	if ( !pageObj.buttonEventBefore['tr_pre_nomina'] ) {
		pageObj.buttonEventBefore['tr_pre_nomina'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
// Put your code here.
params["txt"] = "Hello";
ajax.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['tr_pre_nomina'] ) {
		pageObj.buttonEventAfter['tr_pre_nomina'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
location.reload();
// Put your code here.
var message = result["txt"] + " !!!";
ajax.setMessage(message);

		}
	}
	
	$('a[id="tr_pre_nomina"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "tr_pre_nomina" + "_" + Runner.genId();
		
		// create object
		var button_tr_pre_nomina = new Runner.form.Button({
			id: this.id ,
			btnName: "tr_pre_nomina"
		});
		
		// init
		button_tr_pre_nomina.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

