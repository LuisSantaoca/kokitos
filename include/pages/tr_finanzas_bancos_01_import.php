<?php
			$optionsArray = array( 'fields' => array( 'gridFields' => array( 'fecha_bancos',
'referencia_general',
'ingreso',
'egreso',
'id_cuenta',
'id_movi',
'id_cliente',
'id_prov',
'id_temporada',
'poliza_ok',
'concepto_general',
'referencia_documento',
'UUID',
'capturista',
'vigente',
'consecutivo_upload_id',
'tr_finanzas_bancos_01_id',
'cat_finanzas_bancos_estatus_mu_id' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'id_cliente' => array( 'import_field' ),
'id_temporada' => array( 'import_field1' ),
'vigente' => array( 'import_field2' ),
'fecha_bancos' => array( 'import_field6' ),
'concepto_general' => array( 'import_field7' ),
'ingreso' => array( 'import_field8' ),
'egreso' => array( 'import_field9' ),
'UUID' => array( 'import_field5' ),
'id_cuenta' => array( 'import_field11' ),
'referencia_general' => array( 'import_field16' ),
'capturista' => array( 'import_field18' ),
'referencia_documento' => array( 'import_field19' ),
'poliza_ok' => array( 'import_field24' ),
'id_prov' => array( 'import_field3' ),
'id_movi' => array( 'import_field10' ),
'consecutivo_upload_id' => array( 'import_field4' ),
'tr_finanzas_bancos_01_id' => array( 'import_field12' ),
'cat_finanzas_bancos_estatus_mu_id' => array( 'import_field14' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'import_header' ),
'grid' => array( 'import_field6',
'import_field16',
'import_field8',
'import_field9',
'import_field11',
'import_field10',
'import_field',
'import_field3',
'import_field1',
'import_field24',
'import_field7',
'import_field19',
'import_field5',
'import_field18',
'import_field2',
'import_field4',
'import_field12',
'import_field14' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'import_header' => 'top',
'import_field6' => 'grid',
'import_field16' => 'grid',
'import_field8' => 'grid',
'import_field9' => 'grid',
'import_field11' => 'grid',
'import_field10' => 'grid',
'import_field' => 'grid',
'import_field3' => 'grid',
'import_field1' => 'grid',
'import_field24' => 'grid',
'import_field7' => 'grid',
'import_field19' => 'grid',
'import_field5' => 'grid',
'import_field18' => 'grid',
'import_field2' => 'grid',
'import_field4' => 'grid',
'import_field12' => 'grid',
'import_field14' => 'grid' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'import_header' => array( 'import_header' ),
'import_field' => array( 'import_field',
'import_field1',
'import_field2',
'import_field6',
'import_field7',
'import_field8',
'import_field9',
'import_field5',
'import_field11',
'import_field16',
'import_field18',
'import_field19',
'import_field24',
'import_field3',
'import_field10',
'import_field4',
'import_field12',
'import_field14' ) ),
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
'items' => array( 'import_field6',
'import_field16',
'import_field8',
'import_field9',
'import_field11',
'import_field10',
'import_field',
'import_field3',
'import_field1',
'import_field24',
'import_field7',
'import_field19',
'import_field5',
'import_field18',
'import_field2',
'import_field4',
'import_field12',
'import_field14' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'import_header' => array( 'type' => 'import_header' ),
'import_field' => array( 'field' => 'id_cliente',
'type' => 'import_field' ),
'import_field1' => array( 'field' => 'id_temporada',
'type' => 'import_field' ),
'import_field2' => array( 'field' => 'vigente',
'type' => 'import_field' ),
'import_field6' => array( 'field' => 'fecha_bancos',
'type' => 'import_field' ),
'import_field7' => array( 'field' => 'concepto_general',
'type' => 'import_field' ),
'import_field8' => array( 'field' => 'ingreso',
'type' => 'import_field' ),
'import_field9' => array( 'field' => 'egreso',
'type' => 'import_field' ),
'import_field5' => array( 'field' => 'UUID',
'type' => 'import_field' ),
'import_field11' => array( 'field' => 'id_cuenta',
'type' => 'import_field' ),
'import_field16' => array( 'field' => 'referencia_general',
'type' => 'import_field' ),
'import_field18' => array( 'field' => 'capturista',
'type' => 'import_field' ),
'import_field19' => array( 'field' => 'referencia_documento',
'type' => 'import_field' ),
'import_field24' => array( 'field' => 'poliza_ok',
'type' => 'import_field' ),
'import_field3' => array( 'field' => 'id_prov',
'type' => 'import_field' ),
'import_field10' => array( 'field' => 'id_movi',
'type' => 'import_field' ),
'import_field4' => array( 'field' => 'consecutivo_upload_id',
'type' => 'import_field' ),
'import_field12' => array( 'field' => 'tr_finanzas_bancos_01_id',
'type' => 'import_field' ),
'import_field14' => array( 'field' => 'cat_finanzas_bancos_estatus_mu_id',
'type' => 'import_field' ) ),
'dbProps' => array(  ),
'version' => 14,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'listTotals' => 1 );
		?>