Runner.buttonEvents["Calcular"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'Calcular';
	
	if ( !pageObj.buttonEventBefore['Calcular'] ) {
		pageObj.buttonEventBefore['Calcular'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
params["txt"] = "Actualización";
ajax.setMessage("Sending request to server...");
		}
	}
	
	if ( !pageObj.buttonEventAfter['Calcular'] ) {
		pageObj.buttonEventAfter['Calcular'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
pageObj.reload({a:'reload'});
var message = result["txt"] + " !!!";
ajax.setMessage(message);
		}
	}
	
	$('a[id="Calcular"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "Calcular" + "_" + Runner.genId();
		
		// create object
		var button_Calcular = new Runner.form.Button({
			id: this.id ,
			btnName: "Calcular"
		});
		
		// init
		button_Calcular.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

