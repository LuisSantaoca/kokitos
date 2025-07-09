Runner.buttonEvents["tr_nominas_pre_nomina_01"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'tr_nominas_pre_nomina_01';
	
	if ( !pageObj.buttonEventBefore['tr_nominas_pre_nomina_01'] ) {
		pageObj.buttonEventBefore['tr_nominas_pre_nomina_01'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;


// Place event code here.
// Use "Add Action" button to add code snippets.

// Put your code here.

params["txt"] = "Iniciando";
ajax.setMessage("Conexión segura...");

 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['tr_nominas_pre_nomina_01'] ) {
		pageObj.buttonEventAfter['tr_nominas_pre_nomina_01'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
// Put your code here.

location.reload();
var message = result["txt"] + " !!!";
ajax.setMessage(message);

		}
	}
	
	$('a[id="tr_nominas_pre_nomina_01"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "tr_nominas_pre_nomina_01" + "_" + Runner.genId();
		
		// create object
		var button_tr_nominas_pre_nomina_01 = new Runner.form.Button({
			id: this.id ,
			btnName: "tr_nominas_pre_nomina_01"
		});
		
		// init
		button_tr_nominas_pre_nomina_01.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

