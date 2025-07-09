Runner.buttonEvents["link_requisiciones_estatus"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'link_requisiciones_estatus';
	
	if ( !pageObj.buttonEventBefore['link_requisiciones_estatus'] ) {
		pageObj.buttonEventBefore['link_requisiciones_estatus'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
// Put your code here.

window.location.href = 'tr_compras_requisiciones_01_estatus_list.php';



params["txt"] = " ";
ajax.setMessage("Conexión segura");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['link_requisiciones_estatus'] ) {
		pageObj.buttonEventAfter['link_requisiciones_estatus'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
// Put your code here.



var message = result["txt"] + "  ";
ajax.setMessage(message);

		}
	}
	
	$('a[id="link_requisiciones_estatus"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "link_requisiciones_estatus" + "_" + Runner.genId();
		
		// create object
		var button_link_requisiciones_estatus = new Runner.form.Button({
			id: this.id ,
			btnName: "link_requisiciones_estatus"
		});
		
		// init
		button_link_requisiciones_estatus.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

