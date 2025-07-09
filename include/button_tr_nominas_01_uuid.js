Runner.buttonEvents["tr_nominas_01_uuid"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'tr_nominas_01_uuid';
	
	if ( !pageObj.buttonEventBefore['tr_nominas_01_uuid'] ) {
		pageObj.buttonEventBefore['tr_nominas_01_uuid'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
// Put your code here.
params["txt"] = "Espere";
ajax.setMessage("Enviando datos...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['tr_nominas_01_uuid'] ) {
		pageObj.buttonEventAfter['tr_nominas_01_uuid'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
// Put your code here.
var message = result["txt"] + "Finalizar !!!";
ajax.setMessage(message);
location.reload();
		}
	}
	
	$('a[id="tr_nominas_01_uuid"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "tr_nominas_01_uuid" + "_" + Runner.genId();
		
		// create object
		var button_tr_nominas_01_uuid = new Runner.form.Button({
			id: this.id ,
			btnName: "tr_nominas_01_uuid"
		});
		
		// init
		button_tr_nominas_01_uuid.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

