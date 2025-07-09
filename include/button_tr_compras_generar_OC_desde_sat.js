Runner.buttonEvents["tr_compras_generar_OC_desde_sat"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'tr_compras_generar_OC_desde_sat';
	
	if ( !pageObj.buttonEventBefore['tr_compras_generar_OC_desde_sat'] ) {
		pageObj.buttonEventBefore['tr_compras_generar_OC_desde_sat'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
// Put your code here.
params["txt"] = "Espere";
ajax.setMessage("Vas a crear una Orden de Compra...");
var respuesta=confirm("¿Estas seguro?");
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
	
	if ( !pageObj.buttonEventAfter['tr_compras_generar_OC_desde_sat'] ) {
		pageObj.buttonEventAfter['tr_compras_generar_OC_desde_sat'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
// Put your code here.
pageObj.reload({a:'reload'});
var message = result["txt"] + " !!!";
ajax.setMessage(message);
		}
	}
	
	$('a[id="tr_compras_generar_OC_desde_sat"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "tr_compras_generar_OC_desde_sat" + "_" + Runner.genId();
		
		// create object
		var button_tr_compras_generar_OC_desde_sat = new Runner.form.Button({
			id: this.id ,
			btnName: "tr_compras_generar_OC_desde_sat"
		});
		
		// init
		button_tr_compras_generar_OC_desde_sat.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

