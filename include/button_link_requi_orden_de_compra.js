Runner.buttonEvents["link_requi_orden_de_compra"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'link_requi_orden_de_compra';
	
	if ( !pageObj.buttonEventBefore['link_requi_orden_de_compra'] ) {
		pageObj.buttonEventBefore['link_requi_orden_de_compra'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
// Put your code here.

window.location.href = 'tr_compras_requisiciones_01_orden_de_compra_list.php';



params["txt"] = " ";
ajax.setMessage("Conexión segura");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['link_requi_orden_de_compra'] ) {
		pageObj.buttonEventAfter['link_requi_orden_de_compra'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
// Put your code here.
var message = result["txt"] + "  ";
ajax.setMessage(message);

		}
	}
	
	$('a[id="link_requi_orden_de_compra"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "link_requi_orden_de_compra" + "_" + Runner.genId();
		
		// create object
		var button_link_requi_orden_de_compra = new Runner.form.Button({
			id: this.id ,
			btnName: "link_requi_orden_de_compra"
		});
		
		// init
		button_link_requi_orden_de_compra.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

