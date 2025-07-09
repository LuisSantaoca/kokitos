Runner.buttonEvents["tr_compras_requisiciones_01_ENVIAR_A_AUTORIZAR"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'tr_compras_requisiciones_01_ENVIAR_A_AUTORIZAR';
	
	if ( !pageObj.buttonEventBefore['tr_compras_requisiciones_01_ENVIAR_A_AUTORIZAR'] ) {
		pageObj.buttonEventBefore['tr_compras_requisiciones_01_ENVIAR_A_AUTORIZAR'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;


// Place event code here.
// Use "Add Action" button to add code snippets.

// Put your code here.
params["txt"] = "Espere";
ajax.setMessage("Enviar a autorizacion...");
var respuesta=confirm("Confirma el envíó?");
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
	
	if ( !pageObj.buttonEventAfter['tr_compras_requisiciones_01_ENVIAR_A_AUTORIZAR'] ) {
		pageObj.buttonEventAfter['tr_compras_requisiciones_01_ENVIAR_A_AUTORIZAR'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
// Put your code here.
pageObj.reload({a:'reload'});
var message = result["txt"] + " !!!";
ajax.setMessage(message);

		}
	}
	
	$('a[id="tr_compras_requisiciones_01_ENVIAR_A_AUTORIZAR"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "tr_compras_requisiciones_01_ENVIAR_A_AUTORIZAR" + "_" + Runner.genId();
		
		// create object
		var button_tr_compras_requisiciones_01_ENVIAR_A_AUTORIZAR = new Runner.form.Button({
			id: this.id ,
			btnName: "tr_compras_requisiciones_01_ENVIAR_A_AUTORIZAR"
		});
		
		// init
		button_tr_compras_requisiciones_01_ENVIAR_A_AUTORIZAR.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

