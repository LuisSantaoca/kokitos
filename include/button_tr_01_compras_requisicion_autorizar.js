Runner.buttonEvents["tr_01_compras_requisicion_autorizar"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'tr_01_compras_requisicion_autorizar';
	
	if ( !pageObj.buttonEventBefore['tr_01_compras_requisicion_autorizar'] ) {
		pageObj.buttonEventBefore['tr_01_compras_requisicion_autorizar'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
// Put your code here.
params["txt"] = "Espere";
ajax.setMessage("Autorizando requisición...");
var respuesta=confirm("Esta por autorizar todos los productos");
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
	
	if ( !pageObj.buttonEventAfter['tr_01_compras_requisicion_autorizar'] ) {
		pageObj.buttonEventAfter['tr_01_compras_requisicion_autorizar'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
// Put your code here.
var message = result["txt"] + " Resuisición autorizada.";

pageObj.reload({a:'reload'});

ajax.setMessage(message);

		}
	}
	
	$('a[id="tr_01_compras_requisicion_autorizar"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "tr_01_compras_requisicion_autorizar" + "_" + Runner.genId();
		
		// create object
		var button_tr_01_compras_requisicion_autorizar = new Runner.form.Button({
			id: this.id ,
			btnName: "tr_01_compras_requisicion_autorizar"
		});
		
		// init
		button_tr_01_compras_requisicion_autorizar.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

