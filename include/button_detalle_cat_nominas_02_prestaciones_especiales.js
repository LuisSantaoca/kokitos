Runner.buttonEvents["detalle_cat_nominas_02_prestaciones_especiales"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'detalle_cat_nominas_02_prestaciones_especiales';
	
	if ( !pageObj.buttonEventBefore['detalle_cat_nominas_02_prestaciones_especiales'] ) {
		pageObj.buttonEventBefore['detalle_cat_nominas_02_prestaciones_especiales'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;

		}
	}
	
	if ( !pageObj.buttonEventAfter['detalle_cat_nominas_02_prestaciones_especiales'] ) {
		pageObj.buttonEventAfter['detalle_cat_nominas_02_prestaciones_especiales'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
location.href='cat_nominas_02_prestaciones_especiales_list.php?masterkey1='+result["cat_nominas_01_generales_uuid"]+'&page=list&mastertable=cat_nominas_01_generales';

/*
var uuid = "<?php echo $result['cat_nominas_01_generales_uuid']; ?>";
//variable a modificar el nombre de la pagina
var url = 'cat_nominas_02_prestaciones_especiales_list.php?masterkey1=${uuid}&page=list&mastertable=cat_nominas_01_generales';

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
	
	$('a[id="detalle_cat_nominas_02_prestaciones_especiales"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "detalle_cat_nominas_02_prestaciones_especiales" + "_" + Runner.genId();
		
		// create object
		var button_detalle_cat_nominas_02_prestaciones_especiales = new Runner.form.Button({
			id: this.id ,
			btnName: "detalle_cat_nominas_02_prestaciones_especiales"
		});
		
		// init
		button_detalle_cat_nominas_02_prestaciones_especiales.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

