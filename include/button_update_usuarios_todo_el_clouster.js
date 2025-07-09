Runner.buttonEvents["update_usuarios_todo_el_clouster"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'update_usuarios_todo_el_clouster';
	
	if ( !pageObj.buttonEventBefore['update_usuarios_todo_el_clouster'] ) {
		pageObj.buttonEventBefore['update_usuarios_todo_el_clouster'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
// Put your code here.
params["txt"] = "Hello";
ajax.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['update_usuarios_todo_el_clouster'] ) {
		pageObj.buttonEventAfter['update_usuarios_todo_el_clouster'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
// Put your code here.
var message = result["txt"] + " !!!";
ajax.setMessage(message);

		}
	}
	
	$('a[id="update_usuarios_todo_el_clouster"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "update_usuarios_todo_el_clouster" + "_" + Runner.genId();
		
		// create object
		var button_update_usuarios_todo_el_clouster = new Runner.form.Button({
			id: this.id ,
			btnName: "update_usuarios_todo_el_clouster"
		});
		
		// init
		button_update_usuarios_todo_el_clouster.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

