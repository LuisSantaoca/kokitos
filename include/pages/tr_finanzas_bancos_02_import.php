<?php
			$optionsArray = array( 'fields' => array( 'gridFields' => array( 'tr_finanzas_bancos_01_id',
'capturista_user',
'vigente',
'fecha_de_registro',
'Observacion',
'importe_centro_de_costos',
'cat_finanzas_centros_de_costos_id' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'tr_finanzas_bancos_01_id' => array( 'import_field1' ),
'capturista_user' => array( 'import_field3' ),
'vigente' => array( 'import_field4' ),
'fecha_de_registro' => array( 'import_field5' ),
'Observacion' => array( 'import_field6' ),
'importe_centro_de_costos' => array( 'import_field8' ),
'cat_finanzas_centros_de_costos_id' => array( 'import_field' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'import_header' ),
'grid' => array( 'import_field1',
'import_field3',
'import_field4',
'import_field5',
'import_field6',
'import_field8',
'import_field' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'import_header' => 'top',
'import_field1' => 'grid',
'import_field3' => 'grid',
'import_field4' => 'grid',
'import_field5' => 'grid',
'import_field6' => 'grid',
'import_field8' => 'grid',
'import_field' => 'grid' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'import_header' => array( 'import_header' ),
'import_field' => array( 'import_field1',
'import_field3',
'import_field4',
'import_field5',
'import_field6',
'import_field8',
'import_field' ) ),
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
'items' => array( 'import_field1',
'import_field3',
'import_field4',
'import_field5',
'import_field6',
'import_field8',
'import_field' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'import_header' => array( 'type' => 'import_header' ),
'import_field1' => array( 'field' => 'tr_finanzas_bancos_01_id',
'type' => 'import_field' ),
'import_field3' => array( 'field' => 'capturista_user',
'type' => 'import_field' ),
'import_field4' => array( 'field' => 'vigente',
'type' => 'import_field' ),
'import_field5' => array( 'field' => 'fecha_de_registro',
'type' => 'import_field' ),
'import_field6' => array( 'field' => 'Observacion',
'type' => 'import_field' ),
'import_field8' => array( 'field' => 'importe_centro_de_costos',
'type' => 'import_field' ),
'import_field' => array( 'field' => 'cat_finanzas_centros_de_costos_id',
'type' => 'import_field' ) ),
'dbProps' => array(  ),
'version' => 14,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'listTotals' => 1 );
		?>