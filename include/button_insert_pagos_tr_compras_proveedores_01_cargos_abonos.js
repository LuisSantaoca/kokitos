Runner.buttonEvents["insert_pagos_tr_compras_proveedores_01_cargos_abonos"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'insert_pagos_tr_compras_proveedores_01_cargos_abonos';
	
	if ( !pageObj.buttonEventBefore['insert_pagos_tr_compras_proveedores_01_cargos_abonos'] ) {
		pageObj.buttonEventBefore['insert_pagos_tr_compras_proveedores_01_cargos_abonos'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
// Put your code here.

 
//return false;



params["txt"] = "Espere";
ajax.setMessage("Conexión segura...");
var respuesta=confirm("Vas a afectar el pago de manera directa. Proceder?");
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
	
	if ( !pageObj.buttonEventAfter['insert_pagos_tr_compras_proveedores_01_cargos_abonos'] ) {
		pageObj.buttonEventAfter['insert_pagos_tr_compras_proveedores_01_cargos_abonos'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
// Put your code here.
var message = result["txt"] + " !!!";
ajax.setMessage(message);
location.reload();
		}
	}
	
	$('a[id="insert_pagos_tr_compras_proveedores_01_cargos_abonos"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "insert_pagos_tr_compras_proveedores_01_cargos_abonos" + "_" + Runner.genId();
		
		// create object
		var button_insert_pagos_tr_compras_proveedores_01_cargos_abonos = new Runner.form.Button({
			id: this.id ,
			btnName: "insert_pagos_tr_compras_proveedores_01_cargos_abonos"
		});
		
		// init
		button_insert_pagos_tr_compras_proveedores_01_cargos_abonos.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

