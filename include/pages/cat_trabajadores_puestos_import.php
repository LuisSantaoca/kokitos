<?php
			$optionsArray = array( 'fields' => array( 'gridFields' => array( 'cat_trabajadores_puestos_id',
'descripcion_puesto',
'capturista',
'vigente',
'fecha_de_registro',
'time_stamp',
'sueldo_diario',
'horas_laborales',
'hora_extra',
'bono',
'prima' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'cat_trabajadores_puestos_id' => array( 'import_field' ),
'capturista' => array( 'import_field2' ),
'descripcion_puesto' => array( 'import_field5' ),
'time_stamp' => array( 'import_field1' ),
'fecha_de_registro' => array( 'import_field4' ),
'vigente' => array( 'import_field3' ),
'sueldo_diario' => array( 'import_field6' ),
'horas_laborales' => array( 'import_field7' ),
'hora_extra' => array( 'import_field8' ),
'bono' => array( 'import_field9' ),
'prima' => array( 'import_field10' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'import_header' ),
'grid' => array( 'import_field',
'import_field5',
'import_field2',
'import_field3',
'import_field4',
'import_field1',
'import_field6',
'import_field7',
'import_field8',
'import_field9',
'import_field10' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'import_header' => 'top',
'import_field' => 'grid',
'import_field5' => 'grid',
'import_field2' => 'grid',
'import_field3' => 'grid',
'import_field4' => 'grid',
'import_field1' => 'grid',
'import_field6' => 'grid',
'import_field7' => 'grid',
'import_field8' => 'grid',
'import_field9' => 'grid',
'import_field10' => 'grid' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'import_header' => array( 'import_header' ),
'import_field' => array( 'import_field',
'import_field2',
'import_field5',
'import_field1',
'import_field4',
'import_field3',
'import_field6',
'import_field7',
'import_field8',
'import_field9',
'import_field10' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => false,
'menus' => array(  ),
'calcTotalsFor' => 1 ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'import',
'type' => 'import',
'layoutId' => 'first',
'disabled' => 0,
'default' => 0,
'forms' => array( 'supertop' => array( 'modelId' => 'panel-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'import-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'import_header' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'import-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'import_field',
'import_field5',
'import_field2',
'import_field3',
'import_field4',
'import_field1',
'import_field6',
'import_field7',
'import_field8',
'import_field9',
'import_field10' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'import_header' => array( 'type' => 'import_header' ),
'import_field' => array( 'field' => 'cat_trabajadores_puestos_id',
'type' => 'import_field' ),
'import_field2' => array( 'field' => 'capturista',
'type' => 'import_field' ),
'import_field5' => array( 'field' => 'descripcion_puesto',
'type' => 'import_field' ),
'import_field1' => array( 'field' => 'time_stamp',
'type' => 'import_field' ),
'import_field4' => array( 'field' => 'fecha_de_registro',
'type' => 'import_field' ),
'import_field3' => array( 'field' => 'vigente',
'type' => 'import_field' ),
'import_field6' => array( 'field' => 'sueldo_diario',
'type' => 'import_field' ),
'import_field7' => array( 'field' => 'horas_laborales',
'type' => 'import_field' ),
'import_field8' => array( 'field' => 'hora_extra',
'type' => 'import_field' ),
'import_field9' => array( 'field' => 'bono',
'type' => 'import_field' ),
'import_field10' => array( 'field' => 'prima',
'type' => 'import_field' ) ),
'dbProps' => array(  ),
'version' => 14,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'listTotals' => 1 );
		?>