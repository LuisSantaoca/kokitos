<?php
$tdatacat_compras_productos1 = array();
$tdatacat_compras_productos1[".searchableFields"] = array();
$tdatacat_compras_productos1[".ShortName"] = "cat_compras_productos1";
$tdatacat_compras_productos1[".OwnerID"] = "";
$tdatacat_compras_productos1[".OriginalTable"] = "cat_compras_productos";


$tdatacat_compras_productos1[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatacat_compras_productos1[".originalPagesByType"] = $tdatacat_compras_productos1[".pagesByType"];
$tdatacat_compras_productos1[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatacat_compras_productos1[".originalPages"] = $tdatacat_compras_productos1[".pages"];
$tdatacat_compras_productos1[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"search\":\"search\"}" );
$tdatacat_compras_productos1[".originalDefaultPages"] = $tdatacat_compras_productos1[".defaultPages"];

//	field labels
$fieldLabelscat_compras_productos1 = array();
$fieldToolTipscat_compras_productos1 = array();
$pageTitlescat_compras_productos1 = array();
$placeHolderscat_compras_productos1 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_compras_productos1["Spanish"] = array();
	$fieldToolTipscat_compras_productos1["Spanish"] = array();
	$placeHolderscat_compras_productos1["Spanish"] = array();
	$pageTitlescat_compras_productos1["Spanish"] = array();
	$fieldLabelscat_compras_productos1["Spanish"]["cat_compras_productos_id"] = "Id";
	$fieldToolTipscat_compras_productos1["Spanish"]["cat_compras_productos_id"] = "";
	$placeHolderscat_compras_productos1["Spanish"]["cat_compras_productos_id"] = "";
	$fieldLabelscat_compras_productos1["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipscat_compras_productos1["Spanish"]["time_stamp"] = "";
	$placeHolderscat_compras_productos1["Spanish"]["time_stamp"] = "";
	$fieldLabelscat_compras_productos1["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipscat_compras_productos1["Spanish"]["vigente"] = "";
	$placeHolderscat_compras_productos1["Spanish"]["vigente"] = "";
	$fieldLabelscat_compras_productos1["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipscat_compras_productos1["Spanish"]["capturista"] = "";
	$placeHolderscat_compras_productos1["Spanish"]["capturista"] = "";
	$fieldLabelscat_compras_productos1["Spanish"]["descripcion_producto"] = "Producto";
	$fieldToolTipscat_compras_productos1["Spanish"]["descripcion_producto"] = "";
	$placeHolderscat_compras_productos1["Spanish"]["descripcion_producto"] = "";
	$fieldLabelscat_compras_productos1["Spanish"]["cat_compras_productos_categorias_id"] = "Categoria";
	$fieldToolTipscat_compras_productos1["Spanish"]["cat_compras_productos_categorias_id"] = "";
	$placeHolderscat_compras_productos1["Spanish"]["cat_compras_productos_categorias_id"] = "";
	$fieldLabelscat_compras_productos1["Spanish"]["upc"] = "Upc";
	$fieldToolTipscat_compras_productos1["Spanish"]["upc"] = "";
	$placeHolderscat_compras_productos1["Spanish"]["upc"] = "";
	$fieldLabelscat_compras_productos1["Spanish"]["sku"] = "Sku";
	$fieldToolTipscat_compras_productos1["Spanish"]["sku"] = "";
	$placeHolderscat_compras_productos1["Spanish"]["sku"] = "";
	$fieldLabelscat_compras_productos1["Spanish"]["modelo"] = "Modelo";
	$fieldToolTipscat_compras_productos1["Spanish"]["modelo"] = "";
	$placeHolderscat_compras_productos1["Spanish"]["modelo"] = "";
	$fieldLabelscat_compras_productos1["Spanish"]["cat_compras_proveedores_id"] = "Proveedores Id";
	$fieldToolTipscat_compras_productos1["Spanish"]["cat_compras_proveedores_id"] = "";
	$placeHolderscat_compras_productos1["Spanish"]["cat_compras_proveedores_id"] = "";
	$fieldLabelscat_compras_productos1["Spanish"]["cat_compras_productos_presentacion_mu_id"] = "Presentacion";
	$fieldToolTipscat_compras_productos1["Spanish"]["cat_compras_productos_presentacion_mu_id"] = "";
	$placeHolderscat_compras_productos1["Spanish"]["cat_compras_productos_presentacion_mu_id"] = "";
	$fieldLabelscat_compras_productos1["Spanish"]["cat_compras_productos_unidad_de_medida_mu_id"] = "UdM";
	$fieldToolTipscat_compras_productos1["Spanish"]["cat_compras_productos_unidad_de_medida_mu_id"] = "";
	$placeHolderscat_compras_productos1["Spanish"]["cat_compras_productos_unidad_de_medida_mu_id"] = "";
	$fieldLabelscat_compras_productos1["Spanish"]["contenido_neto_compras_productos"] = "Contenido Neto";
	$fieldToolTipscat_compras_productos1["Spanish"]["contenido_neto_compras_productos"] = "";
	$placeHolderscat_compras_productos1["Spanish"]["contenido_neto_compras_productos"] = "";
	$fieldLabelscat_compras_productos1["Spanish"]["costo_neto_producto"] = "Costo Neto Producto";
	$fieldToolTipscat_compras_productos1["Spanish"]["costo_neto_producto"] = "";
	$placeHolderscat_compras_productos1["Spanish"]["costo_neto_producto"] = "";
	$fieldLabelscat_compras_productos1["Spanish"]["cat_compras_productos_permitidos_id"] = "Producto permitido";
	$fieldToolTipscat_compras_productos1["Spanish"]["cat_compras_productos_permitidos_id"] = "";
	$placeHolderscat_compras_productos1["Spanish"]["cat_compras_productos_permitidos_id"] = "";
	$fieldLabelscat_compras_productos1["Spanish"]["costo_unidad_de_medida"] = "Costo UdM";
	$fieldToolTipscat_compras_productos1["Spanish"]["costo_unidad_de_medida"] = "";
	$placeHolderscat_compras_productos1["Spanish"]["costo_unidad_de_medida"] = "";
	$fieldLabelscat_compras_productos1["Spanish"]["fecha_de_actualizacion_costo_udm"] = "Actualización costo";
	$fieldToolTipscat_compras_productos1["Spanish"]["fecha_de_actualizacion_costo_udm"] = "";
	$placeHolderscat_compras_productos1["Spanish"]["fecha_de_actualizacion_costo_udm"] = "";
	$fieldLabelscat_compras_productos1["Spanish"]["cat_compras_productos_presentacion_mu_id_conversion"] = "Cat Compras Productos Presentacion Mu Id Conversion";
	$fieldToolTipscat_compras_productos1["Spanish"]["cat_compras_productos_presentacion_mu_id_conversion"] = "";
	$placeHolderscat_compras_productos1["Spanish"]["cat_compras_productos_presentacion_mu_id_conversion"] = "";
	$fieldLabelscat_compras_productos1["Spanish"]["cat_compras_productos_unidad_de_medida_mu_id_conversion"] = "Cat Compras Productos Unidad De Medida Mu Id Conversion";
	$fieldToolTipscat_compras_productos1["Spanish"]["cat_compras_productos_unidad_de_medida_mu_id_conversion"] = "";
	$placeHolderscat_compras_productos1["Spanish"]["cat_compras_productos_unidad_de_medida_mu_id_conversion"] = "";
	$fieldLabelscat_compras_productos1["Spanish"]["contenido_neto_compras_productos_conversion"] = "Contenido Neto Compras Productos Conversion";
	$fieldToolTipscat_compras_productos1["Spanish"]["contenido_neto_compras_productos_conversion"] = "";
	$placeHolderscat_compras_productos1["Spanish"]["contenido_neto_compras_productos_conversion"] = "";
	$fieldLabelscat_compras_productos1["Spanish"]["cat_control_aplicaciones_campo_tipo_de_control_id"] = "Tipo de control";
	$fieldToolTipscat_compras_productos1["Spanish"]["cat_control_aplicaciones_campo_tipo_de_control_id"] = "";
	$placeHolderscat_compras_productos1["Spanish"]["cat_control_aplicaciones_campo_tipo_de_control_id"] = "";
	$fieldLabelscat_compras_productos1["Spanish"]["ingrediente_activo"] = "Ingrediente Activo";
	$fieldToolTipscat_compras_productos1["Spanish"]["ingrediente_activo"] = "";
	$placeHolderscat_compras_productos1["Spanish"]["ingrediente_activo"] = "";
	$fieldLabelscat_compras_productos1["Spanish"]["nombre_comercial"] = "Nombre Comercial";
	$fieldToolTipscat_compras_productos1["Spanish"]["nombre_comercial"] = "";
	$placeHolderscat_compras_productos1["Spanish"]["nombre_comercial"] = "";
	if (count($fieldToolTipscat_compras_productos1["Spanish"]))
		$tdatacat_compras_productos1[".isUseToolTips"] = true;
}





$tdatacat_compras_productos1[".shortTableName"] = "cat_compras_productos1";
$tdatacat_compras_productos1[".nSecOptions"] = 0;

$tdatacat_compras_productos1[".mainTableOwnerID"] = "";
$tdatacat_compras_productos1[".entityType"] = 1;
$tdatacat_compras_productos1[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_compras_productos1[".strOriginalTableName"] = "cat_compras_productos";

	



$tdatacat_compras_productos1[".showAddInPopup"] = false;

$tdatacat_compras_productos1[".showEditInPopup"] = false;

$tdatacat_compras_productos1[".showViewInPopup"] = false;

$tdatacat_compras_productos1[".listAjax"] = false;
//	temporary
//$tdatacat_compras_productos1[".listAjax"] = false;

	$tdatacat_compras_productos1[".audit"] = true;

	$tdatacat_compras_productos1[".locking"] = true;


$pages = $tdatacat_compras_productos1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_compras_productos1[".edit"] = true;
	$tdatacat_compras_productos1[".afterEditAction"] = 1;
	$tdatacat_compras_productos1[".closePopupAfterEdit"] = 1;
	$tdatacat_compras_productos1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_compras_productos1[".add"] = true;
$tdatacat_compras_productos1[".afterAddAction"] = 1;
$tdatacat_compras_productos1[".closePopupAfterAdd"] = 1;
$tdatacat_compras_productos1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_compras_productos1[".list"] = true;
}



$tdatacat_compras_productos1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_compras_productos1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_compras_productos1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_compras_productos1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_compras_productos1[".printFriendly"] = true;
}



$tdatacat_compras_productos1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_compras_productos1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_compras_productos1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_compras_productos1[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatacat_compras_productos1[".ajaxCodeSnippetAdded"] = false;

$tdatacat_compras_productos1[".buttonsAdded"] = false;

$tdatacat_compras_productos1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_compras_productos1[".isUseTimeForSearch"] = false;


$tdatacat_compras_productos1[".badgeColor"] = "D2AF80";


$tdatacat_compras_productos1[".allSearchFields"] = array();
$tdatacat_compras_productos1[".filterFields"] = array();
$tdatacat_compras_productos1[".requiredSearchFields"] = array();

$tdatacat_compras_productos1[".googleLikeFields"] = array();
$tdatacat_compras_productos1[".googleLikeFields"][] = "cat_compras_productos_id";
$tdatacat_compras_productos1[".googleLikeFields"][] = "time_stamp";
$tdatacat_compras_productos1[".googleLikeFields"][] = "vigente";
$tdatacat_compras_productos1[".googleLikeFields"][] = "capturista";
$tdatacat_compras_productos1[".googleLikeFields"][] = "descripcion_producto";
$tdatacat_compras_productos1[".googleLikeFields"][] = "cat_compras_productos_categorias_id";
$tdatacat_compras_productos1[".googleLikeFields"][] = "upc";
$tdatacat_compras_productos1[".googleLikeFields"][] = "sku";
$tdatacat_compras_productos1[".googleLikeFields"][] = "modelo";
$tdatacat_compras_productos1[".googleLikeFields"][] = "cat_compras_proveedores_id";
$tdatacat_compras_productos1[".googleLikeFields"][] = "cat_compras_productos_presentacion_mu_id";
$tdatacat_compras_productos1[".googleLikeFields"][] = "cat_compras_productos_unidad_de_medida_mu_id";
$tdatacat_compras_productos1[".googleLikeFields"][] = "contenido_neto_compras_productos";
$tdatacat_compras_productos1[".googleLikeFields"][] = "costo_neto_producto";
$tdatacat_compras_productos1[".googleLikeFields"][] = "cat_compras_productos_presentacion_mu_id_conversion";
$tdatacat_compras_productos1[".googleLikeFields"][] = "cat_compras_productos_unidad_de_medida_mu_id_conversion";
$tdatacat_compras_productos1[".googleLikeFields"][] = "contenido_neto_compras_productos_conversion";
$tdatacat_compras_productos1[".googleLikeFields"][] = "cat_compras_productos_permitidos_id";
$tdatacat_compras_productos1[".googleLikeFields"][] = "costo_unidad_de_medida";
$tdatacat_compras_productos1[".googleLikeFields"][] = "fecha_de_actualizacion_costo_udm";
$tdatacat_compras_productos1[".googleLikeFields"][] = "cat_control_aplicaciones_campo_tipo_de_control_id";
$tdatacat_compras_productos1[".googleLikeFields"][] = "ingrediente_activo";
$tdatacat_compras_productos1[".googleLikeFields"][] = "nombre_comercial";



$tdatacat_compras_productos1[".tableType"] = "list";

$tdatacat_compras_productos1[".printerPageOrientation"] = 0;
$tdatacat_compras_productos1[".nPrinterPageScale"] = 100;

$tdatacat_compras_productos1[".nPrinterSplitRecords"] = 40;

$tdatacat_compras_productos1[".geocodingEnabled"] = false;





$tdatacat_compras_productos1[".isResizeColumns"] = true;





$tdatacat_compras_productos1[".pageSize"] = 20;

$tdatacat_compras_productos1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_compras_productos1[".strOrderBy"] = $tstrOrderBy;

$tdatacat_compras_productos1[".orderindexes"] = array();


$tdatacat_compras_productos1[".sqlHead"] = "SELECT cat_compras_productos.cat_compras_productos_id,  cat_compras_productos.time_stamp,  cat_compras_productos.vigente,  cat_compras_productos.capturista,  cat_compras_productos.descripcion_producto,  cat_compras_productos.cat_compras_productos_categorias_id,  cat_compras_productos.upc,  cat_compras_productos.sku,  cat_compras_productos.modelo,  cat_compras_productos.cat_compras_proveedores_id,  cat_compras_productos.cat_compras_productos_presentacion_mu_id,  cat_compras_productos.cat_compras_productos_unidad_de_medida_mu_id,  cat_compras_productos.contenido_neto_compras_productos,  cat_compras_productos.costo_neto_producto,  cat_compras_productos.cat_compras_productos_presentacion_mu_id_conversion,  cat_compras_productos.cat_compras_productos_unidad_de_medida_mu_id_conversion,  cat_compras_productos.contenido_neto_compras_productos_conversion,  cat_compras_productos.cat_compras_productos_permitidos_id,  cat_compras_productos.costo_unidad_de_medida,  cat_compras_productos.fecha_de_actualizacion_costo_udm,  cat_compras_productos.cat_control_aplicaciones_campo_tipo_de_control_id,  cat_compras_productos_permitidos.ingrediente_activo,  cat_compras_productos_permitidos.nombre_comercial";
$tdatacat_compras_productos1[".sqlFrom"] = "FROM cat_compras_productos  LEFT OUTER JOIN cat_compras_productos_permitidos ON cat_compras_productos.cat_compras_productos_permitidos_id = cat_compras_productos_permitidos.cat_compras_productos_permitidos_id";
$tdatacat_compras_productos1[".sqlWhereExpr"] = "";
$tdatacat_compras_productos1[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatacat_compras_productos1[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_compras_productos1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_compras_productos1[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_compras_productos1[".highlightSearchResults"] = true;

$tableKeyscat_compras_productos1 = array();
$tableKeyscat_compras_productos1[] = "cat_compras_productos_id";
$tdatacat_compras_productos1[".Keys"] = $tableKeyscat_compras_productos1;


$tdatacat_compras_productos1[".hideMobileList"] = array();




//	cat_compras_productos_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_compras_productos_id";
	$fdata["GoodName"] = "cat_compras_productos_id";
	$fdata["ownerTable"] = "cat_compras_productos";
	$fdata["Label"] = GetFieldLabel("cat_compras_productos1","cat_compras_productos_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_compras_productos_id";

		$fdata["sourceSingle"] = "cat_compras_productos_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_compras_productos.cat_compras_productos_id";

	
	
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


	$tdatacat_compras_productos1["cat_compras_productos_id"] = $fdata;
		$tdatacat_compras_productos1[".searchableFields"][] = "cat_compras_productos_id";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "cat_compras_productos";
	$fdata["Label"] = GetFieldLabel("cat_compras_productos1","time_stamp");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "time_stamp";

		$fdata["sourceSingle"] = "time_stamp";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_compras_productos.time_stamp";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatacat_compras_productos1["time_stamp"] = $fdata;
		$tdatacat_compras_productos1[".searchableFields"][] = "time_stamp";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_compras_productos";
	$fdata["Label"] = GetFieldLabel("cat_compras_productos1","vigente");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "vigente";

		$fdata["sourceSingle"] = "vigente";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_compras_productos.vigente";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatacat_compras_productos1["vigente"] = $fdata;
		$tdatacat_compras_productos1[".searchableFields"][] = "vigente";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_compras_productos";
	$fdata["Label"] = GetFieldLabel("cat_compras_productos1","capturista");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "capturista";

		$fdata["sourceSingle"] = "capturista";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_compras_productos.capturista";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdatacat_compras_productos1["capturista"] = $fdata;
		$tdatacat_compras_productos1[".searchableFields"][] = "capturista";
//	descripcion_producto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "descripcion_producto";
	$fdata["GoodName"] = "descripcion_producto";
	$fdata["ownerTable"] = "cat_compras_productos";
	$fdata["Label"] = GetFieldLabel("cat_compras_productos1","descripcion_producto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_producto";

		$fdata["sourceSingle"] = "descripcion_producto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_compras_productos.descripcion_producto";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatacat_compras_productos1["descripcion_producto"] = $fdata;
		$tdatacat_compras_productos1[".searchableFields"][] = "descripcion_producto";
//	cat_compras_productos_categorias_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "cat_compras_productos_categorias_id";
	$fdata["GoodName"] = "cat_compras_productos_categorias_id";
	$fdata["ownerTable"] = "cat_compras_productos";
	$fdata["Label"] = GetFieldLabel("cat_compras_productos1","cat_compras_productos_categorias_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_compras_productos_categorias_id";

		$fdata["sourceSingle"] = "cat_compras_productos_categorias_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_compras_productos.cat_compras_productos_categorias_id";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "cat_compras_productos_categorias";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "cat_compras_productos_categorias_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion_compras_productos_categorias";

	

	
	$edata["LookupOrderBy"] = "";

	
	
		$edata["AllowToAdd"] = true;
		
	

	
	
	
// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatacat_compras_productos1["cat_compras_productos_categorias_id"] = $fdata;
		$tdatacat_compras_productos1[".searchableFields"][] = "cat_compras_productos_categorias_id";
//	upc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "upc";
	$fdata["GoodName"] = "upc";
	$fdata["ownerTable"] = "cat_compras_productos";
	$fdata["Label"] = GetFieldLabel("cat_compras_productos1","upc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "upc";

		$fdata["sourceSingle"] = "upc";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_compras_productos.upc";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatacat_compras_productos1["upc"] = $fdata;
		$tdatacat_compras_productos1[".searchableFields"][] = "upc";
//	sku
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "sku";
	$fdata["GoodName"] = "sku";
	$fdata["ownerTable"] = "cat_compras_productos";
	$fdata["Label"] = GetFieldLabel("cat_compras_productos1","sku");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sku";

		$fdata["sourceSingle"] = "sku";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_compras_productos.sku";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatacat_compras_productos1["sku"] = $fdata;
		$tdatacat_compras_productos1[".searchableFields"][] = "sku";
//	modelo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "modelo";
	$fdata["GoodName"] = "modelo";
	$fdata["ownerTable"] = "cat_compras_productos";
	$fdata["Label"] = GetFieldLabel("cat_compras_productos1","modelo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "modelo";

		$fdata["sourceSingle"] = "modelo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_compras_productos.modelo";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatacat_compras_productos1["modelo"] = $fdata;
		$tdatacat_compras_productos1[".searchableFields"][] = "modelo";
//	cat_compras_proveedores_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "cat_compras_proveedores_id";
	$fdata["GoodName"] = "cat_compras_proveedores_id";
	$fdata["ownerTable"] = "cat_compras_productos";
	$fdata["Label"] = GetFieldLabel("cat_compras_productos1","cat_compras_proveedores_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_compras_proveedores_id";

		$fdata["sourceSingle"] = "cat_compras_proveedores_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_compras_productos.cat_compras_proveedores_id";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "cat_compras_proveedores";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "cat_compras_proveedores_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion_proveedores";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatacat_compras_productos1["cat_compras_proveedores_id"] = $fdata;
		$tdatacat_compras_productos1[".searchableFields"][] = "cat_compras_proveedores_id";
//	cat_compras_productos_presentacion_mu_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "cat_compras_productos_presentacion_mu_id";
	$fdata["GoodName"] = "cat_compras_productos_presentacion_mu_id";
	$fdata["ownerTable"] = "cat_compras_productos";
	$fdata["Label"] = GetFieldLabel("cat_compras_productos1","cat_compras_productos_presentacion_mu_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_compras_productos_presentacion_mu_id";

		$fdata["sourceSingle"] = "cat_compras_productos_presentacion_mu_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_compras_productos.cat_compras_productos_presentacion_mu_id";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "cat_compras_productos_presentacion_mu";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "cat_compras_productos_presentacion_mu_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion_cat_compras_productos_presentacion";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatacat_compras_productos1["cat_compras_productos_presentacion_mu_id"] = $fdata;
		$tdatacat_compras_productos1[".searchableFields"][] = "cat_compras_productos_presentacion_mu_id";
//	cat_compras_productos_unidad_de_medida_mu_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "cat_compras_productos_unidad_de_medida_mu_id";
	$fdata["GoodName"] = "cat_compras_productos_unidad_de_medida_mu_id";
	$fdata["ownerTable"] = "cat_compras_productos";
	$fdata["Label"] = GetFieldLabel("cat_compras_productos1","cat_compras_productos_unidad_de_medida_mu_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_compras_productos_unidad_de_medida_mu_id";

		$fdata["sourceSingle"] = "cat_compras_productos_unidad_de_medida_mu_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_compras_productos.cat_compras_productos_unidad_de_medida_mu_id";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "cat_compras_productos_unidad_de_medida_mu";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "cat_compras_productos_unidad_de_medida_mu_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion_cat_compras_productos_unidad_de_medida";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatacat_compras_productos1["cat_compras_productos_unidad_de_medida_mu_id"] = $fdata;
		$tdatacat_compras_productos1[".searchableFields"][] = "cat_compras_productos_unidad_de_medida_mu_id";
//	contenido_neto_compras_productos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "contenido_neto_compras_productos";
	$fdata["GoodName"] = "contenido_neto_compras_productos";
	$fdata["ownerTable"] = "cat_compras_productos";
	$fdata["Label"] = GetFieldLabel("cat_compras_productos1","contenido_neto_compras_productos");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "contenido_neto_compras_productos";

		$fdata["sourceSingle"] = "contenido_neto_compras_productos";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_compras_productos.contenido_neto_compras_productos";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatacat_compras_productos1["contenido_neto_compras_productos"] = $fdata;
		$tdatacat_compras_productos1[".searchableFields"][] = "contenido_neto_compras_productos";
//	costo_neto_producto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "costo_neto_producto";
	$fdata["GoodName"] = "costo_neto_producto";
	$fdata["ownerTable"] = "cat_compras_productos";
	$fdata["Label"] = GetFieldLabel("cat_compras_productos1","costo_neto_producto");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "costo_neto_producto";

		$fdata["sourceSingle"] = "costo_neto_producto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_compras_productos.costo_neto_producto";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Currency");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatacat_compras_productos1["costo_neto_producto"] = $fdata;
		$tdatacat_compras_productos1[".searchableFields"][] = "costo_neto_producto";
//	cat_compras_productos_presentacion_mu_id_conversion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "cat_compras_productos_presentacion_mu_id_conversion";
	$fdata["GoodName"] = "cat_compras_productos_presentacion_mu_id_conversion";
	$fdata["ownerTable"] = "cat_compras_productos";
	$fdata["Label"] = GetFieldLabel("cat_compras_productos1","cat_compras_productos_presentacion_mu_id_conversion");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_compras_productos_presentacion_mu_id_conversion";

		$fdata["sourceSingle"] = "cat_compras_productos_presentacion_mu_id_conversion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_compras_productos.cat_compras_productos_presentacion_mu_id_conversion";

	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatacat_compras_productos1["cat_compras_productos_presentacion_mu_id_conversion"] = $fdata;
		$tdatacat_compras_productos1[".searchableFields"][] = "cat_compras_productos_presentacion_mu_id_conversion";
//	cat_compras_productos_unidad_de_medida_mu_id_conversion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "cat_compras_productos_unidad_de_medida_mu_id_conversion";
	$fdata["GoodName"] = "cat_compras_productos_unidad_de_medida_mu_id_conversion";
	$fdata["ownerTable"] = "cat_compras_productos";
	$fdata["Label"] = GetFieldLabel("cat_compras_productos1","cat_compras_productos_unidad_de_medida_mu_id_conversion");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_compras_productos_unidad_de_medida_mu_id_conversion";

		$fdata["sourceSingle"] = "cat_compras_productos_unidad_de_medida_mu_id_conversion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_compras_productos.cat_compras_productos_unidad_de_medida_mu_id_conversion";

	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatacat_compras_productos1["cat_compras_productos_unidad_de_medida_mu_id_conversion"] = $fdata;
		$tdatacat_compras_productos1[".searchableFields"][] = "cat_compras_productos_unidad_de_medida_mu_id_conversion";
//	contenido_neto_compras_productos_conversion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "contenido_neto_compras_productos_conversion";
	$fdata["GoodName"] = "contenido_neto_compras_productos_conversion";
	$fdata["ownerTable"] = "cat_compras_productos";
	$fdata["Label"] = GetFieldLabel("cat_compras_productos1","contenido_neto_compras_productos_conversion");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "contenido_neto_compras_productos_conversion";

		$fdata["sourceSingle"] = "contenido_neto_compras_productos_conversion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_compras_productos.contenido_neto_compras_productos_conversion";

	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatacat_compras_productos1["contenido_neto_compras_productos_conversion"] = $fdata;
		$tdatacat_compras_productos1[".searchableFields"][] = "contenido_neto_compras_productos_conversion";
//	cat_compras_productos_permitidos_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "cat_compras_productos_permitidos_id";
	$fdata["GoodName"] = "cat_compras_productos_permitidos_id";
	$fdata["ownerTable"] = "cat_compras_productos";
	$fdata["Label"] = GetFieldLabel("cat_compras_productos1","cat_compras_productos_permitidos_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_compras_productos_permitidos_id";

		$fdata["sourceSingle"] = "cat_compras_productos_permitidos_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_compras_productos.cat_compras_productos_permitidos_id";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "cat_compras_productos_permitidos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "cat_compras_productos_permitidos_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "cat_compras_productos_permitidos_id";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatacat_compras_productos1["cat_compras_productos_permitidos_id"] = $fdata;
		$tdatacat_compras_productos1[".searchableFields"][] = "cat_compras_productos_permitidos_id";
//	costo_unidad_de_medida
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "costo_unidad_de_medida";
	$fdata["GoodName"] = "costo_unidad_de_medida";
	$fdata["ownerTable"] = "cat_compras_productos";
	$fdata["Label"] = GetFieldLabel("cat_compras_productos1","costo_unidad_de_medida");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "costo_unidad_de_medida";

		$fdata["sourceSingle"] = "costo_unidad_de_medida";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_compras_productos.costo_unidad_de_medida";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Currency");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatacat_compras_productos1["costo_unidad_de_medida"] = $fdata;
		$tdatacat_compras_productos1[".searchableFields"][] = "costo_unidad_de_medida";
//	fecha_de_actualizacion_costo_udm
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "fecha_de_actualizacion_costo_udm";
	$fdata["GoodName"] = "fecha_de_actualizacion_costo_udm";
	$fdata["ownerTable"] = "cat_compras_productos";
	$fdata["Label"] = GetFieldLabel("cat_compras_productos1","fecha_de_actualizacion_costo_udm");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "fecha_de_actualizacion_costo_udm";

		$fdata["sourceSingle"] = "fecha_de_actualizacion_costo_udm";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_compras_productos.fecha_de_actualizacion_costo_udm";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatacat_compras_productos1["fecha_de_actualizacion_costo_udm"] = $fdata;
		$tdatacat_compras_productos1[".searchableFields"][] = "fecha_de_actualizacion_costo_udm";
//	cat_control_aplicaciones_campo_tipo_de_control_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "cat_control_aplicaciones_campo_tipo_de_control_id";
	$fdata["GoodName"] = "cat_control_aplicaciones_campo_tipo_de_control_id";
	$fdata["ownerTable"] = "cat_compras_productos";
	$fdata["Label"] = GetFieldLabel("cat_compras_productos1","cat_control_aplicaciones_campo_tipo_de_control_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_control_aplicaciones_campo_tipo_de_control_id";

		$fdata["sourceSingle"] = "cat_control_aplicaciones_campo_tipo_de_control_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_compras_productos.cat_control_aplicaciones_campo_tipo_de_control_id";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "cat_control_aplicaciones_campo_tipo_de_control";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "cat_control_aplicaciones_campo_tipo_de_control_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion_tipo_de_control";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatacat_compras_productos1["cat_control_aplicaciones_campo_tipo_de_control_id"] = $fdata;
		$tdatacat_compras_productos1[".searchableFields"][] = "cat_control_aplicaciones_campo_tipo_de_control_id";
//	ingrediente_activo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "ingrediente_activo";
	$fdata["GoodName"] = "ingrediente_activo";
	$fdata["ownerTable"] = "cat_compras_productos_permitidos";
	$fdata["Label"] = GetFieldLabel("cat_compras_productos1","ingrediente_activo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ingrediente_activo";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_compras_productos_permitidos.ingrediente_activo";

	
	
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


	$tdatacat_compras_productos1["ingrediente_activo"] = $fdata;
		$tdatacat_compras_productos1[".searchableFields"][] = "ingrediente_activo";
//	nombre_comercial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "nombre_comercial";
	$fdata["GoodName"] = "nombre_comercial";
	$fdata["ownerTable"] = "cat_compras_productos_permitidos";
	$fdata["Label"] = GetFieldLabel("cat_compras_productos1","nombre_comercial");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nombre_comercial";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_compras_productos_permitidos.nombre_comercial";

	
	
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


	$tdatacat_compras_productos1["nombre_comercial"] = $fdata;
		$tdatacat_compras_productos1[".searchableFields"][] = "nombre_comercial";


$tables_data["cat_compras_productos1"]=&$tdatacat_compras_productos1;
$field_labels["cat_compras_productos1"] = &$fieldLabelscat_compras_productos1;
$fieldToolTips["cat_compras_productos1"] = &$fieldToolTipscat_compras_productos1;
$placeHolders["cat_compras_productos1"] = &$placeHolderscat_compras_productos1;
$page_titles["cat_compras_productos1"] = &$pageTitlescat_compras_productos1;


changeTextControlsToDate( "cat_compras_productos1" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_compras_productos1"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_compras_productos1"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_compras_productos1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_compras_productos.cat_compras_productos_id,  cat_compras_productos.time_stamp,  cat_compras_productos.vigente,  cat_compras_productos.capturista,  cat_compras_productos.descripcion_producto,  cat_compras_productos.cat_compras_productos_categorias_id,  cat_compras_productos.upc,  cat_compras_productos.sku,  cat_compras_productos.modelo,  cat_compras_productos.cat_compras_proveedores_id,  cat_compras_productos.cat_compras_productos_presentacion_mu_id,  cat_compras_productos.cat_compras_productos_unidad_de_medida_mu_id,  cat_compras_productos.contenido_neto_compras_productos,  cat_compras_productos.costo_neto_producto,  cat_compras_productos.cat_compras_productos_presentacion_mu_id_conversion,  cat_compras_productos.cat_compras_productos_unidad_de_medida_mu_id_conversion,  cat_compras_productos.contenido_neto_compras_productos_conversion,  cat_compras_productos.cat_compras_productos_permitidos_id,  cat_compras_productos.costo_unidad_de_medida,  cat_compras_productos.fecha_de_actualizacion_costo_udm,  cat_compras_productos.cat_control_aplicaciones_campo_tipo_de_control_id,  cat_compras_productos_permitidos.ingrediente_activo,  cat_compras_productos_permitidos.nombre_comercial";
$proto0["m_strFrom"] = "FROM cat_compras_productos  LEFT OUTER JOIN cat_compras_productos_permitidos ON cat_compras_productos.cat_compras_productos_permitidos_id = cat_compras_productos_permitidos.cat_compras_productos_permitidos_id";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_compras_productos_id",
	"m_strTable" => "cat_compras_productos",
	"m_srcTableName" => "cat_compras_productos1"
));

$proto6["m_sql"] = "cat_compras_productos.cat_compras_productos_id";
$proto6["m_srcTableName"] = "cat_compras_productos1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "cat_compras_productos",
	"m_srcTableName" => "cat_compras_productos1"
));

$proto8["m_sql"] = "cat_compras_productos.time_stamp";
$proto8["m_srcTableName"] = "cat_compras_productos1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_compras_productos",
	"m_srcTableName" => "cat_compras_productos1"
));

$proto10["m_sql"] = "cat_compras_productos.vigente";
$proto10["m_srcTableName"] = "cat_compras_productos1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_compras_productos",
	"m_srcTableName" => "cat_compras_productos1"
));

$proto12["m_sql"] = "cat_compras_productos.capturista";
$proto12["m_srcTableName"] = "cat_compras_productos1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_producto",
	"m_strTable" => "cat_compras_productos",
	"m_srcTableName" => "cat_compras_productos1"
));

$proto14["m_sql"] = "cat_compras_productos.descripcion_producto";
$proto14["m_srcTableName"] = "cat_compras_productos1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_compras_productos_categorias_id",
	"m_strTable" => "cat_compras_productos",
	"m_srcTableName" => "cat_compras_productos1"
));

$proto16["m_sql"] = "cat_compras_productos.cat_compras_productos_categorias_id";
$proto16["m_srcTableName"] = "cat_compras_productos1";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "upc",
	"m_strTable" => "cat_compras_productos",
	"m_srcTableName" => "cat_compras_productos1"
));

$proto18["m_sql"] = "cat_compras_productos.upc";
$proto18["m_srcTableName"] = "cat_compras_productos1";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "sku",
	"m_strTable" => "cat_compras_productos",
	"m_srcTableName" => "cat_compras_productos1"
));

$proto20["m_sql"] = "cat_compras_productos.sku";
$proto20["m_srcTableName"] = "cat_compras_productos1";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "modelo",
	"m_strTable" => "cat_compras_productos",
	"m_srcTableName" => "cat_compras_productos1"
));

$proto22["m_sql"] = "cat_compras_productos.modelo";
$proto22["m_srcTableName"] = "cat_compras_productos1";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_compras_proveedores_id",
	"m_strTable" => "cat_compras_productos",
	"m_srcTableName" => "cat_compras_productos1"
));

$proto24["m_sql"] = "cat_compras_productos.cat_compras_proveedores_id";
$proto24["m_srcTableName"] = "cat_compras_productos1";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_compras_productos_presentacion_mu_id",
	"m_strTable" => "cat_compras_productos",
	"m_srcTableName" => "cat_compras_productos1"
));

$proto26["m_sql"] = "cat_compras_productos.cat_compras_productos_presentacion_mu_id";
$proto26["m_srcTableName"] = "cat_compras_productos1";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_compras_productos_unidad_de_medida_mu_id",
	"m_strTable" => "cat_compras_productos",
	"m_srcTableName" => "cat_compras_productos1"
));

$proto28["m_sql"] = "cat_compras_productos.cat_compras_productos_unidad_de_medida_mu_id";
$proto28["m_srcTableName"] = "cat_compras_productos1";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "contenido_neto_compras_productos",
	"m_strTable" => "cat_compras_productos",
	"m_srcTableName" => "cat_compras_productos1"
));

$proto30["m_sql"] = "cat_compras_productos.contenido_neto_compras_productos";
$proto30["m_srcTableName"] = "cat_compras_productos1";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "costo_neto_producto",
	"m_strTable" => "cat_compras_productos",
	"m_srcTableName" => "cat_compras_productos1"
));

$proto32["m_sql"] = "cat_compras_productos.costo_neto_producto";
$proto32["m_srcTableName"] = "cat_compras_productos1";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_compras_productos_presentacion_mu_id_conversion",
	"m_strTable" => "cat_compras_productos",
	"m_srcTableName" => "cat_compras_productos1"
));

$proto34["m_sql"] = "cat_compras_productos.cat_compras_productos_presentacion_mu_id_conversion";
$proto34["m_srcTableName"] = "cat_compras_productos1";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_compras_productos_unidad_de_medida_mu_id_conversion",
	"m_strTable" => "cat_compras_productos",
	"m_srcTableName" => "cat_compras_productos1"
));

$proto36["m_sql"] = "cat_compras_productos.cat_compras_productos_unidad_de_medida_mu_id_conversion";
$proto36["m_srcTableName"] = "cat_compras_productos1";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "contenido_neto_compras_productos_conversion",
	"m_strTable" => "cat_compras_productos",
	"m_srcTableName" => "cat_compras_productos1"
));

$proto38["m_sql"] = "cat_compras_productos.contenido_neto_compras_productos_conversion";
$proto38["m_srcTableName"] = "cat_compras_productos1";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_compras_productos_permitidos_id",
	"m_strTable" => "cat_compras_productos",
	"m_srcTableName" => "cat_compras_productos1"
));

$proto40["m_sql"] = "cat_compras_productos.cat_compras_productos_permitidos_id";
$proto40["m_srcTableName"] = "cat_compras_productos1";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "costo_unidad_de_medida",
	"m_strTable" => "cat_compras_productos",
	"m_srcTableName" => "cat_compras_productos1"
));

$proto42["m_sql"] = "cat_compras_productos.costo_unidad_de_medida";
$proto42["m_srcTableName"] = "cat_compras_productos1";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_de_actualizacion_costo_udm",
	"m_strTable" => "cat_compras_productos",
	"m_srcTableName" => "cat_compras_productos1"
));

$proto44["m_sql"] = "cat_compras_productos.fecha_de_actualizacion_costo_udm";
$proto44["m_srcTableName"] = "cat_compras_productos1";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_control_aplicaciones_campo_tipo_de_control_id",
	"m_strTable" => "cat_compras_productos",
	"m_srcTableName" => "cat_compras_productos1"
));

$proto46["m_sql"] = "cat_compras_productos.cat_control_aplicaciones_campo_tipo_de_control_id";
$proto46["m_srcTableName"] = "cat_compras_productos1";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "ingrediente_activo",
	"m_strTable" => "cat_compras_productos_permitidos",
	"m_srcTableName" => "cat_compras_productos1"
));

$proto48["m_sql"] = "cat_compras_productos_permitidos.ingrediente_activo";
$proto48["m_srcTableName"] = "cat_compras_productos1";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre_comercial",
	"m_strTable" => "cat_compras_productos_permitidos",
	"m_srcTableName" => "cat_compras_productos1"
));

$proto50["m_sql"] = "cat_compras_productos_permitidos.nombre_comercial";
$proto50["m_srcTableName"] = "cat_compras_productos1";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto52=array();
$proto52["m_link"] = "SQLL_MAIN";
			$proto53=array();
$proto53["m_strName"] = "cat_compras_productos";
$proto53["m_srcTableName"] = "cat_compras_productos1";
$proto53["m_columns"] = array();
$proto53["m_columns"][] = "cat_compras_productos_id";
$proto53["m_columns"][] = "time_stamp";
$proto53["m_columns"][] = "vigente";
$proto53["m_columns"][] = "capturista";
$proto53["m_columns"][] = "descripcion_producto";
$proto53["m_columns"][] = "cat_compras_productos_categorias_id";
$proto53["m_columns"][] = "upc";
$proto53["m_columns"][] = "sku";
$proto53["m_columns"][] = "modelo";
$proto53["m_columns"][] = "cat_compras_proveedores_id";
$proto53["m_columns"][] = "cat_compras_productos_presentacion_mu_id";
$proto53["m_columns"][] = "cat_compras_productos_unidad_de_medida_mu_id";
$proto53["m_columns"][] = "contenido_neto_compras_productos";
$proto53["m_columns"][] = "costo_neto_producto";
$proto53["m_columns"][] = "cat_compras_productos_presentacion_mu_id_conversion";
$proto53["m_columns"][] = "cat_compras_productos_unidad_de_medida_mu_id_conversion";
$proto53["m_columns"][] = "contenido_neto_compras_productos_conversion";
$proto53["m_columns"][] = "cat_compras_productos_permitidos_id";
$proto53["m_columns"][] = "costo_unidad_de_medida";
$proto53["m_columns"][] = "fecha_de_actualizacion_costo_udm";
$proto53["m_columns"][] = "cat_control_aplicaciones_campo_tipo_de_control_id";
$obj = new SQLTable($proto53);

$proto52["m_table"] = $obj;
$proto52["m_sql"] = "cat_compras_productos";
$proto52["m_alias"] = "";
$proto52["m_srcTableName"] = "cat_compras_productos1";
$proto54=array();
$proto54["m_sql"] = "";
$proto54["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto54["m_column"]=$obj;
$proto54["m_contained"] = array();
$proto54["m_strCase"] = "";
$proto54["m_havingmode"] = false;
$proto54["m_inBrackets"] = false;
$proto54["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto54);

$proto52["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto52);

$proto0["m_fromlist"][]=$obj;
												$proto56=array();
$proto56["m_link"] = "SQLL_LEFTJOIN";
			$proto57=array();
$proto57["m_strName"] = "cat_compras_productos_permitidos";
$proto57["m_srcTableName"] = "cat_compras_productos1";
$proto57["m_columns"] = array();
$proto57["m_columns"][] = "cat_compras_productos_permitidos_id";
$proto57["m_columns"][] = "categoria";
$proto57["m_columns"][] = "ingrediente_activo";
$proto57["m_columns"][] = "nombre_comercial";
$proto57["m_columns"][] = "concentracion";
$proto57["m_columns"][] = "empresa";
$proto57["m_columns"][] = "dosis_ha";
$proto57["m_columns"][] = "intevalo";
$proto57["m_columns"][] = "reentrada";
$proto57["m_columns"][] = "plaga_enfermedad";
$proto57["m_columns"][] = "nombre_cientifico";
$proto57["m_columns"][] = "LMR_PPM";
$proto57["m_columns"][] = "resistencia";
$proto57["m_columns"][] = "grupo_quimico";
$proto57["m_columns"][] = "intervalo_entre_aplicaciones";
$proto57["m_columns"][] = "aplicaciones_permitidas";
$proto57["m_columns"][] = "observaciones";
$proto57["m_columns"][] = "cofepris_rsco";
$proto57["m_columns"][] = "cultivo";
$obj = new SQLTable($proto57);

$proto56["m_table"] = $obj;
$proto56["m_sql"] = "LEFT OUTER JOIN cat_compras_productos_permitidos ON cat_compras_productos.cat_compras_productos_permitidos_id = cat_compras_productos_permitidos.cat_compras_productos_permitidos_id";
$proto56["m_alias"] = "";
$proto56["m_srcTableName"] = "cat_compras_productos1";
$proto58=array();
$proto58["m_sql"] = "cat_compras_productos_permitidos.cat_compras_productos_permitidos_id = cat_compras_productos.cat_compras_productos_permitidos_id";
$proto58["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cat_compras_productos_permitidos_id",
	"m_strTable" => "cat_compras_productos_permitidos",
	"m_srcTableName" => "cat_compras_productos1"
));

$proto58["m_column"]=$obj;
$proto58["m_contained"] = array();
$proto58["m_strCase"] = "= cat_compras_productos.cat_compras_productos_permitidos_id";
$proto58["m_havingmode"] = false;
$proto58["m_inBrackets"] = false;
$proto58["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto58);

$proto56["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto56);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cat_compras_productos1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_compras_productos1 = createSqlQuery_cat_compras_productos1();


	
		;

																							

$tdatacat_compras_productos1[".sqlquery"] = $queryData_cat_compras_productos1;



$tdatacat_compras_productos1[".hasEvents"] = false;

?>