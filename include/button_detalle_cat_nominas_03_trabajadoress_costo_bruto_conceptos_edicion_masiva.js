Runner.buttonEvents["detalle_cat_nominas_03_trabajadoress_costo_bruto_conceptos_edicion_masiva"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'detalle_cat_nominas_03_trabajadoress_costo_bruto_conceptos_edicion_masiva';
	
	if ( !pageObj.buttonEventBefore['detalle_cat_nominas_03_trabajadoress_costo_bruto_conceptos_edicion_masiva'] ) {
		pageObj.buttonEventBefore['detalle_cat_nominas_03_trabajadoress_costo_bruto_conceptos_edicion_masiva'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;

		}
	}
	
	if ( !pageObj.buttonEventAfter['detalle_cat_nominas_03_trabajadoress_costo_bruto_conceptos_edicion_masiva'] ) {
		pageObj.buttonEventAfter['detalle_cat_nominas_03_trabajadoress_costo_bruto_conceptos_edicion_masiva'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;



//location.href='cat_nominas_03_trabajadoress_costo_bruto_conceptos_edicion_masiva_list.php?masterkey1='+result["cat_nominas_01_generales_uuid"]+'&page=list&mastertable=cat_nominas_01_generales';

//location.href='cat_nominas_03_trabajadoress_costo_bruto_conceptos_edicion_masiva_list.php?qs='+result["llave_ano_semana_nominas_uuid"]+'~llave_ano_semana_nominas_uuid~equals&criteria=or';
location.href='cat_nominas_03_trabajadoress_costo_bruto_conceptos_edicion_masiva_list.php?masterkey1='+result["llave_ano_semana_nominas_uuid"]+'&page=list&mastertable=cat_nominas_01_generales';

/*
var uuid = "<?php echo $result['cat_nominas_01_generales_uuid']; ?>";
//variable a modificar el nombre de la pagina
var url = 'cat_nominas_03_trabajadoress_costo_bruto_conceptos_edicion_masiva_list.php?masterkey1=${uuid}&page=list&mastertable=cat_nominas_01_generales';

var popup = Runner.displayPopup({
  url: url,
  header: 'Agregar',
  footer: '<a href="cat_nominas_01_generales_list.php" onclick="window.closePopup(); return false;">Cerrar ventana</a>',
  width: 800,
  height: 600,
  afterCreate: function(popup) {
     window.popupReference = popup;
  }
});

function closePopup() {
  if (window.popupReference) {
    window.popupReference.close();
    window.location.href = 'cat_nominas_01_generales_list.php';
  }
}
*/
		}
	}
	
	$('a[id="detalle_cat_nominas_03_trabajadoress_costo_bruto_conceptos_edicion_masiva"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "detalle_cat_nominas_03_trabajadoress_costo_bruto_conceptos_edicion_masiva" + "_" + Runner.genId();
		
		// create object
		var button_detalle_cat_nominas_03_trabajadoress_costo_bruto_conceptos_edicion_masiva = new Runner.form.Button({
			id: this.id ,
			btnName: "detalle_cat_nominas_03_trabajadoress_costo_bruto_conceptos_edicion_masiva"
		});
		
		// init
		button_detalle_cat_nominas_03_trabajadoress_costo_bruto_conceptos_edicion_masiva.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

