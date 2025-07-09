Runner.buttonEvents["cat_nominas_02_unidades_productivas"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'cat_nominas_02_unidades_productivas';
	
	if ( !pageObj.buttonEventBefore['cat_nominas_02_unidades_productivas'] ) {
		pageObj.buttonEventBefore['cat_nominas_02_unidades_productivas'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;

		}
	}
	
	if ( !pageObj.buttonEventAfter['cat_nominas_02_unidades_productivas'] ) {
		pageObj.buttonEventAfter['cat_nominas_02_unidades_productivas'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;


// Place event code here.
// Use "Add Action" button to add code snippets.



location.href='cat_nominas_02_unidades_productivas_list.php?masterkey1='+result["cat_nominas_01_generales_uuid"]+'&page=list&mastertable=cat_nominas_01_generales';
/*
var uuid = "<?php echo $result['cat_nominas_01_generales_uuid']; ?>";
//variable a modificar pagina
var url = 'cat_nominas_02_unidades_productivas_list.php?masterkey1=${uuid}&page=list&mastertable=cat_nominas_01_generales';

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
	
	$('a[id="cat_nominas_02_unidades_productivas"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "cat_nominas_02_unidades_productivas" + "_" + Runner.genId();
		
		// create object
		var button_cat_nominas_02_unidades_productivas = new Runner.form.Button({
			id: this.id ,
			btnName: "cat_nominas_02_unidades_productivas"
		});
		
		// init
		button_cat_nominas_02_unidades_productivas.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

