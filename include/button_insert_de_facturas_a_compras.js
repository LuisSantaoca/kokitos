Runner.buttonEvents["insert_de_facturas_a_compras"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'insert_de_facturas_a_compras';
	
	if ( !pageObj.buttonEventBefore['insert_de_facturas_a_compras'] ) {
		pageObj.buttonEventBefore['insert_de_facturas_a_compras'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
// Put your code here.




ajax.setMessage("Conexión segura");
var respuesta=confirm("Vas a afecar compras, verifica si es necesario tener cuenta afectable... Estas seguro de continuar?");
if(respuesta==true){
 return true;
}
else{
return false
}



//params["txt"] = "Espere";
//ajax.setMessage("Vas a afecar compras...");
//var respuesta=confirm("Estas seguro?");
//if(respuesta==true){
 //return true;
//}
//else{
//return false
//}

 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['insert_de_facturas_a_compras'] ) {
		pageObj.buttonEventAfter['insert_de_facturas_a_compras'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
// Put your code here.
var message = " - Completada";
ajax.setMessage(message);
location.reload();

		}
	}
	
	$('a[id="insert_de_facturas_a_compras"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "insert_de_facturas_a_compras" + "_" + Runner.genId();
		
		// create object
		var button_insert_de_facturas_a_compras = new Runner.form.Button({
			id: this.id ,
			btnName: "insert_de_facturas_a_compras"
		});
		
		// init
		button_insert_de_facturas_a_compras.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

