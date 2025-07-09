Runner.buttonEvents["tr_compras_requisiciones_01_orden_de_compra_GENERA_FOLIO_DE_PAGO"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'tr_compras_requisiciones_01_orden_de_compra_GENERA_FOLIO_DE_PAGO';
	
	if ( !pageObj.buttonEventBefore['tr_compras_requisiciones_01_orden_de_compra_GENERA_FOLIO_DE_PAGO'] ) {
		pageObj.buttonEventBefore['tr_compras_requisiciones_01_orden_de_compra_GENERA_FOLIO_DE_PAGO'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
// Put your code here.
params["txt"] = "Espere";
ajax.setMessage("Generar orden de compra...");
var respuesta=confirm("Estas seguro?");
if(respuesta==true){
 return true;
}
else{
return false
}
 
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['tr_compras_requisiciones_01_orden_de_compra_GENERA_FOLIO_DE_PAGO'] ) {
		pageObj.buttonEventAfter['tr_compras_requisiciones_01_orden_de_compra_GENERA_FOLIO_DE_PAGO'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
// Put your code here.
pageObj.reload({a:'reload'});
var message = result["txt"] + "Orden de compra generada";
ajax.setMessage(message);

		}
	}
	
	$('a[id="tr_compras_requisiciones_01_orden_de_compra_GENERA_FOLIO_DE_PAGO"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "tr_compras_requisiciones_01_orden_de_compra_GENERA_FOLIO_DE_PAGO" + "_" + Runner.genId();
		
		// create object
		var button_tr_compras_requisiciones_01_orden_de_compra_GENERA_FOLIO_DE_PAGO = new Runner.form.Button({
			id: this.id ,
			btnName: "tr_compras_requisiciones_01_orden_de_compra_GENERA_FOLIO_DE_PAGO"
		});
		
		// init
		button_tr_compras_requisiciones_01_orden_de_compra_GENERA_FOLIO_DE_PAGO.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

