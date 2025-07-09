Runner.buttonEvents["tr_compras_requisiciones_01_02_insert"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'tr_compras_requisiciones_01_02_insert';
	
	if ( !pageObj.buttonEventBefore['tr_compras_requisiciones_01_02_insert'] ) {
		pageObj.buttonEventBefore['tr_compras_requisiciones_01_02_insert'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
// Put your code here.
params["txt"] = "Conectando con la app";
ajax.setMessage("Extraer datos...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['tr_compras_requisiciones_01_02_insert'] ) {
		pageObj.buttonEventAfter['tr_compras_requisiciones_01_02_insert'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
// Put your code here.
var message = result["txt"] + " Requisición actualizada";
ajax.setMessage(message);
pageObj.reload({a:'reload'});
		}
	}
	
	$('a[id="tr_compras_requisiciones_01_02_insert"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "tr_compras_requisiciones_01_02_insert" + "_" + Runner.genId();
		
		// create object
		var button_tr_compras_requisiciones_01_02_insert = new Runner.form.Button({
			id: this.id ,
			btnName: "tr_compras_requisiciones_01_02_insert"
		});
		
		// init
		button_tr_compras_requisiciones_01_02_insert.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

