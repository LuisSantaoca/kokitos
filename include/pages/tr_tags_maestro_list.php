<?php
			$optionsArray = array( 'list' => array( 'inlineAdd' => true,
'detailsAdd' => true,
'inlineEdit' => false,
'spreadsheetMode' => false,
'addToBottom' => false,
'delete' => false,
'updateSelected' => false,
'addInPopup' => null,
'editInPopup' => null,
'viewInPopup' => null,
'clickSort' => true,
'sortDropdown' => false,
'showHideFields' => false,
'reorderFields' => false,
'fieldFilter' => false,
'hideNumberOfRecords' => false ),
'allDetails' => array( 'linkType' => 0 ),
'details' => array( 'tr_tags' => array( 'displayPreview' => 1,
'previewPageId' => 'list',
'showCount' => true,
'hideEmptyChild' => false,
'hideEmptyPreview' => false,
'showProceedLink' => true,
'printDetails' => true ) ),
'listSearch' => array( 'alwaysOnPanelFields' => array(  ),
'searchPanel' => true,
'fixedSearchPanel' => false,
'simpleSearchOptions' => true,
'searchSaving' => false ),
'totals' => array( 'tr_tags_id' => array( 'totalsType' => '' ),
'tr_uuid' => array( 'totalsType' => '' ),
'vigente' => array( 'totalsType' => '' ),
'capturista' => array( 'totalsType' => '' ),
'time_stamp' => array( 'totalsType' => '' ),
'cat_usuarios_licencias_id' => array( 'totalsType' => '' ),
'cat_trabajadores_altas_id' => array( 'totalsType' => '' ),
'COUNT(tag_numero_de_serie)' => array( 'totalsType' => '' ),
'tag_alias' => array( 'totalsType' => '' ),
'numero_de_bote' => array( 'totalsType' => '' ),
'nombre_completo' => array( 'totalsType' => '' ),
'descripcion_empresas' => array( 'totalsType' => '' ),
'cat_trabajadores_altas_id_empresa' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'nombre_completo',
'cat_trabajadores_altas_id',
'cat_trabajadores_altas_id_empresa',
'descripcion_empresas',
'COUNT(tag_numero_de_serie)',
'numero_de_bote' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array( 'COUNT(tag_numero_de_serie)',
'cat_trabajadores_altas_id_empresa',
'descripcion_empresas',
'numero_de_bote',
'nombre_completo',
'cat_trabajadores_altas_id' ),
'filterFields' => array(  ),
'inlineAddFields' => array( 'numero_de_bote' ),
'inlineEditFields' => array(  ),
'fieldItems' => array( 'nombre_completo' => array( 'simple_grid_field10',
'simple_grid_field11' ),
'cat_trabajadores_altas_id' => array( 'simple_grid_field6',
'simple_grid_field8' ),
'cat_trabajadores_altas_id_empresa' => array( 'simple_grid_field2',
'simple_grid_field3' ),
'descripcion_empresas' => array( 'simple_grid_field1',
'simple_grid_field4' ),
'COUNT(tag_numero_de_serie)' => array( 'simple_grid_field7',
'simple_grid_field9' ),
'numero_de_bote' => array( 'simple_grid_field',
'simple_grid_field5' ) ),
'hideEmptyFields' => array(  ),
'fieldFilterFields' => array(  ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array( 'inline_add',
'inline_save_all',
'inline_cancel_all',
'details_found',
'page_size',
'print_panel' ),
'below-grid' => array( 'pagination' ),
'left' => array( 'logo',
'expand_button',
'menu',
'search_panel' ),
'supertop' => array( 'expand_menu_button',
'collapse_button',
'breadcrumb',
'simple_search_field',
'simple_search_option',
'simple_search',
'list_options',
'loginform_login',
'username_button' ),
'top' => array(  ),
'grid' => array( 'simple_grid_field11',
'simple_grid_field10',
'simple_grid_field8',
'simple_grid_field6',
'simple_grid_field3',
'simple_grid_field2',
'simple_grid_field4',
'simple_grid_field1',
'simple_grid_field9',
'simple_grid_field7',
'simple_grid_field5',
'simple_grid_field',
'details_preview',
'grid_checkbox_head',
'grid_checkbox',
'grid_alldetails_link',
'grid_details_link',
'grid_inline_save',
'grid_inline_cancel' ) ),
'formXtTags' => array( 'above-grid' => array( 'inlineadd_link',
'saveall_link',
'cancelall_link',
'details_found',
'recsPerPage',
'print_friendly' ),
'below-grid' => array( 'pagination' ),
'top' => array(  ) ),
'itemForms' => array( 'inline_add' => 'above-grid',
'inline_save_all' => 'above-grid',
'inline_cancel_all' => 'above-grid',
'details_found' => 'above-grid',
'page_size' => 'above-grid',
'print_panel' => 'above-grid',
'pagination' => 'below-grid',
'logo' => 'left',
'expand_button' => 'left',
'menu' => 'left',
'search_panel' => 'left',
'expand_menu_button' => 'supertop',
'collapse_button' => 'supertop',
'breadcrumb' => 'supertop',
'simple_search_field' => 'supertop',
'simple_search_option' => 'supertop',
'simple_search' => 'supertop',
'list_options' => 'supertop',
'loginform_login' => 'supertop',
'username_button' => 'supertop',
'simple_grid_field11' => 'grid',
'simple_grid_field10' => 'grid',
'simple_grid_field8' => 'grid',
'simple_grid_field6' => 'grid',
'simple_grid_field3' => 'grid',
'simple_grid_field2' => 'grid',
'simple_grid_field4' => 'grid',
'simple_grid_field1' => 'grid',
'simple_grid_field9' => 'grid',
'simple_grid_field7' => 'grid',
'simple_grid_field5' => 'grid',
'simple_grid_field' => 'grid',
'details_preview' => 'grid',
'grid_checkbox_head' => 'grid',
'grid_checkbox' => 'grid',
'grid_alldetails_link' => 'grid',
'grid_details_link' => 'grid',
'grid_inline_save' => 'grid',
'grid_inline_cancel' => 'grid' ),
'itemLocations' => array( 'simple_grid_field11' => array( 'location' => 'grid',
'cellId' => 'headcell_field' ),
'simple_grid_field10' => array( 'location' => 'grid',
'cellId' => 'cell_field' ),
'simple_grid_field8' => array( 'location' => 'grid',
'cellId' => 'headcell_field1' ),
'simple_grid_field6' => array( 'location' => 'grid',
'cellId' => 'cell_field1' ),
'simple_grid_field3' => array( 'location' => 'grid',
'cellId' => 'headcell_field2' ),
'simple_grid_field2' => array( 'location' => 'grid',
'cellId' => 'cell_field2' ),
'simple_grid_field4' => array( 'location' => 'grid',
'cellId' => 'headcell_field3' ),
'simple_grid_field1' => array( 'location' => 'grid',
'cellId' => 'cell_field3' ),
'simple_grid_field9' => array( 'location' => 'grid',
'cellId' => 'headcell_field4' ),
'simple_grid_field7' => array( 'location' => 'grid',
'cellId' => 'cell_field4' ),
'simple_grid_field5' => array( 'location' => 'grid',
'cellId' => 'headcell_field5' ),
'simple_grid_field' => array( 'location' => 'grid',
'cellId' => 'cell_field5' ),
'details_preview' => array( 'location' => 'grid',
'cellId' => 'cell_dpreview' ),
'grid_checkbox_head' => array( 'location' => 'grid',
'cellId' => 'headcell_checkbox' ),
'grid_checkbox' => array( 'location' => 'grid',
'cellId' => 'cell_checkbox' ),
'grid_alldetails_link' => array( 'location' => 'grid',
'cellId' => 'cell_details' ),
'grid_details_link' => array( 'location' => 'grid',
'cellId' => 'cell_details' ),
'grid_inline_save' => array( 'location' => 'grid',
'cellId' => 'cell_icons' ),
'grid_inline_cancel' => array( 'location' => 'grid',
'cellId' => 'cell_icons' ) ),
'itemVisiblity' => array( 'breadcrumb' => 5,
'expand_menu_button' => 2,
'print_panel' => 5,
'expand_button' => 5 ) ),
'itemsByType' => array( 'page_size' => array( 'page_size' ),
'details_found' => array( 'details_found' ),
'breadcrumb' => array( 'breadcrumb' ),
'logo' => array( 'logo' ),
'menu' => array( 'menu' ),
'simple_search' => array( 'simple_search' ),
'pagination' => array( 'pagination' ),
'search_panel' => array( 'search_panel' ),
'list_options' => array( 'list_options' ),
'show_search_panel' => array( 'show_search_panel' ),
'hide_search_panel' => array( 'hide_search_panel' ),
'search_panel_field' => array( 'search_panel_field1',
'search_panel_field5',
'search_panel_field10',
'search_panel_field',
'search_panel_field2',
'search_panel_field3' ),
'username_button' => array( 'username_button' ),
'loginform_login' => array( 'loginform_login' ),
'userinfo_link' => array( 'userinfo_link' ),
'logout_link' => array( 'logout_link' ),
'adminarea_link' => array( 'adminarea_link' ),
'changepassword_link' => array( 'changepassword_link' ),
'expand_menu_button' => array( 'expand_menu_button' ),
'collapse_button' => array( 'collapse_button' ),
'print_panel' => array( 'print_panel' ),
'-' => array( '-',
'-1',
'-2',
'-3' ),
'advsearch_link' => array( 'advsearch_link' ),
'print_details' => array( 'print_details' ),
'inline_add' => array( 'inline_add' ),
'inline_save_all' => array( 'inline_save_all' ),
'inline_cancel_all' => array( 'inline_cancel_all' ),
'simple_search_field' => array( 'simple_search_field' ),
'simple_search_option' => array( 'simple_search_option' ),
'grid_field' => array( 'simple_grid_field10',
'simple_grid_field6',
'simple_grid_field2',
'simple_grid_field1',
'simple_grid_field7',
'simple_grid_field' ),
'grid_field_label' => array( 'simple_grid_field11',
'simple_grid_field8',
'simple_grid_field3',
'simple_grid_field4',
'simple_grid_field9',
'simple_grid_field5' ),
'details_preview' => array( 'details_preview' ),
'grid_checkbox' => array( 'grid_checkbox' ),
'grid_checkbox_head' => array( 'grid_checkbox_head' ),
'grid_alldetails_link' => array( 'grid_alldetails_link' ),
'grid_inline_cancel' => array( 'grid_inline_cancel' ),
'grid_inline_save' => array( 'grid_inline_save' ),
'grid_details_link' => array( 'grid_details_link' ),
'expand_button' => array( 'expand_button' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'headcell_icons' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_checkbox' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array( 'checkbox_column' ),
'items' => array( 'grid_checkbox_head' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_details' => array( 'cols' => array( 2 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field' => array( 'cols' => array( 3 ),
'rows' => array( 0 ),
'tags' => array( 'nombre_completo_fieldheadercolumn' ),
'items' => array( 'simple_grid_field11' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field1' => array( 'cols' => array( 4 ),
'rows' => array( 0 ),
'tags' => array( 'cat_trabajadores_altas_id_fieldheadercolumn' ),
'items' => array( 'simple_grid_field8' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field2' => array( 'cols' => array( 5 ),
'rows' => array( 0 ),
'tags' => array( 'cat_trabajadores_altas_id_empresa_fieldheadercolumn' ),
'items' => array( 'simple_grid_field3' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field3' => array( 'cols' => array( 6 ),
'rows' => array( 0 ),
'tags' => array( 'descripcion_empresas_fieldheadercolumn' ),
'items' => array( 'simple_grid_field4' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field4' => array( 'cols' => array( 7 ),
'rows' => array( 0 ),
'tags' => array( 'COUNT_tag_numero_de_serie__fieldheadercolumn' ),
'items' => array( 'simple_grid_field9' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field5' => array( 'cols' => array( 8 ),
'rows' => array( 0 ),
'tags' => array( 'numero_de_bote_fieldheadercolumn' ),
'items' => array( 'simple_grid_field5' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_icons' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array( 'inline_save',
'inline_cancel' ),
'items' => array( 'grid_inline_save',
'grid_inline_cancel' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_checkbox' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array( 'checkbox_column' ),
'items' => array( 'grid_checkbox' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_details' => array( 'cols' => array( 2 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'grid_alldetails_link',
'grid_details_link' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'cell_field' => array( 'cols' => array( 3 ),
'rows' => array( 1 ),
'tags' => array( 'nombre_completo_fieldcolumn' ),
'items' => array( 'simple_grid_field10' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field1' => array( 'cols' => array( 4 ),
'rows' => array( 1 ),
'tags' => array( 'cat_trabajadores_altas_id_fieldcolumn' ),
'items' => array( 'simple_grid_field6' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field2' => array( 'cols' => array( 5 ),
'rows' => array( 1 ),
'tags' => array( 'cat_trabajadores_altas_id_empresa_fieldcolumn' ),
'items' => array( 'simple_grid_field2' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field3' => array( 'cols' => array( 6 ),
'rows' => array( 1 ),
'tags' => array( 'descripcion_empresas_fieldcolumn' ),
'items' => array( 'simple_grid_field1' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field4' => array( 'cols' => array( 7 ),
'rows' => array( 1 ),
'tags' => array( 'COUNT_tag_numero_de_serie__fieldcolumn' ),
'items' => array( 'simple_grid_field7' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field5' => array( 'cols' => array( 8 ),
'rows' => array( 1 ),
'tags' => array( 'numero_de_bote_fieldcolumn' ),
'items' => array( 'simple_grid_field' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_dpreview' => array( 'cols' => array( 0,
1,
2,
3,
4,
5,
6,
7,
8 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'details_preview' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'footcell_icons' => array( 'cols' => array( 0 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_checkbox' => array( 'cols' => array( 1 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_details' => array( 'cols' => array( 2 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field' => array( 'cols' => array( 3 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field1' => array( 'cols' => array( 4 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field2' => array( 'cols' => array( 5 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field3' => array( 'cols' => array( 6 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field4' => array( 'cols' => array( 7 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field5' => array( 'cols' => array( 8 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 9,
'height' => 4 ) ) ),
'loginForm' => array( 'loginForm' => 0 ),
'page' => array( 'verticalBar' => true,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array( 'details_found' => array( 'tag' => 'DISPLAYING',
'type' => 2 ) ) ),
'gridType' => 0,
'recsPerRow' => 1,
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => false,
'menus' => array( array( 'id' => 'main',
'horizontal' => false ) ),
'calcTotalsFor' => 1 ),
'misc' => array( 'type' => 'list',
'breadcrumb' => true ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'dataGrid' => array( 'groupFields' => array(  ) ) );
			$pageArray = array( 'id' => 'list',
'type' => 'list',
'layoutId' => 'leftbar',
'disabled' => 0,
'default' => 0,
'forms' => array( 'above-grid' => array( 'modelId' => 'list-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'inline_add',
'inline_save_all',
'inline_cancel_all' ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'details_found',
'page_size',
'print_panel' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'list-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'pagination' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'left' => array( 'modelId' => 'leftbar-menu',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c0' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c0' => array( 'model' => 'c0',
'items' => array( 'logo',
'expand_button' ) ),
'c1' => array( 'model' => 'c1',
'items' => array( 'menu',
'search_panel' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'supertop' => array( 'modelId' => 'leftbar-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'expand_menu_button',
'collapse_button',
'breadcrumb' ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'simple_search_field',
'simple_search_option',
'simple_search',
'list_options',
'loginform_login',
'username_button' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'list-sidebar-top',
'grid' => array(  ),
'cells' => array(  ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'horizontal-grid',
'grid' => array( array( 'section' => 'head',
'cells' => array( array( 'cell' => 'headcell_icons' ),
array( 'cell' => 'headcell_checkbox' ),
array( 'cell' => 'headcell_details' ),
array( 'cell' => 'headcell_field' ),
array( 'cell' => 'headcell_field1' ),
array( 'cell' => 'headcell_field2' ),
array( 'cell' => 'headcell_field3' ),
array( 'cell' => 'headcell_field4' ),
array( 'cell' => 'headcell_field5' ) ) ),
array( 'section' => 'body',
'cells' => array( array( 'cell' => 'cell_icons' ),
array( 'cell' => 'cell_checkbox' ),
array( 'cell' => 'cell_details' ),
array( 'cell' => 'cell_field' ),
array( 'cell' => 'cell_field1' ),
array( 'cell' => 'cell_field2' ),
array( 'cell' => 'cell_field3' ),
array( 'cell' => 'cell_field4' ),
array( 'cell' => 'cell_field5' ) ) ),
array( 'cells' => array( array( 'cell' => 'cell_dpreview',
'colspan' => 9 ) ),
'section' => 'body' ),
array( 'section' => 'foot',
'cells' => array( array( 'cell' => 'footcell_icons' ),
array( 'cell' => 'footcell_checkbox' ),
array( 'cell' => 'footcell_details' ),
array( 'cell' => 'footcell_field' ),
array( 'cell' => 'footcell_field1' ),
array( 'cell' => 'footcell_field2' ),
array( 'cell' => 'footcell_field3' ),
array( 'cell' => 'footcell_field4' ),
array( 'cell' => 'footcell_field5' ) ) ) ),
'cells' => array( 'headcell_field' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field11' ),
'field' => 'nombre_completo',
'columnName' => 'field' ),
'cell_field' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field10' ),
'field' => 'nombre_completo',
'columnName' => 'field' ),
'footcell_field' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field1' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field8' ),
'field' => 'cat_trabajadores_altas_id',
'columnName' => 'field' ),
'cell_field1' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field6' ),
'field' => 'cat_trabajadores_altas_id',
'columnName' => 'field' ),
'footcell_field1' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field2' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field3' ),
'field' => 'cat_trabajadores_altas_id_empresa',
'columnName' => 'field' ),
'cell_field2' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field2' ),
'field' => 'cat_trabajadores_altas_id_empresa',
'columnName' => 'field' ),
'footcell_field2' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field3' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field4' ),
'field' => 'descripcion_empresas',
'columnName' => 'field' ),
'cell_field3' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field1' ),
'field' => 'descripcion_empresas',
'columnName' => 'field' ),
'footcell_field3' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field4' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field9' ),
'field' => 'COUNT(tag_numero_de_serie)',
'columnName' => 'field' ),
'cell_field4' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field7' ),
'field' => 'COUNT(tag_numero_de_serie)',
'columnName' => 'field' ),
'footcell_field4' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field5' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field5' ),
'field' => 'numero_de_bote',
'columnName' => 'field' ),
'cell_field5' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field' ),
'field' => 'numero_de_bote',
'columnName' => 'field' ),
'footcell_field5' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'cell_dpreview' => array( 'model' => 'cell_dpreview',
'items' => array( 'details_preview' ) ),
'headcell_checkbox' => array( 'model' => 'headcell_checkbox',
'items' => array( 'grid_checkbox_head' ) ),
'cell_checkbox' => array( 'model' => 'cell_checkbox',
'items' => array( 'grid_checkbox' ) ),
'footcell_checkbox' => array( 'model' => 'footcell_checkbox',
'items' => array(  ) ),
'headcell_details' => array( 'model' => 'headcell_details',
'items' => array(  ) ),
'cell_details' => array( 'model' => 'cell_details',
'items' => array( 'grid_alldetails_link',
'grid_details_link' ) ),
'footcell_details' => array( 'model' => 'footcell_details',
'items' => array(  ) ),
'headcell_icons' => array( 'model' => 'headcell_icons',
'items' => array(  ) ),
'cell_icons' => array( 'model' => 'cell_icons',
'items' => array( 'grid_inline_save',
'grid_inline_cancel' ) ),
'footcell_icons' => array( 'model' => 'footcell_icons',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'page_size' => array( 'type' => 'page_size' ),
'details_found' => array( 'type' => 'details_found' ),
'breadcrumb' => array( 'type' => 'breadcrumb' ),
'logo' => array( 'type' => 'logo' ),
'menu' => array( 'type' => 'menu' ),
'simple_search' => array( 'type' => 'simple_search' ),
'pagination' => array( 'type' => 'pagination' ),
'search_panel' => array( 'type' => 'search_panel',
'items' => array( 'search_panel_field5',
'search_panel_field3',
'search_panel_field2',
'search_panel_field',
'search_panel_field10',
'search_panel_field1' ) ),
'list_options' => array( 'type' => 'list_options',
'items' => array( 'advsearch_link',
'show_search_panel',
'hide_search_panel' ) ),
'show_search_panel' => array( 'type' => 'show_search_panel' ),
'hide_search_panel' => array( 'type' => 'hide_search_panel' ),
'search_panel_field1' => array( 'field' => 'cat_trabajadores_altas_id',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field5' => array( 'field' => 'COUNT(tag_numero_de_serie)',
'type' => 'search_panel_field',
'required' => false ),
'username_button' => array( 'type' => 'username_button',
'items' => array( 'userinfo_link',
'logout_link',
'adminarea_link',
'changepassword_link' ) ),
'loginform_login' => array( 'type' => 'loginform_login',
'popup' => false ),
'userinfo_link' => array( 'type' => 'userinfo_link' ),
'logout_link' => array( 'type' => 'logout_link' ),
'adminarea_link' => array( 'type' => 'adminarea_link' ),
'changepassword_link' => array( 'type' => 'changepassword_link' ),
'expand_menu_button' => array( 'type' => 'expand_menu_button' ),
'collapse_button' => array( 'type' => 'collapse_button' ),
'print_panel' => array( 'type' => 'print_panel',
'items' => array( 'print_details' ) ),
'-' => array( 'type' => '-' ),
'-1' => array( 'type' => '-' ),
'-2' => array( 'type' => '-' ),
'advsearch_link' => array( 'type' => 'advsearch_link' ),
'-3' => array( 'type' => '-' ),
'search_panel_field10' => array( 'field' => 'nombre_completo',
'type' => 'search_panel_field',
'required' => false ),
'print_details' => array( 'type' => 'print_details',
'tables' => array( 'tr_tags' => true ) ),
'search_panel_field' => array( 'field' => 'numero_de_bote',
'type' => 'search_panel_field' ),
'inline_add' => array( 'type' => 'inline_add' ),
'inline_save_all' => array( 'type' => 'inline_save_all' ),
'inline_cancel_all' => array( 'type' => 'inline_cancel_all' ),
'search_panel_field2' => array( 'field' => 'descripcion_empresas',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field3' => array( 'field' => 'cat_trabajadores_altas_id_empresa',
'type' => 'search_panel_field',
'required' => false ),
'simple_search_field' => array( 'type' => 'simple_search_field' ),
'simple_search_option' => array( 'type' => 'simple_search_option' ),
'simple_grid_field10' => array( 'field' => 'nombre_completo',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false,
'clickSort' => true ),
'simple_grid_field11' => array( 'type' => 'grid_field_label',
'field' => 'nombre_completo',
'clickSort' => true ),
'simple_grid_field6' => array( 'field' => 'cat_trabajadores_altas_id',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false,
'clickSort' => true ),
'simple_grid_field8' => array( 'type' => 'grid_field_label',
'field' => 'cat_trabajadores_altas_id',
'clickSort' => true ),
'simple_grid_field2' => array( 'field' => 'cat_trabajadores_altas_id_empresa',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false,
'clickSort' => true ),
'simple_grid_field3' => array( 'type' => 'grid_field_label',
'field' => 'cat_trabajadores_altas_id_empresa',
'clickSort' => true ),
'simple_grid_field1' => array( 'field' => 'descripcion_empresas',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false,
'clickSort' => true ),
'simple_grid_field4' => array( 'type' => 'grid_field_label',
'field' => 'descripcion_empresas',
'clickSort' => true ),
'simple_grid_field7' => array( 'field' => 'COUNT(tag_numero_de_serie)',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false,
'clickSort' => true ),
'simple_grid_field9' => array( 'type' => 'grid_field_label',
'field' => 'COUNT(tag_numero_de_serie)',
'clickSort' => true ),
'simple_grid_field' => array( 'field' => 'numero_de_bote',
'type' => 'grid_field',
'inlineAdd' => true,
'inlineEdit' => false,
'clickSort' => true ),
'simple_grid_field5' => array( 'type' => 'grid_field_label',
'field' => 'numero_de_bote',
'clickSort' => true ),
'details_preview' => array( 'type' => 'details_preview',
'table' => 'tr_tags',
'items' => array(  ),
'popup' => false,
'hideEmptyPreview' => false,
'proceedLink' => true,
'pageId' => 'list' ),
'grid_checkbox' => array( 'type' => 'grid_checkbox' ),
'grid_checkbox_head' => array( 'type' => 'grid_checkbox_head' ),
'grid_alldetails_link' => array( 'type' => 'grid_alldetails_link' ),
'grid_inline_cancel' => array( 'type' => 'grid_inline_cancel' ),
'grid_inline_save' => array( 'type' => 'grid_inline_save' ),
'grid_details_link' => array( 'type' => 'grid_details_link',
'table' => 'tr_tags',
'badge' => true,
'hideIfNone' => false,
'showCount' => true ),
'expand_button' => array( 'type' => 'expand_button' ) ),
'dbProps' => array(  ),
'spreadsheetGrid' => false,
'version' => 14,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'listTotals' => 1 );
		?>