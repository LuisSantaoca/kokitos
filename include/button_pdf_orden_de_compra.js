Runner.buttonEvents["pdf_orden_de_compra"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'pdf_orden_de_compra';
	
	if ( !pageObj.buttonEventBefore['pdf_orden_de_compra'] ) {
		pageObj.buttonEventBefore['pdf_orden_de_compra'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
// Put your code here.
params["txt"] = "Generando";
ajax.setMessage("Orden de compra...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['pdf_orden_de_compra'] ) {
		pageObj.buttonEventAfter['pdf_orden_de_compra'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
// Put your code here.
var message = result["txt"] + " Conexión segura";
ajax.setMessage(message);
window.location.href = "tr_compras_proveedores_01_cargos_abonos_oc_pdf_report.php?q=(Folio_OC~contains~"+row.getFieldValue("tr_compras_proveedores_01_cargos_abonos_id")+")";


		}
	}
	
	$('a[id="pdf_orden_de_compra"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "pdf_orden_de_compra" + "_" + Runner.genId();
		
		// create object
		var button_pdf_orden_de_compra = new Runner.form.Button({
			id: this.id ,
			btnName: "pdf_orden_de_compra"
		});
		
		// init
		button_pdf_orden_de_compra.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

