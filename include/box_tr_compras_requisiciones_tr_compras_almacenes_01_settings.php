<?php
$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01 = array();
$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".searchableFields"] = array();
$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".ShortName"] = "box_tr_compras_requisiciones_tr_compras_almacenes_01";
$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".OwnerID"] = "";
$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".OriginalTable"] = "tr_compras_requisiciones_01";


$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".originalPagesByType"] = $tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".pagesByType"];
$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".originalPages"] = $tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".pages"];
$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );
$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".originalDefaultPages"] = $tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".defaultPages"];

//	field labels
$fieldLabelsbox_tr_compras_requisiciones_tr_compras_almacenes_01 = array();
$fieldToolTipsbox_tr_compras_requisiciones_tr_compras_almacenes_01 = array();
$pageTitlesbox_tr_compras_requisiciones_tr_compras_almacenes_01 = array();
$placeHoldersbox_tr_compras_requisiciones_tr_compras_almacenes_01 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsbox_tr_compras_requisiciones_tr_compras_almacenes_01["Spanish"] = array();
	$fieldToolTipsbox_tr_compras_requisiciones_tr_compras_almacenes_01["Spanish"] = array();
	$placeHoldersbox_tr_compras_requisiciones_tr_compras_almacenes_01["Spanish"] = array();
	$pageTitlesbox_tr_compras_requisiciones_tr_compras_almacenes_01["Spanish"] = array();
	$fieldLabelsbox_tr_compras_requisiciones_tr_compras_almacenes_01["Spanish"]["tr_compras_requisiciones_01_id"] = "Folio";
	$fieldToolTipsbox_tr_compras_requisiciones_tr_compras_almacenes_01["Spanish"]["tr_compras_requisiciones_01_id"] = "";
	$placeHoldersbox_tr_compras_requisiciones_tr_compras_almacenes_01["Spanish"]["tr_compras_requisiciones_01_id"] = "";
	$fieldLabelsbox_tr_compras_requisiciones_tr_compras_almacenes_01["Spanish"]["cat_usuarios_licencias_id"] = "Cat Usuarios Licencias Id";
	$fieldToolTipsbox_tr_compras_requisiciones_tr_compras_almacenes_01["Spanish"]["cat_usuarios_licencias_id"] = "";
	$placeHoldersbox_tr_compras_requisiciones_tr_compras_almacenes_01["Spanish"]["cat_usuarios_licencias_id"] = "";
	$fieldLabelsbox_tr_compras_requisiciones_tr_compras_almacenes_01["Spanish"]["descripcion"] = "Descripcion";
	$fieldToolTipsbox_tr_compras_requisiciones_tr_compras_almacenes_01["Spanish"]["descripcion"] = "";
	$placeHoldersbox_tr_compras_requisiciones_tr_compras_almacenes_01["Spanish"]["descripcion"] = "";
	if (count($fieldToolTipsbox_tr_compras_requisiciones_tr_compras_almacenes_01["Spanish"]))
		$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".isUseToolTips"] = true;
}





$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".shortTableName"] = "box_tr_compras_requisiciones_tr_compras_almacenes_01";
$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".nSecOptions"] = 0;

$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".mainTableOwnerID"] = "";
$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".entityType"] = 1;
$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".strOriginalTableName"] = "tr_compras_requisiciones_01";

	



$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".showAddInPopup"] = false;

$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".showEditInPopup"] = false;

$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".showViewInPopup"] = false;

$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".listAjax"] = false;
//	temporary
//$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".listAjax"] = false;

	$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".audit"] = true;

	$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".locking"] = true;


$pages = $tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".edit"] = true;
	$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".afterEditAction"] = 1;
	$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".closePopupAfterEdit"] = 1;
	$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".add"] = true;
$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".afterAddAction"] = 5;
$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".closePopupAfterAdd"] = 1;
$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".afterAddActionDetTable"] = "tr_compras_requisiciones_02_cotizaciones";
}

if( $pages[PAGE_LIST] ) {
	$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".list"] = true;
}



$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".strSortControlSettingsJSON"] = "";

$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".strClickActionJSON"] = "{\"fields\":{\"capturista\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"cat_compras_documentos_mu_id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"cat_compras_estatus_mu_id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"cat_compras_intermediarios_id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"cat_compras_proveedores_asignacion_mu_id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"cat_compras_proveedores_id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"cat_usuarios_licencias_id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"fecha_de_captura\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"fecha_de_orden_de_compra\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"importe_neto_orden_de_compra\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"llave_tr_compras_requisiciones_01\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"llave_unica_fecha_folio_imei_usuario\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"numero_de_productos\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"observaciones\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"referencia_proveedor\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"time_stamp\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"tr_compras_requisiciones_01_id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"tr_proyectos_productivos_01_id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"vigente\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}}},\"row\":{\"action\":\"open\",\"codeData\":{},\"gridData\":{\"action\":\"checkbox\",\"table\":\"tr_compras_requisiciones_02_productos\"},\"openData\":{\"how\":\"goto\",\"page\":\"details\",\"table\":\"tr_compras_requisiciones_02_productos\",\"url\":\"\"}}}";



if( $pages[PAGE_VIEW] ) {
$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".printFriendly"] = true;
}



$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".ajaxCodeSnippetAdded"] = false;

$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".buttonsAdded"] = false;

$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".addPageEvents"] = true;

// use timepicker for search panel
$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".isUseTimeForSearch"] = false;


$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".badgeColor"] = "9ACD32";


$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".allSearchFields"] = array();
$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".filterFields"] = array();
$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".requiredSearchFields"] = array();

$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".googleLikeFields"] = array();
$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".googleLikeFields"][] = "tr_compras_requisiciones_01_id";
$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".googleLikeFields"][] = "descripcion";
$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".googleLikeFields"][] = "cat_usuarios_licencias_id";



$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".tableType"] = "list";

$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".printerPageOrientation"] = 0;
$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".nPrinterPageScale"] = 100;

$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".nPrinterSplitRecords"] = 40;

$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".geocodingEnabled"] = false;





$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".isResizeColumns"] = true;





$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".pageSize"] = 20;

$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY tr_compras_requisiciones_01.tr_compras_requisiciones_01_id DESC";
$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".strOrderBy"] = $tstrOrderBy;

$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".orderindexes"] = array();
			$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "tr_compras_requisiciones_01.tr_compras_requisiciones_01_id");


$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".sqlHead"] = "SELECT tr_compras_requisiciones_01.tr_compras_requisiciones_01_id,  concat(if(date_format(tr_compras_requisiciones_01.fecha_de_orden_de_compra, '%Y-%m-%d') is null, 0, date_format(tr_compras_requisiciones_01.fecha_de_orden_de_compra, '%Y-%m-%d')), '-', cat_compras_proveedores.descripcion_proveedores, ' \$', tr_compras_requisiciones_01.importe_neto_orden_de_compra, '-', cat_compras_documentos_mu.descripcion_compras_documentos_mu, ' #', tr_compras_requisiciones_01.referencia_proveedor) AS descripcion,  cat_usuarios.cat_usuarios_licencias_id";
$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".sqlFrom"] = "FROM tr_compras_requisiciones_01  LEFT OUTER JOIN cat_usuarios ON tr_compras_requisiciones_01.capturista = cat_usuarios.usuario  LEFT OUTER JOIN cat_compras_proveedores ON tr_compras_requisiciones_01.cat_compras_proveedores_id = cat_compras_proveedores.cat_compras_proveedores_id  LEFT OUTER JOIN cat_compras_documentos_mu ON tr_compras_requisiciones_01.cat_compras_documentos_mu_id = cat_compras_documentos_mu.cat_compras_documentos_mu_id";
$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".sqlWhereExpr"] = "(tr_compras_requisiciones_01.vigente =1) AND (tr_compras_requisiciones_01.cat_compras_estatus_mu_id = 1)";
$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "cat_usuarios.cat_usuarios_licencias_id = ':user.cat_usuarios_licencias_id'",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".arrGroupsPerPage"] = $arrGPP;

$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".highlightSearchResults"] = true;

$tableKeysbox_tr_compras_requisiciones_tr_compras_almacenes_01 = array();
$tableKeysbox_tr_compras_requisiciones_tr_compras_almacenes_01[] = "tr_compras_requisiciones_01_id";
$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".Keys"] = $tableKeysbox_tr_compras_requisiciones_tr_compras_almacenes_01;


$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".hideMobileList"] = array();




//	tr_compras_requisiciones_01_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "tr_compras_requisiciones_01_id";
	$fdata["GoodName"] = "tr_compras_requisiciones_01_id";
	$fdata["ownerTable"] = "tr_compras_requisiciones_01";
	$fdata["Label"] = GetFieldLabel("box_tr_compras_requisiciones_tr_compras_almacenes_01","tr_compras_requisiciones_01_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "tr_compras_requisiciones_01_id";

		$fdata["sourceSingle"] = "tr_compras_requisiciones_01_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_compras_requisiciones_01.tr_compras_requisiciones_01_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01["tr_compras_requisiciones_01_id"] = $fdata;
		$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".searchableFields"][] = "tr_compras_requisiciones_01_id";
//	descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion";
	$fdata["GoodName"] = "descripcion";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("box_tr_compras_requisiciones_tr_compras_almacenes_01","descripcion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "concat(if(date_format(tr_compras_requisiciones_01.fecha_de_orden_de_compra, '%Y-%m-%d') is null, 0, date_format(tr_compras_requisiciones_01.fecha_de_orden_de_compra, '%Y-%m-%d')), '-', cat_compras_proveedores.descripcion_proveedores, ' \$', tr_compras_requisiciones_01.importe_neto_orden_de_compra, '-', cat_compras_documentos_mu.descripcion_compras_documentos_mu, ' #', tr_compras_requisiciones_01.referencia_proveedor)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01["descripcion"] = $fdata;
		$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".searchableFields"][] = "descripcion";
//	cat_usuarios_licencias_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cat_usuarios_licencias_id";
	$fdata["GoodName"] = "cat_usuarios_licencias_id";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("box_tr_compras_requisiciones_tr_compras_almacenes_01","cat_usuarios_licencias_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_usuarios_licencias_id";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_usuarios.cat_usuarios_licencias_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01["cat_usuarios_licencias_id"] = $fdata;
		$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".searchableFields"][] = "cat_usuarios_licencias_id";


$tables_data["box_tr_compras_requisiciones_tr_compras_almacenes_01"]=&$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01;
$field_labels["box_tr_compras_requisiciones_tr_compras_almacenes_01"] = &$fieldLabelsbox_tr_compras_requisiciones_tr_compras_almacenes_01;
$fieldToolTips["box_tr_compras_requisiciones_tr_compras_almacenes_01"] = &$fieldToolTipsbox_tr_compras_requisiciones_tr_compras_almacenes_01;
$placeHolders["box_tr_compras_requisiciones_tr_compras_almacenes_01"] = &$placeHoldersbox_tr_compras_requisiciones_tr_compras_almacenes_01;
$page_titles["box_tr_compras_requisiciones_tr_compras_almacenes_01"] = &$pageTitlesbox_tr_compras_requisiciones_tr_compras_almacenes_01;


changeTextControlsToDate( "box_tr_compras_requisiciones_tr_compras_almacenes_01" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["box_tr_compras_requisiciones_tr_compras_almacenes_01"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["box_tr_compras_requisiciones_tr_compras_almacenes_01"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_box_tr_compras_requisiciones_tr_compras_almacenes_01()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "tr_compras_requisiciones_01.tr_compras_requisiciones_01_id,  concat(if(date_format(tr_compras_requisiciones_01.fecha_de_orden_de_compra, '%Y-%m-%d') is null, 0, date_format(tr_compras_requisiciones_01.fecha_de_orden_de_compra, '%Y-%m-%d')), '-', cat_compras_proveedores.descripcion_proveedores, ' \$', tr_compras_requisiciones_01.importe_neto_orden_de_compra, '-', cat_compras_documentos_mu.descripcion_compras_documentos_mu, ' #', tr_compras_requisiciones_01.referencia_proveedor) AS descripcion,  cat_usuarios.cat_usuarios_licencias_id";
$proto0["m_strFrom"] = "FROM tr_compras_requisiciones_01  LEFT OUTER JOIN cat_usuarios ON tr_compras_requisiciones_01.capturista = cat_usuarios.usuario  LEFT OUTER JOIN cat_compras_proveedores ON tr_compras_requisiciones_01.cat_compras_proveedores_id = cat_compras_proveedores.cat_compras_proveedores_id  LEFT OUTER JOIN cat_compras_documentos_mu ON tr_compras_requisiciones_01.cat_compras_documentos_mu_id = cat_compras_documentos_mu.cat_compras_documentos_mu_id";
$proto0["m_strWhere"] = "(tr_compras_requisiciones_01.vigente =1) AND (tr_compras_requisiciones_01.cat_compras_estatus_mu_id = 1)";
$proto0["m_strOrderBy"] = "ORDER BY tr_compras_requisiciones_01.tr_compras_requisiciones_01_id DESC";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(tr_compras_requisiciones_01.vigente =1) AND (tr_compras_requisiciones_01.cat_compras_estatus_mu_id = 1)";
$proto2["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(tr_compras_requisiciones_01.vigente =1) AND (tr_compras_requisiciones_01.cat_compras_estatus_mu_id = 1)"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "tr_compras_requisiciones_01.vigente =1";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "tr_compras_requisiciones_01",
	"m_srcTableName" => "box_tr_compras_requisiciones_tr_compras_almacenes_01"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "=1";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = true;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "tr_compras_requisiciones_01.cat_compras_estatus_mu_id = 1";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cat_compras_estatus_mu_id",
	"m_strTable" => "tr_compras_requisiciones_01",
	"m_srcTableName" => "box_tr_compras_requisiciones_tr_compras_almacenes_01"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "= 1";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = true;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto8=array();
$proto8["m_sql"] = "";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "";
$proto8["m_havingmode"] = false;
$proto8["m_inBrackets"] = false;
$proto8["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto8);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "tr_compras_requisiciones_01_id",
	"m_strTable" => "tr_compras_requisiciones_01",
	"m_srcTableName" => "box_tr_compras_requisiciones_tr_compras_almacenes_01"
));

$proto10["m_sql"] = "tr_compras_requisiciones_01.tr_compras_requisiciones_01_id";
$proto10["m_srcTableName"] = "box_tr_compras_requisiciones_tr_compras_almacenes_01";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$proto13=array();
$proto13["m_functiontype"] = "SQLF_CUSTOM";
$proto13["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "if(date_format(tr_compras_requisiciones_01.fecha_de_orden_de_compra, '%Y-%m-%d') is null, 0, date_format(tr_compras_requisiciones_01.fecha_de_orden_de_compra, '%Y-%m-%d'))"
));

$proto13["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'-'"
));

$proto13["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "cat_compras_proveedores.descripcion_proveedores"
));

$proto13["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' \$'"
));

$proto13["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "tr_compras_requisiciones_01.importe_neto_orden_de_compra"
));

$proto13["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'-'"
));

$proto13["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "cat_compras_documentos_mu.descripcion_compras_documentos_mu"
));

$proto13["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' #'"
));

$proto13["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "tr_compras_requisiciones_01.referencia_proveedor"
));

$proto13["m_arguments"][]=$obj;
$proto13["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto13);

$proto12["m_sql"] = "concat(if(date_format(tr_compras_requisiciones_01.fecha_de_orden_de_compra, '%Y-%m-%d') is null, 0, date_format(tr_compras_requisiciones_01.fecha_de_orden_de_compra, '%Y-%m-%d')), '-', cat_compras_proveedores.descripcion_proveedores, ' \$', tr_compras_requisiciones_01.importe_neto_orden_de_compra, '-', cat_compras_documentos_mu.descripcion_compras_documentos_mu, ' #', tr_compras_requisiciones_01.referencia_proveedor)";
$proto12["m_srcTableName"] = "box_tr_compras_requisiciones_tr_compras_almacenes_01";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "descripcion";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_usuarios_licencias_id",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "box_tr_compras_requisiciones_tr_compras_almacenes_01"
));

$proto23["m_sql"] = "cat_usuarios.cat_usuarios_licencias_id";
$proto23["m_srcTableName"] = "box_tr_compras_requisiciones_tr_compras_almacenes_01";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto25=array();
$proto25["m_link"] = "SQLL_MAIN";
			$proto26=array();
$proto26["m_strName"] = "tr_compras_requisiciones_01";
$proto26["m_srcTableName"] = "box_tr_compras_requisiciones_tr_compras_almacenes_01";
$proto26["m_columns"] = array();
$proto26["m_columns"][] = "tr_compras_requisiciones_01_id";
$proto26["m_columns"][] = "tr_compras_requisiciones_01_uuid";
$proto26["m_columns"][] = "time_stamp";
$proto26["m_columns"][] = "vigente";
$proto26["m_columns"][] = "capturista";
$proto26["m_columns"][] = "fecha_de_captura";
$proto26["m_columns"][] = "cat_compras_proveedores_id";
$proto26["m_columns"][] = "cat_compras_estatus_mu_id";
$proto26["m_columns"][] = "fecha_de_orden_de_compra";
$proto26["m_columns"][] = "importe_neto_orden_de_compra";
$proto26["m_columns"][] = "referencia_proveedor";
$proto26["m_columns"][] = "numero_de_productos";
$proto26["m_columns"][] = "llave_tr_compras_requisiciones_01";
$proto26["m_columns"][] = "observaciones";
$proto26["m_columns"][] = "cat_compras_documentos_mu_id";
$proto26["m_columns"][] = "cat_compras_proveedores_asignacion_mu_id";
$proto26["m_columns"][] = "capturista_que_autoriza";
$proto26["m_columns"][] = "cat_finanzas_transacciones_id";
$proto26["m_columns"][] = "cat_trabajadores_altas_id_solicitante";
$proto26["m_columns"][] = "cat_compras_tipo_de_pago_mu_id";
$proto26["m_columns"][] = "cat_finanzas_movimientos_id";
$proto26["m_columns"][] = "cat_finanzas_cuentas_de_balance_03_mu_id";
$proto26["m_columns"][] = "RFC_emisor";
$proto26["m_columns"][] = "alias_cuenta_de_cargo";
$obj = new SQLTable($proto26);

$proto25["m_table"] = $obj;
$proto25["m_sql"] = "tr_compras_requisiciones_01";
$proto25["m_alias"] = "";
$proto25["m_srcTableName"] = "box_tr_compras_requisiciones_tr_compras_almacenes_01";
$proto27=array();
$proto27["m_sql"] = "";
$proto27["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto27["m_column"]=$obj;
$proto27["m_contained"] = array();
$proto27["m_strCase"] = "";
$proto27["m_havingmode"] = false;
$proto27["m_inBrackets"] = false;
$proto27["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto27);

$proto25["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto25);

$proto0["m_fromlist"][]=$obj;
												$proto29=array();
$proto29["m_link"] = "SQLL_LEFTJOIN";
			$proto30=array();
$proto30["m_strName"] = "cat_usuarios";
$proto30["m_srcTableName"] = "box_tr_compras_requisiciones_tr_compras_almacenes_01";
$proto30["m_columns"] = array();
$proto30["m_columns"][] = "cat_usuarios_id";
$proto30["m_columns"][] = "time_stamp";
$proto30["m_columns"][] = "vigente";
$proto30["m_columns"][] = "capturista";
$proto30["m_columns"][] = "usuario";
$proto30["m_columns"][] = "cat_usuarios_licencias_id";
$proto30["m_columns"][] = "pass";
$proto30["m_columns"][] = "nombre";
$proto30["m_columns"][] = "correo";
$proto30["m_columns"][] = "cat_trabajadores_altas_id";
$proto30["m_columns"][] = "res_autorizacion";
$proto30["m_columns"][] = "session";
$proto30["m_columns"][] = "tipo";
$proto30["m_columns"][] = "session_v2";
$obj = new SQLTable($proto30);

$proto29["m_table"] = $obj;
$proto29["m_sql"] = "LEFT OUTER JOIN cat_usuarios ON tr_compras_requisiciones_01.capturista = cat_usuarios.usuario";
$proto29["m_alias"] = "";
$proto29["m_srcTableName"] = "box_tr_compras_requisiciones_tr_compras_almacenes_01";
$proto31=array();
$proto31["m_sql"] = "cat_usuarios.usuario = tr_compras_requisiciones_01.capturista";
$proto31["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "usuario",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "box_tr_compras_requisiciones_tr_compras_almacenes_01"
));

$proto31["m_column"]=$obj;
$proto31["m_contained"] = array();
$proto31["m_strCase"] = "= tr_compras_requisiciones_01.capturista";
$proto31["m_havingmode"] = false;
$proto31["m_inBrackets"] = false;
$proto31["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto31);

$proto29["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto29);

$proto0["m_fromlist"][]=$obj;
												$proto33=array();
$proto33["m_link"] = "SQLL_LEFTJOIN";
			$proto34=array();
$proto34["m_strName"] = "cat_compras_proveedores";
$proto34["m_srcTableName"] = "box_tr_compras_requisiciones_tr_compras_almacenes_01";
$proto34["m_columns"] = array();
$proto34["m_columns"][] = "cat_compras_proveedores_id";
$proto34["m_columns"][] = "time_stamp";
$proto34["m_columns"][] = "vigente";
$proto34["m_columns"][] = "capturista";
$proto34["m_columns"][] = "descripcion_proveedores";
$proto34["m_columns"][] = "rfc_compras_proveedores";
$proto34["m_columns"][] = "cat_compras_proveedores_categorias_id";
$proto34["m_columns"][] = "id_migracion";
$proto34["m_columns"][] = "llave_rfc_licencia";
$proto34["m_columns"][] = "costo_check";
$obj = new SQLTable($proto34);

$proto33["m_table"] = $obj;
$proto33["m_sql"] = "LEFT OUTER JOIN cat_compras_proveedores ON tr_compras_requisiciones_01.cat_compras_proveedores_id = cat_compras_proveedores.cat_compras_proveedores_id";
$proto33["m_alias"] = "";
$proto33["m_srcTableName"] = "box_tr_compras_requisiciones_tr_compras_almacenes_01";
$proto35=array();
$proto35["m_sql"] = "cat_compras_proveedores.cat_compras_proveedores_id = tr_compras_requisiciones_01.cat_compras_proveedores_id";
$proto35["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cat_compras_proveedores_id",
	"m_strTable" => "cat_compras_proveedores",
	"m_srcTableName" => "box_tr_compras_requisiciones_tr_compras_almacenes_01"
));

$proto35["m_column"]=$obj;
$proto35["m_contained"] = array();
$proto35["m_strCase"] = "= tr_compras_requisiciones_01.cat_compras_proveedores_id";
$proto35["m_havingmode"] = false;
$proto35["m_inBrackets"] = false;
$proto35["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto35);

$proto33["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto33);

$proto0["m_fromlist"][]=$obj;
												$proto37=array();
$proto37["m_link"] = "SQLL_LEFTJOIN";
			$proto38=array();
$proto38["m_strName"] = "cat_compras_documentos_mu";
$proto38["m_srcTableName"] = "box_tr_compras_requisiciones_tr_compras_almacenes_01";
$proto38["m_columns"] = array();
$proto38["m_columns"][] = "cat_compras_documentos_mu_id";
$proto38["m_columns"][] = "time_stamp";
$proto38["m_columns"][] = "vigente";
$proto38["m_columns"][] = "capturista";
$proto38["m_columns"][] = "imei";
$proto38["m_columns"][] = "descripcion_compras_documentos_mu";
$proto38["m_columns"][] = "filtro_documentos_caja";
$obj = new SQLTable($proto38);

$proto37["m_table"] = $obj;
$proto37["m_sql"] = "LEFT OUTER JOIN cat_compras_documentos_mu ON tr_compras_requisiciones_01.cat_compras_documentos_mu_id = cat_compras_documentos_mu.cat_compras_documentos_mu_id";
$proto37["m_alias"] = "";
$proto37["m_srcTableName"] = "box_tr_compras_requisiciones_tr_compras_almacenes_01";
$proto39=array();
$proto39["m_sql"] = "cat_compras_documentos_mu.cat_compras_documentos_mu_id = tr_compras_requisiciones_01.cat_compras_documentos_mu_id";
$proto39["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cat_compras_documentos_mu_id",
	"m_strTable" => "cat_compras_documentos_mu",
	"m_srcTableName" => "box_tr_compras_requisiciones_tr_compras_almacenes_01"
));

$proto39["m_column"]=$obj;
$proto39["m_contained"] = array();
$proto39["m_strCase"] = "= tr_compras_requisiciones_01.cat_compras_documentos_mu_id";
$proto39["m_havingmode"] = false;
$proto39["m_inBrackets"] = false;
$proto39["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto39);

$proto37["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto37);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto41=array();
						$obj = new SQLField(array(
	"m_strName" => "tr_compras_requisiciones_01_id",
	"m_strTable" => "tr_compras_requisiciones_01",
	"m_srcTableName" => "box_tr_compras_requisiciones_tr_compras_almacenes_01"
));

$proto41["m_column"]=$obj;
$proto41["m_bAsc"] = 0;
$proto41["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto41);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="box_tr_compras_requisiciones_tr_compras_almacenes_01";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_box_tr_compras_requisiciones_tr_compras_almacenes_01 = createSqlQuery_box_tr_compras_requisiciones_tr_compras_almacenes_01();


	
		;

			

$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".sqlquery"] = $queryData_box_tr_compras_requisiciones_tr_compras_almacenes_01;



include_once(getabspath("include/box_tr_compras_requisiciones_tr_compras_almacenes_01_events.php"));
$tdatabox_tr_compras_requisiciones_tr_compras_almacenes_01[".hasEvents"] = true;

?>