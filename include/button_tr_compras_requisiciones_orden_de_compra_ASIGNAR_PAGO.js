Runner.buttonEvents["tr_compras_requisiciones_orden_de_compra_ASIGNAR_PAGO"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'tr_compras_requisiciones_orden_de_compra_ASIGNAR_PAGO';
	
	if ( !pageObj.buttonEventBefore['tr_compras_requisiciones_orden_de_compra_ASIGNAR_PAGO'] ) {
		pageObj.buttonEventBefore['tr_compras_requisiciones_orden_de_compra_ASIGNAR_PAGO'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
// Put your code here.
params["txt"] = "Hello";
ajax.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['tr_compras_requisiciones_orden_de_compra_ASIGNAR_PAGO'] ) {
		pageObj.buttonEventAfter['tr_compras_requisiciones_orden_de_compra_ASIGNAR_PAGO'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
// Put your code here.
pageObj.reload({a:'reload'});
var message = result["txt"] + " !!!";
ajax.setMessage(message);

		}
	}
	
	$('a[id="tr_compras_requisiciones_orden_de_compra_ASIGNAR_PAGO"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "tr_compras_requisiciones_orden_de_compra_ASIGNAR_PAGO" + "_" + Runner.genId();
		
		// create object
		var button_tr_compras_requisiciones_orden_de_compra_ASIGNAR_PAGO = new Runner.form.Button({
			id: this.id ,
			btnName: "tr_compras_requisiciones_orden_de_compra_ASIGNAR_PAGO"
		});
		
		// init
		button_tr_compras_requisiciones_orden_de_compra_ASIGNAR_PAGO.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

