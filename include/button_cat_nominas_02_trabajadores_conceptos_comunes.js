Runner.buttonEvents["cat_nominas_02_trabajadores_conceptos_comunes"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'cat_nominas_02_trabajadores_conceptos_comunes';
	
	if ( !pageObj.buttonEventBefore['cat_nominas_02_trabajadores_conceptos_comunes'] ) {
		pageObj.buttonEventBefore['cat_nominas_02_trabajadores_conceptos_comunes'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;

		}
	}
	
	if ( !pageObj.buttonEventAfter['cat_nominas_02_trabajadores_conceptos_comunes'] ) {
		pageObj.buttonEventAfter['cat_nominas_02_trabajadores_conceptos_comunes'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
// Put your code here.
location.href='cat_nominas_02_trabajadores_conceptos_comunes1_list.php?masterkey1='+result["cat_nominas_01_generales_uuid"]+'&page=list&mastertable=cat_nominas_01_generales';

/*
var uuid = "<?php echo $result['cat_nominas_01_generales_uuid']; ?>";
//variable a modificar pagina
var url = 'cat_nominas_02_trabajadores_conceptos_comunes1_list.php?masterkey1=${uuid}&page=list&mastertable=cat_nominas_01_generales';

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
	
	$('a[id="cat_nominas_02_trabajadores_conceptos_comunes"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "cat_nominas_02_trabajadores_conceptos_comunes" + "_" + Runner.genId();
		
		// create object
		var button_cat_nominas_02_trabajadores_conceptos_comunes = new Runner.form.Button({
			id: this.id ,
			btnName: "cat_nominas_02_trabajadores_conceptos_comunes"
		});
		
		// init
		button_cat_nominas_02_trabajadores_conceptos_comunes.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

