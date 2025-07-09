Runner.buttonEvents["link_requi_pagar"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'link_requi_pagar';
	
	if ( !pageObj.buttonEventBefore['link_requi_pagar'] ) {
		pageObj.buttonEventBefore['link_requi_pagar'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
// Put your code here.

window.location.href = 'tr_compras_proveedores_01_cargos_abonos_list.php';



params["txt"] = " ";
ajax.setMessage("Conexión segura");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['link_requi_pagar'] ) {
		pageObj.buttonEventAfter['link_requi_pagar'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
// Put your code here.
var message = result["txt"] + "  ";
ajax.setMessage(message);

		}
	}
	
	$('a[id="link_requi_pagar"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "link_requi_pagar" + "_" + Runner.genId();
		
		// create object
		var button_link_requi_pagar = new Runner.form.Button({
			id: this.id ,
			btnName: "link_requi_pagar"
		});
		
		// init
		button_link_requi_pagar.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

