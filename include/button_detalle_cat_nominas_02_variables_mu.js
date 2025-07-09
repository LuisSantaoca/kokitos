Runner.buttonEvents["detalle_cat_nominas_02_variables_mu"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'detalle_cat_nominas_02_variables_mu';
	
	if ( !pageObj.buttonEventBefore['detalle_cat_nominas_02_variables_mu'] ) {
		pageObj.buttonEventBefore['detalle_cat_nominas_02_variables_mu'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;

		}
	}
	
	if ( !pageObj.buttonEventAfter['detalle_cat_nominas_02_variables_mu'] ) {
		pageObj.buttonEventAfter['detalle_cat_nominas_02_variables_mu'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
location.href='cat_nominas_02_variables_mu_list.php?masterkey1='+result["cat_nominas_01_generales_uuid"]+'&page=list&mastertable=cat_nominas_01_generales';

/*
var uuid = "<?php echo $result['cat_nominas_01_generales_uuid']; ?>";
//variable a modificar el nombre de la pagina
var url = 'cat_nominas_02_variables_mu_list.php?masterkey1=${uuid}&page=list&mastertable=cat_nominas_01_generales';

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
	
	$('a[id="detalle_cat_nominas_02_variables_mu"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "detalle_cat_nominas_02_variables_mu" + "_" + Runner.genId();
		
		// create object
		var button_detalle_cat_nominas_02_variables_mu = new Runner.form.Button({
			id: this.id ,
			btnName: "detalle_cat_nominas_02_variables_mu"
		});
		
		// init
		button_detalle_cat_nominas_02_variables_mu.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

