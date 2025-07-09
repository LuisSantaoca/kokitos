Runner.buttonEvents["cat_nominas_02_trabajadores_auxiliar_carga_masiva"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'cat_nominas_02_trabajadores_auxiliar_carga_masiva';
	
	if ( !pageObj.buttonEventBefore['cat_nominas_02_trabajadores_auxiliar_carga_masiva'] ) {
		pageObj.buttonEventBefore['cat_nominas_02_trabajadores_auxiliar_carga_masiva'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;

		}
	}
	
	if ( !pageObj.buttonEventAfter['cat_nominas_02_trabajadores_auxiliar_carga_masiva'] ) {
		pageObj.buttonEventAfter['cat_nominas_02_trabajadores_auxiliar_carga_masiva'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;

var popup = Runner.displayPopup({
  url: "cat_nominas_02_trabajadores_auxiliar_import.php",
  width: 700,
  height: 500,
  header: 'Agregar trabajadores a la plantilla',
beforeClose: function(popup) {
pageObj.reload({});

}
});



		}
	}
	
	$('a[id="cat_nominas_02_trabajadores_auxiliar_carga_masiva"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "cat_nominas_02_trabajadores_auxiliar_carga_masiva" + "_" + Runner.genId();
		
		// create object
		var button_cat_nominas_02_trabajadores_auxiliar_carga_masiva = new Runner.form.Button({
			id: this.id ,
			btnName: "cat_nominas_02_trabajadores_auxiliar_carga_masiva"
		});
		
		// init
		button_cat_nominas_02_trabajadores_auxiliar_carga_masiva.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

