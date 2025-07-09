Runner.buttonEvents["link_requi_solicitud"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'link_requi_solicitud';
	
	if ( !pageObj.buttonEventBefore['link_requi_solicitud'] ) {
		pageObj.buttonEventBefore['link_requi_solicitud'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
// Put your code here.

window.location.href = 'tr_compras_requisiciones_01_list.php?orderby=dtr_compras_requisiciones_01_id';


params["txt"] = " ";
ajax.setMessage(" conexión segura");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['link_requi_solicitud'] ) {
		pageObj.buttonEventAfter['link_requi_solicitud'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
// Put your code here.
var message = result["txt"] + "  ";
ajax.setMessage(message);

		}
	}
	
	$('a[id="link_requi_solicitud"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "link_requi_solicitud" + "_" + Runner.genId();
		
		// create object
		var button_link_requi_solicitud = new Runner.form.Button({
			id: this.id ,
			btnName: "link_requi_solicitud"
		});
		
		// init
		button_link_requi_solicitud.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

