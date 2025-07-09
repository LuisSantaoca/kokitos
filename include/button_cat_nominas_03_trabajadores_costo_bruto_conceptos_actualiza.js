Runner.buttonEvents["cat_nominas_03_trabajadores_costo_bruto_conceptos_actualiza"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'cat_nominas_03_trabajadores_costo_bruto_conceptos_actualiza';
	
	if ( !pageObj.buttonEventBefore['cat_nominas_03_trabajadores_costo_bruto_conceptos_actualiza'] ) {
		pageObj.buttonEventBefore['cat_nominas_03_trabajadores_costo_bruto_conceptos_actualiza'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
// Put your code here.
params["txt"] = "Hello";
ajax.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['cat_nominas_03_trabajadores_costo_bruto_conceptos_actualiza'] ) {
		pageObj.buttonEventAfter['cat_nominas_03_trabajadores_costo_bruto_conceptos_actualiza'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
// Put your code here.
pageObj.reload({a:'reload'});
var message = result["txt"] + " !!!";
ajax.setMessage(message);

		}
	}
	
	$('a[id="cat_nominas_03_trabajadores_costo_bruto_conceptos_actualiza"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "cat_nominas_03_trabajadores_costo_bruto_conceptos_actualiza" + "_" + Runner.genId();
		
		// create object
		var button_cat_nominas_03_trabajadores_costo_bruto_conceptos_actualiza = new Runner.form.Button({
			id: this.id ,
			btnName: "cat_nominas_03_trabajadores_costo_bruto_conceptos_actualiza"
		});
		
		// init
		button_cat_nominas_03_trabajadores_costo_bruto_conceptos_actualiza.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

