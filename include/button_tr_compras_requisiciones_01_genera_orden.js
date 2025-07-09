Runner.buttonEvents["tr_compras_requisiciones_01_genera_orden"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'tr_compras_requisiciones_01_genera_orden';
	
	if ( !pageObj.buttonEventBefore['tr_compras_requisiciones_01_genera_orden'] ) {
		pageObj.buttonEventBefore['tr_compras_requisiciones_01_genera_orden'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
// Put your code here.
params["txt"] = "Espere";
ajax.setMessage("Generar orden...");
var respuesta=confirm("Está seguro?");
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
	
	if ( !pageObj.buttonEventAfter['tr_compras_requisiciones_01_genera_orden'] ) {
		pageObj.buttonEventAfter['tr_compras_requisiciones_01_genera_orden'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
// Put your code here.
var message = result["txt"] + " !!!";
ajax.setMessage(message);

		}
	}
	
	$('a[id="tr_compras_requisiciones_01_genera_orden"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "tr_compras_requisiciones_01_genera_orden" + "_" + Runner.genId();
		
		// create object
		var button_tr_compras_requisiciones_01_genera_orden = new Runner.form.Button({
			id: this.id ,
			btnName: "tr_compras_requisiciones_01_genera_orden"
		});
		
		// init
		button_tr_compras_requisiciones_01_genera_orden.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

