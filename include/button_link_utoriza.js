Runner.buttonEvents["link_utoriza"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'link_utoriza';
	
	if ( !pageObj.buttonEventBefore['link_utoriza'] ) {
		pageObj.buttonEventBefore['link_utoriza'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
// Put your code here.
window.location.href = 'tr_compras_requisiciones_01_autorizacion_user_list.php';


params["txt"] = " ";
ajax.setMessage("Conexión segura");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['link_utoriza'] ) {
		pageObj.buttonEventAfter['link_utoriza'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
// Put your code here.

var message = result["txt"] + "  ";
ajax.setMessage(message);

		}
	}
	
	$('a[id="link_utoriza"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "link_utoriza" + "_" + Runner.genId();
		
		// create object
		var button_link_utoriza = new Runner.form.Button({
			id: this.id ,
			btnName: "link_utoriza"
		});
		
		// init
		button_link_utoriza.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

