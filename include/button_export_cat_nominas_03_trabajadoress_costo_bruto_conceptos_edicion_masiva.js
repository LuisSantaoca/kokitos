Runner.buttonEvents["export_cat_nominas_03_trabajadoress_costo_bruto_conceptos_edicion_masiva"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'export_cat_nominas_03_trabajadoress_costo_bruto_conceptos_edicion_masiva';
	
	if ( !pageObj.buttonEventBefore['export_cat_nominas_03_trabajadoress_costo_bruto_conceptos_edicion_masiva'] ) {
		pageObj.buttonEventBefore['export_cat_nominas_03_trabajadoress_costo_bruto_conceptos_edicion_masiva'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;

		}
	}
	
	if ( !pageObj.buttonEventAfter['export_cat_nominas_03_trabajadoress_costo_bruto_conceptos_edicion_masiva'] ) {
		pageObj.buttonEventAfter['export_cat_nominas_03_trabajadoress_costo_bruto_conceptos_edicion_masiva'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
var popup = Runner.displayPopup({
  url: "cat_nominas_03_trabajadoress_costo_bruto_conceptos_edicion_masiva_import.php",
  width: 1400,
  height: 1000,
  header: 'Agregar trabajadores a la plantilla',
beforeClose: function(popup) {
pageObj.reload({});

}
});

		}
	}
	
	$('a[id="export_cat_nominas_03_trabajadoress_costo_bruto_conceptos_edicion_masiva"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "export_cat_nominas_03_trabajadoress_costo_bruto_conceptos_edicion_masiva" + "_" + Runner.genId();
		
		// create object
		var button_export_cat_nominas_03_trabajadoress_costo_bruto_conceptos_edicion_masiva = new Runner.form.Button({
			id: this.id ,
			btnName: "export_cat_nominas_03_trabajadoress_costo_bruto_conceptos_edicion_masiva"
		});
		
		// init
		button_export_cat_nominas_03_trabajadoress_costo_bruto_conceptos_edicion_masiva.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

