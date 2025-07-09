Runner.buttonEvents["insert_COMPRA_DIRECTA_tr_compras_proveedores_01_cargos_abonos"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'insert_COMPRA_DIRECTA_tr_compras_proveedores_01_cargos_abonos';
	
	if ( !pageObj.buttonEventBefore['insert_COMPRA_DIRECTA_tr_compras_proveedores_01_cargos_abonos'] ) {
		pageObj.buttonEventBefore['insert_COMPRA_DIRECTA_tr_compras_proveedores_01_cargos_abonos'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
// Put your code here.
params["txt"] = "Espere";
ajax.setMessage("Va a afectar compra directa...");
var respuesta=confirm("Va a afectar una compra directa, está seguro?");
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
	
	if ( !pageObj.buttonEventAfter['insert_COMPRA_DIRECTA_tr_compras_proveedores_01_cargos_abonos'] ) {
		pageObj.buttonEventAfter['insert_COMPRA_DIRECTA_tr_compras_proveedores_01_cargos_abonos'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
// Put your code here.
var message = result["txt"] + " afectada";
ajax.setMessage(message);

pageObj.reload({a:'reload'});
		}
	}
	
	$('a[id="insert_COMPRA_DIRECTA_tr_compras_proveedores_01_cargos_abonos"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "insert_COMPRA_DIRECTA_tr_compras_proveedores_01_cargos_abonos" + "_" + Runner.genId();
		
		// create object
		var button_insert_COMPRA_DIRECTA_tr_compras_proveedores_01_cargos_abonos = new Runner.form.Button({
			id: this.id ,
			btnName: "insert_COMPRA_DIRECTA_tr_compras_proveedores_01_cargos_abonos"
		});
		
		// init
		button_insert_COMPRA_DIRECTA_tr_compras_proveedores_01_cargos_abonos.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

